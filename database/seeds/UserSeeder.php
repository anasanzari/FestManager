<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       DB::table('users')->insert([
          'name' => 'admin',
          'email' => 'admin@festmanager.org',
          'password' => bcrypt('1234'),
          'type' => 1,
        ]);

        DB::table('fests')->insert([
          'name'=>'BeetleJuice',
          'fromDate'=>'2016-03-01',
          'toDate'=>'2016-03-05',
          'department'=>'Computer Science',
          'imgUrl'=>'images/fests/1.jpg'
        ]); //1

        DB::table('fests')->insert([
          'name'=>'Once',
          'fromDate'=>'2016-03-20',
          'toDate'=>'2016-03-23',
          'department'=>'Maths',
          'imgUrl'=>'images/fests/2.jpg'
        ]);//2

        DB::table('fests')->insert([
          'name'=>'Code On',
          'fromDate'=>'2016-03-07',
          'toDate'=>'2016-03-10',
          'department'=>'Electronics',
          'imgUrl'=>'images/fests/3.jpg'
        ]);

        DB::table('fests')->insert([
          'name'=>'Muse',
          'fromDate'=>'2016-03-05',
          'toDate'=>'2016-03-08',
          'department'=>'Computer Science',
          'imgUrl'=>'images/fests/4.jpg'
        ]);//4

        DB::table('fests')->insert([
          'name'=>'Robopocalypse',
          'fromDate'=>'2016-03-12',
          'toDate'=>'2016-03-15',
          'department'=>'Electronics',
          'imgUrl'=>'images/fests/5.jpg'
        ]);

        DB::table('fests')->insert([
          'name'=>'Circuit Fest',
          'fromDate'=>'2016-03-01',
          'toDate'=>'2016-03-05',
          'department'=>'Computer Science',
          'imgUrl'=>'images/fests/6.jpg'
        ]);//6

        DB::table('fests')->insert([
          'name'=>'Robo War',
          'fromDate'=>'2016-04-01',
          'toDate'=>'2016-04-05',
          'department'=>'Computer Science',
          'imgUrl'=>'images/fests/7.jpg'
        ]);

        DB::table('fests')->insert([
          'name'=>'Imitation Game',
          'fromDate'=>'2016-03-10',
          'toDate'=>'2016-03-15',
          'department'=>'Computer Science',
          'imgUrl'=>'images/fests/8.jpg'
        ]);//8

        DB::table('events')->insert([
          'name'=>'RetroManiac',
          'festid'=>'1',
          'details'=>''
        ]);
        DB::table('events')->insert([
          'name'=>'ElectroMusic',
          'festid'=>'1',
          'details'=>''
        ]);

        DB::table('events')->insert([
          'name'=>'Music Hunt',
          'festid'=>'1',
          'details'=>''
        ]);

        DB::table('events')->insert([
          'name'=>'Treasure Hunt',
          'festid'=>'2',
          'details'=>''
        ]);
        DB::table('events')->insert([
          'name'=>'General Variety',
          'festid'=>'2',
          'details'=>''
        ]);

        DB::table('events')->insert([
          'name'=>'Pro Nite',
          'festid'=>'2',
          'details'=>''
        ]);




    }
}
