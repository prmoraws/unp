<?php

namespace App\Livewire;

use App\Models\Cargo;
use Livewire\Component;

class Cargos extends Component
{
    public $cargos, $nome, $cargo_id;
    public $isOpen = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->cargos = Cargo::all();
        return view('livewire.cargos');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields()
    {
        $this->nome = '';
        $this->cargo_id = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'nome' => 'required|string|min:3|max:250',
        ]);

        Cargo::updateOrCreate(['id' => $this->cargo_id], [
            'nome' => $this->nome
        ]);

        session()->flash(
            'message',
            $this->cargo_id ? 'Cargo atualizado com sucesso.' : 'Cargo criado com sucesso.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $cargo = Cargo::findOrFail($id);
        $this->cargo_id = $id;
        $this->nome = $cargo->nome;

        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Cargo::find($id)->delete();
        session()->flash('message', 'Cargo deletado com sucesso.');
    }
}
