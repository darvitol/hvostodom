<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 11; $i++) {
            DB::table('news_img')->insert([
                'img' => 'news_'.$i.'.jpg',
                'news_id' => $i,
                'created_at'=>Carbon::today(),
                'updated_at'=>Carbon::now(),
            ]);
        }
    }
}
