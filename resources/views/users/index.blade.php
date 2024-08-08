<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-btn.register name="Cadastrar" :route="route('user.create')" />

{{--            <div class="mb-2 flex justify-end items-center">--}}
{{--                <a href="{{route('user.create')}}"--}}
{{--                   class="inline-flex justify-center items-center py-2 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">--}}
{{--                    Cadastrar--}}
{{--                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"--}}
{{--                         fill="none" viewBox="0 0 14 10">--}}
{{--                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                              d="M1 5h12m0 0L9 1m4 4L9 9"/>--}}
{{--                    </svg>--}}
{{--                </a>--}}
{{--            </div>--}}

            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="overflow-x-auto">
                            <table id="default-table">
                                <thead>
                                <tr>
                                    <th>
                                        <span class="flex items-center">
                                            Nome
                                        </span>
                                    </th>

                                    <th>
                                        <span class="flex items-center">
                                            Email
                                        </span>
                                    </th>

                                    <th>
                                        <span class="flex items-end">
                                            Ações
                                        </span>
                                    </th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($users as $user)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">
                                            {{$user->name}}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">
                                            {{$user->email}}
                                        </td>

                                        <td class="flex justify-end items-center">
                                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="mr-2 font-bold text-red-700 hover:text-red-600 dark:text-red-700 dark:hover:text-red-600">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 13L12.94 1M13 13L1.05998 1.00001" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                    </svg>

                                                </button>
                                            </form>

                                            <form action="{{ route('user.edit', $user->id) }}" method="GET"
                                                  class="inline-block">
                                                @csrf
                                                <button type="submit"
                                                        class="font-bold text-blue-700 hover:text-blue-600 dark:text-blue-700 dark:hover:text-blue-600">
                                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.77885 15.779L1.36085 17.918L3.49985 11.5M7.77885 15.779L16.1428 7.13599C16.7099 6.56839 17.0285 5.79885 17.0285 4.99649C17.0285 4.19413 16.7099 3.42459 16.1428 2.85699C15.5752 2.28987 14.8057 1.97131 14.0033 1.97131C13.201 1.97131 12.4314 2.28987 11.8638 2.85699L3.49985 11.5M7.77885 15.779L3.49985 11.5M5.63885 13.64L11.8516 7.13599M9.75094 5.04036L13.9998 9.27899" />
                                                    </svg>

                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
