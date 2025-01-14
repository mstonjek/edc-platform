<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kit;

class KitController extends Controller
{
    public function index()
    {
        $kits = Kit::all();
        return view('kits.index', compact('kits'));
    }

    public function create()
    {
        return view('kits.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_public' => 'required|boolean',
        ]);

        $kit = new Kit($request->all());
        $kit->user_id = auth()->id();
        $kit->save();

        return redirect()->route('kits.index');
    }

    public function edit(Kit $kit)
    {
        return view('kits.edit', compact('kit'));
    }

    public function update(Request $request, Kit $kit)
    {
        $request->validate(['name' => 'required|string|max:255', 'description' => 'nullable|string', 'is_public' => 'required|boolean',]);
        $kit->update($request->all());
        return redirect()->route('kits.index');
    }

    public function destroy(Kit $kit)
    {
        $kit->delete();
        return redirect()->route('kits.index');
    }
}
