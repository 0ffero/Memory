<?php
if ($_GET["size"]) {
    $size=$_GET["size"];
    if (is_numeric($size)) {
        $start=65;
        if ($size==16 || $size==24 || $size==36) {
            $size=$size/2;
            for ($i=0; $i<$size; $i++) {
                $gameArray[]=chr($start); $gameArray[]=chr($start);
                $start++;
            }
            for ($i=1; $i<=30; $i++) {
                shuffle($gameArray);
            }
            $gameString=implode(",", $gameArray);
            echo $gameString;
        } else {
            echo "ERR: Invalid game board size";
        }
    }
}
?>