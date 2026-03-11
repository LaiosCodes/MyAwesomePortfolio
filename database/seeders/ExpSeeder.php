<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exps = storage_path('app/private/exps_list.json');

        $expsData = json_decode(file_get_contents($exps), true);

        foreach ($expsData as $exp) {
            \App\Models\Exp::create([
                'date' => $exp['date'],
                'title' => $exp['title'],
                'description' => $exp['description'],
            ]);
        }
    }
}
