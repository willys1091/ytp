<?php

use App\Models\CharityCategory;
use Illuminate\Database\Seeder;

class AddCharityCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Impact Community Indonesia',
            'Peduli Sesama'
        ];

        foreach($data as $value){
            CharityCategory::create(['name' => $value]);
        }
    }
}
