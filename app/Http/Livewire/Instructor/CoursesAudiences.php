<?php

namespace App\Http\Livewire\Instructor;

use Livewire\Component;

use App\Models\course;
use App\Models\audience;

class CoursesAudiences extends Component
{

    public $course, $audience, $name;

    protected $rules = [
        'audience.name' => 'required'
    ];

    public function mount(course $course){
        $this->course = $course;
        $this->audience = new audience();
    }

    public function render()
    {
        return view('livewire.instructor.courses-audiences');
    }

    public function store(){
        $this->validate([
            'name' => 'required'
        ]);

        $this->course->audiences()->create([
            'name' => $this->name
        ]);

        $this->reset('name');
        $this->course = course::find($this->course->id);
    }

    public function edit(audience $audience){
        $this->audience = $audience;
    }

    public function update(){
        $this->validate();

        $this->audience->save();

        $this->audience = new audience();

        $this->course = course::find($this->course->id);
    }

    public function destroy(audience $audience){
        $audience->delete();
        $this->course = course::find($this->course->id);
    }
}
