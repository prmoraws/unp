@section('title', 'Cargos')

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
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Criar novo
                cargo</button>

            @if ($isOpen)
                @include('livewire.create-cargos')
            @endif

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">No.</th>
                        <th class="px-4 py-2">Cargo</th>
                        <th class="px-4 py-2">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cargos as $cargo)
                        <tr>
                            <td class="border px-4 py-2">{{ $cargo->id }}</td>
                            <td class="border px-4 py-2">{{ $cargo->nome }}</td>
                            <td class="border px-4 py-2">
                                <button wire:click="edit({{ $cargo->id }})"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</button>
                                <button wire:click="delete({{ $cargo->id }})"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Apagar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
