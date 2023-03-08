<?php

namespace Database\Seeders;

use App\Models\Snack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SnackSeeder extends Seeder
{
    const SNACKS = [
        "Patat met mayonaise",
        "Kroket",
        "Frikandel",
        "Frikandel speciaal",
        "Kaassoufflé",
        "Bitterballen",
        "Mexicano",
        "Kipnuggets",
        "Bamischijf",
        "Nasischijf",
        "Berehap saté",
        "Gehaktbal uit de jus",
        "Hamburger",
        "Cheeseburger",
        "Broodje gehaktbal",
        "Loempidel",
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::SNACKS as $snack) {
            Snack::create([
                'name' => $snack,
            ]);
        }
    }
}
