<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlantillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'description' => 'plantilla cumpleaños',
                'subject' =>',¡Feliz cumpleaños! Te desea la familia Lili Pink & Yoi',
                'type' => 'cumpleaños',
                'url' => '/img/cumpleanos/1.jpg',
            ],
            [
                'description' => 'plantilla aniversario 1',
                'subject' =>',¡Felicitaciones por tu aniversario en la familia Lili Pink & Yoi!',
                'type' => 'aniversario',
                'url' => '/img/aniversario/1.jpg',

            ],
            [
                'description' => 'plantilla aniversario 2',
               'subject' =>',¡Felicitaciones por tu aniversario en la familia Lili Pink & Yoi!',
                'type' => 'aniversario',
                'url' => '/img/aniversario/2.jpg',

            ],
            [
                'description' => 'plantilla aniversario 3',
               'subject' =>',¡Felicitaciones por tu aniversario en la familia Lili Pink & Yoi!',
                'type' => 'aniversario',
                'url' => '/img/aniversario/3.jpg',

            ],
            [
                'description' => 'plantilla aniversario 4',
                'subject' =>',¡Felicitaciones por tu aniversario en la familia Lili Pink & Yoi!',
                'type' => 'aniversario',
                'url' => '/img/aniversario/4.jpg',

            ],
            [
                'description' => 'plantilla aniversario 5',
                'subject' =>',¡Felicitaciones por tu aniversario en la familia Lili Pink & Yoi!',
                'type' => 'aniversario',
                'url' => '/img/aniversario/5.jpg',

            ],
            [
                'description' => 'plantilla aniversario 6',
                'subject' =>',¡Felicitaciones por tu aniversario en la familia Lili Pink & Yoi!',
                'type' => 'aniversario',
                'url' => '/img/aniversario/6.jpg',
      
            ],
            [
                'description' => 'plantilla aniversario 7',
                'subject' =>',¡Felicitaciones por tu aniversario en la familia Lili Pink & Yoi!',
                'type' => 'aniversario',
                'url' => '/img/aniversario/7.jpg',
    
            ],
            [
                'description' => 'plantilla aniversario 8',
               'subject' =>',¡Felicitaciones por tu aniversario en la familia Lili Pink & Yoi!',
                'type' => 'aniversario',
                'url' => '/img/aniversario/8.jpg',
         
            ],
            [
                'description' => 'plantilla aniversario 9',
                'subject' =>',¡Felicitaciones por tu aniversario en la familia Lili Pink & Yoi!',
                'type' => 'aniversario',
                'url' => '/img/aniversario/9.jpg',

            ],
            [
                'description' => 'plantilla aniversario 10',
               'subject' =>',¡Felicitaciones por tu aniversario en la familia Lili Pink & Yoi!',
                'type' => 'aniversario',
                'url' => '/img/aniversario/10.jpg',
    
            ],
        ];
        DB::table('plantillas')->insert($data);
        
    }
}
