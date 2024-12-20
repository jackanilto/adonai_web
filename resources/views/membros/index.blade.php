<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="max-w-6xl mx-auto bg-white p-6 rounded-md shadow-md">
                    <h2 class="text-2xl font-semibold mb-6">Lista de Membros Cadastrados</h2>

                    <!-- Botão para voltar à página de cadastro -->
                    <a href="{{ route('membros.create') }}" class="mb-4 inline-block bg-blue-500 text-white py-2 px-4 rounded-md">Novo Cadastro</a>

                    <!-- Tabela para exibir os membros -->
                    <table class="min-w-full border rounded-md">
                        <thead>
                            <tr>
                                <th class="border p-2">ID</th>
                                <th class="border p-2">Imagem</th>
                                <th class="border p-2">Nome</th>
                                <th class="border p-2">Endereço</th>
                                <!-- Adicione mais colunas conforme necessário -->
                                <th class="border p-2">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($membros as $membro)
                                <tr>
                                    <td class="border p-2">{{ $membro->id }}</td>

                                    <!-- exibe foto na lista de membros -->
                                    <td class="border p-2">
                                        @if ($membro->imagem)
                                            <img src="{{ asset(str_replace("\\", "/", $membro->imagem)) }}" alt="Imagem do Membro" style="width: 40px;">
                                        @endif
                                    </td>
                                    
                                    <td class="border p-2">{{ $membro->nome }}</td>
                                    <td class="border p-2">{{ $membro->endereco }}</td>
                                    <!-- Adicione mais colunas conforme necessário -->
                                    <td class="border p-2">
                                        <!-- Adicione links ou botões para visualizar/editar/excluir membros -->
                                        <a href="{{ route('membros.show', $membro->id) }}" class="text-blue-500">Visualizar</a>
                                        <a href="{{ route('membros.edit', $membro->id) }}" class="text-green-500 ml-2">Editar</a>
                                        <form action="{{ route('membros.destroy', $membro->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 ml-2" onclick="return confirm('Tem certeza que deseja excluir este membro?')">Excluir</button>
                                        </form>
                                        <!-- Adicione mais ações conforme necessário -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>