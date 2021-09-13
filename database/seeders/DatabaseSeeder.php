<?php

namespace Database\Seeders;

use Facade\Ignition\Support\FakeComposer;
use Faker\Factory as faker;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Http\Client\Factory as ClientFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Stringable;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { DB::table('roles')->insert([[
        "nom" => "admin",
    ], ["nom"=>"editeur"],
["nom"=>"visiteur"]]);
        \App\Models\User::factory(5)->create();
        \App\Models\Article::factory(10)->create();
        \App\Models\Commentaire::factory(20)->create();





    }
}
