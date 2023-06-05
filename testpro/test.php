<?php

abstract class Facode{
    public static function __callStatic($name, $arguments)
    {
        $instance = static::getFacodeAccessor();
        return $instance ->$name(...$arguments) ;
    }
}

class Welcome{
    public static function msg($user){
        return 'Welcome ' . $user;
    }
}

class WelcomeFacoe extends Facode{
    protected static function getFacodeAccessor(){
        return new Welcome;
    }
}

echo WelcomeFacoe::msg('Al Jabir');

?>