<?php

namespace Mini\Controller;

function view($path, &$data = [], $export_var_name = "")
{
    foreach ($data as $k => $v) {
        $$k = $v;
    }

    require APP . "view/{$path}";

    if($export_var_name !== ""){
      $data = ${$export_var_name};
    }
}


function redirect($path) {
    header('location: ' . URL . $path);
}
