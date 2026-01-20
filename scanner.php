<?php

function scanFolder($path) {
    $items = scandir($path);
     echo "Project Files: <br>";
    foreach ($items as $item) {
        if ($item === "." || $item === "..") continue;

        $full = $path . "/" . $item;

        if (is_dir($full)) {
            scanFolder($full);
        } else {
            echo "File: $item<br>";
        }
    }
}

?>
