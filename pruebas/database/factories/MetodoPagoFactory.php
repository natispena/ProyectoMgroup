<?php

namespace Database\Factories;

use App\Models\MetodoPago;
use Illuminate\Database\Eloquent\Factories\Factory;

class MetodoPagoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MetodoPago::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'moneda' => $this->moneda(),
            'titular' => $this->faker->name(),
            'documento'=> $this->documento(),
            'numero'=>$this-> faker->phoneNumber(),
            'tipo' =>$this->tipo(),
            'cuenta'=> $this-> faker->creditCardNumber(),
            'impuesto'=> $this-> faker->phoneNumber(),
            'costo'=> $this-> faker->phoneNumber(),
        ];
    }
        public function cliente()
        {
            $cliente=["1","2","3","4","5","6","7","8","9","10"];
            return $cliente[mt_rand(0, count($cliente)-1)];
        }
        public function moneda()
        {
            $moneda=["COP","UDS","EUR"];
            return $moneda[mt_rand(0, count($moneda)-1)];
        }
        public function tipo()
        {
            $tipo=["Bancolombia","Cosmo","Paxum"];
            return $tipo[mt_rand(0, count($tipo)-1)];
        
        }
        public function documento()
        {
            $documento=["Cedula","Pasaporte","NIT","Otro"];
            return $documento[mt_rand(0, count($documento)-1)];
        }
    
}
