<?php

namespace App\Http\Livewire\Instructor;

use App\Models\lesson;
use Livewire\Component;

use Illuminate\Support\Facades\Storage;

use Livewire\WithFileUploads;


class LessonResources extends Component
{
    use WithFileUploads;
    public $lesson, $file;

    public function mount(lesson $lesson){
        $this->lesson = $lesson;
    }

    public function render()
    {
        return view('livewire.instructor.lesson-resources');
    }

    public function save(){
        $this->validate([
            'file'  =>  'required'
        ]);

        $url = $this->file->store('resources');

        $this->lesson->resource()->create([
            'url'   =>  $url
        ]);

        $this->lesson = lesson::find($this->lesson->id);
    }

    public function destroy(){
        Storage::delete([$this->lesson->resource->url]);
        
        $this->lesson->resource->delete();

        $this->lesson = lesson::find($this->lesson->id);
    }

    public function download(){
        return response()->download(storage_path('app/public/' . $this->lesson->resource->url));
    }


}
