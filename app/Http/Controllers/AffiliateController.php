<?php

namespace App\Http\Controllers;

use App\Models\affiliate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AffiliateController extends Controller
{
    public function index(): View
    {
        $affiliates = Affiliate::query()->where('status', 'active')->get();

        return view('affiliated.index', [
            'affiliates' =>  $affiliates
        ]);
    }

    public function create()
    {
        return view('affiliated.create');
    }

    public function store()
    {
//        $affiliated = request()->validate([
//            'name' => 'required|string|max:255',
//            'cpf' => 'required|string',
//            'birth_date' => 'required|date_format:Y-m-d',
//            'email' => 'required|email|max:255',
//            'phone' => 'required|string|max:20',
//            'address' => 'required|string|max:255',
//            'number' => 'required|string|max:10',
//            'complement' => 'nullable|string|max:255',
//            'neighborhood' => 'required|string|max:100',
//            'state' => 'required|string|max:2',
//            'status' => 'required|in:active,inactive'
//        ]);

        $teste = \request()->validate([
            'name' => 'required|string|max:255',
            'cpf' => 'string',
            'birth_date' => 'string',
            'email' => 'string',
            'phone' => 'string',
            'cep' => 'string',
            'number' => 'string',
            'address' => 'string',
            'neighborhood' => 'string',
            'city' => 'string',
            'state' => 'string',
        ]);

        Affiliate::query()->create($teste);

        return to_route('affiliated.index');
    }

    public function edit(Affiliate $affiliated)
    {
        return view('affiliated.edit', [
            'affiliated' => $affiliated
        ]);
    }

    public function update(Affiliate $affiliated, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'cpf' => 'required|string|max:255',
            'status' => 'required|string',
        ]);

        $affiliated->update($validated);
        return redirect(route('affiliated.index'));
    }
}
