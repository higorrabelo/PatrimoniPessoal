<?php

namespace Framework\Model;

use App\Connection;
use stdClass;

class Container{

    public static function getModel($model){
        $class = "\\App\\Models\\".ucfirst($model);
        $conn = Connection::getConnection();
        return new $class($conn);
    }

}

?>