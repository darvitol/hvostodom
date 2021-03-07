<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoriesImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 6; $i ++) {
            DB::table('stories_img')->insert([
                'img' => "ins-".$i.'.jpg',
                'story_id' => $i,
                'created_at'=>Carbon::today(),
                'updated_at'=>Carbon::now(),
            ]);
        }
    }
}
