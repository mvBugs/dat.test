<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Admin;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table(config('permission.table_names.permissions'))->delete();
        \DB::table(config('permission.table_names.roles'))->delete();

        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        /*------------------------------------------------------------
        #### Формирование названия права:
        1. Сущность для доступа:
            - entity - заявка, страница,...

        2. Доступное действие:
            - create,.read, update, delete

        3. Собственная сущность:
            - own

        Пример имен прав:
        'inquire.create', 'inquire.update', 'market.update.own', 'firm.delete', 'answer.create'
        'user.delete', 'taxonomy.create', ...
         ------------------------------------------------------------*/
        $actions = [
            'create' => 'Создавать',
            'read' => 'Просматривать',
            'update' => 'Редактировать',
            'delete' => 'Удалять',
        ];

        // Common entities.
        $entities = [
            'static-page' => 'Статическии страницы',
            'term' => 'Термины таксономии',
            'menu' => 'Меню',
            'menu-item' => 'Пункт меню',
            'role' => 'Роли пользователей',
            'permission' => 'Права пользователей',
            'variable' => 'Переменные',
            'account' => 'Аккаунт',
            'user' => 'Пользователей',
            //'client' => 'Клиентов',
        ];

        $accessories = [/*'own' => 'свои'*/];
        $entitiesAccessories = [/*'node', 'web-form', 'user'*/];

        $doNotCreatePermissions = ['variable.create', 'variable.delete', 'account.create', 'account.delete',];

        $this->command->info("Creating & saving permissions");

        $allPermissions = [];
        foreach ($entities as $entityName => $entityTitle) {
            foreach ($actions as $actionName => $actionTitle) {
                $permission = "$entityName.$actionName";
                if (!in_array($permission, $doNotCreatePermissions)) {
                    $permissionData = [
                        'name' => $permission,
                        'title' => $actionTitle . ' ' . $entityTitle,
                        //'guard_name' => 'web',
                    ];
                    Permission::create($permissionData);
                    $allPermissions[] = $permission;

                    if (in_array($entityName, $entitiesAccessories) && ($actionName != 'create')) {
                        foreach ($accessories as $accessorySuffix => $accessoryTitle) {
                            $permissionDataAccessory = [
                                'name' => "$permission.$accessorySuffix",
                                'title' => $actionTitle . ' ' . $accessoryTitle . ' ' . $entityTitle
                            ];
                            $allPermissions[] = "$permission.$accessorySuffix";
                            Permission::create($permissionDataAccessory);
                        }
                    }
                }
            }
        }

        // дополнительные права
        $permissionAdd = [
            ['name' => 'dashboard.read', 'title' => 'Доступ в админпанель'],
            ['name' => 'dashboard.home.read', 'title' => 'Доступ к главной странице админпанели'],
            ['name' => 'client-account.read', 'title' => 'Доступ в аккаунт клиента'],
        ];

        foreach ($permissionAdd as $item) {
            Permission::create($item);
            $allPermissions[] = $item['name'];
        }


        $this->command->info("Creating roles");

        // Супер-администратор
        $admin = Role::create(['name' => 'admin', 'title' => 'Администратор', /*'guard_name' => 'web'*/]);

        // Менеджер
        $manager = Role::create(['name' => 'manager', 'title' => 'Менеджер', /*'guard_name' => 'web'*/]);

        // SEO
        //$seo = Role::create(['name' => 'seo', 'title' => 'SEO', /*'guard_name' => 'web'*/]);

        // Client
        $client = Role::create(['name' => 'client', 'title' => 'Клиент', /*'guard_name' => 'web'*/]);


        // Права администратора
        //$admin->givePermissionTo($allPermissions);

        // Права менеджера
        $manager->givePermissionTo([
            'dashboard.read', 'dashboard.home.read',
            'term.read',
        ]);

        //$seo->givePermissionTo([
        //    'meta-tag.read', 'meta-tag.create', 'meta-tag.update', 'meta-tag.delete',
        //    'site-map.read', 'site-map.create', 'site-map.update',
        //]);

        $client->givePermissionTo([
            'client-account.read',
        ]);

        //
        $this->assignRolesForUsers();
    }

    public function assignRolesForUsers()
    {
        $this->command->info("Assigned roles/permissions for users");

        $userHasRole = [
            'admin@app.com' => 'admin',
            'manager@app.com' => 'manager',
            //'seo@app.com' => 'seo',
            'client@app.com' => 'client',
        ];

        foreach ($userHasRole as $email => $role) {
            if ($user = \App\Models\User::where('email', $email)->first()) {
                $user->assignRole($role);
                $this->command->info("Assigned role <$role> to user <$email>");
            }
        }

        \App\Models\User::whereNotIn('email', array_keys($userHasRole))->get()
            ->each(function($u) {
                $u->assignRole('client'); $u->save();
            });
    }
}
