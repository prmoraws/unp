<?php

namespace App\Livewire;

use App\Models\Tipo;
use Livewire\Component;

class Tipos extends Component
{
    public $tipos, $nome, $tipo_id;
    public $isOpen = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->tipos = Tipo::all();
        return view('livewire.tipos');
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
        $this->tipo_id = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'nome' => 'required',
        ]);

        Tipo::updateOrCreate(['id' => $this->tipo_id], [
            'nome' => $this->nome
        ]);

        session()->flash(
            'message',
            $this->tipo_id ? 'Tipo atualizado com sucesso.' : 'Tipo criado com sucesso.'
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
        $tipo = Tipo::findOrFail($id);
        $this->tipo_id = $id;
        $this->nome = $tipo->nome;

        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Tipo::find($id)->delete();
        session()->flash('message', 'Tipo deletado com sucesso.');
    }
}
