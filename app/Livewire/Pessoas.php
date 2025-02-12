<?php

namespace App\Livewire;

use App\Models\Cidade;
use App\Models\Igreja;
use App\Models\Pessoa;
use App\Models\Regiao;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Laravel\Jetstream\Features;
use Livewire\Component;
use Livewire\WithFileUploads;

class Pessoas extends Component
{
    use WithFileUploads;

    public $pessoas, $pessoa, $foto, $nome, $celular, $telefone, $email, $endereco, $bairro, $cep, $cidade_id, $estado_id, $profissao, $aptidoes, $conversao, $obra, $esanto, $parente, $testemunho, $pessoa_id, $bloco_id, $regiao_id, $igreja_id, $categoria_id, $cargo_id, $grupo_id;
    public $isOpen = 0;
    public $regiaos = null;
    public $igrejas = null;
    public $cidades = null;
    public $trabalho = [];
    public $batismo = [];
    public $preso = [];

    public function FiterRegiaoByBlocoId() //Filtro para o select região
    {
        $this->regiaos = Regiao::where('bloco_id', $this->bloco_id)
            ->get();
    }

    public function FiterIgrejaByBlocoId() //Filtro para o select igreja
    {
        $this->igrejas = Igreja::where('regiao_id', $this->regiao_id)
            ->get();
    }

    public function FiterRegiaoByEstadoId() //Filtro para o select Cidade
    {
        $this->cidades = Cidade::where('estado_id', $this->estado_id)
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
        //dd($this->cidade_id);
        $this->validate([
            'nome' => 'required|string|min:3|max:250',
            'celular' => 'required',
            'email' => 'email',
            'endereco' => 'required',
            'bairro' => 'required',
            'profissao' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $foto_nome = md5($this->foto . microtime()) . '.' . $this->foto->extension();
        $this->foto->storeAs('public', $foto_nome);
        Pessoa::updateOrCreate(['id' => $this->pessoa_id], [
            'bloco_id' => $this->bloco_id,
            'regiao_id' => $this->regiao_id,
            'igreja_id' => $this->igreja_id,
            'categoria_id' => $this->categoria_id,
            'cargo_id' => $this->cargo_id,
            'grupo_id' => $this->grupo_id,
            'cidade_id' => $this->cidade_id,
            'estado_id' => $this->estado_id,
            'foto' => $foto_nome,
            'nome' => $this->nome,
            'celular' => $this->celular,
            'telefone' => $this->telefone,
            'email' => $this->email,
            'endereco' => $this->endereco,
            'bairro' => $this->bairro,
            'cep' => $this->cep,
            'profissao' => $this->profissao,
            'aptidoes' => $this->aptidoes,
            'conversao' =>  empty($this->conversao) ? null : Carbon::parse($this->conversao),
            'obra' => empty($this->obra) ? null : Carbon::parse($this->obra),
            'trabalho' => json_encode($this->trabalho), //checkbox agrupado precisa de encode para bd
            'batismo' => json_encode($this->batismo),
            'preso' => json_encode($this->preso),
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
        $this->cidade_id = $pessoa->cidade_id;
        $this->estado_id = $pessoa->estado_id;
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
        $this->trabalho = json_decode($pessoa->trabalho);  //checkbox agrupado precisa de encode para bd
        $this->batismo = json_decode($pessoa->batismo);
        $this->preso = json_decode($pessoa->preso);
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
