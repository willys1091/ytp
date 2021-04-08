<?php

use App\Models\CharityCategory;
use Illuminate\Database\Seeder;

class CharityCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Feed and Learning (Makan dan Belajar)',
            'Sekolah Berasrama',
            'Rumah Belajar',
            'Penjara (Prison School)',
            'Sponsor Guru Pedalaman',
            'Pelatihan dan Pengembangan (LTC)',
            'Klinik Berjalan (Mobile Clinic)',
            'Anak-anak pedalaman',
            'Impact Community Indonesia',
            'Peduli Sesama'
        ];

        foreach($data as $value){
            CharityCategory::create(['name' => $value]);
        }
    }
}
