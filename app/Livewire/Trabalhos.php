<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Trabalho;

class Trabalhos extends Component
{
    public $trabalhos, $nome, $trabalho_id;
    public $isOpen = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->trabalhos = Trabalho::all();
        return view('livewire.trabalhos');
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
        $this->trabalho_id = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'nome' => 'required'
        ]);

        Trabalho::updateOrCreate(['id' => $this->trabalho_id], [
            'nome' => $this->nome
        ]);

        session()->flash(
            'message',
            $this->trabalho_id ? 'Trabalho atualizado com sucesso.' : 'Trabalho criado com sucesso.'
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
        $trabalho = Trabalho::findOrFail($id);
        $this->trabalho_id = $id;
        $this->nome = $trabalho->nome;

        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Trabalho::find($id)->delete();
        session()->flash('message', 'Trabalho deletado com sucesso.');
    }
}
