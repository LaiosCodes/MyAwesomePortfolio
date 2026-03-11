<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exps = storage_path('app/private/access_tokens.json');

        $expsData = json_decode(file_get_contents($exps), true);

        foreach ($expsData as $exp) {
            \App\Models\AccessToken::create([
                'name' => $exp['name'],
                'token' => $exp['token'],
                'level' => $exp['level'],
                'expires_at' => $exp['expires_at'] ?? null,
            ]);
        }
    }
}
