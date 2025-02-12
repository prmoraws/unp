<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>â€‹

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">

                        <div class="mb-4">
                            <div class="relative">
                                <label class="block text-gray-700 text-sm font-bold mb-2">BLOCO</label>
                                <select wire:change="FiterRegiaoByBlocoId" wire:model="bloco_id"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="">--selecione--</option>
                                    @foreach (\App\Models\Bloco::orderBy('nome')->get() as $bloco)
                                        <option value="{{ $bloco->id }}">{{ $bloco->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @if ($regiaos)
                            <div class="mb-4">
                                <div class="relative">
                                    <label class="block text-gray-700 text-sm font-bold mb-2">REGIÃO</label>
                                    <select wire:change="FiterIgrejaByBlocoId" wire:model="regiao_id"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                        <option value="">--selecione--</option>
                                        @foreach ($regiaos as $regiao)
                                            <option value="{{ $regiao->id }}">{{ $regiao->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @endif
                        @if ($igrejas)
                            <div class="mb-4">
                                <div class="relative">
                                    <label class="block text-gray-700 text-sm font-bold mb-2">IGREJA</label>
                                    <select wire:model="igreja_id"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                        <option value="">--selecione--</option>
                                        @foreach ($igrejas as $igreja)
                                            <option value="{{ $igreja->id }}">{{ $igreja->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @endif
                        <div class="mb-4">
                            <div class="relative">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Categoria</label>
                                <select wire:model="categoria_id"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="">--selecione--</option>
                                    @foreach (\App\Models\Categoria::all() as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="relative">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Cargo</label>
                                <select wire:model="cargo_id"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="">--selecione--</option>
                                    @foreach (\App\Models\Cargo::all() as $cargo)
                                        <option value="{{ $cargo->id }}">{{ $cargo->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="relative">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Grupo</label>
                                <select wire:model="grupo_id"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="">--selecione--</option>
                                    @foreach (\App\Models\Grupo::all() as $grupo)
                                        <option value="{{ $grupo->id }}">{{ $grupo->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- Nome -->
                        <div class="mb-4">
                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="nome" value="{{ __('Nome') }}" />
                                <x-input id="nome" type="text" class="capitalize mt-1 block w-full" wire:model="nome"
                                    required autocomplete="nome" placeholder="ex: João Batista" placeholder-gray-500
                                    placeholder:italic />
                                <x-input-error for="nome" class="mt-2" />
                            </div>
                        </div>
                        <div class="mb-4">
                            <!-- Celular -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="celular" value="{{ __('Celular') }}" />
                                <x-input id="celular" type="text" class="mt-1 block w-full" wire:model="celular"
                                    required autocomplete="celular" placeholder="ex: (71)9 9999-0000"
                                    placeholder-gray-500 />
                                <x-input-error for="celular" class="mt-2" />
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="email" value="{{ __('Email') }}" />
                                <x-input id="email" type="email" class="mt-1 block w-full" wire:model="email"
                                    required autocomplete="email" placeholder="ex: exemplo@exemplo.com"
                                    placeholder-gray-500 placeholder:italic />
                                <x-input-error for="email" class="mt-2" />
                            </div>
                        </div>
                        <div class="mb-4">
                            <!-- Endereço -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="endereco" value="{{ __('Endereço') }}" />
                                <x-input id="endereco" type="text" class="mt-1 block w-full" wire:model="endereco"
                                    required autocomplete="endereco" placeholder="ex: Av. ACM, 4197"
                                    placeholder-gray-500 />
                                <x-input-error for="endereco" class="mt-2" />
                            </div>
                        </div>
                        <div class="mb-4">
                            <!-- Bairro -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="bairro" value="{{ __('Bairro') }}" />
                                <x-input id="bairro" type="text" class="mt-1 block w-full" wire:model="bairro"
                                    required autocomplete="bairro" placeholder="ex: Pituba" placeholder-gray-500 />
                                <x-input-error for="bairro" class="mt-2" />
                            </div>
                        </div>
                        <div class="mb-4">
                            <!-- Cep -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="cep" value="{{ __('Cep') }}" />
                                <x-input id="cep" type="text" class="mt-1 block w-full" wire:model="cep"
                                    required autocomplete="cep" placeholder="ex: 40.000-000" placeholder-gray-500 />
                                <x-input-error for="cep" class="mt-2" />
                            </div>
                        </div>
                        <!-- Estado -->
                        <div class="mb-4">
                            <div class="relative">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Estado</label>
                                <select wire:change="FiterRegiaoByEstadoId" wire:model="estado_id"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="">--selecione--</option>
                                    @foreach (\App\Models\Estado::orderBy('nome')->get() as $estado)
                                        <option value="{{ $estado->id }}">{{ $estado->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @if ($cidades)
                            <div class="mb-4">
                                <div class="relative">
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Cidade</label>
                                    <select wire:model="cidade_id"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                        <option value="">--selecione--</option>
                                        @foreach ($cidades as $cidade)
                                            <option value="{{ $cidade->id }}">{{ $cidade->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @endif
                        <div class="mb-4">
                            <!-- Profissão -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="profissao" value="{{ __('Profissão') }}" />
                                <x-input id="profissao" type="text" class="mt-1 block w-full"
                                    wire:model="profissao" required autocomplete="profissao"
                                    placeholder="ex: Advogado" placeholder-gray-500 />
                                <x-input-error for="profissao" class="mt-2" />
                            </div>
                        </div>
                        <div class="mb-4">
                            <!-- Aptidões -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="aptidoes" value="{{ __('Aptidões') }}" />
                                <x-input id="aptidoes" type="text" class="mt-1 block w-full"
                                    wire:model="aptidoes" required autocomplete="aptidoes"
                                    placeholder="ex: elétrica, marcenaria, costura, etc." placeholder-gray-500 />
                                <x-input-error for="aptidoes" class="mt-2" />
                            </div>
                        </div>
                        <div class="mb-4">
                            <!-- Conversão -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="conversao" value="{{ __('Conversão') }}" />
                                <x-input id="conversao" type="date" class="mt-1 block w-full"
                                    wire:model="conversao" required autocomplete="conversao" />
                                <x-input-error for="conversao" class="mt-2" />
                            </div>
                        </div>
                        <div class="mb-4">
                            <!-- Obra -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="obra" value="{{ __('Obra') }}" />
                                <x-input id="obra" type="date" class="mt-1 block w-full" wire:model="obra"
                                    required autocomplete="obra" />
                                <x-input-error for="obra" class="mt-2" />
                            </div>
                        </div>
                        <div class="mb-4 border rounded-md border-gray-300">
                            <!-- Checkbox trabalho -->
                            <div class="col-span-6 sm:col-span-4 p-4">
                                <div class="flex items-center">
                                    <x-input wire:model="trabalho" value="interno" type="checkbox" />
                                    <x-label class="px-2" value="{{ __('Trabalho Interno (Credenciado)') }}" />
                                </div>
                                <br>
                                <div class="flex items-center">
                                    <x-input wire:model="trabalho" value="externo" type="checkbox" />
                                    <x-label class="px-2" value="{{ __('Trabalho Externo') }}" />
                                    <x-input-error for="trabalho" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 border rounded-md border-gray-300">
                            <!-- Checkbox batismo -->
                            <div class="col-span-6 sm:col-span-4 p-4">
                                <div class="flex items-center">
                                    <x-input wire:model="batismo" value="aguas" type="checkbox" />
                                    <x-label class="px-2" value="{{ __('Batizado nas Águas') }}" />
                                </div>
                                <br>
                                <div class="flex items-center">
                                    <x-input wire:model="batismo" value="espirito" type="checkbox" />
                                    <x-label class="px-2" value="{{ __('Batizado no Espírito Santo') }}" />
                                    <x-input-error for="batismo" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 border rounded-md border-gray-300">
                            <!-- Checkbox preso -->
                            <div class="col-span-6 sm:col-span-4 p-4">
                                <div class="flex items-center">
                                    <x-input wire:model="preso" value="japreso" type="checkbox" />
                                    <x-label class="px-2" value="{{ __('Já foi Preso') }}" />
                                </div>
                                <br>
                                <div class="flex items-center">
                                    <x-input wire:model="preso" value="temfamiliar" type="checkbox" />
                                    <x-label class="px-2" value="{{ __('Tem familiar Preso') }}" />
                                    <x-input-error for="preso" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Testemunho:</label>
                            <textarea
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput1" placeholder="ex: Era viciado, etc..." placeholder-gray-500 wire:model="testemunho"></textarea>
                            @error('testemunho')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <input type="file" wire:model="foto" class="">
                            <div>
                                @error('foto')
                                    <span class="text-sm text-red-500 italic">{{ $message }}</span>
                                @enderror
                            </div>
                            <div wire:loading wire:target="foto" class="text-sm text-gray-500 italic">Carregando...
                            </div>
                            @error('foto')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>


                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button"
                            class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Salvar
                        </button>
                    </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">

                        <button wire:click="closeModal()" type="button"
                            class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Cancelar
                        </button>
                    </span>
            </form>
        </div>

    </div>
</div>
</div>
