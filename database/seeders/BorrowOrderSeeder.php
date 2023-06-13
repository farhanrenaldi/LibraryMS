<?php

namespace Database\Seeders;

use App\Models\BorrowOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BorrowOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BorrowOrder::factory()
            ->count(25)
            ->create();
    }
}
