<?php

namespace App\Http\Controllers\Teste;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupport;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        $supports = $support->all();
        return view('Teste.Supports.index', compact('supports'));
    }

    public function create()
    {
        return view('Teste.Supports.create');
    }

    public function store(StoreUpdateSupport $request, Support $support)
    {
        $data = $request->validated();
        $data['status'] = 'a';

        $support->create($data);

        return redirect()->route('supports.index');
    }

    public function show(string|int $id)
    {
        if(!$support = Support::find($id)){
            return back();
        }

        return view('Teste.Supports.show', compact('support'));
    }

    public function edit(Support $support, string|int $id)
    {
        if(!$support = Support::find($id)){
            return back();
        }

        return view('Teste.Supports.edit', compact('support'));
    }

    public function update(StoreUpdateSupport $request, Support $support, int $id)
    {
        if(!$support = $support->find($id)){
            return back();
        }

        $support->update($request->validated());

        return redirect()->route('supports.index');
    }

    public function delete(Request $request, Support $support, int $id)
    {
        if(!$support = $support->find($id)){
            return back();
        }

        $support->delete();

        return redirect()->route('supports.index');
    }


}
