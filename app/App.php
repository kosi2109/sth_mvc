<?php
declare (strict_types = 1);

namespace app;

use Route;
use controllers\HomeController;

class App
{
    public function __construct(public array $config)
    {
    }
    public function boot() : void
    {
        $uri = uriParser($_SERVER["REQUEST_URI"]);
        if($uri == ""){
            $uri = "/";
        }
        Route::bild($uri,$_SERVER["REQUEST_METHOD"]);
    }
    
}
