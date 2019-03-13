<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $start = microtime(true);

        $this->call(UsersTableSeeder::class);
        $this->call(VariablesTableSeeder::class);
        $this->call(TaxonomyTableSeeder::class);
        //$this->call(PagesTableSeeder::class);
        //$this->call(MenusTableSeeder::class);
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(AdminMenuSeeder::class);
        $this->call(EntitySeeder::class);
        $this->call(NodesSeeder::class);
        $this->call(ItemsSeeder::class);

        $this->command->call('cache:clear');

        $time_elapsed_secs = microtime(true) - $start;
        $this->command->info("Generate per $time_elapsed_secs sec.");
    }
}
