<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Membro
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="max-w-6xl mx-auto bg-white p-6 rounded-md shadow-md">
                    <h2 class="text-2xl font-semibold mb-6">Editar Membro</h2>

                    <form action="{{ route('membros.update', $membro->id) }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-1 gap-1">
                            <!-- ROLL -->
                            <div>
                                <label for="roll" class="block text-sm font-medium text-gray-600">Roll:</label>
                                <input type="text" id="roll" name="roll" class="mt-1 p-2 w-full border rounded-md" value="{{ old('roll', $membro->roll) }}">
                            </div>

                            <!-- NOME -->
                            <div>
                                <label for="nome" class="block text-sm font-medium text-gray-600">Nome:</label>
                                <input type="text" id="nome" name="nome" class="mt-1 p-2 w-full border rounded-md" value="{{ old('nome', $membro->nome) }}">
                            </div>

                            <!-- ENDEREÇO -->
                            <div>
                                <label for="endereco" class="block text-sm font-medium text-gray-600">Endereço:</label>
                                <input type="text" id="endereco" name="endereco" class="mt-1 p-2 w-full border rounded-md" value="{{ old('endereco', $membro->endereco) }}">
                            </div>

                            <!-- NÚMERO -->
                            <div class="w-32">
                                <label for="numero" class="block text-sm font-medium text-gray-600">Número:</label>
                                <input type="text" id="numero" name="numero" class="mt-1 p-2 w-full border rounded-md" value="{{ old('numero', $membro->numero) }}">
                            </div>

                            <!-- BAIRRO -->
                            <div>
                                <label for="bairro" class="block text-sm font-medium text-gray-600">Bairro:</label>
                                <input type="text" id="bairro" name="bairro" class="mt-1 p-2 w-full border rounded-md" value="{{ old('bairro', $membro->bairro) }}">
                            </div>

                            <!-- CIDADE -->
                            <div>
                                <label for="cidade" class="block text-sm font-medium text-gray-600">Cidade:</label>
                                <input type="text" id="cidade" name="cidade" class="mt-1 p-2 w-full border rounded-md" value="{{ old('cidade', $membro->cidade) }}">
                            </div>

                            <!-- ESTADO -->
                            <div>
                                <label for="estado" class="block text-sm font-medium text-gray-600">Estado:</label>
                                <input type="text" id="estado" name="estado" class="mt-1 p-2 w-full border rounded-md" value="{{ old('estado', $membro->estado) }}">
                            </div>

                            <!-- CEP -->
                            <div>
                                <label for="cep" class="block text-sm font-medium text-gray-600">CEP:</label>
                                <input type="text" id="cep" name="cep" class="mt-1 p-2 w-full border rounded-md" value="{{ old('cep', $membro->cep) }}">
                            </div>
                        </div>

                        <!-- Coluna 2 -->
                        <div class="grid grid-cols-1 md:grid-cols-1 gap-1">
                            <!-- COMPLEMENTO -->
                            <div>
                                <label for="complemento" class="block text-sm font-medium text-gray-600">Complemento:</label>
                                <input type="text" id="complemento" name="complemento" class="mt-1 p-2 w-full border rounded-md" value="{{ old('complemento', $membro->complemento) }}">
                            </div>

                            <!-- TELEFONE PESSOAL -->
                            <div>
                                <label for="telpessoal" class="block text-sm font-medium text-gray-600">Telefone Pessoal:</label>
                                <input type="text" id="telpessoal" name="telpessoal" class="mt-1 p-2 w-full border rounded-md" value="{{ old('telpessoal', $membro->telpessoal) }}">
                            </div>

                            <!-- CONTATO 1 -->
                            <div>
                                <label for="contato1" class="block text-sm font-medium text-gray-600">Contato 1:</label>
                                <input type="text" id="contato1" name="contato1" class="mt-1 p-2 w-full border rounded-md" value="{{ old('contato1', $membro->contato1) }}">
                            </div>

                            <!-- CONTATO 2 -->
                            <div>
                                <label for="contato2" class="block text-sm font-medium text-gray-600">Contato 2:</label>
                                <input type="text" id="contato2" name="contato2" class="mt-1 p-2 w-full border rounded-md" value="{{ old('contato2', $membro->contato2) }}">
                            </div>

                            <!-- EMAIL -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-600">E-mail:</label>
                                <input type="text" id="email" name="email" class="mt-1 p-2 w-full border rounded-md" value="{{ old('email', $membro->email) }}">
                            </div>

                            <!-- DIZIMISTA -->
                            <div>
                                <label for="dizimista" class="block text-sm font-medium text-gray-600">Dizimista:</label>
                                <input type="text" id="dizimista" name="dizimista" class="mt-1 p-2 w-full border rounded-md" value="{{ old('dizimista', $membro->dizimista) }}">
                            </div>

                            <!-- GRUPO -->
                            <div>
                                <label for="grupo" class="block text-sm font-medium text-gray-600">Grupo:</label>
                                <input type="text" id="grupo" name="grupo" class="mt-1 p-2 w-full border rounded-md" value="{{ old('grupo', $membro->grupo) }}">
                            </div>

                            <!-- TRATAMENTO -->
                            <div>
                                <label for="tratamento" class="block text-sm font-medium text-gray-600">Tratamento:</label>
                                <input type="text" id="tratamento" name="tratamento" class="mt-1 p-2 w-full border rounded-md" value="{{ old('tratamento', $membro->tratamento) }}">
                            </div>
                        </div>

                        <!-- Coluna 3 -->
                        <div class="grid grid-cols-1 md:grid-cols-1 gap-1">
                            <!-- SEXO -->
                            <div>
                                <label for="sexo" class="block text-sm font-medium text-gray-600">Sexo:</label>
                                <input type="text" id="sexo" name="sexo" class="mt-1 p-2 w-full border rounded-md" value="{{ old('sexo', $membro->sexo) }}">
                            </div>

                            <!-- ESTADO CIVIL -->
                            <div>
                                <label for="estado_civil" class="block text-sm font-medium text-gray-600">Estado Civil:</label>
                                <input type="text" id="estado_civil" name="estado_civil" class="mt-1 p-2 w-full border rounded-md" value="{{ old('estado_civil', $membro->estado_civil) }}">
                            </div>

                            <!-- MINISTÉRIO -->
                            <div>
                                <label for="ministerio" class="block text-sm font-medium text-gray-600">Ministério:</label>
                                <input type="text" id="ministerio" name="ministerio" class="mt-1 p-2 w-full border rounded-md" value="{{ old('ministerio', $membro->ministerio) }}">
                            </div>

                            <!-- GRAU DE ESCOLARIDADE -->
                            <div>
                                <label for="grau_escolaridade" class="block text-sm font-medium text-gray-600">Grau de Escolaridade:</label>
                                <input type="text" id="grau_escolaridade" name="grau_escolaridade" class="mt-1 p-2 w-full border rounded-md" value="{{ old('grau_escolaridade', $membro->grau_escolaridade) }}">
                            </div>

                            <!-- BATIZADO -->
                            <div>
                                <label for="batizado" class="block text-sm font-medium text-gray-600">Batizado:</label>
                                <input type="text" id="batizado" name="batizado" class="mt-1 p-2 w-full border rounded-md" value="{{ old('batizado', $membro->batizado) }}">
                            </div>

                            <!-- RG -->
                            <div>
                                <label for="rg" class="block text-sm font-medium text-gray-600">RG:</label>
                                <input type="text" id="rg" name="rg" class="mt-1 p-2 w-full border rounded-md" value="{{ old('rg', $membro->rg) }}">
                            </div>

                            <!-- CPF -->
                            <div>
                                <label for="cpf" class="block text-sm font-medium text-gray-600">CPF:</label>
                                <input type="text" id="cpf" name="cpf" class="mt-1 p-2 w-full border rounded-md" value="{{ old('cpf', $membro->cpf) }}">
                            </div>

                            <!-- NOME DO PAI -->
                            <div>
                                <label for="nome_pai" class="block text-sm font-medium text-gray-600">Nome do Pai:</label>
                                <input type="text" id="nome_pai" name="nome_pai" class="mt-1 p-2 w-full border rounded-md" value="{{ old('nome_pai', $membro->nome_pai) }}">
                            </div>
                             </div>

                                <!-- NOME Mae -->
                            <div>
                                <label for="nome_mae" class="block text-sm font-medium text-gray-600">Nome da Mãe:</label>
                                <input type="text" id="nome_mae" name="nome_mae" class="mt-1 p-2 w-full border rounded-md" value="{{ old('nome_mae', $membro->nome_mae) }}">
                            </div>

                            <!-- PAIS DE ORIGEM -->
                            <div>
                                <label for="pais_origem" class="block text-sm font-medium text-gray-600">País de Origem:</label>
                                <input type="text" id="pais_origem" name="pais_origem" class="mt-1 p-2 w-full border rounded-md" value="{{ old('pais_origem', $membro->pais_origem) }}">
                            </div>

                            <!-- TELEFONE PAIS DE ORIGEM -->
                            <div>
                                <label for="telefone_pais_origem" class="block text-sm font-medium text-gray-600">Telefone do País de Origem:</label>
                                <input type="text" id="telefone_pais_origem" name="telefone_pais_origem" class="mt-1 p-2 w-full border rounded-md" value="{{ old('telefone_pais_origem', $membro->telefone_pais_origem) }}">
                            </div>

                            <!-- ATIVO -->
                            <div>
                                <label for="ativo" class="block text-sm font-medium text-gray-600">Ativo:</label>
                                <input type="text" id="ativo" name="ativo" class="mt-1 p-2 w-full border rounded-md" value="{{ old('ativo', $membro->ativo) }}">
                            </div>

                            <!-- IGREJA DE BATISMO -->
                            <div>
                                <label for="igreja_batismo" class="block text-sm font-medium text-gray-600">Igreja de Batismo:</label>
                                <input type="text" id="igreja_batismo" name="igreja_batismo" class="mt-1 p-2 w-full border rounded-md" value="{{ old('igreja_batismo', $membro->igreja_batismo) }}">
                            </div>

                            <!-- NATURALIDADE -->
                            <div>
                                <label for="naturalidade" class="block text-sm font-medium text-gray-600">Naturalidade:</label>
                                <input type="text" id="naturalidade" name="naturalidade" class="mt-1 p-2 w-full border rounded-md" value="{{ old('naturalidade', $membro->naturalidade) }}">
                            </div>

                            <!-- TÍTULO DE ELEITOR -->
                            <div>
                                <label for="titulo_eleitor" class="block text-sm font-medium text-gray-600">Título de Eleitor:</label>
                                <input type="text" id="titulo_eleitor" name="titulo_eleitor" class="mt-1 p-2 w-full border rounded-md" value="{{ old('titulo_eleitor', $membro->titulo_eleitor) }}">
                            </div>

                            <!-- FILHOS -->
                            <div>
                                <label for="filhos" class="block text-sm font-medium text-gray-600">Filhos:</label>
                                <input type="text" id="filhos" name="filhos" class="mt-1 p-2 w-full border rounded-md" value="{{ old('filhos', $membro->filhos) }}">
                            </div>

                            <!-- CONJUGE -->
                            <div>
                                <label for="conjuge" class="block text-sm font-medium text-gray-600">Cônjuge:</label>
                                <input type="text" id="conjuge" name="conjuge" class="mt-1 p-2 w-full border rounded-md" value="{{ old('conjuge', $membro->conjuge) }}">
                            </div>

                            <!-- CAMPO 13 -->
                            <div>
                                <label for="campo13" class="block text-sm font-medium text-gray-600">Campo 13:</label>
                                <input type="text" id="campo13" name="campo13" class="mt-1 p-2 w-full border rounded-md" value="{{ old('campo13', $membro->campo13) }}">
                            </div>

                            <!-- TIPO DE MORADIA -->
                            <div>
                                <label for="tipo_moradia" class="block text-sm font-medium text-gray-600">Tipo de Moradia:</label>
                                <input type="text" id="tipo_moradia" name="tipo_moradia" class="mt-1 p-2 w-full border rounded-md" value="{{ old('tipo_moradia', $membro->tipo_moradia) }}">
                            </div>

                            <!-- CAMPO 15 -->
                            <div>
                                <label for="campo15" class="block text-sm font-medium text-gray-600">Campo 15:</label>
                                <input type="text" id="campo15" name="campo15" class="mt-1 p-2 w-full border rounded-md" value="{{ old('campo15', $membro->campo15) }}">
                            </div>

                            <!-- HISTÓRICO -->
                            <div>
                                <label for="historico" class="block text-sm font-medium text-gray-600">Histórico:</label>
                                <input type="text" id="historico" name="historico" class="mt-1 p-2 w-full border rounded-md" value="{{ old('historico', $membro->historico) }}">
                            </div>

                            <!-- PROFISSÃO -->
                            <div>
                                <label for="profissao" class="block text-sm font-medium text-gray-600">Profissão:</label>
                                <input type="text" id="profissao" name="profissao" class="mt-1 p-2 w-full border rounded-md" value="{{ old('profissao', $membro->profissao) }}">
                            </div>

                            <!-- CIDADE DE BATISMO -->
                            <div>
                                <label for="cidade_batismo" class="block text-sm font-medium text-gray-600">Cidade de Batismo:</label>
                                <input type="text" id="cidade_batismo" name="cidade_batismo" class="mt-1 p-2 w-full border rounded-md" value="{{ old('cidade_batismo', $membro->cidade_batismo) }}">
                            </div>

                            <!-- DATA DE NASCIMENTO -->
                            <div>
                                <label for="data_nasc" class="block text-sm font-medium text-gray-600">Data de Nascimento:</label>
                                <input type="date" id="data_nasc" name="data_nasc" class="mt-1 p-2 w-full border rounded-md" value="{{ old('data_nasc', $membro->data_nasc) }}">
                            </div>

                            <!-- DATA DE BATISMO -->
                        <div>
                            <label for="datebatismo" class="block text-sm font-medium text-gray-600">Data de Batismo:</label>
                            <input type="date" id="datebatismo" name="datebatismo" class="mt-1 p-2 w-full border rounded-md" value="{{ old('datebatismo', $membro->datebatismo) }}">
                        </div>

                        <!-- DATA DE VALIDADE DA CARTEIRA -->
                        <div>
                            <label for="datevalcarteira" class="block text-sm font-medium text-gray-600">Data de Validade da Carteira:</label>
                            <input type="date" id="datevalcarteira" name="datevalcarteira" class="mt-1 p-2 w-full border rounded-md" value="{{ old('datevalcarteira', $membro->datevalcarteira) }}">
                        </div>

                        <!-- DATA DE ADMISSÃO -->
                        <div>
                            <label for="dateadmissao" class="block text-sm font-medium text-gray-600">Data de Admissão:</label>
                            <input type="date" id="dateadmissao" name="dateadmissao" class="mt-1 p-2 w-full border rounded-md" value="{{ old('dateadmissao', $membro->dateadmissao) }}">
                        </div>

                        <!-- DATA DE CONSAGRAÇÃO -->
                        <div>
                            <label for="dateconsagra" class="block text-sm font-medium text-gray-600">Data de Consagração:</label>
                            <input type="date" id="dateconsagra" name="dateconsagra" class="mt-1 p-2 w-full border rounded-md" value="{{ old('dateconsagra', $membro->dateconsagra) }}">
                        </div>

                        <!-- DATA DE CASAMENTO -->
                        <div>
                            <label for="datecasamento" class="block text-sm font-medium text-gray-600">Data de Casamento:</label>
                            <input type="date" id="datecasamento" name="datecasamento" class="mt-1 p-2 w-full border rounded-md" value="{{ old('datecasamento', $membro->datecasamento) }}">
                        </div>

                        <!-- DATA DE NASCIMENTO DO CÔNJUGE -->
                        <div>
                            <label for="datenascconjuge" class="block text-sm font-medium text-gray-600">Data de Nasc. do Cônjuge:</label>
                            <input type="date" id="datenascconjuge" name="datenascconjuge" class="mt-1 p-2 w-full border rounded-md" value="{{ old('datenascconjuge', $membro->datenascconjuge) }}">
                        </div>

                        <!-- DATA DE BATISMO -->
                        <div>
                            <label for="databatismo" class="block text-sm font-medium text-gray-600">Data de Batismo:</label>
                            <input type="date" id="databatismo" name="databatismo" class="mt-1 p-2 w-full border rounded-md" value="{{ old('databatismo', $membro->databatismo) }}">
                        </div>

                        <!-- IMAGEM -->
                        <div>
                            <label for="imagem" class="block text-sm font-medium text-gray-600">Carregar Foto:</label>
                            <input type="file" id="imagem" name="imagem" accept="image/*" class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <!-- OBSERVAÇÃO -->
                        <div>
                            <label for="observacao" class="block text-sm font-medium text-gray-600">Observação:</label>
                            <input type="text" id="observacao" name="observacao" class="mt-1 p-2 w-full border rounded-md" value="{{ old('observacao', $membro->observacao) }}">
                        </div>

                    </div>
                        </div>
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md mt-4">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>