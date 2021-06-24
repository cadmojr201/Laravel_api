<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Linguagens;

class LinguagensController extends Controller
{

    public function index()
    {
        return Linguagens::all();
    }

    public function store(Request $request)
    {
        Linguagens::create($request->all());
    }

    public function show($id)
    {
        return Linguagens::findorfail($id);
    }

    public function update(Request $request, $id)
    {
        $linguagem = Linguagens::findorfail($id);
        $linguagem->update($request->all());
    }

    public function destroy($id)
    {
        $linguagem = Linguagens::findorfail($id);
        $linguagem->delete();
    }
}
