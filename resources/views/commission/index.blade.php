<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-btn.back name="Voltar" :route="route('affiliated.index')" />

            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-btn.register name="Cadastrar" :route="route('commission.create', ['affiliateId' => $affiliate->id])" />

                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="overflow-x-auto">
                            <h1>Comissões: <span class="font-bold">{{ $affiliate->name }}</span></h1>
                            <table id="default-table" >
                                <thead>
                                <tr>
                                    <th class=" text-center">
                                        <span class="flex items-center text-center">
                                            Comissão
                                        </span>
                                    </th>

                                    <th class=" text-center">
                                        <span class="flex items-center text-center">

                                        </span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($commissions as $commission)

                                    @php
                                        $amountString = trim($commission->amount);

                                        $sign = '';
                                        if (strpos($amountString, '+') === 0) {
                                            $sign = '+';
                                            $amountString = substr($amountString, 1);
                                        }
                                        if (strpos($amountString, '-') === 0) {
                                            $sign = '-';
                                            $amountString = substr($amountString, 1);
                                        }

                                        $amount = floatval(trim($amountString));

                                        $formattedAmount = number_format($amount, 2, ',', '.');

                                        $displayAmount = 'R$ ' . $sign . ' ' . $formattedAmount;
                                    @endphp

                                    <td class="text-center text-sm font-medium text-gray-900 dark:text-gray-100">
                                        {{ $displayAmount }}
                                    </td>


                                    <td class="flex justify-center items-center">
                                            <form action="{{ route('commission.destroy', $commission->id) }}" method="POST"
                                                  class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="px-3 py-2 text-sm font-medium text-center inline-flex items-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                                    Excluir
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
