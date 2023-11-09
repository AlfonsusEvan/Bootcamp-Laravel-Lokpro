<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Siswa;
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Siswa::class;

    
    public function definition()
    {
        return [
            'nis' => $this->faker->numerify('##########'),
            'nama' => $this->faker->name
            //
        ];
    }
}
