<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'cedula' => $this-> faker->phoneNumber(),
            'foto' => $this->foto(),
            'telefono'=> $this-> faker->phoneNumber(),
            'direccion'=> $this-> faker->address(),
            'email' => $this->faker->unique()->safeEmail(),
            'user_id' => $this->user(),
            
        ];
    }
    public function  foto()
    {
        $foto=["7llAIs8CynWPhIBiixTk4GyvxCaNctwyXc8KLe1w.jpg","BXM1OD4G1cFZ42h5J69Tey9Scd0OkIo3FOW5H11x.jpg","e8bw1SU1r43ILLTx9BZCo9vuMM01FkLLPEkQXQaR.jpg","IbJRjpHoYIKEkmwO3IvlU3RRwqZARRBIRTJrMTu1.jpg","Kf681X4JRoOsujKswlLUxwE33ZDuGYOCWPSOEmfv.jpg","ltmoExYBHHMF4XsmdWvEPKywGZeLUgDXQNeps8q6.jpg","rxyW06WGA1MuluGpVxxL3wymUjMzfr4ZiEhWaYRF.jpg","Sw4O9bMvrbjdzY0ROEdidQYms5sChsKdHhAg5MXN.jpg"];
        return $foto[mt_rand(0, count($foto)-1)];
        
    }
    public function user(){
        $user=["1","2","3","4","5","6","7","8","9","10"];
        return $user[mt_rand(0, count($user)-1)];
    }

}