<?php
// app/Http/Controllers/MembroController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membro;

class MembroController extends Controller
{
    /*Create */
    public function create()
    {
        return view('membros.create');
    }

    /* Edit */
    public function edit($id)
    {
        $membro = Membro::find($id);

        if (!$membro) {
            // Adicione um tratamento para o caso do membro não ser encontrado
            return redirect()->route('membros.index')->with('error', 'Membro não encontrado.');
        }

        return view('membros.edit', compact('membro'));
    }

    /* Pagina de Membros cadastrados */
    public function index()
    {
        $membros = Membro::all();
        return view('membros.index', compact('membros'));
    }

    /* Vizualizar detalhes do membro */
    public function show($id)
    {
        $membro = Membro::find($id);

        return view('membros.show', compact('membro'));
    }

    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'roll' => 'required|max:10',
            'nome' => 'required|max:200',
            'endereco' => 'nullable|max:255',
            'numero' => 'nullable|max:10',
            'bairro' => 'nullable|max:100',
            // 'cidade' => 'nullable|max:100',
            // 'estado' => 'nullable|max:2',
            // 'cep' => 'nullable|max:10',
            // 'complemento' => 'nullable|max:255',
            // 'telpessoal' => 'nullable|max:20',
            // 'contato1' => 'nullable|max:20',
            // 'contato2' => 'nullable|max:20',
            // 'email' => 'nullable|email|max:255',
            // 'dizimista' => 'nullable|max:5',
            // 'grupo' => 'nullable|max:50',
            // 'tratamento' => 'nullable|max:50',
            // 'obs' => 'nullable',
            // 'sexo' => 'nullable|max:10',
            // 'estado_civil' => 'nullable|max:20',
            // 'ministerio' => 'nullable|max:50',
            // 'grau_escolaridade' => 'nullable|max:50',
            // 'batizado' => 'nullable|max:5',
            // 'rg' => 'nullable|max:20',
            // 'cpf' => 'nullable|max:14',
            // 'nome_pai' => 'nullable|max:200',
            // 'nome_mae' => 'nullable|max:200',
            // 'pais_origem' => 'nullable|max:200',
            // 'telefone_pais_origem' => 'nullable|max:20',
            // 'ativo' => 'nullable|max:5',
            // 'igreja_batismo' => 'nullable|max:200',
            // 'naturalidade' => 'nullable|max:200',
            // 'titulo_eleitor' => 'nullable|max:20',
            // 'filhos' => 'nullable|max:5',
            // 'conjuge' => 'nullable|max:200',
            // 'campo13' => 'nullable|max:200',
            // 'tipo_moradia' => 'nullable|max:50',
            // 'campo15' => 'nullable|max:200',
            // 'historico' => 'nullable|max:200',
            // 'profissao' => 'nullable|max:200',
            // 'cidade_batismo' => 'nullable|max:100',
            // 'observacao' => 'nullable|max:200',
            // 'data_nasc' => 'nullable|date',
            // 'datebatismo' => 'nullable|date',
            // 'datevalcarteira' => 'nullable|date',
            // 'dateadmissao' => 'nullable|date',
            // 'dateconsagra' => 'nullable|date',
            // 'datecasamento' => 'nullable|date',
            // 'datenascconjuge' => 'nullable|date',
            // 'databatismo' => 'nullable|date',
            //'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

