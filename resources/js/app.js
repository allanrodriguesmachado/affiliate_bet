import './bootstrap';

import Alpine from 'alpinejs';

import 'flowbite';
import * as simpleDatatables from "simple-datatables";

window.Alpine = Alpine;

Alpine.start();


var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function() {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

        // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }

});



if (document.getElementById("default-table") && typeof simpleDatatables.DataTable !== 'undefined') {
    const dataTable = new simpleDatatables.DataTable("#default-table", {
        searchable: false,
        perPageSelect: false
    });
}



// URL da API via CEP
const viacepApiUrl = 'https://viacep.com.br/ws/';

let debounceTimeout;
const debounceDelay = 500; // Atraso de 500ms

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
});



