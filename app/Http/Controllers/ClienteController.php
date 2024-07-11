<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //listar clietntes
    public function index()
    {
        return view('cliente/index');
    }

    //formulario de cadastros de cliente
    public function create()
    {
        return view('cliente/create');
    }
    //
    public function show()
    {
        return view('cliente/show');
    }

    //salvar no db
    public function store(ClienteRequest $request)
    {
        // validar os campos
        $request->validated();
        //salva no db
        Cliente::create($request->all());

        // redirecionamento
        return redirect()->route('cliente.show')->with('success', 'Cliente cadastro com sucesso!');
    }

}
