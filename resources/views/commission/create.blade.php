

<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-btn.back name="Voltar" :route="route('affiliated.index')" />

            <form method="post" action="{{ route('commission.store') }}">
                @csrf

                <input type="hidden" name="affiliated_id" value="{{ $affiliateId }}">

                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>

                        <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Valor</label>
                        <input type="text" name="amount" id="amount"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="João"  />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div>
                        <label for="commission_created_at" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data de Nascimento</label>
                        <input type="date" name="commission_created_at" id="commission_created_at"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="YYYY-MM-DD" required />
                    </div>
                </div>

                <div class="flex justify-end items-center">
                    <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Criar Comissão
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>



