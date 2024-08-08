<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CepServices
{
    public function getAddressByCep($cep)
    {
        $cep = preg_replace('/\D/', '', $cep);

        if (strlen($cep) != 8) {
            return ['error' => 'CEP inválido'];
        }

        $response = Http::get("https://viacep.com.br/ws/{$cep}/json/");

        if ($response->successful()) {
            return $response->json();
        } else {
            return ['error' => 'Não foi possível encontrar o endereço'];
        }
    }
}
