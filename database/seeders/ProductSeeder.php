<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\Size;
use App\Models\VariantType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class ProductSeeder extends Seeder
{
    private const BRANDS = [
        [
            'name' => 'Insider',
            'slug' => 'insider',
            'description' => 'Marca brasileira focada em roupas tecnológicas e sustentáveis, conhecidas pelo conforto e desempenho térmico.',
            'logo' => 'insider.png',
            'website' => 'https://www.insiderstore.com.br',
        ],
        [
            'name' => 'Nike',
            'slug' => 'nike',
            'description' => 'Gigante global de artigos esportivos, famosa por inovação, design icônico e patrocínio de atletas de elite.',
            'logo' => 'nike.png',
            'website' => 'https://www.nike.com.br',
        ],
        [
            'name' => 'Adidas',
            'slug' => 'adidas',
            'description' => 'Marca alemã referência em moda e esportes, combinando tecnologia, estilo e tradição.',
            'logo' => 'adidas.png',
            'website' => 'https://www.adidas.com.br',
        ],
        [
            'name' => 'Olympikus',
            'slug' => 'olympikus',
            'description' => 'Pode se referir à Olympus (câmeras e equipamentos ópticos) ou Olympikus (marca brasileira de artigos esportivos). Qual delas você quer?',
            'logo' => 'olympikus.png',
            'website' => 'https://www.olympikus.com.br',
        ],
        [
            'name' => 'Boa Onda',
            'slug' => 'boa-vinda',
            'description' => '',
            'logo' => 'boa-onda.png',
            'website' => 'https://www.boaonda.com.br',
        ],
        [
            'name' => 'Vita Minimalista',
            'slug' => 'vita-minimalista',
            'description' => '',
            'logo' => 'vita-minimalista.png',
            'website' => 'https://vitaminimalista.com.br',
        ],
    ];

    private const CATEGORIES = [
        [
            'name' => 'Clothing',
            'products' => [
                [
                    'name' => 'Tech T-Shirt',
                    'slug' => 'tech-t-shirt',
                    'brand' => 'Insider',
                    'discount_code' => 'INSIDER10',
                    'description' => 'Camiseta térmica com tecnologia anti suor.',
                    'variants' => [
                        [
                            'color' => 'Preto',
                            'size' => 'M',
                            'gender' => 'M',
                            'price' => 99.90,
                            'quantity' => 50,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Branco',
                            'size' => 'G',
                            'gender' => 'U',
                            'price' => 99.90,
                            'quantity' => 40,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Cinza',
                            'size' => 'P',
                            'gender' => 'F',
                            'price' => 99.90,
                            'quantity' => 30,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ],
                [
                    'name' => 'Nike Dri-FIT',
                    'slug' => 'nike-dri-fit',
                    'brand' => 'Nike',
                    'discount_code' => 'NIKE20',
                    'description' => 'Camiseta esportiva de alta performance com tecnologia Dri-FIT.',
                    'variants' => [
                        [
                            'color' => 'Azul',
                            'size' => 'L',
                            'gender' => 'M',
                            'price' => 129.90,
                            'quantity' => 30,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Amarelo',
                            'size' => 'S',
                            'gender' => 'F',
                            'price' => 129.90,
                            'quantity' => 25,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Laranja',
                            'size' => 'XL',
                            'gender' => 'U',
                            'price' => 129.90,
                            'quantity' => 20,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ],
                [
                    'name' => 'Adidas Climalite',
                    'slug' => 'adidas-climalite',
                    'brand' => 'Adidas',
                    'discount_code' => 'ADIDAS15',
                    'description' => 'Camiseta esportiva com tecido respirável Climalite.',
                    'variants' => [
                        [
                            'color' => 'Vermelho',
                            'size' => 'XS',
                            'gender' => 'F',
                            'price' => 119.90,
                            'quantity' => 35,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Cinza Claro',
                            'size' => 'XXL',
                            'gender' => 'M',
                            'price' => 119.90,
                            'quantity' => 25,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Magenta',
                            'size' => 'XXXL',
                            'gender' => 'U',
                            'price' => 119.90,
                            'quantity' => 20,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ]
            ]
        ],
        [
            'name' => 'Footwear',
            'products' => [
                [
                    'name' => 'Nike Air Max',
                    'slug' => 'nike-air-max',
                    'brand' => 'Nike',
                    'discount_code' => 'NIKE30',
                    'description' => 'Tênis icônico da Nike com amortecimento Air.',
                    'variants' => [
                        [
                            'color' => 'Preto',
                            'size' => '40',
                            'gender' => 'M',
                            'price' => 499.90,
                            'quantity' => 20,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Branco',
                            'size' => '41',
                            'gender' => 'U',
                            'price' => 499.90,
                            'quantity' => 15,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ],
                [
                    'name' => 'Adidas Ultraboost',
                    'slug' => 'adidas-ultraboost',
                    'brand' => 'Adidas',
                    'discount_code' => 'ADIDAS25',
                    'description' => 'Tênis de corrida com tecnologia de retorno de energia Boost.',
                    'variants' => [
                        [
                            'color' => 'Branco',
                            'size' => '42',
                            'gender' => 'U',
                            'price' => 749.90,
                            'quantity' => 15,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Cinza escuro',
                            'size' => '43',
                            'gender' => 'F',
                            'price' => 749.90,
                            'quantity' => 10,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ],
                [
                    'name' => 'Olympikus Corre 2',
                    'slug' => 'olympikus-corre-2',
                    'brand' => 'Olympikus',
                    'discount_code' => 'OLYM10',
                    'description' => 'Tênis de corrida com amortecimento EVASense.',
                    'variants' => [
                        [
                            'color' => 'Azul',
                            'size' => '41',
                            'gender' => 'M',
                            'price' => 169.90,
                            'quantity' => 50,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Verde',
                            'size' => '40',
                            'gender' => 'U',
                            'price' => 169.90,
                            'quantity' => 35,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ]
            ]
        ],
        [
            'name' => 'Accessories',
            'products' => [
                [
                    'name' => 'Boné Nike AeroBill',
                    'slug' => 'nike-aerobill',
                    'brand' => 'Nike',
                    'discount_code' => 'NIKE5',
                    'description' => 'Boné leve e respirável para treinos.',
                    'variants' => [
                        [
                            'color' => 'Preto',
                            'size' => 'M',
                            'gender' => 'M',
                            'price' => 79.90,
                            'quantity' => 100,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Azul',
                            'size' => 'M',
                            'gender' => 'M',
                            'price' => 79.90,
                            'quantity' => 80,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Preto',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 79.90,
                            'quantity' => 120,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ],
                [
                    'name' => 'Mochila Adidas Classic',
                    'slug' => 'adidas-classic-backpack',
                    'brand' => 'Adidas',
                    'discount_code' => 'ADIDAS10',
                    'description' => 'Mochila espaçosa para o dia a dia e treinos.',
                    'variants' => [
                        [
                            'color' => 'Preto',
                            'size' => 'M',
                            'gender' => 'M',
                            'price' => 199.90,
                            'quantity' => 40,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Cinza',
                            'size' => 'M',
                            'gender' => 'F',
                            'price' => 199.90,
                            'quantity' => 35,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Cinza',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 199.90,
                            'quantity' => 50,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ],
                [
                    'name' => 'Meias Insider Performance',
                    'slug' => 'insider-performance-socks',
                    'brand' => 'Insider',
                    'discount_code' => 'INSIDER5',
                    'description' => 'Meias de alta performance com tecnologia anti suor.',
                    'variants' => [
                        [
                            'color' => 'Branco',
                            'size' => 'P',
                            'gender' => 'U',
                            'price' => 29.90,
                            'quantity' => 200,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Branco',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 29.90,
                            'quantity' => 180,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Branco',
                            'size' => 'G',
                            'gender' => 'U',
                            'price' => 29.90,
                            'quantity' => 150,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ]
            ]
        ],
        [
            'name' => 'Jewelry',
            'products' => [
                [
                    'name' => 'Pulseira Minimalista Vita',
                    'slug' => 'pulseira-minimalista-vita',
                    'brand' => 'Vita Minimalista',
                    'discount_code' => 'VITA5',
                    'description' => 'Pulseira minimalista em aço inoxidável.',
                    'variants' => [
                        [
                            'color' => 'Prata',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 89.90,
                            'quantity' => 60,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Dourada',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 99.90,
                            'quantity' => 50,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Branco',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 89.90,
                            'quantity' => 80,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ],
                [
                    'name' => 'Colar Elegante Vita',
                    'slug' => 'colar-elegante-vita',
                    'brand' => 'Vita Minimalista',
                    'discount_code' => 'VITA10',
                    'description' => 'Colar delicado com design elegante e sofisticado.',
                    'variants' => [
                        [
                            'color' => 'Prata',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 129.90,
                            'quantity' => 40,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Dourado',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 139.90,
                            'quantity' => 30,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Branco',
                            'size' => 'M',
                            'gender' => 'F',
                            'price' => 129.90,
                            'quantity' => 60,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ],
                [
                    'name' => 'Anel de Aço Vita',
                    'slug' => 'anel-aco-vita',
                    'brand' => 'Vita Minimalista',
                    'discount_code' => 'VITA15',
                    'description' => 'Anel de aço inoxidável com acabamento premium.',
                    'variants' => [
                        [
                            'color' => 'Prata',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 119.90,
                            'quantity' => 70,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Dourado',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 129.90,
                            'quantity' => 60,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Branco',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 119.90,
                            'quantity' => 90,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ]
            ]
        ],
        [
            'name' => 'Bags',
            'products' => [
                [
                    'name' => 'Bolsa Casual Insider',
                    'slug' => 'bolsa-casual-insider',
                    'brand' => 'Insider',
                    'discount_code' => 'INSIDER20',
                    'description' => 'Bolsa casual feita com materiais sustentáveis.',
                    'variants' => [
                        [
                            'color' => 'Preta',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 159.90,
                            'quantity' => 50,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Bege',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 169.90,
                            'quantity' => 40,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Branco',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 159.90,
                            'quantity' => 70,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ],
                [
                    'name' => 'Mochila Adidas Urban',
                    'slug' => 'mochila-adidas-urban',
                    'brand' => 'Adidas',
                    'discount_code' => 'ADIDAS20',
                    'description' => 'Mochila ideal para o dia a dia com compartimentos espaçosos.',
                    'variants' => [
                        [
                            'color' => 'Preto',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 199.90,
                            'quantity' => 30,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Cinza',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 209.90,
                            'quantity' => 20,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Branco',
                            'size' => 'M',
                            'gender' => 'M',
                            'price' => 199.90,
                            'quantity' => 40,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ],
                [
                    'name' => 'Pochete Nike Street',
                    'slug' => 'pochete-nike-street',
                    'brand' => 'Nike',
                    'discount_code' => 'NIKE15',
                    'description' => 'Pochete estilosa e funcional para transporte seguro.',
                    'variants' => [
                        [
                            'color' => 'Preta',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 79.90,
                            'quantity' => 100,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Vermelha',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 89.90,
                            'quantity' => 90,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Branco',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 79.90,
                            'quantity' => 120,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ]
            ]
        ],
        [
            'name' => 'Watches',
            'products' => [
                [
                    'name' => 'Relógio Esportivo Nike',
                    'slug' => 'relogio-esportivo-nike',
                    'brand' => 'Nike',
                    'discount_code' => 'NIKE40',
                    'description' => 'Relógio digital esportivo resistente à água.',
                    'variants' => [
                        [
                            'color' => 'Preto',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 299.90,
                            'quantity' => 50,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Azul',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 319.90,
                            'quantity' => 40,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ],
                [
                    'name' => 'Relógio Clássico Adidas',
                    'slug' => 'relogio-classico-adidas',
                    'brand' => 'Adidas',
                    'discount_code' => 'ADIDAS30',
                    'description' => 'Relógio clássico de design minimalista.',
                    'variants' => [
                        [
                            'color' => 'Preto',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 249.90,
                            'quantity' => 30,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Prata',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 259.90,
                            'quantity' => 25,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ],
                [
                    'name' => 'Relógio Premium Vita',
                    'slug' => 'relogio-premium-vita',
                    'brand' => 'Vita Minimalista',
                    'discount_code' => 'VITA20',
                    'description' => 'Relógio elegante com pulseira de couro legítimo.',
                    'variants' => [
                        [
                            'color' => 'Preto',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 499.90,
                            'quantity' => 20,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Marrom',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 519.90,
                            'quantity' => 15,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ]
            ]
        ],
        [
            'name' => 'Sportswear',
            'products' => [
                [
                    'name' => 'Camiseta DryFit Nike',
                    'slug' => 'camiseta-dryfit-nike',
                    'brand' => 'Nike',
                    'discount_code' => 'NIKE25',
                    'description' => 'Camiseta esportiva leve e respirável.',
                    'variants' => [
                        [
                            'color' => 'Preto',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 149.90,
                            'quantity' => 100,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Azul',
                            'size' => 'G',
                            'gender' => 'U',
                            'price' => 159.90,
                            'quantity' => 80,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ],
                [
                    'name' => 'Calça Térmica Insider',
                    'slug' => 'calca-termica-insider',
                    'brand' => 'Insider',
                    'discount_code' => 'INSIDER15',
                    'description' => 'Calça térmica para treinos e corridas.',
                    'variants' => [
                        [
                            'color' => 'Preto',
                            'size' => 'M',
                            'gender' => 'F',
                            'price' => 199.90,
                            'quantity' => 60,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Cinza',
                            'size' => 'G',
                            'gender' => 'F',
                            'price' => 209.90,
                            'quantity' => 50,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ],
                [
                    'name' => 'Shorts Adidas Training',
                    'slug' => 'shorts-adidas-training',
                    'brand' => 'Adidas',
                    'discount_code' => 'ADIDAS18',
                    'description' => 'Shorts para treino com tecnologia Aeroready.',
                    'variants' => [
                        [
                            'color' => 'Preto',
                            'size' => 'M',
                            'gender' => 'M',
                            'price' => 119.90,
                            'quantity' => 150,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Azul',
                            'size' => 'G',
                            'gender' => 'M',
                            'price' => 129.90,
                            'quantity' => 140,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ]
            ]
        ],
        [
            'name' => 'Outerwear',
            'products' => [
                [
                    'name' => 'Jaqueta Corta-Vento Nike',
                    'slug' => 'jaqueta-corta-vento-nike',
                    'brand' => 'Nike',
                    'discount_code' => 'NIKE35',
                    'description' => 'Jaqueta leve e resistente para dias frios.',
                    'variants' => [
                        [
                            'color' => 'Preto',
                            'size' => 'G',
                            'gender' => 'M',
                            'price' => 299.90,
                            'quantity' => 40,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Azul',
                            'size' => 'M',
                            'gender' => 'M',
                            'price' => 309.90,
                            'quantity' => 30,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ],
                [
                    'name' => 'Casaco Térmico Adidas',
                    'slug' => 'casaco-termico-adidas',
                    'brand' => 'Adidas',
                    'discount_code' => 'ADIDAS28',
                    'description' => 'Casaco térmico ideal para baixas temperaturas.',
                    'variants' => [
                        [
                            'color' => 'Preto',
                            'size' => 'G',
                            'gender' => 'F',
                            'price' => 359.90,
                            'quantity' => 25,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Cinza',
                            'size' => 'M',
                            'gender' => 'F',
                            'price' => 369.90,
                            'quantity' => 20,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ],
                [
                    'name' => 'Blusão Insider Comfort',
                    'slug' => 'blusao-insider-comfort',
                    'brand' => 'Insider',
                    'discount_code' => 'INSIDER22',
                    'description' => 'Blusão confortável com tecido tecnológico.',
                    'variants' => [
                        [
                            'color' => 'Preto',
                            'size' => 'G',
                            'gender' => 'U',
                            'price' => 229.90,
                            'quantity' => 60,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Azul',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 239.90,
                            'quantity' => 50,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ]
            ]
        ],
        [
            'name' => 'Headwear',
            'products' => [
                [
                    'name' => 'Boné Nike Performance',
                    'slug' => 'bone-nike-performance',
                    'brand' => 'Nike',
                    'discount_code' => 'NIKE10',
                    'description' => 'Boné ajustável com proteção UV.',
                    'variants' => [
                        [
                            'color' => 'Preto',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 89.90,
                            'quantity' => 80,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Azul',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 94.90,
                            'quantity' => 60,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Branco',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 89.90,
                            'quantity' => 75,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ],
                [
                    'name' => 'Gorro Adidas Winter',
                    'slug' => 'gorro-adidas-winter',
                    'brand' => 'Adidas',
                    'discount_code' => 'ADIDAS12',
                    'description' => 'Gorro de lã térmico para inverno.',
                    'variants' => [
                        [
                            'color' => 'Preto',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 69.90,
                            'quantity' => 50,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Cinza',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 74.90,
                            'quantity' => 45,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Branco',
                            'size' => 'M',
                            'gender' => 'F',
                            'price' => 69.90,
                            'quantity' => 40,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ],
                [
                    'name' => 'Faixa Insider Sweat',
                    'slug' => 'faixa-insider-sweat',
                    'brand' => 'Insider',
                    'discount_code' => 'INSIDER8',
                    'description' => 'Faixa de cabeça para absorção de suor.',
                    'variants' => [
                        [
                            'color' => 'Preto',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 29.90,
                            'quantity' => 100,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Branca',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 32.90,
                            'quantity' => 90,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ],
                        [
                            'color' => 'Branco',
                            'size' => 'M',
                            'gender' => 'U',
                            'price' => 29.90,
                            'quantity' => 120,
                            'images' => ['https://placehold.co/400x400/EEE/31343C']
                        ]
                    ]
                ]
            ]
        ]
    ];

    public function run(): void
    {
        foreach (self::BRANDS as $index => $brand) {
            Brand::factory()->create($brand);
        }

        foreach (self::CATEGORIES as $category) {
            $categoryModel = Category::factory()->create([
                'name' => $category['name'],
            ]);

            foreach ($category['products'] as $product) {
                $brand = Brand::where('name', $product['brand'])->first();

                $productModel = Product::factory()->create([
                    'category_id' => $categoryModel->id,
                    'brand_id' => $brand->id,
                    'name' => $product['name'],
                    'slug' => $product['slug'],
                    'discount_code' => $product['discount_code'],
                    'description' => $product['description'],
                ]);

                foreach ($product['variants'] as $variant) {
                    ProductVariant::factory()->create([
                        'product_id' => $productModel->id,
                        'price' => $variant['price'],
                        'quantity' => $variant['quantity'],
                        'images' => $variant['images'],
                        'color_id' => Color::where('name', $variant['color'])->first()?->id ?? 1,
                        'size_id' => Size::where('name', $variant['size'])->first()?->id ?? 1,
                        'gender' => $variant['gender'] ?? 'U',
                    ]);
                }
            }
        }

    }
}
