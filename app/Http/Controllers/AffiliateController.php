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
        $validate = \request()->validate([
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
        ]);

        Affiliate::query()->create($validate);

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
            'name' => 'string|max:255',
            'cpf' => 'string|max:255',
            'status' => 'string',
        ]);

        $affiliated->update($validated);
        return redirect(route('affiliated.index'));
    }
}
