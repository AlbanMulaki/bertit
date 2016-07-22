<?php

use Illuminate\Database\Seeder;
use App\Comments;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        factory(Comments::class,1000)->create();
        $this->command->info('User table seeded!');
    }

}
