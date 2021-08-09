<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $company_name = $this->faker->unique()->company();
        return [
            'name' => $company_name,
            'slug' => Str::slug($company_name),
            'address' => $this->faker->streetAddress(),
            'zipcode' => $this->faker->postcode(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique->email(),
            'cvr' => $this->faker->cvr(),
            'logo' => $this->faker->image(640,480,'logo',true),
        ];
    }
}
