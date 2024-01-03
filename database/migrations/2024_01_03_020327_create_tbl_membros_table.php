<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblMembrosTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_membros', function (Blueprint $table) {
            $table->id();
            $table->integer('roll')->nullable();
            $table->string('nome', 200);
            $table->string('endereco', 200)->nullable();
            $table->string('numero', 200)->nullable();
            $table->string('bairro', 200)->nullable();
            $table->string('cidade', 200)->nullable();
            $table->string('estado', 200)->nullable();
            $table->string('cep', 200)->nullable();
            $table->string('complemento', 200)->nullable();
            $table->string('telpessoal', 200)->nullable();
            $table->string('contato1', 200)->nullable();
            $table->string('contato2', 200)->nullable();
            $table->string('email', 200)->nullable();
            $table->string('dizimista', 200)->nullable();
            $table->string('grupo', 200)->nullable();
            $table->string('tratamento', 200)->nullable();
            $table->string('obs', 200)->nullable();
            $table->string('sexo', 200)->nullable();
            $table->string('estado_civil', 200)->nullable();
            $table->string('ministerio', 200)->nullable();
            $table->string('grau_escolaridade', 200)->nullable();
            $table->string('batizado', 200)->nullable();
            $table->string('rg', 200)->nullable();
            $table->string('cpf', 200)->nullable();
            $table->string('nome_pai', 200)->nullable();
            $table->string('nome_mae', 200)->nullable();
            $table->string('pais_origem', 200)->nullable();
            $table->string('telefone_pais_origem', 200)->nullable();
            $table->string('ativo', 200)->nullable();
            $table->string('igreja_batismo', 200)->nullable();
            $table->string('naturalidade', 200)->nullable();
            $table->string('titulo_eleitor', 200)->nullable();
            $table->string('filhos', 200)->nullable();
            $table->string('conjuge', 200)->nullable();
            $table->string('campo13', 200)->nullable();
            $table->string('tipo_moradia', 200)->nullable();
            $table->string('campo15', 200)->nullable();
            $table->string('historico', 200)->nullable();
            $table->string('profissao', 200)->nullable();
            $table->string('cidade_batismo', 100)->nullable();
            $table->string('observacao', 200)->nullable();
            $table->date('data_nasc')->nullable();
            $table->date('datebatismo')->nullable();
            $table->date('datevalcarteira')->nullable();
            $table->date('dateadmissao')->nullable();
            $table->date('dateconsagra')->nullable();
            $table->date('datecasamento')->nullable();
            $table->date('datenascconjuge')->nullable();
            $table->date('data_batismo')->nullable();
            $table->string('imagem', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_membros');
    }
}
