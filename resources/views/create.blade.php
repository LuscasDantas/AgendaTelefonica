@extends('layouts.master')

@section('title', 'Criar contato')

@section('content')
    <div id="contact-create-container" class="col-md-3 offset-md-3 justify-content-center">

        <h1>Criar contato</h1>

        <form action="/contacts" method="POST">
            @csrf
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="José da Silva" required>
                </div>
                <div class="form-group">
                    <label for="phone">Telefone:</label>
                    <input type="text" class="form-control" id="phone" name="phone"
                        placeholder="+55 XX XXXXX-XXXX" required>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="city">Cidade:</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Votuporanga" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="uf">Estado:</label>
                        <input type="text" class="form-control" id="uf" name="uf" maxlength="2" placeholder="SP" required>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <input type="submit" class="btn btn-warning" value="Salvar contato">
                </div>

        </form>
    </div>
@endsection
