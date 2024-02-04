<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## Documentação:
<details>
<summary>Criação da Tabela TBL_TRATAMENTOS</summary>
Objetivo
O objetivo desta documentação é guiar na criação da tabela TBL_TRATAMENTOS em um aplicativo Laravel usando migrations.

Pré-requisitos
Certifique-se de ter o ambiente Laravel configurado corretamente e um banco de dados configurado no arquivo .env.

Passos
1. Criação da Migration
Abra o terminal e execute o seguinte comando para criar uma nova migration:

```ruby
php artisan make:migration create_tbl_tratamentos_table
```


Este comando criará um novo arquivo de migration no diretório database/migrations.

2. Edição da Migration
Abra o arquivo de migration recém-criado (geralmente localizado em database/migrations) e adicione o seguinte código para definir a estrutura da tabela TBL_TRATAMENTOS:

```ruby
php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTratamentosTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_tratamentos', function (Blueprint $table) {
            $table->id();
            $table->string('tratamento', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_tratamentos');
    }
}

```

3. Aplicação da Migration
Execute o seguinte comando para aplicar as alterações no banco de dados:

```ruby
php artisan migrate
```

Este comando criará a tabela TBL_TRATAMENTOS no banco de dados configurado no arquivo .env.

Conclusão
A tabela TBL_TRATAMENTOS foi criada com sucesso. Agora você pode usar esta tabela em seu aplicativo Laravel para armazenar tratamentos.
</details>







## Documentação:
<details>
<summary>Criação da View para Cadastro de Tratamentos</summary>

Objetivo
O objetivo desta documentação é guiar na criação da view para o cadastro de tratamentos na tabela TBL_TRATAMENTOS em um aplicativo Laravel.

Passos
1. Criação do Controller
Se ainda não tiver um controller para os tratamentos, crie um usando o seguinte comando:

```ruby
php artisan make:controller TratamentoController
```

Abra o arquivo gerado em app/Http/Controllers/TratamentoController.php e adicione os métodos necessários para o cadastro.

2. Criação da Rota
Abra o arquivo de rotas em routes/web.php e adicione a rota para o cadastro de tratamentos:


```ruby
php
use App\Http\Controllers\TratamentoController;

Route::resource('tratamentos', TratamentoController::class);
```


3. Criação da View
Crie uma nova view para o cadastro de tratamentos em resources/views/tratamentos/create.blade.php. Você pode usar o seguinte código como ponto de partida:


```ruby
html
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Cadastrar Tratamento</h2>
        <form action="{{ route('tratamentos.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="tratamento">Tratamento:</label>
                <input type="text" name="tratamento" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
@endsection
```

4. Ajustes no Controller
No método store do TratamentoController, adicione o código necessário para salvar os tratamentos no banco de dados.

5. Adição de Links
Adicione links na sua aplicação para acessar a página de cadastro de tratamentos, por exemplo, na barra de navegação.

Conclusão
Agora você tem uma view para o cadastro de tratamentos. Acesse a página e teste o processo de cadastro.

</details>
