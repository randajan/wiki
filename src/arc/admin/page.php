<?php

$current = $mdfiles->getByHref($_SERVER['REQUEST_URI'], true);

function mdlink($md, $class="") {
    global $current;
    $classes = [$class, "link"];

    $res = $md ? $md->title : "";

    if (!$md) { $classes[] = "blank"; } else {
        $iam = $md->href === $current->href;
        if ($iam) { $classes[] = "iam"; }
        $res = $iam ? "<span>$res</span>" : "<a href='$md->href'>$res</a>";
    } 
    
    echo "<li class='".trim(implode(" ", $classes))."'>$res</li>";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="preload" href="/admin/font/Ballo2.woff2" as="font" type="font/woff2" crossorigin>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/admin/styles/index.css">
        <link rel="stylesheet" href="/admin/styles/menu.css">
        <link rel="stylesheet" href="/admin/styles/panes.css">
        <link rel="stylesheet" href="/admin/styles/content.css">
        <title><?php echo($current->title) ?> | iTcan WIKI</title>
    </head>
    <body>
        <?php
            require("components/header.php");
            require("components/content.php");
            require("components/footer.php");
        ?>
    </body>
</html>


