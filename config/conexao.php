<?php
class Conexao{
    private static $dbName = "trabalhofinalweb";
    private static $dbHost = "localhost";
    private static $dbUser = "root";
    private static $dbPass = "";
    private static $con = null;

    public static function conectar(){
        if(self::$con == null){
            try{
                self::$con = new PDO("mysql:host=".self::$dbHost.";dbname=".self::$dbName, 
self::$dbUser, self::$dbPass);
                self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $exception){
                die($exception->getMessage());
            }
        }
        return self::$con;
    }//fim do conectar

    public static function desconectar(){
        self::$con = null;
    }//fim do desconectar
}//fim da classe