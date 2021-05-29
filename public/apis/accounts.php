<?php
    function get_accounts() {
        return [
            [
                "type" => "Compte courant",
                "Number" => "000111222333",
                "Owner" => "Rubeus Hagrid",
                "balance" => 42014869,
                "operations" => [
                    [
                        "title" => "Dépot d'ouverture",
                        "amount" => 560000
                    ],
                    [
                        "title" => "Retrait",
                        "amount" => -20
                    ],
                    [
                        "title" => "Dépot salaire",
                        "amount" => 523
                    ],
                    [
                        "title" => "Retrait moto",
                        "amount" => -14000
                    ],
                    [
                        "title" => "Dépot salaire",
                        "amount" => 523
                    ]
                ]
            ],
            [
                "type" => "PEL",
                "Number"=> "035134456835",
                "Owner"=> "Rubeus Hagrid",
                "balance"=> 952352154,
                "operations"=> [
                    [
                        "title"=> "Dépot d'ouverture",
                        "amount"=> 420000
                    ],
                    [
                        "title"=> "Dépot",
                        "amount"=> 300
                    ],
                    [
                        "title"=> "Dépot",
                        "amount"=> 4625
                    ]
                ]
            ],
            [
                "type"=> "Livret A",
                "Number"=> "326584215489",
                "Owner"=> "Rubeus Hagrid",
                "balance"=> 42,
                "operations"=> [
                    [
                        "title"=> "Dépot d'ouverture",
                        "amount"=> 42
                    ]
                ]
            ]
        ];
    }
?>