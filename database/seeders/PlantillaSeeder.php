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
                'ide' => '1467'
            ],
            [
                'description' => 'plantilla aniversario 1',
                'subject' =>',¡Feliz aniversario! Te desea la familia Lili Pink & Yoi',
                'type' => 'aniversario',
                'url' => '/img/aniversario/1.jpg',
                'ide' => '1468'
            ],
            [
                'description' => 'plantilla aniversario 2',
                'subject' =>',¡Feliz aniversario! Te desea la familia Lili Pink & Yoi',
                'type' => 'aniversario',
                'url' => '/img/aniversario/2.jpg',
                'ide' => '1469'
            ],
            [
                'description' => 'plantilla aniversario 3',
                'subject' =>',¡Feliz aniversario! Te desea la familia Lili Pink & Yoi',
                'type' => 'aniversario',
                'url' => '/img/aniversario/3.jpg',
                'ide' => '1470'
            ],
            [
                'description' => 'plantilla aniversario 4',
                'subject' =>',¡Feliz aniversario! Te desea la familia Lili Pink & Yoi',
                'type' => 'aniversario',
                'url' => '/img/aniversario/4.jpg',
                'ide' => '1471'
            ],
            [
                'description' => 'plantilla aniversario 5',
                'subject' =>',¡Feliz aniversario! Te desea la familia Lili Pink & Yoi',
                'type' => 'aniversario',
                'url' => '/img/aniversario/5.jpg',
                'ide' => '1472'
            ],
            [
                'description' => 'plantilla aniversario 6',
                'subject' =>',¡Feliz aniversario! Te desea la familia Lili Pink & Yoi',
                'type' => 'aniversario',
                'url' => '/img/aniversario/6.jpg',
                'ide' => '1473'
            ],
            [
                'description' => 'plantilla aniversario 7',
                'subject' =>',¡Feliz aniversario! Te desea la familia Lili Pink & Yoi',
                'type' => 'aniversario',
                'url' => '/img/aniversario/7.jpg',
                'ide' => '1474'
            ],
            [
                'description' => 'plantilla aniversario 8',
                'subject' =>',¡Feliz aniversario! Te desea la familia Lili Pink & Yoi',
                'type' => 'aniversario',
                'url' => '/img/aniversario/8.jpg',
                'ide' => '1475'
            ],
            [
                'description' => 'plantilla aniversario 9',
                'subject' =>',¡Feliz aniversario! Te desea la familia Lili Pink & Yoi',
                'type' => 'aniversario',
                'url' => '/img/aniversario/9.jpg',
                'ide' => '1476'
            ],
            [
                'description' => 'plantilla aniversario 10',
                'subject' =>',¡Feliz aniversario! Te desea la familia Lili Pink & Yoi',
                'type' => 'aniversario',
                'url' => '/img/aniversario/10.jpg',
                'ide' => '1477'
            ],
        ];
        DB::table('plantillas')->insert($data);
        
    }
}
