<?php

namespace App\Livewire;

use App\Models\{Pessoa, Regiao, Igreja};
use Livewire\Component;

class Pessoas extends Component
{
    public $pessoas, $pessoa, $nome, $celular, $telefone, $email, $endereco, $bairro, $cep, $cidade_id, $estado_id, $profissao, $aptidoes, $conversao, $obra, $batismo, $esanto, $preso, $parente, $testemunho, $pessoa_id, $bloco_id, $regiao_id, $igreja_id, $categoria_id, $cargo_id, $grupo_id;
    public $isOpen = 0;
    public $regiaos = null;
    public $igrejas = null;

    public function FiterRegiaoByBlocoId() //Filtro para o select região
    {
        $this->regiaos = Regiao::where('bloco_id', $this->bloco_id)
            ->get();
    }

    public function FiterIgrejaByBlocoId() //Filtro para o select região
    {
        $this->igrejas = Igreja::where('regiao_id', $this->regiao_id)
            ->get();
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->pessoas = Pessoa::all();
        return view('livewire.pessoas');
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
        $this->celular = '';
        $this->telefone = '';
        $this->email = '';
        $this->endereco = '';
        $this->bairro = '';
        $this->cep = '';
        $this->cidade_id = '';
        $this->estado_id = '';
        $this->profissao = '';
        $this->aptidoes = '';
        $this->conversao = '';
        $this->obra = '';
        $this->batismo = 0;
        $this->esanto = 0;
        $this->preso = 0;
        $this->parente = 0;
        $this->testemunho = '';
        $this->pessoa_id = '';
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
            'celular' => 'required',
            'email' => 'email',
            'endereco' => 'required',
            'bairro' => 'required',
            'profissao' => 'required',
            'batismo' => 'required',
            'esanto' => 'required',
            'preso' => 'required',
            'parente' => 'required',
        ]);

        Pessoa::updateOrCreate(['id' => $this->pessoa_id], [
            'bloco_id' => $this->bloco_id,
            'regiao_id' => $this->regiao_id,
            'igreja_id' => $this->igreja_id,
            'categoria_id' => $this->categoria_id,
            'cargo_id' => $this->cargo_id,
            'grupo_id' => $this->grupo_id,
            'cidade_id' => $this->cidade_id,
            'estado_id' => $this->estado_id,
            'nome' => $this->nome,
            'celular' => $this->celular,
            'telefone' => $this->telefone,
            'email' => $this->email,
            'endereco' => $this->endereco,
            'bairro' => $this->bairro,
            'cep' => $this->cep,
            'profissao' => $this->profissao,
            'aptidoes' => $this->aptidoes,
            'conversao' => $this->conversao,
            'obra' => $this->obra,
            'batismo' => $this->batismo,
            'esanto' => $this->esanto,
            'preso' => $this->preso,
            'parente' => $this->parente,
            'testemunho' => $this->testemunho,

        ]);

        session()->flash(
            'message',
            $this->pessoa_id ? 'Pessoa atualizada com sucesso.' : 'Pessoa criada com sucesso.'
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
        $pessoa = Pessoa::findOrFail($id);
        $this->pessoa_id = $id;
        $this->bloco_id = $pessoa->bloco_id;
        $this->regiao_id = $pessoa->regiao_id;
        $this->igreja_id = $pessoa->igreja_id;
        $this->categoria_id = $pessoa->categoria_id;
        $this->cargo_id = $pessoa->cargo_id;
        $this->grupo_id = $pessoa->grupo_id;
        $this->cidade_id = $pessoa->cidade;
        $this->estado_id = $pessoa->estado;
        $this->nome = $pessoa->nome;
        $this->celular = $pessoa->celular;
        $this->telefone = $pessoa->telefone;
        $this->email = $pessoa->email;
        $this->endereco = $pessoa->endereco;
        $this->bairro = $pessoa->bairro;
        $this->cep = $pessoa->cep;
        $this->profissao = $pessoa->profissao;
        $this->aptidoes = $pessoa->aptidoes;
        $this->conversao = $pessoa->conversao;
        $this->obra = $pessoa->obra;
        $this->batismo = $pessoa->batismo;
        $this->esanto = $pessoa->esanto;
        $this->preso = $pessoa->preso;
        $this->parente = $pessoa->parente;
        $this->testemunho = $pessoa->testemunho;

        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Pessoa::find($id)->delete();
        session()->flash('message', 'Pessoa deletada com sucesso.');
    }
}
