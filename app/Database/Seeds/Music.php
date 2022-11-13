<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class music extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'Levitating',
                'singer' => 'Dua Lipa',
                'genre' => 'Pop',
                'date_added' => '2021-10-01',
            ],
            [
                'title' => 'Peaches',
                'singer' => 'Justin Bieber',
                'genre' => 'Pop',
                'date_added' => '2021-10-01',
            ],
            [
                'title' => 'Save Your Tears',
                'singer' => 'The Weeknd',
                'genre' => 'Pop',
                'date_added' => '2021-10-01',
            ],
            [
                'title' => '34+35',
                'singer' => 'Ariana Grande',
                'genre' => 'Pop',
                'date_added' => '2021-10-01',
            ],
        ];
        foreach ($data as $music) {
            $this->db->table('music')->insert($music);
        }
    }
}
