@section('title', 'Pessoas')

<x-slot name="header">
    <h2 class="capitalize font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ Request::path() }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                    role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif

            <button wire:click="create()"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Criar nova
                Pessoa</button>

            @if ($isOpen)
                @include('livewire.create-pessoas')
            @endif

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        {{-- <th class="px-4 py-2 w-20">ID.</th>
                        <th class="px-4 py-2 w-20">Bloco</th>
                        <th class="px-4 py-2 w-20">Região</th> --}}
                        {{-- <th class="px-4 py-2 w-20">Igreja</th> --}}
                        {{-- <th class="px-4 py-2 w-20">Categoria</th> --}}
                        {{-- <th class="px-4 py-2 w-20">Cargo</th> --}}
                        {{-- <th class="px-4 py-2 w-20">Grupo</th> --}}
                        <th class="px-4 py-2 w-20">Foto</th>
                        <th class="px-4 py-2">Nome</th>
                        {{-- <th class="px-4 py-2">Celular</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Endereço</th>
                        <th class="px-4 py-2">Bairro</th>
                        <th class="px-4 py-2">Cep</th>
                        <th class="px-4 py-2">Cidade</th>
                        <th class="px-4 py-2">Estado</th>
                        <th class="px-4 py-2">Profissão</th>
                        <th class="px-4 py-2">Aptidões</th>
                        <th class="px-4 py-2">Conversão</th>
                        <th class="px-4 py-2">Obra</th>
                        <th class="px-4 py-2">Batismo</th>
                        <th class="px-4 py-2">E.Santo</th>
                        <th class="px-4 py-2">Ex-Preso</th>
                        <th class="px-4 py-2">Familiar Preso</th>
                        <th class="px-4 py-2">Testemunho</th> --}}
                        <th class="px-4 py-2">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pessoas as $pessoa)
                        <tr>
                            {{-- <td class="border px-4 py-2">{{ $pessoa->id }}</td>
                            <td class="border px-4 py-2">{{ $pessoa->bloco_id }}</td>
                            <td class="border px-4 py-2">{{ $pessoa->regiao_id }}</td> --}}
                            {{-- <td class="border px-4 py-2">{{ $pessoa->igreja_id }}</td> --}}
                            {{-- <td class="border px-4 py-2">{{ $pessoa->categoria_id }}</td> --}}
                            {{-- <td class="border px-4 py-2">{{ $pessoa->cargo_id }}</td> --}}
                            {{-- <td class="border px-4 py-2">{{ $pessoa->grupo_id }}</td> --}}
                            <td class="border px-4 py-2"> <img src="{{ url('storage/' . $pessoa->foto) }}">
                            </td>
                            <td class="border px-4 py-2">{{ $pessoa->nome }}</td>
                            {{-- <td class="border px-4 py-2">{{ $pessoa->celular }}</td>
                            <td class="border px-4 py-2">{{ $pessoa->telefone }}</td>
                            <td class="border px-4 py-2">{{ $pessoa->email }}</td>
                            <td class="border px-4 py-2">{{ $pessoa->endereco }}</td>
                            <td class="border px-4 py-2">{{ $pessoa->bairro }}</td>
                            <td class="border px-4 py-2">{{ $pessoa->cep }}</td>
                            <td class="border px-4 py-2">{{ $pessoa->cidade }}</td>
                            <td class="border px-4 py-2">{{ $pessoa->estado }}</td>
                            <td class="border px-4 py-2">{{ $pessoa->profissao }}</td>
                            <td class="border px-4 py-2">{{ $pessoa->aptidoes }}</td>
                            <td class="border px-4 py-2">{{ $pessoa->conversao }}</td>
                            <td class="border px-4 py-2">{{ $pessoa->obra }}</td>
                            <td class="border px-4 py-2">{{ $pessoa->batismo }}</td>
                            <td class="border px-4 py-2">{{ $pessoa->esanto }}</td>
                            <td class="border px-4 py-2">{{ $pessoa->preso }}</td>
                            <td class="border px-4 py-2">{{ $pessoa->parente }}</td>
                            <td class="border px-4 py-2">{{ $pessoa->testemunho }}</td> --}}
                            <td class="border px-4 py-2">
                                <button wire:click="edit({{ $pessoa->id }})"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</button>
                                <button wire:click="delete({{ $pessoa->id }})"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Apagar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
