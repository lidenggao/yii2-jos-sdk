<?php

spl_autoload_register(function($class){
    $file = __DIR__.'/jd/request/'.$class.'.php';
    if (file_exists($file)){
        require_once $file;
    }else{
        require_once __DIR__.'/jd/'.$class.'.php';
    }
}, true);
