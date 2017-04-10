<?php

use Illuminate\Database\Seeder;

class OfferingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offerings')->insert(array(
           array('id'=>'1', 'title'=>'test1', 'price' => 10),
           array('id'=>'2', 'title'=>'test2', 'price' => 20),
           array('id'=>'3', 'title'=>'test3', 'price' => 30),
           array('id'=>'4', 'title'=>'test4', 'price' => 40),
           array('id'=>'5', 'title'=>'test5', 'price' => 50),
       ));
    }
}
