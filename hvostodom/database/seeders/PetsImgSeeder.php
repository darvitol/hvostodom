<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetsImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 5; $i ++) {
            DB::table('pets_img')->insert([
                'img' => "cat".$i.'.jpg',
                'pet_id' => $i,
                'created_at'=>Carbon::today(),
                'updated_at'=>Carbon::now(),
            ]);
        }
    }
}
