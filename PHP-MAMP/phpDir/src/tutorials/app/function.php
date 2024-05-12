<?php

function get_data() {
    $fname = CONFIG['data_file'];

    $json = '';

    if (!file_exists($fname)) {
        $handle = fopen($fname, 'w+');
        fclose($handle);
    } else {
        $json = file_get_contents($fname);
      
    }
    return $json;
}

function view($name, $model) {
    global $view_bag;
    require('views/layout.view.php');
}