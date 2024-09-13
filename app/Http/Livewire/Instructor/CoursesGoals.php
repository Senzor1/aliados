<?php

namespace App\Http\Livewire\Instructor;

use App\Models\course;
use App\Models\goal;
use Livewire\Component;

class CoursesGoals extends Component
{

    public $course, $goal, $name;

    protected $rules = [
        'goal.name' => 'required'
    ];

    public function mount(course $course){
        $this->course = $course;
        $this->goal = new goal();
    }

    public function render()
    {
        return view('livewire.instructor.courses-goals');
    }

    public function store(){
        $this->validate([
            'name' => 'required'
        ]);

        $this->course->goals()->create([
            'name' => $this->name
        ]);

        $this->reset('name');
        $this->course = course::find($this->course->id);
    }

    public function edit(goal $goal){
        $this->goal = $goal;
    }

    public function update(){
        $this->validate();

        $this->goal->save();

        $this->goal = new goal();

        $this->course = course::find($this->course->id);
    }

    public function destroy(goal $goal){
        $goal->delete();
        $this->course = course::find($this->course->id);
    }
}
