<?php

namespace App\Livewire;

use App\Models\Bloco;
use Livewire\Component;

class Blocos extends Component
{
    public $blocos, $nome, $bloco_id;
    public $isOpen = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->blocos = Bloco::all();
        return view('livewire.blocos');
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
        $this->bloco_id = '';
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

        Bloco::updateOrCreate(['id' => $this->bloco_id], [
            'nome' => $this->nome
        ]);

        session()->flash(
            'message',
            $this->bloco_id ? 'bloco atualizado com sucesso.' : 'bloco criado com sucesso.'
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
        $bloco = Bloco::findOrFail($id);
        $this->bloco_id = $id;
        $this->nome = $bloco->nome;

        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Bloco::find($id)->delete();
        session()->flash('message', 'bloco deletado com sucesso.');
    }
}
