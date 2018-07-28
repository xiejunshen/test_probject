<?php

use think\migration\Seeder;

require_once '/vendor/fzaninotto/faker/src/autoload.php';

class TestSeeder extends Seeder
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {

        $faker = \Faker\Factory::create();
         /*$data=[
                'username'        =>  'Bob',
                'password'        =>  '9OHkSqf4SZkZNkMuCzTwU58KSKF7qblCLgJKq6GuWjc',
                'login_status'            =>  'qfin3eg8e4g0c4okgkkg4cc04gcscwk ',
                'login_code'      =>  '123456',
                'last_login_ip'   =>  '127.0.0.1',
                'last_login_time' =>  date('Y:m:d H:i:s',time()),
                'is_delete'     =>  date('Y:m:d H:i:s',time()),
            ];

        $this->table('tp_tests')->insert($data)->save();*/

         $data=[
                'username'        =>  $faker->name,
                'password'        =>  $faker->password,
                'login_status'            =>  1,
                'login_code'      =>  '123456',
                'last_login_ip'   =>  '127.0.0.1',
                'last_login_time' =>  date('Y:m:d H:i:s',time()),
                'is_delete'     =>  date('Y:m:d H:i:s',time()),
            ];

        $this->table('tp_tests')->insert($data)->save();


    }
}