<?php

require("MDFile.php");

class MDFiles implements JsonSerializable {

    public $index, $root, $file;

    function __construct($root, $file) {
        $this->root = $root;
        $this->file = $file;
        $this->index = $this->fetchPointers() ?: $this->fetchRoot();
    }

    private function fetchPointers() {
        if (!file_exists($this->file)) { return; }

        $index = json_decode(file_get_contents($this->file), true);

        foreach($index as $href=>$data) {
            $index[$href] = MDFile::fromData($this, $data);
        }

        return $index;
    }

    private function fetchRoot() {
        $dir = new RecursiveDirectoryIterator($this->root);
        $ite = new RecursiveIteratorIterator($dir);
        $files = new RegexIterator($ite, "/.*\.md$/", RegexIterator::GET_MATCH);

        $index = [];

        foreach($files as $file) {
            $md = MDFile::fromPath($this, $file[0]);
            $index[$md->href] = $md;
        }

        file_put_contents($this->file, json_encode($index, JSON_PRETTY_PRINT));

        return $index;
    }

    public function getByHref($href, $fallback=false) {
        $href = preg_replace("/(index|missing)/", "", $href);
        if (array_key_exists($href, $this->index)) {
            return $this->index[$href];
        } else if ($fallback) {
            return $this->index["/error/404"];
        }
        
    }

    public function getList($filter) {
        return array_filter($this->index, $filter);
    }

    public function jsonSerialize() {
        return $this->index;
    }

    public function toJSON() {
        return json_encode($this, JSON_PRETTY_PRINT);
    }

    public function rebuild() {
        $this->index = $this->fetchRoot();
        return $this;
    }

}
