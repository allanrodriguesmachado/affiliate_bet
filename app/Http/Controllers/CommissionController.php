<?php

namespace App\Http\Controllers;

use App\Models\{Affiliate, Commission};
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CommissionController extends Controller
{
    public function index(Request $request): View
    {
        $request->validate([
            'affiliated_id' => 'required|exists:affiliates,id',
        ]);

        $affiliatedId = $request->input('affiliated_id');

        $affiliate = Affiliate::findOrFail($affiliatedId);

        $commissions = Commission::where('affiliated_id', $affiliatedId)->get();

        return view('commission.index', compact('commissions', 'affiliate'));
    }

    public function create($affiliateId): View
    {
        return view('commission.create', ['affiliateId' => $affiliateId]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'affiliated_id' => 'required|exists:affiliates,id',
            'amount' => 'required|numeric|min:0',
            'commission_created_at' => 'required|date',
        ]);

        Commission::create([
            'affiliated_id' => $request->input('affiliated_id'),
            'amount' => $request->input('amount'),
            'commission_created_at' => $request->input('commission_created_at'),
        ]);

        return to_route('commission.index');
    }

    public function destroy(string $id): RedirectResponse
    {
        $user = Commission::query()->where('id', $id);
        $user->delete();

        return to_route('commission.index');
    }
}

