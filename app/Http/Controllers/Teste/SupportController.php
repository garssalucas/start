<?php

namespace App\Http\Controllers\Teste;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        $supports = $support->all();
        return view('Teste.Supports.index', compact('supports'));
    }
}
