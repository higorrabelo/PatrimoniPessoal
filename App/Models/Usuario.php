<?

namespace App\Models;

use Framework\Model\Model;

class Usuario extends Model{

    private $id;
    private $nome;
    private $senha;
    private $email;
    private $nascimento;
    private $cadastro;
    private $permissao;

    public function __get($atributo){
        return $this->$atributo;
    }
    public function __set($atributo,$valor){
        $this->$atributo=$valor;
    }

    public function listar(){
        $sql = "select * from usuario";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }
    public function autenticar(){
        $sql = "select * from usuario where nome = ? and senha = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(1,$this->__get('nome'));
        $stmt->bindValue(2,$this->__get('senha'));
        $stmt->execute();
        $objeto = $stmt->fetch(\PDO::FETCH_OBJ);
        $this->__set("id",$objeto->id);
        $this->__set("email",$objeto->email);
        $this->__set("nascimento",$objeto->nascimento);
        $this->__set("cadastro",$objeto->cadastro);
        $this->__set("permissao",$objeto->permissao);
        return $this;
    }

}

?>