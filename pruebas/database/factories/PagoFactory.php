<?php

namespace Database\Factories;

use App\Models\Pago;
use Illuminate\Database\Eloquent\Factories\Factory;

class PagoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pago::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cliente_id'=>$this->cliente(),
            'metodo_pago_id'=>$this->metodo(),
            'valor'=>$this->faker -> numberBetween(),
        ];
    }
    public function cliente()
        {
            $cliente=["1","2","3","4","5","6","7","8","9","10"];
            return $cliente[mt_rand(0, count($cliente)-1)];
        }
        public function metodo()
        {
            $metodo=["1","2","3"];
            return $metodo[mt_rand(0, count($metodo)-1)];
        }
}
