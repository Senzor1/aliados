<?php

namespace Database\Seeders;

use App\Models\audience;
use App\Models\course;
use App\Models\description;
use App\Models\goal;
use App\Models\image;
use App\Models\lesson;
use App\Models\requirement;
use App\Models\review;
use App\Models\section;
use Database\Factories\lessonFactory;
use Illuminate\Database\Seeder;

class courseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = course::factory(100)->create();

        foreach ($courses as $course){

            review::factory(5)->create([
                'course_id' => $course->id
            ]);

            image::factory(1)->create([
                'imageable_id' => $course->id,
                'imageable_type' => 'app\Models\course'
            ]);

            requirement::factory(4)->create([
                'course_id' => $course->id
            ]);

            goal::factory(4)->create([
                'course_id' => $course->id
            ]);

            audience::factory(4)->create([
                'course_id' => $course->id
            ]);

            $sections = section::factory(4)->create([
                            'course_id' => $course->id
                        ]);

            foreach($sections as $section){
                $lessons = lesson::factory(4)->create(['section_id'=> $section->id]);
            
            foreach ($lessons as $lesson) {
                description::factory(1)->create([
                    'lesson_id' => $lesson->id
                ]);
            }
            
            }
        }
    }
}
