<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-btn.back name="Voltar" :route="route('affiliated.index')"/>
            <x-btn.back name="Comissão" :route="route('affiliated.index')"/>

            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('affiliated.update', ['affiliated' => $affiliated->id])}}"
                                      method="post">
                                    @csrf
                                    @method('put')

                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                        <div>
                                            <label for="name"
                                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome
                                                Completo</label>
                                            <input value="{{ old('name') ?? $affiliated->name}}" type="text" name="name"
                                                   id="name" autofocus
                                                   class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   placeholder="Nome Completo" required/>
                                        </div>

                                        <div>
                                            <label for="name"
                                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CPF</label>
                                            <input value="{{ old('cpf') ?? $affiliated->cpf}}" type="text" name="cpf"
                                                   id="cpf" autofocus
                                                   class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   placeholder="CPF" required/>
                                        </div>

                                        <div>
                                            <label class="inline-flex items-center cursor-pointer">
                                                <span class="mr-3 text-sm font-medium text-gray-900 dark:text-gray-300">Desativar Afiliado</span>

                                                <input
                                                        type="checkbox"
                                                        name="status"
                                                        id="status"
                                                        value="inactive"
                                                        class="sr-only peer"
                                                        {{ old('status', $affiliated->status) ? 'unchecked' : '' }}
                                                        {{ !$affiliated->status ? 'checked' : '' }}>
                                                <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                            </label>
                                        </div>
                                    </div>

                                    <button type="submit"
                                            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                        Salvar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>