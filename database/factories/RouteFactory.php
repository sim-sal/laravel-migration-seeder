<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Route>
 */
class RouteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'azienda' => fake()->company(),
            'stazione_di_partenza' => fake()->city(),
            'stazione_di_arrivo' => fake()->city(),
            'orario_di_partenza' => fake()->time('H:i:s'),
            'orario_di_arrivo' => fake()->time('H:i:s'),
            'codice_treno' => fake()->bothify('??-#####'),
            'numero_carrozze' => fake()->randomNumber(2, false),
            'in_orario' => fake()->boolean(),
            'cancellato' => fake()->boolean()
        ];
    }
}

// $table->string('azienda', 64);
// $table->string('stazione_di_partenza', 64);
// $table->string('stazione_di_arrivo', 64);
// $table->integer('orario_di_partenza');
// $table->integer('orario_di_arrivo');
// $table->string('codice_treno')->unique();
// $table->integer('numero_carrozze');
// $table->boolean('in_orario')->default(true);
// $table->boolean('cancellato')->default(false);
