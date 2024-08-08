<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\CepServices;

class AddressController extends Controller
{

    public function __construct(
        protected CepServices $cepService
    )
    {
    }

    public function address(Request $request): JsonResponse
    {
        $cep = $request->input('cep');
        $address = $this->cepService->getAddressByCep($cep);
        return response()->json($address);
    }
}