            // Criação do membro no banco de dados
            $membro = new \App\Models\Membro; // Certifique-se de ter o namespace correto para o modelo Membro
            $membro->roll = $request->input('roll');
            $membro->nome = $request->input('nome');
            $membro->endereco = $request->input('endereco');
            $membro->numero = $request->input('numero');
            $membro->bairro = $request->input('bairro');
            $membro->cidade = $request->input('cidade');
            $membro->estado = $request->input('estado');
            $membro->cep = $request->input('cep');
            $membro->complemento = $request->input('complemento');
            $membro->telpessoal = $request->input('telpessoal');
            $membro->contato1 = $request->input('contato1');
            $membro->contato2 = $request->input('contato2');
            $membro->email = $request->input('email');
            $membro->dizimista = $request->input('dizimista');
            $membro->grupo = $request->input('grupo');
            $membro->tratamento = $request->input('tratamento');
            $membro->obs = $request->input('obs');
            $membro->sexo = $request->input('sexo');
            $membro->estado_civil = $request->input('estado_civil');
            $membro->ministerio = $request->input('ministerio');
            $membro->grau_escolaridade = $request->input('grau_escolaridade');
            $membro->batizado = $request->input('batizado');
            $membro->rg = $request->input('rg');
            $membro->cpf = $request->input('cpf');
            $membro->nome_pai = $request->input('nome_pai');
            $membro->nome_mae = $request->input('nome_mae');
            $membro->pais_origem = $request->input('pais_origem');
            $membro->telefone_pais_origem = $request->input('telefone_pais_origem');
            $membro->ativo = $request->input('ativo');
            $membro->igreja_batismo = $request->input('igreja_batismo');
            $membro->naturalidade = $request->input('naturalidade');
            $membro->titulo_eleitor = $request->input('titulo_eleitor');
            $membro->filhos = $request->input('filhos');
            $membro->conjuge = $request->input('conjuge');
            $membro->campo13 = $request->input('campo13');
            $membro->tipo_moradia = $request->input('tipo_moradia');
            $membro->campo15 = $request->input('campo15');
            $membro->historico = $request->input('historico');
            $membro->profissao = $request->input('profissao');
            $membro->cidade_batismo = $request->input('cidade_batismo');
            $membro->observacao = $request->input('observacao');
            $membro->data_nasc = $request->input('data_nasc');
            $membro->datebatismo = $request->input('datebatismo');
            $membro->datevalcarteira = $request->input('datevalcarteira');
            $membro->dateadmissao = $request->input('dateadmissao');
            $membro->dateconsagra = $request->input('dateconsagra');
            $membro->datecasamento = $request->input('datecasamento');
            $membro->datenascconjuge = $request->input('datenascconjuge');
            // $membro->databatismo = $request->input('databatismo');

            // Lida com o upload da imagem
            if ($request->hasFile('imagem')) {
                $imagem = $request->file('imagem');
                $nomeImagem = time() . '.' . $imagem->getClientOriginalExtension();
                $caminhoImagem = public_path('membro_imagens/');
                $imagem->move($caminhoImagem, $nomeImagem);
                $caminhoCompletoImagem = 'membro_imagens/' . $nomeImagem;
                $membro->imagem = $caminhoCompletoImagem;
            }

            // Salva o membro no banco de dados
            $membro->save();

        // Redireciona de volta à página de cadastro com uma mensagem de sucesso
        return redirect('/cadastro-membro')->with('success', 'Membro cadastrado com sucesso!');
    }

    public function update(Request $request, $id)
    {
        // Validação dos dados do formulário
        $request->validate([
            'roll' => 'required|max:10',
            'nome' => 'required|max:200',
            'endereco' => 'nullable|max:255',
            'numero' => 'nullable|max:10',
            'bairro' => 'nullable|max:100',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            // Encontrar o membro pelo ID
            $membro = Membro::findOrFail($id);

            // Lida com o upload da nova imagem, se existir
            if ($request->hasFile('imagem')) {
                // Remove a imagem antiga se existir
                if ($membro->imagem) {
                    $caminhoImagemAntiga = public_path($membro->imagem);
                    if (File::exists($caminhoImagemAntiga)) {
                        File::delete($caminhoImagemAntiga);
                    }
                }

                // Adiciona a nova imagem
                $novaImagem = $request->file('imagem');
                $nomeNovaImagem = time() . '.' . $novaImagem->getClientOriginalExtension();
                $caminhoNovaImagem = public_path('membro_imagens/');
                $novaImagem->move($caminhoNovaImagem, $nomeNovaImagem);
                $caminhoCompletoNovaImagem = 'membro_imagens/' . $nomeNovaImagem;

                // Atualiza o caminho da imagem no banco de dados
                $membro->update(['imagem' => $caminhoCompletoNovaImagem]);
            }

            // Atualizar os campos do membro com os dados do formulário
            $membro->update($request->except(['imagem']));

            // Redirecionar para a página de visualização ou qualquer outra ação após a atualização
            return redirect()->route('membros.show', $membro->id)
                             ->with('success', 'Membro atualizado com sucesso');
        } catch (\Exception $e) {
            // Lidar com exceções, se necessário
            return redirect()->route('membros.index')
                             ->with('error', 'Erro ao atualizar o membro.');
        }
    }
}