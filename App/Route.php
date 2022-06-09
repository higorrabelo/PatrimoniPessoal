<?

namespace App;

use Framework\Init\Bootstrap;

class Route extends Bootstrap{

    public function initRoutes(){
        $routes['home']=[
            "route"=>"/",
            "controller"=>"IndexController",
            "action"=>"index"
        ];
        $routes['login']=[
            "route"=>"/login",
            "controller"=>"AuthController",
            "action"=>"login"
        ];
        $routes['contato']=[
            "route"=>"/contato",
            "controller"=>"IndexController",
            "action"=>"contato"
        ];
        $routes['sair']=[
            "route"=>"/sair",
            "controller"=>"AuthController",
            "action"=>"sair"
        ];

        $this->setRoutes($routes);
    }

}

?>