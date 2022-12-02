@extends('layouts.master')

@section('content')
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1 style="color: white">Contatos telefônicos</h1>
    </div>
    <div class="col-md-6 offset-md-1">
        @if (count($contacts) > 0)
            <div class="table-card">

                <div class="row d-flex justify-content-between mb-3">
                    <div id="search-container" class="col-md-6">
                        <form action="/contacts/search" method="POST">
                            @csrf
                            <input type="text" id="search" name="search" class="form-control" placeholder="Buscar...">
                        </form>
                    </div>
                    <a href="/create" class="btn btn-primary col-md-2">
                        <ion-icon name="add-outline"></ion-icon>Criar contato
                    </a>
                </div>
                <a href="/download-pdf" class="btn btn-secondary">Exportar PDF</a>
                <table class="table table-bordered table-sm text-center table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Cidade/UF</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td scope="row">{{ $loop->index + 1 }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->city }} / {{ $contact->uf }}</td>
                                <td class="d-flex justify-content-center">
                                    <div class="row">
                                        <a href="edit/{{ $contact->id }}" class="btn btn-info btn-sm edit-btn mb-1 mr-2">
                                            <ion-icon name="create-outline"></ion-icon> Editar
                                        </a>
                                        <form action="/contacts/{{ $contact->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm delete-btn mb-1">
                                                <ion-icon name="trash-outline"></ion-icon> Deletar
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="table-card">
                <h4>Contato não encontrado</h4>
            </div>
        @endif
    </div>
@endsection
