<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-btn.register name="Cadastrar" :route="route('user.create')"/>

            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="overflow-x-auto">
                            <table id="default-table" >
                                <thead>
                                <tr>
                                    <th class=" text-center">
                                        <span class="flex items-center text-center">
                                            Nome
                                        </span>
                                    </th>

                                    <th class=" text-center">
                                        <span class="flex items-center">
                                            Email
                                        </span>
                                    </th>

                                    <th class=" text-center">
                                        <span class="flex items-end">
                                            Ações
                                        </span>
                                    </th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($users as $user)
                                    <tr>
                                        <td class=" text-center text-sm font-medium text-gray-900 dark:text-gray-100">
                                            {{$user->name}}
                                        </td>

                                        <td class=" text-center text-sm font-medium text-gray-900 dark:text-gray-100">
                                            {{$user->email}}
                                        </td>

                                        <td class="flex justify-center items-center">
                                            <form action="{{ route('user.edit', $user->id) }}" method="GET"
                                                  class="inline-block">
                                                @csrf
                                                <button type="submit" class="px-3 py-2 text-sm font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    Editar
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
