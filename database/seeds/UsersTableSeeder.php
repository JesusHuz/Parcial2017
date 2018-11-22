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

        $user = new \App\User();

        //for ($i=0; $i < 50; $i++) { 
        //    $user->propietarios()->save(factory(App\Propietario::class)->make());
        //}
        factory(App\User::class,10)->create()->each(function ($u) {
            for ($i=0; $i < 10; $i++) 
            { 
                $u->propietarios()->save(factory(App\Propietario::class)->make());
            }
        });

       // factory(App\Inspeccion::class,100)->create();
    }
}
