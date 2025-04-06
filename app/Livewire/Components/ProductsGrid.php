<?php

namespace App\Livewire\Components;

use App\Actions\Products\GetProductsByCategoryAction;
use App\Enums\CategoryEnum;
use Livewire\Component;

class ProductsGrid extends Component
{
    public array $products;
    public bool $hasError;

    public function mount(
        string $category,
        GetProductsByCategoryAction $action,
    ): void
    {
        $category = ucfirst($category);
        if (!CategoryEnum::validate($category)) {
            $this->hasError = true;
            return;
        }

        $this->products = $action->handle($category);
//        $product = [
//            'image_variants' => [
//                [
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/Tech-Preta_-_Otimizada_d3894459-ef95-4b78-848a-3e653aa899a1.jpg?v=1735755309',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/C2-TechT-ShirtGolaUPreto2_31ad9b6d-594d-4658-8d63-7556f4fe7546.jpg?v=1735755309&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/C3-TechT-ShirtGolaUPreto3.jpg?v=1735755309&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/C4-TechT-ShirtGolaUPreto4_630d2b2a-d9f9-4a5e-b014-29d6b169021b.jpg?v=1735755309&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/C5-TechT-ShirtGolaUPreto5.jpg?v=1735755309&width=1206',
//                    ],
//                ],
//                [
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/techt-shirtazul_c0878944-ae5b-4716-8116-612ab3e7ecec.jpg?v=1735247226',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/1_64726423-65e7-4a70-b3ae-46b06485c113.jpg?v=1735247226&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/TechT-ShirtGolaUAzulC3_d8ede963-4925-4fd6-92c7-0c443ac8fb94.jpg?v=1735247226&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/TechT-ShirtGolaUAzulC6_0f4eefc4-f1fb-4897-abd2-4acd532436f3.jpg?v=1735247226&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/TechT-ShirtGolaUAzulC4_096866c6-13ef-4315-81ad-fa6ab0857355.jpg?v=1735247226&width=1206',
//                    ],
//
//                ],
//                [
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/01_cropfrente_techtshirtumasc_1_fdb44dff-1f08-42cd-847e-1db61064c4ae.jpg?v=1735247227',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/03_inteirofrente_techtshirtumasc_1_8d37d50c-eeb7-4601-ae13-2421e9c74e8a.jpg?v=1735247227&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/04_inteirocostas_techtshirtumasc_be4b510f-bd65-41bf-8755-044ee06cf8e1.jpg?v=1735247227&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/02_cropfrente_techtshirtumasc_013e00f8-1ab2-4486-a218-52b538fb97c3.jpg?v=1735247227&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/06_detalhe_techtshirtumasc_1_ab152511-5775-4dd4-947b-ff6069161e59.jpg?v=1735247227&width=1206',
//                    ],
//                ],
//                [
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/01_crop_tech_u_4e474809-7410-4fc3-b2cb-8af57ef8bbc0.jpg?v=1735247229',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/03_inteiro_tech_u_b9ac75b8-88bc-4af6-95a0-0def263d0435.jpg?v=1735247229&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/04_inteiro_tech_u_6f1ecea7-f42e-464c-9c25-eaaa3c29b07c.jpg?v=1735247229&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/05_detalhe_tech_u_f7a98f44-03e4-4f55-9d55-e35abe623f33.jpg?v=1735247229&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/02_crop_tech_u_37d31860-6686-4d1b-8426-8d133ac2ed86.jpg?v=1735247229&width=1206',
//                    ],
//                ],
//                [
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/01_cropfrente_techtshirtumasc_c9c4d153-948f-4f5c-a3dc-d23d0746d58c.jpg?v=1735247228',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/03_inteirofrente_techtshirtumasc_54ba570e-aa28-4a55-ae70-33d18d026659.jpg?v=1735247228&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/04_inteirofrente_techtshirtumasc_0bda9aa7-423f-44bf-8317-208e91eed7ec.jpg?v=1735247228&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/05_detalhe_techtshirtumasc_4013d107-eb9d-49ea-8fd0-fa70654229eb.jpg?v=1735247228&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/02_cropcostas_techtshirtumasc_283b0a16-3a8f-4582-8404-3a613230cf49.jpg?v=1735247228&width=1206',
//                    ],
//                ],
//                [
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/01_crop_tech_u-2.jpg?v=1739289843',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/03_inteiro_tech_u-2.jpg?v=1739289870&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/05_detalhe_tech_u-2.jpg?v=1739289870&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/06_inteiro_tech_u-2.jpg?v=1739289870&width=1206',
//                    ],
//                ],
//                [
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/INDIGO-01.jpg?v=1738117171',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/INDIGO-02_84d7bb59-92fe-4f8e-8adb-54bc76249e46.jpg?v=1738117171&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/INDIGO-03.jpg?v=1738117171&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/INDIGO-04_c3b3969f-ebc1-497c-abce-a5dd36197803.jpg?v=1738117171&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/INDIGO-05_05fbcbdf-afbc-41aa-b93d-4b928fbd3ab2.jpg?v=1738117171&width=1206',
//                    ],
//                ],
//                [
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/insider131024141C1_ff57488d-df0e-4568-b299-9e7421a38d6d.jpg?v=1735247226',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/2_24ab37bc-b7a2-4fc5-ba80-4e56729f8188.jpg?v=1735247226&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/TechT-ShirtGolaUNoriGreenC3_ab40ed0d-9a11-463e-88c4-fe5303dc7a69.jpg?v=1735247226&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/TechT-ShirtGolaUNoriGreenC4_7079bad3-86f8-4782-925d-dbefcc683077.jpg?v=1735247226&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/TechT-ShirtGolaUNoriGreenC5_5902a195-0213-4f97-be29-06d70dda2005.jpg?v=1735247227&width=1206',
//                    ],
//                ],
//                [
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/CARMENERE-01_1_804cd332-d50a-4e6f-bcfa-639496b219b5.jpg?v=1735237764',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/CARMENERE-02_780e642a-1699-45f1-8db3-1124a2eb0d29.jpg?v=1735237764&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/CARMENERE-03_a388e86a-5f3f-48b1-ab70-822cd6efd48c.jpg?v=1735237764&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/CARMENERE-04_98d32b15-bcea-4688-a9f4-ba71272de1d3.jpg?v=1735237764&width=1206',
//                    ],
//                    [
//                        'image' => 'https://www.insiderstore.com.br/cdn/shop/files/CARMENERE-05_30f04903-57b5-4ec9-b7c4-8fc18428c7be.jpg?v=1735237764&width=1206',
//                    ],
//                ],
//            ],
//            'color_variants' => [
//                '#000000',
//                '#163047',
//                '#8c3029',
//                '#696969',
//                '#33405b',
//                '#f1f4e0',
//                '#576091',
//                '#525041',
//                '#572531',
//            ],
//            'prices' => [
//                [
//                    'price' => 159.00,
//                    'promo' => 135.00,
//                    'pix_discount' => 131.00,
//                    'promo_code' => 'MESCONSUMIDOR',
//                ],
//                [
//                    'price' => 159.00,
//                    'promo' => 135.00,
//                    'pix_discount' => 131.00,
//                    'promo_code' => 'MESCONSUMIDOR',
//                ],
//                [
//                    'price' => 165.00,
//                    'promo' => 140.00,
//                    'pix_discount' => 136.00,
//                    'promo_code' => 'MESCONSUMIDOR',
//                ], [
//                    'price' => 165.00,
//                    'promo' => 140.00,
//                    'pix_discount' => 136.00,
//                    'promo_code' => 'MESCONSUMIDOR',
//                ],
//                [
//                    'price' => 159.00,
//                    'promo' => 135.00,
//                    'pix_discount' => 131.00,
//                    'promo_code' => 'MESCONSUMIDOR',
//                ],
//                [
//                    'price' => 165.00,
//                    'promo' => 140.00,
//                    'pix_discount' => 136.00,
//                    'promo_code' => 'MESCONSUMIDOR',
//                ],
//                [
//                    'price' => 165.00,
//                    'promo' => 140.00,
//                    'pix_discount' => 136.00,
//                    'promo_code' => 'MESCONSUMIDOR',
//                ],
//                [
//                    'price' => 165.00,
//                    'promo' => 140.00,
//                    'pix_discount' => 136.00,
//                    'promo_code' => 'MESCONSUMIDOR',
//                ],
//                [
//                    'price' => 159.00,
//                    'promo' => 135.00,
//                    'pix_discount' => 131.00,
//                    'promo_code' => 'MESCONSUMIDOR',
//                ]
//            ],
//            'image_tags' => [
//                '15% off',
//                'best seller'
//            ],
//            'title' => 'Tech T-Shirt®',
//            'rating' => 4.8,
//            'reviews_count' => 23910,
//        ];
//
//        $this->products = new Collection([
//            $product,
//            $product,
//            $product,
//            $product,
//            $product,
//            $product
//        ]);
    }

    public function render()
    {
        return view('livewire.components.products-grid');
    }
}
