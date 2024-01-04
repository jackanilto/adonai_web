<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de Membros</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">

<div class="max-w-2xl mx-auto bg-white p-6 rounded-md shadow-md">

    <h2 class="text-2xl font-semibold mb-6">Cadastro de Membros</h2>

    <form action="{{ route('membros.store') }}" method="POST" class="space-y-4">

        @csrf

        <!-- Informações Pessoais -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="nome" class="block text-sm font-medium text-gray-600">Nome:</label>
                <input type="text" id="nome" name="nome" required class="mt-1 p-2 w-full border rounded-md">
            </div>
            <div>
                <label for="endereco" class="block text-sm font-medium text-gray-600">Endereço:</label>
                <input type="text" id="endereco" name="endereco" class="mt-1 p-2 w-full border rounded-md">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="numero" class="block text-sm font-medium text-gray-600">Número:</label>
                <input type="text" id="numero" name="numero" class="mt-1 p-2 w-full border rounded-md">
            </div>
            <div>
                <label for="bairro" class="block text-sm font-medium text-gray-600">Bairro:</label>
                <input type="text" id="bairro" name="bairro" class="mt-1 p-2 w-full border rounded-md">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="cidade" class="block text-sm font-medium text-gray-600">Cidade:</label>
                <input type="text" id="cidade" name="cidade" class="mt-1 p-2 w-full border rounded-md">
            </div>
            <div>
                <label for="estado" class="block text-sm font-medium text-gray-600">Estado:</label>
                <input type="text" id="estado" name="estado" class="mt-1 p-2 w-full border rounded-md">
            </div>
        </div>

        <!-- Adicione outros campos de informações pessoais conforme necessário -->

        <!-- Contato -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label for="telpessoal" class="block text-sm font-medium text-gray-600">Telefone Pessoal:</label>
                <input type="text" id="telpessoal" name="telpessoal" class="mt-1 p-2 w-full border rounded-md">
            </div>
            <div>
                <label for="contato1" class="block text-sm font-medium text-gray-600">Contato 1:</label>
                <input type="text" id="contato1" name="contato1" class="mt-1 p-2 w-full border rounded-md">
            </div>
            <div>
                <label for="contato2" class="block text-sm font-medium text-gray-600">Contato 2:</label>
                <input type="text" id="contato2" name="contato2" class="mt-1 p-2 w-full border rounded-md">
            </div>
			
			<div>   
				<label for="email" class="block text-sm font-medium text-gray-600">E-mail:</label>
				<input type="text" id="email" name="email" class="mt-1 p-2 w-full border rounded-md">
			</div>
        </div>

        <!-- Adicione outros campos de contato conforme necessário -->

        <!-- Outras Informações -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label for="dizimista" class="block text-sm font-medium text-gray-600">Dizimista:</label>
                <input type="text" id="dizimista" name="dizimista" class="mt-1 p-2 w-full border rounded-md">
            </div>
            <div>
                <label for="grupo" class="block text-sm font-medium text-gray-600">Grupo:</label>
                <input type="text" id="grupo" name="grupo" class="mt-1 p-2 w-full border rounded-md">
            </div>
            <div>
                <label for="tratamento" class="block text-sm font-medium text-gray-600">Tratamento:</label>
                <input type="text" id="tratamento" name="tratamento" class="mt-1 p-2 w-full border rounded-md">
            </div>
            <div>
                <label for="obs" class="block text-sm font-medium text-gray-600">Observações:</label>
                <input type="text" id="obs" name="obs" class="mt-1 p-2 w-full border rounded-md">
            </div>
        </div>

        <!-- Adicione outros campos de outras informações conforme necessário -->

        <!-- Estado Civil -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label for="estado_civil" class="block text-sm font-medium text-gray-600">Estado Civil:</label>
                <input type="text" id="estado_civil" name="estado_civil" class="mt-1 p-2 w-full border rounded-md">
            </div>
			    <!-- Ministério -->
			<div>
				<label for="ministerio" class="block text-sm font-medium text-gray-600">Ministério:</label>
				<input type="text" id="ministerio" name="ministerio" class="mt-1 p-2 w-full border rounded-md">
			</div>	
				<!-- Grau de Escolaridade -->
			<div>
				<label for="grau_escolaridade" class="block text-sm font-medium text-gray-600">Grau de Escolaridade:</label>
				<input type="text" id="grau_escolaridade" name="grau_escolaridade" class="mt-1 p-2 w-full border rounded-md">
			</div>

            <!-- Adicione outros campos conforme necessário -->
        </div>

            <!-- Documentos -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="rg" class="block text-sm font-medium text-gray-600">RG:</label>
                <input type="text" id="rg" name="rg" class="mt-1 p-2 w-full border rounded-md">
            </div>
            <div>
                <label for="cpf" class="block text-sm font-medium text-gray-600">CPF:</label>
                <input type="text" id="cpf" name="cpf" class="mt-1 p-2 w-full border rounded-md">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="titulo_eleitor" class="block text-sm font-medium text-gray-600">Título de Eleitor:</label>
                <input type="text" id="titulo_eleitor" name="titulo_eleitor" class="mt-1 p-2 w-full border rounded-md">
            </div>
        </div>

        <!-- Adicione outros campos de documentos conforme necessário -->

        <!-- Família -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="nome_pai" class="block text-sm font-medium text-gray-600">Nome do Pai:</label>
                <input type="text" id="nome_pai" name="nome_pai" class="mt-1 p-2 w-full border rounded-md">
            </div>
            <div>
                <label for="nome_mae" class="block text-sm font-medium text-gray-600">Nome da Mãe:</label>
                <input type="text" id="nome_mae" name="nome_mae" class="mt-1 p-2 w-full border rounded-md">
            </div>
            <div>
                <label for="conjuge" class="block text-sm font-medium text-gray-600">Cônjuge:</label>
                <input type="text" id="conjuge" name="conjuge" class="mt-1 p-2 w-full border rounded-md">
            </div>
            <div>
                <label for="filhos" class="block text-sm font-medium text-gray-600">Filhos:</label>
                <input type="text" id="filhos" name="filhos" class="mt-1 p-2 w-full border rounded-md">
            </div>
        </div>

        <!-- Adicione outros campos de família conforme necessário -->

        <!-- Datas -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label for="data_nasc" class="block text-sm font-medium text-gray-600">Data de Nascimento:</label>
                <input type="date" id="data_nasc" name="data_nasc" class="mt-1 p-2 w-full border rounded-md">
            </div>
            <div>
                <label for="datebatismo" class="block text-sm font-medium text-gray-600">Data de Batismo:</label>
                <input type="date" id="datebatismo" name="datebatismo" class="mt-1 p-2 w-full border rounded-md">
            </div>
            <div>
                <label for="datevalcarteira" class="block text-sm font-medium text-gray-600">Data de Validade da Carteira:</label>
                <input type="date" id="datevalcarteira" name="datevalcarteira" class="mt-1 p-2 w-full border rounded-md">
            </div>
        </div>

        <!-- Adicione outros campos de datas conforme necessário -->

        <!-- Botão de Envio -->
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Enviar</button>
    </form>

</div>

</body>
</html>