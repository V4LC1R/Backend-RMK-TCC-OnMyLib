<?php
require_once '../../controllers/PecasAction.php';
require_once '../../../../private/res/res.php';

$listagem = new PecaAction();

$listagem->index(["where"=>[
                        "nome"=>[
                            "or"=>["A","b"]
                        ],
                        "cod"=>"4"
                    ],
                    
                    "order"=>"ASC"

                ],new Res());
/*
    [
        "where"=>[
            "campo"=>"valor",
            "campo1"=>[
                "Or"=>["Value","other"]
                "orderBy"=>"ASC"]],
    
    ]

    SELECT * FROM table WHERE colunaA >= x AND ( colunaB >= ZZ or colunaC <= YY) and colunaD like '%XXX%'

    [
        "where"=>[
        "colunaA"=>[
            "GreaterEqual"=>"x"
        ],
        "Or" =>[
            "colunaB"=>[
                "GreaterEqual"=>"ZZ"
            ],
            "colunaC"=>[
                "LessEqual"=> YY
            ]
        ],
        "pLikeq"=>
    ]
    ]

 */

?>
