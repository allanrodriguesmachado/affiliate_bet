@props ([
    'route',
    'name',
    'cpf'
    ])

<div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg mb-6">
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <div class="border-b border-gray-900/10 pb-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{$route}}"
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