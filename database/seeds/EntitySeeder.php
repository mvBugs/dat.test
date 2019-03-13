<?php

use Illuminate\Database\Seeder;

class EntitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eTypes = [
            [
                'name' => 'Страница',
                'system_name' => 'pages',
                'model' => \App\Models\Node::class,
            ],
            [
                'name' => 'Новость',
                'system_name' => 'news',
                'model' => \App\Models\Node::class,
            ],

            //
            [
                'name' => 'Casinos', // Top 10 Casinos
                'system_name' => 'casinos',
                'model' => \App\Models\Item::class,
            ],
            [
                'name' => 'Last stream',
                'system_name' => 'last_streams',
                'model' => \App\Models\Item::class,
            ],
            [
                'name' => 'Sports betting',
                'system_name' => 'sports_betting',
                'model' => \App\Models\Item::class,
            ],
            [
                'name' => 'Popular Question',
                'system_name' => 'popular_questions',
                'model' => \App\Models\Item::class,
            ],

        ];

        array_map(function ($data) {
            \App\Models\EntityType::create($data);
        }, $eTypes);

    }
}
