<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\update;

class ClienteController extends Controller
{
    //listar clietntes
    public function index()
    {
        //buscar informações do DB
        $cliente = Cliente::orderByDesc('created_at')->get();
        // chama view
        return view('cliente/index', ['cliente' => $cliente]);
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
        return redirect()->route('cliente.index')->with('success', 'Cliente cadastro com sucesso!');
    }

    //visualizar os dados apartir do id do cliente
    public function edit(Cliente $cliente)
    {
        return view('cliente/edit', ['cliente' => $cliente]);
    }

    //Editar os dados apartir do id do cliente
    public function update(ClienteRequest $request, Cliente $cliente)
    {
         // validar os campos
         $request->validated();
         //edit as informações no DB
         $cliente->update([
            'nome' => $request->nome,
            'fone' => $request->fone,
            'email' => $request->email,
            'cpf' => $request->cpf,
            'nascimento' => $request->nascimento,
         ]);
         // redirecionamento
        return redirect()->route('cliente.index')->with('success', 'Cliente atualizado com sucesso!');

    }

}
