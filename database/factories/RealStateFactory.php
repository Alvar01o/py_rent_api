<?php

namespace Database\Factories;

use App\Models\RealState;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class RealStateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RealState::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = \App\Models\User::all()->random();
        return [
            'user_id'   =>  $user->id,
            'name'      =>  Str::random(10),
            'active'    =>  'yes'
        ];
    }
}
