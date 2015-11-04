<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call('CommentTableSeeder');
        $this->call('mapseeder');
        $this->call('TodoSeeder');
        $this->command->info('Comment table seeded.');

        Model::reguard();
    }
}
