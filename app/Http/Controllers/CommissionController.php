<?php

namespace App\Http\Controllers;

use App\Models\Commission;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CommissionController extends Controller
{
    public function index(): View
    {
        return view('commission.index');
    }

    public function create()
    {
        return view('commission.create');
    }

    public function store(Request $request)
    {$request->validate([
            'affiliate_id' => 'required|exists:affiliates,id',
            'amount' => 'required'
        ]);

        $commission = new Commission();
        dd($commission);
        $commission->affiliate_id = $request->input('affiliate_id');
        $commission->amount = $request->input('amount');
        $commission->save();

        return response()->json(['message' => 'Comissão salva com sucesso!']);
    }
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}

