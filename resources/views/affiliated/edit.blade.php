<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-btn.back name="Voltar" :route="route('affiliated.index')"/>


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
                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                                            <input type="text" name="name" id="name" value="{{ old('name') ?? $affiliated->name}}"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   placeholder="João"  />
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>


                                        <div>
                                            <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CPF</label>
                                            <input type="text" name="cpf" id="cpf" value="{{ old('cpf') ?? $affiliated->cpf}}"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   placeholder="123.456.789-00" required
                                                   oninput="formatCPF(this)" />
                                            <x-input-error :messages="$errors->get('cpf')" class="email-2"/>
                                        </div>

                                        <div>
                                            <label for="birth_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data de Nascimento</label>
                                            <input type="date" name="birth_date" id="birth_date" value="{{ old('birth_date') ?? $affiliated->birth_date}}"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   placeholder="YYYY-MM-DD" required />
                                        </div>

                                        <div>
                                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                            <input type="email" name="email" id="email" value="{{ old('email') ?? $affiliated->email}}"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   placeholder="exemplo@exemplo.com" required />
                                            <x-input-error :messages="$errors->get('email')" class="email-2"/>
                                        </div>

                                        <div>
                                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefone</label>
                                            <input type="text" name="phone" id="phone" value="{{ old('phone') ?? $affiliated->phone}}"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   placeholder="(12) 3456-7890" required />
                                        </div>

                                        <div>
                                            <label for="cep" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CEP</label>
                                            <input type="text" name="cep" id="cep" value="{{ old('cep') ?? $affiliated->cep}}"
                                                   inputmode="numeric"
                                                   pattern="\d{5}-\d{3}"
                                                   placeholder="00000-000"
                                                   title="Formato: 00000-000. Apenas números são permitidos."
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   required />
                                        </div>

                                        <div>
                                            <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Número</label>
                                            <input type="text" name="number" id="number" value="{{ old('number') ?? $affiliated->number}}"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   placeholder="123"  />
                                        </div>

                                        <div>
                                            <label for="complement" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Complemento</label>
                                            <input type="text" name="complement" id="complement" value="{{ old('complement') ?? $affiliated->complement}}"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   placeholder="Apto 301" />
                                        </div>

                                        <div>
                                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Endereço</label>
                                            <input type="text" name="address" id="address" value="{{ old('address') ?? $affiliated->address}}"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   placeholder="Rua Principal" required />
                                        </div>

                                        <div>
                                            <label for="neighborhood" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bairro</label>
                                            <input type="text" name="neighborhood" id="neighborhood" value="{{ old('neighborhood') ?? $affiliated->neighborhood}}"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   placeholder="Centro" required />
                                        </div>

                                        <div>
                                            <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cidade</label>
                                            <input type="text" name="city" id="city" value="{{ old('city') ?? $affiliated->city}}"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   placeholder="Cidade" required />
                                        </div>

                                        <div>
                                            <label for="state" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estado</label>
                                            <input type="text" name="state" id="state" value="{{ old('state') ?? $affiliated->state}}"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   placeholder="SP" required />
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

                                    <div class="flex justify-end items-center">
                                        <button type="submit"
                                                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                            {{ __('Alterar') }}
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


<script>
    const viacepApiUrl = 'https://viacep.com.br/ws/';

    let debounceTimeout;
    const debounceDelay = 500;

    function debounceFetchAddress() {
        clearTimeout(debounceTimeout);
        debounceTimeout = setTimeout(fetchAddress, debounceDelay);
    }

    async function fetchAddress() {
        const cep = document.getElementById('cep').value.replace(/\D/g, '');
        if (cep.length === 8) {
            try {
                const response = await fetch(`${viacepApiUrl}${cep}/json/`);
                if (!response.ok) throw new Error('Network response was not ok');

                const data = await response.json();

                if (data.erro) {
                    alert('CEP não encontrado');
                    document.getElementById('address').value = '';
                    document.getElementById('neighborhood').value = '';
                    document.getElementById('city').value = '';
                    document.getElementById('state').value = '';
                } else {
                    document.getElementById('address').value = data.logradouro || '';
                    document.getElementById('neighborhood').value = data.bairro || '';
                    document.getElementById('city').value = data.localidade || '';
                    document.getElementById('state').value = data.uf || '';
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Erro ao buscar o endereço');
            }
        } else {
            document.getElementById('address').value = '';
            document.getElementById('neighborhood').value = '';
            document.getElementById('city').value = '';
            document.getElementById('state').value = '';
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const cepInput = document.getElementById('cep');
        if (cepInput) {
            cepInput.addEventListener('input', debounceFetchAddress);
        }
    })

    document.getElementById('cep').addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length > 5) {
            value = value.slice(0, 5) + '-' + value.slice(5, 8);
        }
        e.target.value = value;
    });

    function formatCPF(value) {
        value = value.replace(/\D/g, '');
        if (value.length > 11) {
            value = value.slice(0, 11);
        }
        if (value.length > 9) {
            value = value.replace(/(\d{3})(\d{3})(\d{3})(\d{1,2})/, '$1.$2.$3-$4');
        } else if (value.length > 6) {
            value = value.replace(/(\d{3})(\d{3})(\d{1,3})/, '$1.$2.$3');
        } else if (value.length > 3) {
            value = value.replace(/(\d{3})(\d{1,3})/, '$1.$2');
        }
        return value;
    }

    document.getElementById('cpf').addEventListener('input', function(e) {
        let value = e.target.value;
        e.target.value = formatCPF(value);
    });

    function validateCPF(cpf) {
        cpf = cpf.replace(/\D/g, '');

        if (cpf.length !== 11 || /^(\d)\1+$/.test(cpf)) {
            return false;
        }

        let sum = 0;
        let remainder;

        for (let i = 1; i <= 9; i++) {
            sum += parseInt(cpf.charAt(i - 1)) * (11 - i);
        }
        remainder = (sum * 10) % 11;
        remainder = remainder === 10 || remainder === 11 ? 0 : remainder;

        if (remainder !== parseInt(cpf.charAt(9))) {
            return false;
        }

        sum = 0;
        for (let i = 1; i <= 10; i++) {
            sum += parseInt(cpf.charAt(i - 1)) * (12 - i);
        }
        remainder = (sum * 10) % 11;
        remainder = remainder === 10 || remainder === 11 ? 0 : remainder;

        return remainder === parseInt(cpf.charAt(10));
    }

    document.querySelector('form').addEventListener('submit', function (event) {
        const cpfInput = document.getElementById('cpf');
        if (!validateCPF(cpfInput.value)) {
            event.preventDefault();
            alert('CPF inválido');
        }
    });
</script>