<?php

namespace App\Http\Livewire\Instructor;

use App\Models\course;
use Livewire\Component;
use Livewire\WithPagination;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CoursesStudents extends Component
{
//     public function __construct(){
//         $this->middleware('can:Actualizar cursos')->only('render');
//    }

    use AuthorizesRequests;
    use WithPagination;
    
    public $course, $search;

    public function mount(course $course){
        $this->course = $course;

        $this->authorize('dictated', $course);
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {

        $students = $this->course->students()->where('name', 'LIKE', '%' . $this->search . '%')->paginate(4);

        return view('livewire.instructor.courses-students', compact('students'))->layout('layouts.instructor', ['course' => $this->course]);
    }
}
