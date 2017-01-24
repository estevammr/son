<?php

namespace CodeAgenda\Http\Controllers;


use CodeAgenda\Entities\Telefone;

class TelefoneController extends Controller
{
    public function delete($id)
    {
        $telefone = Telefone::findOrFail($id);

        return view('telefone.delete', compact('telefone'));
    }

    public function destroy($id)
    {
        Telefone::destroy($id);

        return redirect()->route('agenda.index');
    }
}