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

    public function create(): View
    {
        return view('affiliated.create');
    }

    public function store(): RedirectResponse
    {
        $validate = \request()->validate([
            'name' => 'string',
            'cpf' => 'string|unique:affiliates',
            'birth_date' => 'string',
            'email' => 'string|unique:affiliates',
            'phone' => 'string',
            'cep' => 'string',
            'number' => 'string',
            'address' => 'string',
            'neighborhood' => 'string',
            'city' => 'string',
            'state' => 'string',
        ]);

        Affiliate::query()->create($validate);

        return to_route('affiliated.index');
    }

    public function edit(Affiliate $affiliated): View
    {
        return view('affiliated.edit', [
            'affiliated' => $affiliated
        ]);
    }

    public function update(Affiliate $affiliated, Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'string',
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
            'status' => 'string'
        ]);

        $affiliated->update($validated);
        return redirect(route('affiliated.index'));
    }
}
