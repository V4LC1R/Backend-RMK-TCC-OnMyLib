<?php

define('PATH_MODEL',dirname(__dir__) );
require_once  PATH_MODEL.'../../../private/index.php';


Final class Pecas extends Model{

  public function __construct(){
    $this->init();
  }

  private function init(){
      parent::__construct(
        [
          "coluns"=>[
            "marca"=>[
              "type"=>"NUMBER",
              "foringKey"=>[
                "table"=>"marca",
                "colum"=>"id"
              ]
            ],
            "nome_peca"=>[
              "type"=>"STRING",
              "allowNull"=>false
            ],
            "preco"=>[
              "type"=>"STRING",
              "allowNull"=>false
            ],
            "cod"=>[
              "type"=>"STRING",
              "allowNull"=>false
            ]
          ]
        ],
        get_class($this)
      );
  }
  
}
?>