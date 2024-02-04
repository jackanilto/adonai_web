<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tratamento;

class TratamentoController extends Controller
{
    // ...

    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'tratamento' => 'required|max:50',
        ]);

        // Criação do tratamento no banco de dados
        Tratamento::create([
            'tratamento' => $request->input('tratamento'),
        ]);

        // Redireciona de volta à página de cadastro com uma mensagem de sucesso
        return redirect()->route('tratamentos.create')->with('success', 'Tratamento cadastrado com sucesso!');
    }

    // ...
}
