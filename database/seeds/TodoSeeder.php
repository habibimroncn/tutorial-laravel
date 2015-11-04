<?php

use Illuminate\Database\Seeder;
use App\Todo as Todo;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('todos')->delete();
    
        Todo::create(array(
            'name' => 'Chris Sevilleja',
            'website' => 'http://www.example.com/',
            'description' => 'lorem ipsum ae cah cah la nggwe web angel eram hahahaha'
        ));
    
        Todo::create(array(
            'name' => 'Chris Sevilleja1',
            'website' => 'http://www.google.com/',
            'description' => 'lorem ipsum ae cah cah la nggwe web angel eram hahahaha1'
        ));

        Todo::create(array(
            'name' => 'Chris Sevilleja2',
            'website' => 'http://www.yahoo.com/',
            'description' => 'lorem ipsum ae cah cah la nggwe web angel eram hahahaha2'
        ));

        Todo::create(array(
            'name' => 'Chris Sevilleja3',
            'website' => 'http://www.youtube.com/',
            'description' => 'lorem ipsum ae cah cah la nggwe web angel eram hahahaha3'
        ));

        Todo::create(array(
            'name' => 'Chris Sevilleja4',
            'website' => 'http://www.gmail.com/',
            'description' => 'lorem ipsum ae cah cah la nggwe web angel eram hahahaha4'
        ));
    }
}
