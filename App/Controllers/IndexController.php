<?

namespace App\Controllers;

use Framework\Controller\Action;

class IndexController extends Action{

    public function index(){
        session_start();
        if(isset($_SESSION['id']) && isset($_SESSION['id']) ){
            $this->render('index');
        }else{
            require_once "../App/Views/login.phtml";
        }
    }
    public function contato(){
        $this->render('contato');
    }

}

?>