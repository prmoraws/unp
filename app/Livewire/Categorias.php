<?php

namespace App\Livewire;

use App\Models\Categoria;
use Livewire\Component;

class Categorias extends Component
{
    public $categorias, $nome, $descricao, $categoria_id;
    public $isOpen = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->categorias = Categoria::all();
        return view('livewire.categorias');
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
        $this->categoria_id = '';
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

        Categoria::updateOrCreate(['id' => $this->categoria_id], [
            'nome' => $this->nome,
            'descricao' => $this->descricao
        ]);

        session()->flash(
            'message',
            $this->categoria_id ? 'Categoria atualizada com sucesso.' : 'Categoria criada com sucesso.'
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
        $categoria = Categoria::findOrFail($id);
        $this->categoria_id = $id;
        $this->nome = $categoria->nome;
        $this->descricao = $categoria->descricao;

        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Categoria::find($id)->delete();
        session()->flash('message', 'Categoria deletado com sucesso.');
    }
}
