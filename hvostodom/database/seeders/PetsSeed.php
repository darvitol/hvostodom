<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Float_;
use Ramsey\Uuid\Type\Decimal;

class PetsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 15; $i ++) {
            DB::table('pets')->insert([
                'name' => "Питомец " . $i,
                'sex' => 'м',
                'age' => 1.4,
                'description'=>Str::random(100),
                'in_search'=>0
            ]);
        }
    }
}
