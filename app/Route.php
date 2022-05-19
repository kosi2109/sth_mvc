<?php
declare (strict_types = 1);

class   Route
{
    public static array $routes =[];

    public static function bild(string $uri, string $method = "GET")
    {
        if(isset(self::$routes[$method][$uri])){
            if (is_callable(self::$routes[$method][$uri])){
                return self::$routes[$method][$uri]();
            }else{
                [$class,$method] = self::$routes[$method][$uri];
                $controller = new $class;
                return $controller->$method();  
            }
        }else{  
            var_dump("not found");
        }
    }
    
    public static function get(string $uri , callable|array $callback)
    {
        if($uri != "/"){
            $uri = uriParser($uri);
        }
        if(is_callable($callback)){
            return self::$routes['GET'][$uri] = $callback;        
        }
        [$class , $method] = $callback;
        $controller = new $class;
        if(method_exists($controller,$method)){
            return self::$routes['GET'][$uri] = $callback;           
        }   
    }

    public static function post(string $uri , callable|array $callback)
    {
        $uri = uriParser($uri);
        if(is_callable($callback)){
            return self::$routes['POST'][$uri] = $callback;        
        }
        [$class , $method] = $callback;
        $controller = new $class;
        if(method_exists($controller,$method)){
            return self::$routes['POST'][$uri] = $callback;           
        }   
    }

}