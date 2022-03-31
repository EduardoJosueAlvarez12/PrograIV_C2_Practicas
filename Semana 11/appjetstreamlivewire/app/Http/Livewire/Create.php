<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Alumno;

class Create extends Component
{
    public $alumnos, $name, $age, $alumno_id;

    public function render()
    {
        $this->alumnos = Alumno::all();
        return view('livewire.create');
        $out->writeln("Hello from Terminal");
    }
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'age' => 'required',
        ]);

        Alumno::insert([
            'name' => $this->name,
            'age' => $this->age,
        ]); 

        return redirect('alumno');
    }
}
