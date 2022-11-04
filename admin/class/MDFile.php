<?php

require("Parsedown.php");

class MDFile implements JsonSerializable {
    
    static public function sort($list) {

        usort($list, function($a, $b) {
            return strcmp($a->title, $b->title);
            // if ($a->isIndex) { return -1; }
            // if ($b->isIndex) { return 1; }
            // return strcmp($a->title, $b->title);
        });

        return $list;
    }

    static function fetchTitle($path) { return substr(fgets(fopen($path, 'r')), 2);  }
    static function fetchDir($path) { return preg_replace("/\/[^\/]*$/", "", $path) ?: "/"; }

    static function fromData($mdfiles, $data) {
        return new MDFile($mdfiles, $data);
    }

    static function fromPath($mdfiles, $path) {
        $data = [];
        $data["path"] = $path;

        $key = substr($path, strlen($mdfiles->root), -3);

        $data["isIndex"] = $isIndex = substr($key, -6)==="/index";

        $data["href"] = $href = $isIndex ? (substr($key, 0, -6) ?: "/") : $key;

        $data["dir"] = self::fetchDir($key);
        $data["home"] = self::fetchDir($href);

        $data["title"] = self::fetchTitle($path);

        return new MDFile($mdfiles, $data);
    }

    public $mdfiles, $data = [];

    function __construct($mdfiles, $data) {
        $this->mdfiles = $mdfiles;
        $this->data = $data;
    }

    public function grandfather() {
        if ($this->dir === "/") { return; }
        return $this->mdfiles->getByHref(MDFile::fetchDir($this->dir));
    }

    public function father() {
        return $this->mdfiles->getByHref($this->dir);
    }

    public function childrens() {
        if (!$this->father()) { return []; }
        
        $data = $this->data;
        return MDFile::sort($this->mdfiles->getList(function($md) use($data) {
            return $md->href !== "/" && $md->home === $data["dir"];
        }));
    }

    private function childrensMD() {
        $list = ""; $childrens = $this->childrens();
        foreach ($childrens as $k=>$v) { 
            $list .= "- [$v->title]($v->href)\n";
        }
        return $list;
    }

    public function props() {
        $str = "";
        $props = ["href", "home", "dir", "isIndex"];
        foreach ($props as $n) {
            $v = $this->$n;
            if (is_bool($v)) { $v = $v ? "y" : "n"; }
            $str .= "data-$n='$v'";
        }
        return trim($str);
    }

    public function content() {
        $plain = file_get_contents($this->path);
        if (strpos($plain, "<childrens/>")) {
            $plain = str_replace("<childrens/>", $this->childrensMD(), $plain);
        }
        echo (new Parsedown())->text($plain);
    }

    public function __get($name) {
        if (in_array($name, ["props", "childrens"])) { return $this->$name(); }

        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
    }

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

    public function __toString() {
        return implode(" ", $this->data);
    }

    public function jsonSerialize() {
        return $this->data;
    }

    public function toJSON() {
        return json_encode($this, JSON_PRETTY_PRINT);
    }

}