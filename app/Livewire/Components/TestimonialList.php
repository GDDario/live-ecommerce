<?php

namespace App\Livewire\Components;

use Livewire\Component;

class TestimonialList extends Component
{
    public array $testimonials;

    public function mount(): void {
        $this->testimonials = [
            [
                'name' => 'Ana Souza',
                'rating' => 5,
                'text' => 'Estou simplesmente apaixonada pelas peças! O tecido é de ótima qualidade e o caimento perfeito. Já virei cliente fiel!'
            ],
            [
                'name' => 'Carlos Mendes',
                'rating' => 4,
                'text' => 'Os tênis são super confortáveis e estilosos. Só achei que a entrega poderia ter sido um pouco mais rápida, mas valeu a espera!'
            ],
            [
                'name' => 'Mariana Ribeiro',
                'rating' => 5,
                'text' => 'Comprei um vestido para um evento especial e fui muito elogiada! Chegou no prazo e serviu perfeitamente. Super recomendo!'
            ],
            [
                'name' => 'Felipe Andrade',
                'rating' => 4,
                'text' => 'A qualidade da camiseta é excelente, mas o tamanho veio um pouco maior do que eu esperava. Fora isso, tudo perfeito!'
            ],
            [
                'name' => 'Juliana Castro',
                'rating' => 5,
                'text' => 'Amei as sandálias! Além de lindas, são muito confortáveis. Dá para passar o dia todo com elas sem cansar os pés.'
            ],
            [
                'name' => 'Ricardo Lima',
                'rating' => 5,
                'text' => 'Já fiz várias compras no site e nunca me decepcionei. Atendimento impecável e produtos incríveis. Recomendo sem medo!'
            ],
            [
                'name' => 'Patrícia Gomes',
                'rating' => 4,
                'text' => 'A jaqueta que comprei tem um acabamento maravilhoso e esquenta bem. Só achei que poderia ter mais opções de cores.'
            ],
            [
                'name' => 'Lucas Fernandes',
                'rating' => 5,
                'text' => 'Os sapatos são incríveis! Confortáveis, bem feitos e super estilosos. Vou comprar outro modelo em breve!'
            ],
            [
                'name' => 'Bianca Oliveira',
                'rating' => 5,
                'text' => 'Atendimento nota 10! Precisei trocar um item e o processo foi rápido e sem burocracia. Voltarei a comprar com certeza!'
            ],
            [
                'name' => 'Eduardo Silva',
                'rating' => 5,
                'text' => 'O melhor custo-benefício que já encontrei! Roupas de qualidade por um preço justo. Comprarei novamente em breve.'
            ]
        ];
    }

    public function render()
    {
        return view('livewire.components.testimonial-list');
    }
}
