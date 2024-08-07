{{--<x-app-layout>--}}
{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg mb-6">--}}
{{--                <div class="p-6 text-gray-900 dark:text-gray-100">--}}
{{--                    <div class="border-b border-gray-900/10 pb-12">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-header mb-7">--}}
{{--                                <div class="ms-2 flex justify-start items-center">--}}
{{--                                    <a href="{{route('user.index')}}"--}}
{{--                                       class="inline-flex justify-center items-center py-1 px-3 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">--}}
{{--                                        Voltar--}}
{{--                                        <svg width="15" height="9" class="m-2" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path d="M1 5H15M1 5L5 1M1 5L5 9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                        </svg>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>                            <div class="card-body">--}}
{{--                                @if($errors)--}}
{{--                                    @foreach($errors->all() as $error)--}}
{{--                                        <div class="alert text-red-700 alert-danger mt-4" role="alert">--}}
{{--                                            {{ $error }}--}}
{{--                                        </div>--}}
{{--                                    @endforeach--}}
{{--                                @endif--}}

{{--                                <form action="{{route('user.store')}}" method="post">--}}
{{--                                    @csrf--}}
{{--                                    <div class="grid gap-6 mb-6 md:grid-cols-2">--}}
{{--                                        <div>--}}
{{--                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome Completo</label>--}}
{{--                                            <input type="text" name="name" id="name" autofocus class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nome Completo" required />--}}
{{--                                        </div>--}}
{{--                                        <div>--}}
{{--                                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>--}}
{{--                                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" required />--}}
{{--                                        </div>--}}
{{--                                        <div>--}}
{{--                                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Senha</label>--}}
{{--                                            <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Senha" required />--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="flex justify-end items-center">--}}
{{--                                        <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Cadastrar</button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}



<x-guest-layout>
    <form method="POST" action="{{ route('user.store') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>