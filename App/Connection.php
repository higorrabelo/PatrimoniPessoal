<?

namespace App;

class Connection{

    public static function getConnection(){
        try{
            $conn = new \PDO("mysql:host=localhost;dbname=pessoalpat","root","Higor120783");
            return $conn;
        }
        catch(\PDOException $e){
            echo "Conexão com Problemas".$e->getMessage();
        }

    }

}

?>