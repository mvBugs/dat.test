<?php

class AdminMenuSeeder extends MenusBaseSeeder
{
    /**
     * @throws \Exception
     */
    public function run()
    {
        if ($menu = \App\Models\Menu\Menu::where('system_name', 'admin_menu')->first()) {
            $menu->delete();
        }

        $this->seedMenu($this->getData());

        $this->command->info('Menu seed success!');
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return [

            [
                'name' => 'Админ. меню',
                'system_name' => 'admin_menu',
                'data' => [
                    'has_hierarchy' => 1,
                ],
                'safe' => true,
                'children' => [
                    [
                        'name' => 'Меню',
                        'path' => '',
                        'data' => [
                            'permissions' => [],
                            'icon' => '',
                            'header' => 1,
                        ],
                    ],

                    [
                        'name' => 'Главная',
                        'path' => route('admin.home'),
                        'data' => [
                            'permissions' => ['dashboard.home.read'],
                            'icon' => 'fa fa-dashboard',
                            'pattern_url' => '\S*admin\/?((\?{1}\S*)|$)',
                        ],
                    ],

                    [
                        'name' => 'Материалы',
                        'path' => '',
                        'data' => [
                            'permissions' => [],
                            'icon' => 'fa fa-file-text-o',
                        ],
                        'children' => [
                            [
                                'name' => 'Страницы',
                                'path' => url('admin/nodes?type=pages'),
                                'data' => [
                                    'permissions' => [],
                                    'icon' => '',
                                    'pattern_url' => '\S*type=pages\S*',
                                ]
                            ],
                        ],
                    ],

                    [
                        'name' => 'Веб-формы',
                        'path' => '',
                        'data' => [
                            'permissions' => [],
                            'icon' => 'fa fa-chrome',
                        ],
                        'children' => [
                            [
                                'name' => 'Напишите нам',
                                'path' => url('/admin/forms?type=write'),
                                'data' => [
                                    'permissions' => ['form.read',],
                                    'icon' => '',
                                    'pattern_url' => '\S*type=write\S*',
                                ],
                            ],
                        ],
                    ],

                    [
                        'name' => 'Блоки',
                        'path' => url('admin/blocks'),
                        'data' => [
                            'permissions' => [],
                            'icon' => 'fa fa-th-large',
                        ],
                    ],

                    [
                        'name' => 'Структура',
                        'path' => '',
                        'data' => [
                            'permissions' => [],
                            'icon' => 'fa fa-th',
                        ],
                        'children' => [
                            /*[
                                'name' => 'Рубрикатор',
                                'path' => '',
                                'data' => [
                                    'permissions' => [],
                                    'icon' => '',
                                ],
                                'children' => [
                                    [
                                        'name' => 'Question categories',
                                        'path' => url('admin/terms?vocabulary=question_categories'),
                                        'data' => [
                                            'permissions' => ['term.read'],
                                            'icon' => '',
                                            'pattern_url' => '\S*vocabulary=question_categories\S*',
                                        ]
                                    ],
                                    [
                                        'name' => 'Betting categories',
                                        'path' => url('admin/terms?vocabulary=betting_categories'),
                                        'data' => [
                                            'permissions' => ['term.read'],
                                            'icon' => '',
                                            'pattern_url' => '\S*vocabulary=betting_categories\S*',
                                        ]
                                    ],
                                ],
                            ],*/
                            [
                                'name' => 'Меню',
                                'path' => url('admin/menu'),
                                'data' => [
                                    'permissions' => ['menu.read'],
                                    'icon' => '',
                                ],
                            ],
                        ],
                    ],

                    [
                        'name' => 'Конфигурации',
                        'path' => '',
                        'data' => [
                            'permissions' => [],
                            'icon' => 'fa fa-cogs',
                        ],
                        'children' => [
                            [
                                 'name' => 'Настройка системы',
                                 'path' => url('admin/variables'),
                                 'data' => [
                                     'permissions' => ['variable.read'],
                                     'icon' => '',
                                 ],
                            ],
                            [
                                'name' => 'Очистить кеш',
                                'path' => url('admin/cache-clear'),
                                'data' => [
                                    'permissions' => [],
                                    'icon' => '',
                                ],
                            ],
                        ],
                    ],

                    /*[
                        'name' => 'Пользователи',
                        'path' => url('admin/users'),
                        'data' => [
                            'permissions' => ['user.read'],
                            'icon' => 'fa fa-users',
                        ],
                    ],*/

                ],
            ],
        ];
    }
}
