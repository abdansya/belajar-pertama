<?php

use Illuminate\Database\Seeder;

class CourseStudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            ['title' => 'Kemampuan Menulis Dasar', 'units' => 3, 'room'  => 'B13'],
            ['title' => 'Menggambar Manga Level 1', 'units' => 2, 'room'  => 'A10'],
            ['title' => 'Mewarnai Manga Level 1', 'units' => 2, 'room'  => 'A01']
        ]);

        DB::table('students')->insert([
            ['name' => 'Joni', 'date_of_birth' => '1990-08-14', 'gender'=> 'm'],
            ['name' => 'Dadang', 'date_of_birth' => '1987-12-04', 'gender'=> 'm'],
            ['name' => 'Yuni', 'date_of_birth' => '1992-11-14', 'gender'=> 'f']
        ]);

        DB::table('course_student')->insert([
            ['course_id' => 1, 'student_id' => 1],
            ['course_id' => 2, 'student_id' => 1],
            ['course_id' => 3, 'student_id' => 1],
            ['course_id' => 1, 'student_id' => 2],
            ['course_id' => 2, 'student_id' => 2],
            ['course_id' => 3, 'student_id' => 3]
        ]);
    }
}
