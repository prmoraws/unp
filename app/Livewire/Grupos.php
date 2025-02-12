<?php

namespace App\Livewire;

use App\Models\Grupo;
use Livewire\Component;

class Grupos extends Component
{
    public $grupos, $nome, $descricao, $grupo_id;
    public $isOpen = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->grupos = Grupo::all();
        return view('livewire.grupos');
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
        $this->descricao = '';
        $this->grupo_id = '';
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
            'descricao' => 'required|string|min:3|max:6000',
        ]);

        Grupo::updateOrCreate(['id' => $this->grupo_id], [
            'nome' => $this->nome,
            'descricao' => $this->descricao
        ]);

        session()->flash(
            'message',
            $this->grupo_id ? 'Grupo atualizado com sucesso.' : 'Grupo criado com sucesso.'
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
        $grupo = Grupo::findOrFail($id);
        $this->grupo_id = $id;
        $this->nome = $grupo->nome;
        $this->descricao = $grupo->descricao;

        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Grupo::find($id)->delete();
        session()->flash('message', 'Grupo deletado com sucesso.');
    }
}
