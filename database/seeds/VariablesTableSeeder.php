<?php

use Illuminate\Database\Seeder;

class VariablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('variables')->truncate();

        DB::table('variables')->insert([
            [
                'key' => 'app_name',
                'value' => config('app.name'),
            ],
            [
                'key' => 'mail_from_address',
                'value' => 'no-reply@info.net',
            ],
            [
                'key' => 'mail_from_name',
                'value' => 'App Name',
            ],
            [
                'key' => 'mail_to_address',
                'value' => 'bob@example.com',
            ],
            [
                'key' => 'mail_to_name',
                'value' => 'Bob Dilan',
            ],
            [
                'key' => 'company_email',
                'value' => 'namemail@mail.com',
            ],
            [
                'key' => 'company_phone',
                'value' => '+7-900-000-00-00',
            ],
            [
                'key' => 'contact_latitude',
                'value' => '55.759616',
            ],
            [
                'key' => 'contact_longitude',
                'value' => '37.625457',
            ],
            [
                'key' => 'contact_map_zoom',
                'value' => '18',
            ],
        ]);

        \Cache::forget('laravel.variables.cache');

        $this->command->info('Vars seed success!');
    }
}
