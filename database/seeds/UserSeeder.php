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
        ]);

        DB::table('fests')->insert([
          'name'=>'KiteFest',
          'fromDate'=>'2016-03-01',
          'toDate'=>'2016-03-05',
          'department'=>'Computer Science',
          'imgUrl'=>'images/fests/1.jpg'
        ]); //1

        DB::table('fests')->insert([
          'name'=>'SampleFest',
          'fromDate'=>'2016-03-20',
          'toDate'=>'2016-03-23',
          'department'=>'Maths',
          'imgUrl'=>'images/fests/2.jpg'
        ]);//2

        DB::table('fests')->insert([
          'name'=>'AnotherFest',
          'fromDate'=>'2016-03-07',
          'toDate'=>'2016-03-10',
          'department'=>'Electronics',
          'imgUrl'=>'images/fests/3.jpg'
        ]);

        DB::table('fests')->insert([
          'name'=>'RepublicDay',
          'fromDate'=>'2016-03-05',
          'toDate'=>'2016-03-08',
          'department'=>'Computer Science',
          'imgUrl'=>'images/fests/4.jpg'
        ]);//4

        DB::table('fests')->insert([
          'name'=>'Sample Fest',
          'fromDate'=>'2016-03-12',
          'toDate'=>'2016-03-15',
          'department'=>'Electronics',
          'imgUrl'=>'images/fests/5.jpg'
        ]);

        DB::table('fests')->insert([
          'name'=>'Film Fest',
          'fromDate'=>'2016-03-01',
          'toDate'=>'2016-03-05',
          'department'=>'Computer Science',
          'imgUrl'=>'images/fests/6.jpg'
        ]);//6

        DB::table('fests')->insert([
          'name'=>'CampArt',
          'fromDate'=>'2016-04-01',
          'toDate'=>'2016-04-05',
          'department'=>'Computer Science',
          'imgUrl'=>'images/fests/7.jpg'
        ]);

        DB::table('fests')->insert([
          'name'=>'ArtsCon',
          'fromDate'=>'2016-03-10',
          'toDate'=>'2016-03-15',
          'department'=>'Computer Science',
          'imgUrl'=>'images/fests/8.jpg'
        ]);//6


    }
}
