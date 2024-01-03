<?php

// app/Models/Membro.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    protected $table = 'tbl_membros'; // Nome da tabela no banco de dados
    protected $primaryKey = 'id';
    public $timestamps = false; // Defina como true se a tabela tiver colunas created_at e updated_at

    // Adicione esta linha se precisar especificar os campos que podem ser preenchidos em massa (mass assignment)
    protected $fillable = ['nome', 'roll', 'endereco', /* adicione outros campos aqui */];
    
    // Adicione relacionamentos Eloquent (se aplicável)
    // public function relacionamento() { ... }
}