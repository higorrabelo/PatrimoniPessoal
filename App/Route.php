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
            "controller"=>"IndexController",
            "action"=>"login"
        ];
        $routes['login']=[
            "route"=>"/contato",
            "controller"=>"IndexController",
            "action"=>"contato"
        ];

        $this->setRoutes($routes);
    }

}

?>