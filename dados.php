<?php

$categorias = [
    "carros_novos" => "Carros Novos",
    "carros_usados" => "Carros Usados",
    "motos_novas" => "Motos Novas",
    "motos_usadas" => "Motos Usadas"
];
$subcategorias = [
    "carros_novos" => ["Chevrolet","Fiat","Ford","Honda","Hyumdai","Mitsubishi","Renault","Toyota","Volkswagen"],
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
            "modelo" => "Cruze",
            "ano" => 2022,
            "preco" => 115000,
            "cor" => "Branco",
            "categoria" => "carros_novos"

        ],
        
        [
            "modelo" => "Onix",
            "ano" => 2022,
            "preco" => 69000,
            "cor" => "Vermelho",
            "categoria" => "carros_usados"

        ]
    ],
    "Fiat" => [
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
            "modelo" => "City",
            "ano" => 2023,
            "preco" => 115000,
            "cor" => "Prata",
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
            "modelo" => "Factor 150",
            "ano" => 2023,
            "preco" => 16500,
            "cor" => "Preto",
            "categoria" => "motos_novas"
        ]
    ]
];
?>
