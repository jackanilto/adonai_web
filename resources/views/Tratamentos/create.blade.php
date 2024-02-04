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