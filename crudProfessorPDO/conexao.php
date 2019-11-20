<?php
/*Abaixo crio a classe de conexão com o banco de dados*/
class Conn {  
	/*Coloquei as credenciais de acesso declarando as mesmas como atributos estáticos, 
	funciona como se fosse uma constante*/
    public static $host = "localhost:3306";
    public static $usuario = "root";
    public static $senha = "1234";
    public static $banco = "empresa";
    private static $Connect = null;
    
	/*crio aqui o metodo de conexão com o banco de dados, porém já usando o PDO*/
    private static function Conectar() {
        try {
            if(self::$Connect == null){ //utilizei o self:: para acessar o atributo já que o mesmo é privado
                self::$Connect = new PDO('mysql:host=' . self::$host .';dbname='.self::$banco, self::$usuario, self::$senha);
            }            
        } catch (Exception $ex) {
            echo 'Mensagem: ' . $ex->getMessage();
            die;
        }       
        return self::$Connect;
    }
    
    public function getConn() {
        return self::Conectar(); //utilizei o self:: para acessar o metodo já que o mesmo é privado
    }
    
}
