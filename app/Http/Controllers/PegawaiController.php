<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $data = Pegawai::all();
        return view('pegawai.index', compact('data'));
    }

    public function create()
    {
        return View('pegawai.create');
    }

    public function store(Request $request)
    {
        Pegawai::create($request->all());
        return redirect('/pegawai');
    }

    public function edit($id)
    {
        $data = Pegawai::find($id);
        return view('pegawai.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Pegawai::find($id);
        $data->update($request->all());
        return Redirect('/pegawai');
    }

    public function destroy($id)
    {
        $data = Pegawai::find($id);
        $data->delete();
        return Redirect('/pegawai');
    }
}
