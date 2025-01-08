<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Igreja;

class Igrejas extends Component
{
    public $igrejas, $nome, $igreja_id;
    public $isOpen = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->igrejas = Igreja::all();
        return view('livewire.igrejas');
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
        $this->igreja_id = '';
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

        Igreja::updateOrCreate(['id' => $this->igreja_id], [
            'nome' => $this->nome
        ]);

        session()->flash(
            'message',
            $this->igreja_id ? 'igreja atualizado com sucesso.' : 'igreja criado com sucesso.'
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
        $igreja = Igreja::findOrFail($id);
        $this->igreja_id = $id;
        $this->nome = $igreja->nome;

        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Igreja::find($id)->delete();
        session()->flash('message', 'igreja deletado com sucesso.');
    }
}
