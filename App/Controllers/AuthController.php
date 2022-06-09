<?

namespace App\Controllers;
use Framework\Controller\Action;
use Framework\Model\Container;

class AuthController extends Action{

    public function login(){

        $usuario = Container::getModel('Usuario');
        $usuario->__set('nome',$_POST['nome']);
        $usuario->__set('senha',md5($_POST['senha']));
        $objeto = $usuario->autenticar();
        session_start();
        $_SESSION['id']= $objeto->id;
        $_SESSION['nome']= $objeto->nome;
        header("Location: /");
    }
    public function sair(){
        session_start();
        session_destroy();
        header("Location: /");
    }

}

?>