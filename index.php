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

function main() {
    $uri = parse_url($_SERVER['REQUEST_URI']);
    $parameters = explode('/', $uri['path']);
    $start = get_argument_start($parameters);

    if ($start == -1) {
        echo '404 not found';
    }
    else {
        $controller_name = $parameters[$start];
        $function_name = $parameters[$start + 1].'_'.strtolower($_SERVER['REQUEST_METHOD']);

        $args = [];

        $start++;

        while (++$start < count($parameters)) {
            $args[] = $parameters[$start];
        }

        call_user_func_array([new $controller_name, $function_name], $args);
    }    
}

main();
