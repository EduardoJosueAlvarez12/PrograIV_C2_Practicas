<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Alumno;

class Crud extends Component
{
    //propiedades públicar para pasar los datos
    public $alumnos, $name, $age, $alumno_id;
    public $isModalOpen = 0;

    public function render()
    {
        $this->alumnos=Alumno::all();
        return view('livewire.crud');
    }

    public function store()
    {

        $this->validate([
            'name' => 'required',
            'age' => 'required',
        ]);

        Alumno::updateOrCreate(['id' => $this->alumno_id], [
            'name' => $this->name,
            'age' => $this->age
        ]);
        $this->closeModalPopover();
    }

    public function edit($id)
    {
        $alumno = Alumno::findOrFail($id);
        $this->alumno_id = $id;
        $this->name = $alumno->name;
        $this->age = $alumno->age;

        $this->openModalPopover();
    }

    public function destroy($id){
        Alumno::find($id)->delete();
    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }
}
