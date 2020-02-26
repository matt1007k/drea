<?php

use App\Models\ExternalLink;
use Illuminate\Database\Seeder;

class ExternalLinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExternalLink::truncate();
        ExternalLink::create([
            'imagen' => 'external_links/minedu.jpg?',
            'url' => 'http://www.minedu.gob.pe/',
            'orden' => 1,
            'publicado' => true
        ]);

        ExternalLink::create([
            'imagen' => 'external_links/gr.jpg',
            'url' => 'http://www.regionayacucho.gob.pe/',
            'orden' => 2,
            'publicado' => true
        ]);

        ExternalLink::create([
            'imagen' => 'external_links/beca18.jpg',
            'url' => 'http://www.pronabec.gob.pe/2017_Beca18.php',
            'orden' => 3,
            'publicado' => true
        ]);

        ExternalLink::create([
            'imagen' => 'external_links/beca18.jpg',
            'url' => 'https://iesppnsl-secad.webnode.es/_files/200000049-09e420dcac/Siges.png',
            'orden' => 4,
            'publicado' => true
        ]);

        ExternalLink::create([
            'imagen' => 'external_links/siagie.jpg',
            'url' => 'http://siagie.minedu.gob.pe/inicio/',
            'orden' => 5,
            'publicado' => true
        ]);

        ExternalLink::create([
            'imagen' => 'external_links/siseve.jpg',
            'url' => 'http://www.siseve.pe/',
            'orden' => 6,
            'publicado' => true
        ]);

        ExternalLink::create([
            'imagen' => 'external_links/perueduca.jpg',
            'url' => 'http://www.perueduca.pe/',
            'orden' => 7,
            'publicado' => true
        ]);

        ExternalLink::create([
            'imagen' => 'external_links/sineace.png',
            'url' => 'https://www.sineace.gob.pe/',
            'orden' => 8,
            'publicado' => true
        ]);

        ExternalLink::create([
            'imagen' => 'external_links/banco_de_la_nacion.jpg',
            'url' => 'http://www.bn.com.pe/',
            'orden' => 9,
            'publicado' => true
        ]);

        ExternalLink::create([
            'imagen' => 'external_links/mh.jpg',
            'url' => 'http://www.munihuamanga.gob.pe',
            'orden' => 10,
            'publicado' => true
        ]);

        ExternalLink::create([
            'imagen' => 'external_links/senaju.jpg',
            'url' => 'http://juventud.gob.pe/',
            'orden' => 11,
            'publicado' => true
        ]);
    }
}
