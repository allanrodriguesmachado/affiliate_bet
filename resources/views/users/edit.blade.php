<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-btn.back name="Voltar" :route="route('user.index')" />

            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="card">
                            <div class="card-body">
                                @if($errors)
                                    @foreach($errors->all() as $error)
                                        <div class="alert text-red-700 alert-danger mt-4" role="alert">
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                @endif

                                <form action="{{route('user.update', ['user' => $user->id])}}" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                        <div>
                                            <label for="name"
                                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome
                                                Completo</label>
                                            <input value="{{ old('name') ?? $user->name}}" type="text" name="name"
                                                   id="name" autofocus
                                                   class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   placeholder="Nome Completo" required/>
                                        </div>
                                        <div>
                                            <label for="email"
                                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                            <input value="{{ old('email') ?? $user->email}}" type="email" name="email"
                                                   id="email"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   placeholder="Email" required/>
                                        </div>

                                        <div>
                                            <label class="inline-flex items-center cursor-pointer">
                                                <span class="mr-3 text-sm font-medium text-gray-900 dark:text-gray-300">Desativar Usuario</span>

                                                <input
                                                        type="checkbox"
                                                        name="status"
                                                        id="status"
                                                        value="true"
                                                        class="sr-only peer"
                                                        {{ old('status', $user->status) ? 'unchecked' : '' }}
                                                        {{ !$user->status ? 'checked' : '' }}>
                                                <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="flex justify-end items-center">
                                        <button type="submit"
                                                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                            Salvar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="card">
                            <div class="card-body">
                                @if($errors)
                                    @foreach($errors->all() as $error)
                                        <div class="alert text-red-700 alert-danger mt-4" role="alert">
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                @endif

                                <section>
                                    <header>
                                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                            {{ __('Update Password') }}
                                        </h2>

                                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                            {{ __('Ensure your account is using a long, random password to stay secure.') }}
                                        </p>
                                    </header>

                                    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                                        @csrf
                                        @method('put')

                                        <div>
                                            <x-input-label for="update_password_current_password"
                                                           :value="__('Current Password')"/>
                                            <x-text-input id="update_password_current_password" name="current_password"
                                                          type="password" class="mt-1 block w-full"
                                                          autocomplete="current-password"/>
                                            <x-input-error :messages="$errors->updatePassword->get('current_password')"
                                                           class="mt-2"/>
                                        </div>

                                        <div>
                                            <x-input-label for="update_password_password" :value="__('New Password')"/>
                                            <x-text-input id="update_password_password" name="password" type="password"
                                                          class="mt-1 block w-full" autocomplete="new-password"/>
                                            <x-input-error :messages="$errors->updatePassword->get('password')"
                                                           class="mt-2"/>
                                        </div>

                                        <div>
                                            <x-input-label for="update_password_password_confirmation"
                                                           :value="__('Confirm Password')"/>
                                            <x-text-input id="update_password_password_confirmation"
                                                          name="password_confirmation" type="password"
                                                          class="mt-1 block w-full" autocomplete="new-password"/>
                                            <x-input-error
                                                    :messages="$errors->updatePassword->get('password_confirmation')"
                                                    class="mt-2"/>
                                        </div>

                                        <div class="flex items-center gap-4">
                                            <x-primary-button>{{ __('Alterar') }}</x-primary-button>

                                            {{--                                                @if (session('status') === 'password-updated')--}}
                                            {{--                                                    <p--}}
                                            {{--                                                            x-data="{ show: true }"--}}
                                            {{--                                                            x-show="show"--}}
                                            {{--                                                            x-transition--}}
                                            {{--                                                            x-init="setTimeout(() => show = false, 2000)"--}}
                                            {{--                                                            class="text-sm text-gray-600 dark:text-gray-400"--}}
                                            {{--                                                    >{{ __('Saved.') }}</p>--}}
                                            {{--                                                @endif--}}
                                        </div>
                                    </form>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>




