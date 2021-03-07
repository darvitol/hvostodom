<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function showPet($pet_alias)
    {
        $pets = Pet::where('pet_alias', $pet_alias)->first();

        return view('pet.pet-detail', [
            'pets' => $pets
        ]);
    }

    public function find(Request $req)
    {
        $pets = Pet::where('in_search', 1)->get();


        return view('pet.find', [
            'pets' => $pets
        ]);
    }
}
