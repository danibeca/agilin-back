<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\Agilin\Models\Security\User::class, function (Faker\Generator $faker)
{
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\Agilin\Models\QualitySystem\QualitySystem::class, function ($faker)
{
    return [
        'id' => $faker->randomNumber(5),
        'name' => $faker->word

    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\Agilin\Models\QualitySystem\Metric\ExternalMetric::class, function ($faker)
{
    return [
        'id' => $faker->randomNumber(5),
        'code' => $faker->randomNumber,
        'normalization_rule' => '{ "var" : ["@this"] }',
        'normalization_data' => '{ "@this" : "@this.value" }',
        'value' => $faker->randomFloat
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\Agilin\Models\QualitySystem\Metric\Metric::class, function ($faker)
{
    return [
        'id' => $faker->randomNumber(5),
        'code' => $faker->randomNumber,
        'value' => $faker->randomFloat
    ];
});


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\Agilin\Models\System\System::class, function ($faker)
{
    return [
        'id' => $faker->randomNumber(5),
        'name' => $faker->word,
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\Agilin\Models\System\SystemIndicator::class, function ($faker)
{
    return [
        'id' => $faker->randomNumber(5),
        'code' => $faker->randomNumber,
        'name' => $faker->word
    ];

});


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\Agilin\Models\Application\Application::class, function ($faker)
{
    return [
        'id' => $faker->randomNumber(5),
        'name' => $faker->word,
    ];
});


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\Agilin\Models\Application\ApplicationIndicator::class, function ($faker)
{
    return [
        'id' => $faker->randomNumber(5),
        'code' => $faker->randomNumber,
        'name' => $faker->word
    ];

});