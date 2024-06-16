<?php
function get_argument_start($uri) {
    foreach ($uri as $key => $value) {
        if ($value == 'index.php') {
            if ($key == count($uri) - 1) {
                return -1;
            }
            return $key + 1;
        }
    }
}