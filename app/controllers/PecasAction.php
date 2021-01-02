<?php
define('PATH_CONTROLLER',dirname(__DIR__) );

include_once PATH_CONTROLLER.'/model/Pecas.php';
include_once PATH_CONTROLLER.'../../../private/res/res.php';

final class PecaAction {
    public function index(array $req = [], $res= []){
        $peca = new Pecas();

       //$peca->findAll();

        $a= $peca->findAll($req);

        //var_dump($a->fetch(PDO :: FETCH_ASSOC));

       $res->ByJson($a);
    }
}


?>