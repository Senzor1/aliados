<?php

namespace App\Http\Livewire\Instructor;

use Livewire\Component;

use App\Models\course;
use App\Models\requirement;

class CoursesRequirements extends Component
{

    public $course, $requirement, $name;

    protected $rules = [
        'requirement.name' => 'required'
    ];

    public function mount(course $course){
        $this->course = $course;
        $this->requirement = new requirement();
    }

    public function render()
    {
        return view('livewire.instructor.courses-requirements');
    }

    public function store(){
        $this->validate([
            'name' => 'required'
        ]);

        $this->course->requirements()->create([
            'name' => $this->name
        ]);

        $this->reset('name');
        $this->course = course::find($this->course->id);
    }

    public function edit(requirement $requirement){
        $this->requirement = $requirement;
    }

    public function update(){
        $this->validate();

        $this->requirement->save();

        $this->requirement = new requirement();

        $this->course = course::find($this->course->id);
    }

    public function destroy(requirement $requirement){
        $requirement->delete();
        $this->course = course::find($this->course->id);
    }
}
