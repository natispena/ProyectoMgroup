<?php

namespace Database\Factories;

use App\Models\LotePago;
use Illuminate\Database\Eloquent\Factories\Factory;

class LotePagoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LotePago::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo' =>$this->faker->name(),
            'user_id'=> $this->user(),
            'trm'=> $this->faker->phoneNumber(),
            'trm_eur'=> $this->faker->phoneNumber(),
        ];
    }
    public function user(){
        $user=["1","2","3","4","5","6","7","8","9","10"];
        return $user[mt_rand(0, count($user)-1)];
    }
}
