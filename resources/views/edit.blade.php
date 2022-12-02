@extends('layouts.master')

@section('title', 'Editar contato')

@section('content')
    <div id="contact-create-container" class="col-md-3 offset-md-3 justify-content-center">

        <h1>Editar contato</h1>

        <form action="/update/{{ $contact->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $contact->name }}"
                    placeholder="José da Silva">
            </div>
            <div class="form-group">
                <label for="phone">Telefone:</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $contact->phone }}"
                    placeholder="+55 XX XXXXX-XXXX">
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="city">Cidade:</label>
                    <input type="text" class="form-control" id="city" name="city" value="{{ $contact->city }}"
                        placeholder="Votuporanga">
                </div>
                <div class="form-group col-md-3">
                    <label for="uf">Estado:</label>
                    <input type="text" class="form-control" id="uf" name="uf" value="{{ $contact->uf }}"
                        placeholder="SP">
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <input type="submit" class="btn btn-warning" value="Salvar contato">
            </div>
        </form>
    </div>
@endsection
