<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();

        \DB::table('users')->insert([
            [
                'name' => 'Optimus',
                'email' => 'admin@app.com',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'email_verified_at' => new \DateTime(),
                'safe' => true,
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ],
            [
                'name' => 'Bob',
                'email' => 'bob@app.com',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'email_verified_at' => new \DateTime(),
                'safe' => false,
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ],
            [
                'name' => 'Manager',
                'email' => 'manager@app.com',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'email_verified_at' => new \DateTime(),
                'safe' => false,
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ],
            [
                'name' => 'Client',
                'email' => 'client@app.com',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'email_verified_at' => new \DateTime(),
                'safe' => false,
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ],
        ]);

        $this->command->info('Users seed success!');
    }
}
