<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;

class StoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 15; $i ++) {
            DB::table('stories')->insert([
                'title' => "История № " . $i,
                'text'=> \Illuminate\Support\Str::random(100),
                'created_at'=>Carbon::today(),
                'updated_at'=>Carbon::now(),
            ]);
        }
    }
}
