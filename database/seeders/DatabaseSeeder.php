<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use App\Models\Proposal;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(200)->create();

        User::query()->inRandomOrder()->limit(10)->get()
                ->each(function (User $u) { 
                    
                    //$proj = Project::factory()->count(1)->create(['created_by' => $u->id]);
                    $proj = Project::factory()->create(['created_by' => $u->id]);  // cria 1 projeto e armazena em $proj

                    Proposal::factory()->count(random_int(4, 45))->create(['project_id' => $proj->id]); // cria de 4 a 45 propostas e vincula ao id do projeto criado anteriormente
                }); 

        
        // User::query()->inRandomOrder()->limit(10)->get()
        //         ->each(fn (User $u) => Project::factory()->count(10)->create(['created_by' => $u->id])); // isso criará 10 projetos fictícios para cada um dos 10 usuários obtidos aleatoriamente

        //Project::factory()->count(10)->create(); // isso vai criar + 10 users para vinculá-los aos projetos fictícios.
    }
}
