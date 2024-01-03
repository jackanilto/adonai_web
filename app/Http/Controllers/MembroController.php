<?php
// app/Http/Controllers/MembroController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembroController extends Controller
{
    public function create()
    {
        return view('membros.create');
    }

    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'nome' => 'required|max:200',
            // Adicione validações para outros campos conforme necessário
        ]);

        // Criação do membro no banco de dados
        $membro = new \App\Models\Membro; // Certifique-se de ter o namespace correto para o modelo Membro
        $membro->nome = $request->input('nome');
        // Preencha outros campos conforme necessário
        $membro->save();

        // Redireciona de volta à página de cadastro com uma mensagem de sucesso
        return redirect('/cadastro-membro')->with('success', 'Membro cadastrado com sucesso!');
    }
}
