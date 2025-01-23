<?php

namespace App\Livewire;

use App\Models\Regiao;
use Livewire\Component;

class Regioes extends Component
{
    public $regioes, $nome, $regiao_id, $bloco_id;
    public $isOpen = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->regioes = Regiao::all();
        return view('livewire.regioes');
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
        $this->regiao_id = '';
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
        // dd($this->bloco_id);
        Regiao::updateOrCreate(['id' => $this->regiao_id], [

            'nome' => $this->nome,
            'bloco_id' => $this->bloco_id
        ]);

        session()->flash(
            'message',
            $this->regiao_id ? 'regiao atualizada com sucesso.' : 'Regiao criada com sucesso.'
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
        $regiao = Regiao::findOrFail($id);
        $this->regiao_id = $id;
        $this->nome = $regiao->nome;
        $this->bloco_id = $regiao->bloco_id;

        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Regiao::find($id)->delete();
        session()->flash('message', 'Regiao deletada com sucesso.');
    }
}
