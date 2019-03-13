<?php

use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataItems = [
            ['name' => 'Топ казино 1 The place where dreams come true', 'type' => 'casinos', 'data' => ['fields' => ['body' => 'There is no need to describe the games. since you already know for sure what is the quality content from microgaming']]],
            ['name' => 'Топ казино 2 The place where dreams come true', 'type' => 'casinos', 'data' => ['fields' => ['body' => 'There is no need to describe the games. since you already know for sure what is the quality content from microgaming']]],
            ['name' => 'Топ казино 3 The place where dreams come true', 'type' => 'casinos', 'data' => ['fields' => ['body' => 'There is no need to describe the games. since you already know for sure what is the quality content from microgaming']]],
            ['name' => 'Стрим 1', 'type' => 'last_streams', 'data' => ['fields' => ['link' => 'https://youtu.be/PXz15FFdk3M',]]],
            ['name' => 'Стрим 1', 'type' => 'last_streams', 'data' => ['fields' => ['link' => 'https://youtu.be/PXz15FFdk3M',]]],
            ['name' => 'How to 4 register in an online casino?', 'type' => 'popular_questions', 'data' => ['fields' => ['question' => 'How to 4 register in an online casino?',]]],
        ];

        foreach (UrlAliasLocalization::getSupportedLanguagesKeys() as $key) {
            foreach ($dataItems as $data) {
                $item = \App\Models\Item::create([
                    'name' => $data['name'],
                    'type' => $data['type'],
                    'data' => $data['data'],
                    'locale' => $key,
                ]);
            }
        }
    }
}
