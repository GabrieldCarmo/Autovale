<?php

$categorias = [
    "carros_novos" => "Carros Novos",
    "carros_usados" => "Carros Usados",
    "motos_novas" => "Motos Novas",
    "motos_usadas" => "Motos Usadas"
];
$subcategorias = [
    "carros_novos" => ["Chevrolet","Fiat","Ford","Honda","Hyundai","Mitsubishi","Renault","Toyota","Volkswagen"],
    "carros_usados" => ["Chevrolet","Fiat","Honda","Toyota"],
    "motos_novas" => ["Honda","Yamaha", "Suzuki"],
    "motos_usadas" => ["Honda","Yamaha"]
];

$modelos= [
    "Chevrolet" => ["Onix", "Prisma", "Cruze"],
    "Fiat" => ["Uno", "Argo", "Pulse"],
    "Ford" => ["Ka", "Fiesta", "Focus"],
    "Honda" => ["Civic", "Fit", "City"],
    "Toyota" => ["Corolla", "Etios", "Yaris"],
    "Yamaha" => ["Fazer 250", "Factor 150"],
    "Suzuki" => ["Yes 125 ", "Boulevard 800"]
];

$veiculos = [

    "Chevrolet" => [
        [
            "modelo" => "Onix",
            "ano" => 2020,
            "preco" => 65000,
            "cor" => "Prata",
            "categoria" => "carros_usados"
        ],
        [
            "modelo" => "Onix",
            "ano" => 2023,
            "preco" => 78000,
            "cor" => "Preto",
            "categoria" => "carros_novos"
        ],
        [
            "modelo" => "Prisma",
            "ano" => 2018,
            "preco" => 52000,
            "cor" => "Branco",
            "categoria" => "carros_usados"
        ],
        [
            "modelo" => "Cruze",
            "ano" => 2022,
            "preco" => 115000,
            "cor" => "Branco",
            "categoria" => "carros_novos"
        ],
        [
            "modelo" => "Cruze",
            "ano" => 2019,
            "preco" => 89000,
            "cor" => "Cinza",
            "categoria" => "carros_usados"
        ]
    ],

    "Fiat" => [
        [
            "modelo" => "Uno",
            "ano" => 2016,
            "preco" => 32000,
            "cor" => "Branco",
            "categoria" => "carros_usados"
        ],
        [
            "modelo" => "Argo",
            "ano" => 2021,
            "preco" => 58000,
            "cor" => "Vermelho",
            "categoria" => "carros_usados"
        ],
        [
            "modelo" => "Pulse",
            "ano" => 2023,
            "preco" => 98000,
            "cor" => "Cinza",
            "categoria" => "carros_novos"
        ],
        [
            "modelo" => "Pulse",
            "ano" => 2022,
            "preco" => 91000,
            "cor" => "Azul",
            "categoria" => "carros_usados"
        ]
    ],

    "Ford" => [
        [
            "modelo" => "Ka",
            "ano" => 2019,
            "preco" => 45000,
            "cor" => "Prata",
            "categoria" => "carros_usados"
        ],
        [
            "modelo" => "Fiesta",
            "ano" => 2017,
            "preco" => 39000,
            "cor" => "Preto",
            "categoria" => "carros_usados"
        ],
        [
            "modelo" => "Focus",
            "ano" => 2018,
            "preco" => 68000,
            "cor" => "Branco",
            "categoria" => "carros_usados"
        ]
    ],

    "Honda" => [
        [
            "modelo" => "Civic",
            "ano" => 2019,
            "preco" => 92000,
            "cor" => "Preto",
            "categoria" => "carros_usados"
        ],
        [
            "modelo" => "Civic",
            "ano" => 2023,
            "preco" => 158000,
            "cor" => "Cinza",
            "categoria" => "carros_novos"
        ],
        [
            "modelo" => "Fit",
            "ano" => 2018,
            "preco" => 65000,
            "cor" => "Prata",
            "categoria" => "carros_usados"
        ],
        [
            "modelo" => "City",
            "ano" => 2023,
            "preco" => 115000,
            "cor" => "Prata",
            "categoria" => "carros_novos"
        ]
    ],

    "Toyota" => [
        [
            "modelo" => "Corolla",
            "ano" => 2020,
            "preco" => 118000,
            "cor" => "Branco",
            "categoria" => "carros_usados"
        ],
        [
            "modelo" => "Corolla",
            "ano" => 2023,
            "preco" => 158000,
            "cor" => "Preto",
            "categoria" => "carros_novos"
        ],
        [
            "modelo" => "Etios",
            "ano" => 2019,
            "preco" => 52000,
            "cor" => "Prata",
            "categoria" => "carros_usados"
        ],
        [
            "modelo" => "Yaris",
            "ano" => 2022,
            "preco" => 89000,
            "cor" => "Cinza",
            "categoria" => "carros_novos"
        ]
    ],

    "Yamaha" => [
        [
            "modelo" => "Fazer 250",
            "ano" => 2020,
            "preco" => 21000,
            "cor" => "Azul",
            "categoria" => "motos_usadas"
        ],
        [
            "modelo" => "Fazer 250",
            "ano" => 2023,
            "preco" => 24500,
            "cor" => "Preto",
            "categoria" => "motos_novas"
        ],
        [
            "modelo" => "Factor 150",
            "ano" => 2023,
            "preco" => 16500,
            "cor" => "Preto",
            "categoria" => "motos_novas"
        ]
    ],

    "Suzuki" => [
        [
            "modelo" => "Yes 125",
            "ano" => 2018,
            "preco" => 8500,
            "cor" => "Vermelho",
            "categoria" => "motos_usadas"
        ],
        [
            "modelo" => "Boulevard 800",
            "ano" => 2021,
            "preco" => 42000,
            "cor" => "Preto",
            "categoria" => "motos_usadas"
        ]
    ]

];
?>
