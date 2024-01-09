<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-semibold leading-tight">
            Detalhes do Membro
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div>
                    <h2 class="text-2xl font-semibold mb-4">
                            <p><strong>Nome:</strong> {{ $membro->nome }}</p>
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                        <div>
                            <!-- Exibição da imagem -->
                            @if ($membro->imagem)
                                <img src="{{ asset($membro->imagem) }}" alt="Imagem do Membro" class="mt-4 max-w-full" style="width: 100px;">
                            @else
                                <!-- Usar uma imagem padrão quando não houver imagem -->
                                <img src="{{ asset('imagens/user-sem-foto.png') }}" alt="Imagem Padrão" class="mt-4 max-w-full" style="width: 100px;">
                            @endif
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <p><strong>Roll:</strong> {{ $membro->roll }}</p>
                            <!-- <p><strong>Nome:</strong> {{ $membro->nome }}</p> -->
                            <p></p>
                            <p><strong>Endereço:</strong> {{ $membro->endereco }}</p>
                            <p><strong>Número:</strong> {{ $membro->numero }}</p>
                            <p><strong>Bairro:</strong> {{ $membro->bairro }}</p>
                            <p><strong>Cidade:</strong> {{ $membro->cidade }}</p>
                            <p><strong>Estado:</strong> {{ $membro->estado }}</p>
                            <p><strong>CEP:</strong> {{ $membro->cep }}</p>
                            <p><strong>Complemento:</strong> {{ $membro->complemento }}</p>
                            <p><strong>Telefone Pessoal:</strong> {{ $membro->telpessoal }}</p>
                            <p><strong>Contato 1:</strong> {{ $membro->contato1 }}</p>
                            <p><strong>Contato 2:</strong> {{ $membro->contato2 }}</p>
                            <p><strong>Email:</strong> {{ $membro->email }}</p>
                            <p><strong>Dizimista:</strong> {{ $membro->dizimista }}</p>
                            <p><strong>Grupo:</strong> {{ $membro->grupo }}</p>
                            <p><strong>Tratamento:</strong> {{ $membro->tratamento }}</p>
                            <p><strong>Observações:</strong> {{ $membro->obs }}</p>
                            <p><strong>Sexo:</strong> {{ $membro->sexo }}</p>
                            <p><strong>Estado Civil:</strong> {{ $membro->estado_civil }}</p>
                            <p><strong>Ministério:</strong> {{ $membro->ministerio }}</p>
                            <p><strong>Grau de Escolaridade:</strong> {{ $membro->grau_escolaridade }}</p>
                            <p><strong>Batizado:</strong> {{ $membro->batizado }}</p>
                            <p><strong>RG:</strong> {{ $membro->rg }}</p>
                            <p><strong>CPF:</strong> {{ $membro->cpf }}</p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <p><strong>Nome do Pai:</strong> {{ $membro->nome_pai }}</p>
                            <p><strong>Nome da Mãe:</strong> {{ $membro->nome_mae }}</p>
                            <p><strong>País de Origem:</strong> {{ $membro->pais_origem }}</p>
                            <p><strong>Telefone do País de Origem:</strong> {{ $membro->telefone_pais_origem }}</p>
                            <p><strong>Ativo:</strong> {{ $membro->ativo }}</p>
                            <p><strong>Igreja de Batismo:</strong> {{ $membro->igreja_batismo }}</p>
                            <p><strong>Naturalidade:</strong> {{ $membro->naturalidade }}</p>
                            <p><strong>Título Eleitor:</strong> {{ $membro->titulo_eleitor }}</p>
                            <p><strong>Filhos:</strong> {{ $membro->filhos }}</p>
                            <p><strong>Cônjuge:</strong> {{ $membro->conjuge }}</p>
                            <p><strong>Campo 13:</strong> {{ $membro->campo13 }}</p>
                            <p><strong>Tipo de Moradia:</strong> {{ $membro->tipo_moradia }}</p>
                            <p><strong>Campo 15:</strong> {{ $membro->campo15 }}</p>
                            <p><strong>Histórico:</strong> {{ $membro->historico }}</p>
                            <p><strong>Profissão:</strong> {{ $membro->profissao }}</p>
                            <p><strong>Cidade de Batismo:</strong> {{ $membro->cidade_batismo }}</p>
                            <p><strong>Observação:</strong> {{ $membro->observacao }}</p>
                            <p><strong>Data de Nascimento:</strong> {{ $membro->data_nasc }}</p>
                            <p><strong>Data de Batismo:</strong> {{ $membro->datebatismo }}</p>
                            <p><strong>Data de Validade da Carteira:</strong> {{ $membro->datevalcarteira }}</p>
                            <p><strong>Data de Admissão:</strong> {{ $membro->dateadmissao }}</p>
                            <p><strong>Data de Consagração:</strong> {{ $membro->dateconsagra }}</p>
                            <p><strong>Data de Casamento:</strong> {{ $membro->datecasamento }}</p>
                            <p><strong>Data de Nascimento do Cônjuge:</strong> {{ $membro->datenascconjuge }}</p>
                        </div>


                    </div>

                    <!-- Botão de Voltar -->
                    <a href="{{ route('membros.index') }}" class="mt-4 text-blue-500">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>