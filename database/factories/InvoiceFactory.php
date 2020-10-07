<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use App\Models\Invoice;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/*
	 * important note
	 * the seeders and factories has been changed with laravel 8
	 * https://laravel.com/docs/8.x/releases
*/
	 
class InvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
	 
    public function definition()
    {	
        return [
		
			'title' => $this->faker->name(rand(20,40)),
			'body' => $this->faker->realText(rand(70,191)),
			'user_id' => User::factory(),
			'created_at' => now(),	
        ];
    }
}
