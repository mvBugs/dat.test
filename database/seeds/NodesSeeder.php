<?php

use Illuminate\Database\Seeder;

class NodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\DB::table('nodes')->delete();

        $dataNodes = [
            ['name' => 'Главная',                           'type' => 'pages', 'data' => ['blade' => 'fronts.pages.home',       'fields' => ['body' => ''],], 'url_alias' => 'home',],
            ['name' => 'О компании',                        'type' => 'pages', 'data' => ['blade' => 'fronts.pages.about',      'fields' => ['body' => ''],], 'url_alias' => 'about',],
            ['name' => 'Доставка',                          'type' => 'pages', 'data' => ['blade' => 'fronts.pages.delivery',   'fields' => ['body' => ''],], 'url_alias' => 'delivery',],
            ['name' => 'Преиущиства',                       'type' => 'pages', 'data' => ['blade' => 'fronts.pages.advantages', 'fields' => ['body' => ''],], 'url_alias' => 'advantages',],
            ['name' => 'Экспорт',                           'type' => 'pages', 'data' => ['blade' => 'fronts.pages.export',     'fields' => ['body' => ''],], 'url_alias' => 'export',],
            ['name' => 'Нормы',                             'type' => 'pages', 'data' => ['blade' => 'fronts.pages.norms',      'fields' => ['body' => ''],], 'url_alias' => 'norms',],
            ['name' => 'Контакты',                          'type' => 'pages', 'data' => ['blade' => 'fronts.pages.contacts',   'fields' => ['body' => ''],], 'url_alias' => 'contacts',],
            ['name' => 'Напишыте нам',                      'type' => 'pages', 'data' => ['blade' => 'fronts.pages.write',      'fields' => ['body' => ''],], 'url_alias' => 'write',],
            ['name' => 'Деревянные барабаны',               'type' => 'pages', 'data' => ['blade' => 'fronts.pages.wood',       'fields' => ['body' => ''],], 'url_alias' => 'wood',],
            ['name' => 'Канатные барабаны',                 'type' => 'pages', 'data' => ['blade' => 'fronts.pages.cable',      'fields' => ['body' => ''],], 'url_alias' => 'cable',],
            ['name' => 'Металлические барабаны для кабеля', 'type' => 'pages', 'data' => ['blade' => 'fronts.pages.metallic',   'fields' => ['body' => ''],], 'url_alias' => 'metallic',],
        ];

//        foreach (UrlAliasLocalization::getSupportedLanguagesKeys() as $key) {
            foreach ($dataNodes as $data) {
                $node = \App\Models\Node::create([
                    'name' => $data['name'],
                    'type' => $data['type'],
                    'data' => $data['data'] ?? [],
                    'locale' => 'ru'/*$key*/,
                ]);
                if (isset($data['url_alias'])) {
                    $alias = $data['url_alias'] == 'HOME' ? 'ru'/*$key*/ : $data['url_alias'];
                    $node->urlAlias()->updateOrCreate([
                        'alias' => $alias,
                        'locale' => 'ru'/*$key*/,
                    ], [
                        'source' => $node->generateUrlSource(),
                    ]);
                }

//            }
        }
    }
}
