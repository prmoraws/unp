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
                                    @foreach (\App\Models\Bloco::all() as $bloco)
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
                                <x-input id="nome" type="text" class="mt-1 block w-full" wire:model="nome"
                                    required autocomplete="nome" />
                                <x-input-error for="nome" class="mt-2" />
                            </div>
                        </div>
                        <div class="mb-4">
                            <!-- Celular -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="celelular" value="{{ __('Celular') }}" />
                                <x-input id="celelular" type="text" class="mt-1 block w-full" wire:model="celular"
                                    required autocomplete="celular" />
                                <x-input-error for="celelular" class="mt-2" />
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="email" value="{{ __('Email') }}" />
                                <x-input id="email" type="email" class="mt-1 block w-full" wire:model="email"
                                    required autocomplete="email" />
                                <x-input-error for="email" class="mt-2" />
                            </div>
                        </div>
                        <div class="mb-4">
                            <!-- Endereço -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="endereco" value="{{ __('Endereço') }}" />
                                <x-input id="endereco" type="text" class="mt-1 block w-full" wire:model="endereco"
                                    required autocomplete="endereco" />
                                <x-input-error for="endereco" class="mt-2" />
                            </div>
                        </div>
                        <div class="mb-4">
                            <!-- Bairro -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="bairro" value="{{ __('Bairro') }}" />
                                <x-input id="bairro" type="text" class="mt-1 block w-full" wire:model="bairro"
                                    required autocomplete="bairro" />
                                <x-input-error for="bairro" class="mt-2" />
                            </div>
                        </div>
                        <div class="mb-4">
                            <!-- Cep -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="cep" value="{{ __('Cep') }}" />
                                <x-input id="cep" type="text" class="mt-1 block w-full" wire:model="cep"
                                    required autocomplete="cep" />
                                <x-input-error for="cep" class="mt-2" />
                            </div>
                        </div>
                        <!-- Estado -->
                        <div class="mb-4">
                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="cep" value="{{ __('Estado') }}" />
                                <select wire:model="estado"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
                                    @foreach (\App\Models\Estado::all() as $estado)
                                        <option value="{{ $estado->id }}">{{ $estado->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="relative">
                                <x-label for="cep" value="{{ __('Cidade') }}" />
                                <select wire:model="cidade"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="">--selecione--</option>
                                    @foreach (\App\Models\Cidade::where('estado_id', 29)->get() as $cidade)
                                        <option value="{{ $cidade->id }}">{{ $cidade->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <!-- Profissão -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="profissao" value="{{ __('Profissão') }}" />
                                <x-input id="profissao" type="text" class="mt-1 block w-full"
                                    wire:model="profissao" required autocomplete="profissao" />
                                <x-input-error for="profissao" class="mt-2" />
                            </div>
                        </div>
                        <div class="mb-4">
                            <!-- Aptidões -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="aptidoes" value="{{ __('Aptidões') }}" />
                                <x-input id="aptidoes" type="text" class="mt-1 block w-full"
                                    wire:model="aptidoes" required autocomplete="aptidoes" />
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
                        <div class="mb-4">
                            <div class="relative">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Trabalho:</label>
                                <select wire:model="trabalho"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="">--selecione--</option>
                                    <option value="">--selecione--</option>
                                    <option value="">--selecione--</option>

                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Sobre o batismo nas águas:</label>
                            <ul
                                class="shadow appearance-none  items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <li
                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input wire:model.live="batismo" id="horizontal-radio-batismo-license"
                                            type="radio" value=1 name="radio-batismo"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-radio-batismo-license"
                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Batizado
                                            nas águas </label>
                                    </div>
                                </li>
                                <li
                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input wire:model.live="batismo" id="horizontal-radio-batismo-id"
                                            type="radio" value=0 name="radio-batismo"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-radio-batismo-id"
                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Não
                                            foi batizado</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        @error('batismo')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror

                        <div class="mb-4">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Sobre
                                Espírito Santo:</label>
                            <ul
                                class="shadow appearance-none  items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <li
                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input wire:model.live="esanto" id="horizontal-radio-esanto-license"
                                            type="radio" value=1 name="radio-esanto"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-radio-esanto-license"
                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Batizado
                                            no Esírito Santo </label>
                                    </div>
                                </li>
                                <li
                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input wire:model.live="esanto" id="horizontal-radio-esanto-id"
                                            type="radio" value=0 name="radio-esanto"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-radio-esanto-id"
                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Não
                                            foi batizado</label>
                                    </div>
                                </li>
                            </ul>
                            @error('esanto')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Sobre antecedentes
                                criminais:</label>
                            <ul
                                class="shadow appearance-none  items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <li
                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input wire:model.live="preso" id="horizontal-radio-preso-license"
                                            type="radio" value=1 name="radio-preso"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-radio-preso-license"
                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Foi
                                            preso </label>
                                    </div>
                                </li>
                                <li
                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input wire:model.live="preso" id="horizontal-radio-preso-id" type="radio"
                                            value=0 name="radio-preso"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-radio-preso-id"
                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nunca
                                            foi preso</label>
                                    </div>
                                </li>
                            </ul>
                            @error('preso')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Sobre parentes:</label>
                            <ul
                                class="shadow appearance-none  items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <li
                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input wire:model.live="parente" id="horizontal-radio-parente-license"
                                            type="radio" value=1 name="radio-parente"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-radio-parente-license"
                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tem
                                            parente preso </label>
                                    </div>
                                </li>
                                <li
                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input wire:model.live="parente" id="horizontal-radio-parente-id"
                                            type="radio" value=0 name="radio-parente"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-radio-parente-id"
                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Não
                                            tem</label>
                                    </div>
                                </li>
                            </ul>
                            @error('parente')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Testemunho:</label>
                            <textarea
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput1" placeholder="Entre com testemunho" wire:model="testemunho"></textarea>
                            @error('testemunho')
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
