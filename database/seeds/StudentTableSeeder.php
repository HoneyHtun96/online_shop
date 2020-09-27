<?php

use Illuminate\Database\Seeder;
use App\Student;
use Illuminate\Database\Eloquent\Model; // <- added this


class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $student= new Student();//object
       // $student->name="Mg Mg";
       // $student->email="mgmg@gmail.com";
       // $student->address="Milan";

       // $student->save();//data ထည့်တာ

       // $student1= new Student();//object
       // $student1->name="Su Su";
       // $student1->email="susu@gmail.com";
       // $student1->address="Latha";

       // $student1->save();
      factory(App\Student::class,5)->create();
    }
}
