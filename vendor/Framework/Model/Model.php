<?

namespace Framework\Model;

abstract class Model{

    protected $db;

    public function __construct(\PDO $conn){
        $this->db = $conn;
    }

}


?>