@php use Carbon\Carbon as CarbonAlias; @endphp
<x-app-layout>
    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8 rounded p-2">

            <x-btn.register name="Cadastrar" :route="route('affiliated.create')"/>

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
                                            CPF
                                        </span>
                                    </th>

                                    <th>
                                        <span class="flex items-center">
                                            Aniversario
                                        </span>
                                    </th>

                                    <th>
                                        <span class="flex items-center">
                                            E-amil
                                        </span>
                                    </th>

                                    <th>
                                        <span class="flex items-center">
                                            Contato
                                        </span>
                                    </th>

                                    <th>
                                        <span class="flex items-center">
                                            Rua
                                        </span>
                                    </th>

                                    <th>
                                        <span class="flex items-center">
                                            N
                                        </span>
                                    </th>

                                    <th>
                                        <span class="flex items-center">
                                            Bairro
                                        </span>
                                    </th>

                                    <th>
                                        <span class="flex items-center">
                                            Cidade
                                        </span>
                                    </th>

                                    <th>
                                        <span class="flex items-center">
                                            UF
                                        </span>
                                    </th>


                                    <th>
                                        <span class="flex items-end">

                                        </span>
                                    </th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($affiliates as $affiliate)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">
                                            {{$affiliate->name}}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">
                                            {{$affiliate->cpf}}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">
                                            {{CarbonAlias::parse($affiliate->birth_date)->format('d/m/Y')}}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">
                                            {{$affiliate->email}}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">
                                            {{$affiliate->phone}}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">
                                            {{$affiliate->address}}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">
                                            {{$affiliate->number}}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">
                                            {{$affiliate->neighborhood}}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">
                                            {{$affiliate->city ?? ' ' }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">
                                            {{ $affiliate->state !== 'null' ? $affiliate->state : '' }}
                                        </td>

                                        <td class="flex justify-end items-center">
                                            <form action="{{ route('affiliated.edit', $affiliate->id) }}" method="GET"
                                                  class="inline-block mr-2">
                                                @csrf
                                                <button type="submit"
                                                        class="px-3 py-2 text-sm font-medium text-center inline-flex items-center text-white bg-purple-700 rounded-lg hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">
                                                    Editar
                                                </button>
                                            </form>

                                            <form action="{{ route('commission.index') }}" method="GET"
                                                  class="inline-block">
                                                @csrf
                                                <input type="hidden" name="affiliated_id" value="{{ $affiliate->id }}">
                                                <button type="submit"
                                                        class="px-3 py-2 text-sm font-medium text-center inline-flex items-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                                    Comissão
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




