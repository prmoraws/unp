<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\{Igreja, Regiao};

class Igrejas extends Component
{
    public $igrejas, $nome, $igreja_id, $regiao_id, $bloco_id;
    public $isOpen = 0;
    public $regiaos = null;

    public function FiterRegiaoByBlocoId() //Filtro para o select região
    {
        $this->regiaos = Regiao::where('bloco_id', $this->bloco_id)
            ->get();
    }

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
            'nome' => 'required|string|min:3|max:250',
        ]);

        Igreja::updateOrCreate(['id' => $this->igreja_id], [
            'nome' => $this->nome,
            'bloco_id' => $this->bloco_id,
            'regiao_id' => $this->regiao_id
        ]);

        session()->flash(
            'message',
            $this->igreja_id ? 'Igreja atualizada com sucesso.' : 'Igreja criada com sucesso.'
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
        $this->bloco_id = $igreja->bloco_id;
        $this->regiao_id = $igreja->regiao_id;

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
        session()->flash('message', 'Igreja deletada com sucesso.');
    }
}
