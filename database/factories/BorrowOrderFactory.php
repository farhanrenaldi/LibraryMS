<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BorrowOrder>
 */
class BorrowOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->randomElement(['Borrowed','Returned','Void']);

        return [
            'member_id' => Member::factory(),
            'book_id' => Book::factory(),
            'status' => $type,
            'borrow_date' => $this->faker->dateTimeThisYear(),
            'return_date' => $type == 'Returned' ? $this->faker->dateTimeThisYear() : NULL
        ];
    }
}
