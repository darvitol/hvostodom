<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Cassandra\Date;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 11; $i++) {
            DB::table('news')->insert([
                'title' => "Статья " . $i,
                'short_description' => Str::random(50),
                'description' => Str::random(200),
                'created_at'=>Carbon::today(),
                'updated_at'=>Carbon::now(),
            ]);
        }
    }
}
