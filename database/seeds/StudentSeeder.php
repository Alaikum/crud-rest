<?php

use App\Student;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;



class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */public function run(Faker $faker)
    {
       for($i=0;$i<1000;$i++){
        $d= new Student();
        $d->name=$faker->firstName();
        $d->surname=$faker->lastName();
        $d->date_of_birth=$faker->date();
        // $newStudent->fiscal_code = $factory::create('it_IT')->taxId();

        $d->fiscal_code=strtoupper($faker->unique()->bothify('??????##?##?###?'));
        $d->enrolment_date=$faker->date();
        $d->registration_number=$faker->unique()->randomNumber(5,true);
        $d->email=$faker->unique()->email();
        $d->save();
       }
    }
}
