<?

namespace Framework\Controller;

use stdClass;

abstract class Action{

    protected $view;

    public function __construct(){
        $this->view = new stdClass;
    }

    protected function render($view){
        $this->view->page = $view;
        if(file_exists("../App/Views/layout.phtml")){
            require_once "../App/Views/layout.phtml";
        }else{
            $this->content();
        }
    }
    protected function content(){
        $class = get_class($this);
        $class = str_replace("App\\Controllers\\","",$class);
        $class = strtolower(str_replace("Controller","",$class));
        require_once "../App/Views/".$class."/".$this->view->page.".phtml";
    }
}

?>