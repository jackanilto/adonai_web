<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de Membros</title>
</head>
<body>

<h2>Cadastro de Membros</h2>

<form action="{{ route('membros.store') }}" method="POST">
    @csrf

    <!-- Informações Pessoais -->
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>
    
    <label for="endereco">Endereço:</label>
    <input type="text" id="endereco" name="endereco">
    
    <label for="numero">Número:</label>
    <input type="text" id="numero" name="numero">
    
    <label for="bairro">Bairro:</label>
    <input type="text" id="bairro" name="bairro">
    
    <label for="cidade">Cidade:</label>
    <input type="text" id="cidade" name="cidade">
    
    <label for="estado">Estado:</label>
    <input type="text" id="estado" name="estado">
    
    <!-- Adicione outros campos de informações pessoais conforme necessário -->

    <!-- Contato -->
    <label for="telpessoal">Telefone Pessoal:</label>
    <input type="text" id="telpessoal" name="telpessoal">
    
    <label for="contato1">Contato 1:</label>
    <input type="text" id="contato1" name="contato1">
    
    <label for="contato2">Contato 2:</label>
    <input type="text" id="contato2" name="contato2">
    
    <label for="email">E-mail:</label>
    <input type="text" id="email" name="email">
    
    <!-- Adicione outros campos de contato conforme necessário -->

    <!-- Outras Informações -->
    <label for="dizimista">Dizimista:</label>
    <input type="text" id="dizimista" name="dizimista">
    
    <label for="grupo">Grupo:</label>
    <input type="text" id="grupo" name="grupo">
    
    <label for="tratamento">Tratamento:</label>
    <input type="text" id="tratamento" name="tratamento">
    
    <label for="obs">Observações:</label>
    <textarea id="obs" name="obs"></textarea>
    
    <!-- Adicione outros campos de outras informações conforme necessário -->

    <!-- Estado Civil -->
    <label for="estado_civil">Estado Civil:</label>
    <input type="text" id="estado_civil" name="estado_civil">
    
    <!-- Ministério -->
    <label for="ministerio">Ministério:</label>
    <input type="text" id="ministerio" name="ministerio">
    
    <!-- Grau de Escolaridade -->
    <label for="grau_escolaridade">Grau de Escolaridade:</label>
    <input type="text" id="grau_escolaridade" name="grau_escolaridade">
    
    <!-- Adicione outros campos conforme necessário -->

    <!-- Documentos -->
    <label for="rg">RG:</label>
    <input type="text" id="rg" name="rg">
    
    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf">
    
    <label for="titulo_eleitor">Título de Eleitor:</label>
    <input type="text" id="titulo_eleitor" name="titulo_eleitor">
    
    <!-- Adicione outros campos de documentos conforme necessário -->

    <!-- Família -->
    <label for="nome_pai">Nome do Pai:</label>
    <input type="text" id="nome_pai" name="nome_pai">
    
    <label for="nome_mae">Nome da Mãe:</label>
    <input type="text" id="nome_mae" name="nome_mae">
    
    <label for="conjuge">Cônjuge:</label>
    <input type="text" id="conjuge" name="conjuge">
    
    <label for="filhos">Filhos:</label>
    <input type="text" id="filhos" name="filhos">
    
    <!-- Adicione outros campos de família conforme necessário -->

    <!-- Datas -->
    <label for="data_nasc">Data de Nascimento:</label>
    <input type="date" id="data_nasc" name="data_nasc">
    
    <label for="datebatismo">Data de Batismo:</label>
    <input type="date" id="datebatismo" name="datebatismo">
    
    <label for="datevalcarteira">Data de Validade da Carteira:</label>
    <input type="date" id="datevalcarteira" name="datevalcarteira">
    
    <!-- Adicione outros campos de datas conforme necessário -->

    <!-- Botão de Envio -->
    <button type="submit">Enviar</button>
</form>

</body>
</html>