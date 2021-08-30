<?php 

class  Configura{
    
    // nome banco 
    public static function banco (){
        $banco = "BI_LOGISTICA";
//        $banco = "postgres";
        return $banco;
    }
    // host do banco 
    public static function host (){
        $host = "192.168.87.250";
//        $host="localhost";
        return $host;
    }

    // usuario do banco
    public static function usuario (){
        $usuario = "logistica";
//        $usuario = "postgres";
        return $usuario;

    }

    // senha do banco 
    public static function senha (){
        $senha = "logisticabls";
//        $senha = 123;
        return $senha;
    }

    public static function dns(){
        $dns = "pgsql";
        return $dns;
    }


}

