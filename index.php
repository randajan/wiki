<?php

$pathname = $_SERVER['REQUEST_URI'];

if (preg_match("/\..+$/", $pathname)) {
    if (file_exists("content$pathname")) {
        header("Location: /content$pathname");
    } else {
        http_response_code(404);
    }
    die();
}

require_once("admin/class/MDFiles.php");

$mdfiles = new MDFiles("content", "pointers.json");

//$mdfiles->rebuild();
if ($_GET["rebuild"]) { $mdfiles->rebuild(); }

require("admin/page.php");