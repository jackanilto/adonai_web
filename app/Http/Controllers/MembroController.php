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
            'endereco' => 'nullable|max:255', // Adicione validações para outros campos conforme necessário
            'numero' => 'nullable|max:10',
            'bairro' => 'nullable|max:100',
            'cidade' => 'nullable|max:100',
            'estado' => 'nullable|max:2',
            'telpessoal' => 'nullable|max:20',
            'contato1' => 'nullable|max:20',
            'contato2' => 'nullable|max:20',
            'email' => 'nullable|email|max:255',
            'dizimista' => 'nullable|max:5',
            'grupo' => 'nullable|max:50',
            'tratamento' => 'nullable|max:50',
            'obs' => 'nullable',
            'estado_civil' => 'nullable|max:20',
            'ministerio' => 'nullable|max:50',
            'grau_escolaridade' => 'nullable|max:50',
            'rg' => 'nullable|max:20',
            'cpf' => 'nullable|max:14',
            'titulo_eleitor' => 'nullable|max:20',
            'nome_pai' => 'nullable|max:200',
            'nome_mae' => 'nullable|max:200',
            'conjuge' => 'nullable|max:200',
            'filhos' => 'nullable|max:5',
            'data_nasc' => 'nullable|date',
            'datebatismo' => 'nullable|date',
            'datevalcarteira' => 'nullable|date',
            // Adicione outras validações conforme necessário
        ]);

            // Criação do membro no banco de dados
            $membro = new \App\Models\Membro; // Certifique-se de ter o namespace correto para o modelo Membro
            $membro->nome = $request->input('nome');
            $membro->endereco = $request->input('endereco');
            $membro->numero = $request->input('numero');
            $membro->bairro = $request->input('bairro');
            $membro->cidade = $request->input('cidade');
            $membro->estado = $request->input('estado');
            $membro->telpessoal = $request->input('telpessoal');
            $membro->contato1 = $request->input('contato1');
            $membro->contato2 = $request->input('contato2');
            $membro->email = $request->input('email');
            $membro->dizimista = $request->input('dizimista');
            $membro->grupo = $request->input('grupo');
            $membro->tratamento = $request->input('tratamento');
            $membro->obs = $request->input('obs');
            $membro->estado_civil = $request->input('estado_civil');
            $membro->ministerio = $request->input('ministerio');
            $membro->grau_escolaridade = $request->input('grau_escolaridade');
            $membro->rg = $request->input('rg');
            $membro->cpf = $request->input('cpf');
            $membro->titulo_eleitor = $request->input('titulo_eleitor');
            $membro->nome_pai = $request->input('nome_pai');
            $membro->nome_mae = $request->input('nome_mae');
            $membro->conjuge = $request->input('conjuge');
            $membro->filhos = $request->input('filhos');
            $membro->data_nasc = $request->input('data_nasc');
            $membro->datebatismo = $request->input('datebatismo');
            $membro->datevalcarteira = $request->input('datevalcarteira');
            // Preencha outros campos conforme necessário
            $membro->save();

            // Redireciona de volta à página de cadastro com uma mensagem de sucesso
            return redirect('/cadastro-membro')->with('success', 'Membro cadastrado com sucesso!');
        }
}
