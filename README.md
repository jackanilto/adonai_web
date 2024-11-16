Aqui está uma versão em português do README para o repositório **Adonai Web**, com base nas informações que você forneceu, além de melhorias para uma boa apresentação:

---

# Adonai Web

**Adonai Web** é um sistema desenvolvido para o gerenciamento de igrejas, focando no controle de membros, financeiro e relatórios. Ele permite que igrejas matriz e filiais compartilhem informações de forma integrada, com controle de permissões por níveis de acesso.

---

## 📋 Visão Geral

Este sistema foi desenvolvido para simplificar a administração e o controle das igrejas. Ele oferece funcionalidades como o cadastro de membros, gestão financeira, geração de relatórios, e controle de acesso de usuários com diferentes permissões. A interface foi projetada para ser intuitiva e fácil de usar, visando melhorar a gestão dentro das igrejas.

---

## 🚀 Funcionalidades

- **Cadastro de Membros**: Gerenciamento e armazenamento de dados dos membros da igreja.
- **Gestão Financeira**: Controle financeiro para registrar receitas e despesas.
- **Relatórios**: Geração de relatórios administrativos e financeiros.
- **Controle de Permissões**: Atribuição de níveis de acesso diferenciados para usuários da plataforma.

---

## 🛠️ Requisitos do Sistema

Para rodar o sistema corretamente, é necessário que seu ambiente de desenvolvimento esteja configurado com os seguintes requisitos:

- **PHP 7.4 ou superior**.
- **MySQL** ou **MariaDB**.
- **Servidor Web** (Apache ou Nginx).

---

## ⚙️ Como Configurar

1. Clone o repositório:
   ```bash
   git clone https://github.com/jackanilto/adonai_web.git
   ```

2. Acesse o diretório do projeto:
   ```bash
   cd adonai_web
   ```

3. Crie o banco de dados no MySQL/MariaDB e configure as credenciais no arquivo `.env`.

4. Instale as dependências utilizando o Composer:
   ```bash
   composer install
   ```

5. Execute as migrações para configurar o banco de dados:
   ```bash
   php artisan migrate
   ```

6. Inicie o servidor de desenvolvimento:
   ```bash
   php artisan serve
   ```

Agora, você pode acessar o sistema via `http://localhost:8000` no seu navegador.

---

## 📄 Licença

Este projeto está sob a licença **MIT**. Consulte o arquivo `LICENSE` para mais detalhes.

---

Se precisar de mais informações ou ajuda, sinta-se à vontade para consultar o repositório ou abrir uma nova issue.

--- 
