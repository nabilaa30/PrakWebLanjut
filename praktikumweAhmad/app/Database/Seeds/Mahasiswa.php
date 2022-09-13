<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\i18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [[
            'npm' => '2017051024',
            'nama'    => 'Muhammad Rizki Kurniawan',
            'alamat' => 'Lampung',
            'created_at' =>Time::now()
        ],
        [
            'npm' => '2017051007',
            'nama'    => 'Muhammad Faiz',
            'alamat' => 'Lampung',
            'created_at' =>Time::now()
        ],
        [
            'npm' => '2017051060',
            'nama'    => 'Ahmad Al Farizi',
            'alamat' => 'Depok',
            'created_at' =>Time::now()
        ],
        [
            'npm' => '2017051068',
            'nama'    => 'M. Farhan Fadhillah',
            'alamat' => 'Lampung',
            'created_at' =>Time::now()
        ],
        [
            'npm' => '2057051017',
            'nama'    => 'Syahril Fajri Pratama',
            'alamat' => 'Lampung',
            'created_at' =>Time::now()
        ],
    ];
        foreach($data_mahasiswa as $data){
            // Using Query Builder
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
