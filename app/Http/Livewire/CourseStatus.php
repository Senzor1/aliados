<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\course;
use App\Models\lesson;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CourseStatus extends Component
{

    use AuthorizesRequests;

    public $course, $current;

    public function mount(course $course){
        $this->course = $course;
    
        foreach ($course->lessons as $lesson) {
            if (!$lesson->completed) {
                $this->current = $lesson;
                break;
            }
        }

        if (!$this->current) {
            $this->current = $course->lessons->last();
        }

        $this->authorize('enrolled', $course);

    }

    

    public function render()
    {
        return view('livewire.course-status');
    }


    //Metodos
    public function changeLesson(lesson $lesson){
        return $this->current = $lesson;

    }


    public function completed(){
        if ($this->current->completed) {
            //eliminar registro
            $this->current->users()->detach(auth()->user()->id);
        }else{
            //Agregar registro
            $this->current->users()->attach(auth()->user()->id);
        }

        $this->current = lesson::find($this->current->id);
        $this->course = course::find($this->course->id);
    }

    //Propiedades computadas
    public function getIndexProperty(){
        return $this->course->lessons->pluck('id')->search($this->current->id);
    }
    
    public function getPreviousProperty(){
        if ($this->index == 0) {
            return null;
        }else{
            return $this->course->lessons[$this->index - 1 ];
        }
    }

    public function getNextProperty(){
        if ($this->index == $this->course->lessons->count() - 1) {
            return null;
        }else{
            return $this->course->lessons[$this->index + 1 ];
        }
    }

    public function getAdvanceProperty(){
        $i = 0;

        foreach ($this->course->lessons as $lesson) {
                if ($lesson->completed) {
                    $i++;
                }
        }

        $advance = ($i * 100)/($this->course->lessons->count());

        return round($advance, 2);

    }

    public function download(){
        return response()->download(storage_path('app/public/' . $this->current->resource->url));
    }
}
