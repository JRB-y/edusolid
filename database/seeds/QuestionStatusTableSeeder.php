<?php

use Illuminate\Database\Seeder;

class QuestionStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // untreated
        DB::table('question_status')->insert([
            'name' => "untreated",
            'desc' => "Question qui n est pas encore traiter.",
        ]);
        // En attente de tuteur
        DB::table('question_status')->insert([
            'name' => "En attente de tuteur",
            'desc' => "En attente de tuteur.",
        ]);
        // En train de répondre
        DB::table('question_status')->insert([
            'name' => "En train de répondre",
            'desc' => "En train de répondre.",
        ]);
        // Répondu
        DB::table('question_status')->insert([
            'name' => "Répondu",
            'desc' => "Répondu.",
        ]);
        // Non Répondu
        DB::table('question_status')->insert([
            'name' => "Non Répondu",
            'desc' => "Non Répondu.",
        ]);


    }
}
