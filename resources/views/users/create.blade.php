<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="card">
                            <x-btn.back name="Voltar" :route="route('user.index')" />

                            <div class="card-body">
                                <form action="{{route('user.store')}}" method="post">
                                    @csrf
                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                        <div>
                                            <label for="name"
                                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome
                                                Completo</label>
                                            <input type="text" name="name" value="{{old('name')}}" id="name" autofocus
                                                   class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   placeholder="Nome Completo" required/>
                                            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                                        </div>
                                        <div>
                                            <label for="email"
                                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                            <input type="email" name="email" value="{{old('email')}}" id="email"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   placeholder="Email" required/>
                                            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                                        </div>
                                        <div>
                                            <label for="password"
                                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Senha</label>
                                            <input type="password" name="password" id="password"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   placeholder="Senha" required/>
                                            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                                        </div>

                                        <div>
                                            <label for="password_confirmation"
                                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Senha</label>
                                            <input type="password" name="password_confirmation"
                                                   id="password_confirmation"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   placeholder="Senha" required/>
                                            <x-input-error :messages="$errors->get('password_confirmation')"
                                                           class="mt-2"/>
                                        </div>
                                    </div>

                                    <div class="flex justify-end items-center">
                                        <button type="submit"
                                                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                            Cadastrar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

