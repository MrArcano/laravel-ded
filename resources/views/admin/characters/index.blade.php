@extends('layouts.main')

@section('content')
    <div class="index">

        <h1 class="d-inline-block my-4">Index Character</h1>
        {{-- Export link --}}
        <a class="badge btn btn-secondary ms-2" href="{{ route('admin.export-csv') }}">Export CSV</a>

        {{-- Import form --}}
        <form class="form-group" action="{{ route('admin.import-csv') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <input class=" form-control" type="file" name="csv_file" accept=".csv">
                <button class="btn btn-secondary" type="submit">Import CSV</button>
            </div>
        </form>
        <table class="table table-dark mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Altezza</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Classe armatura</th>
                    <th scope="col">FOR</th>
                    <th scope="col">DES</th>
                    <th scope="col">COS</th>
                    <th scope="col">INT</th>
                    <th scope="col">SAG</th>
                    <th scope="col">CAR</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($characters as $character)
                    <tr>
                        <td>{{ $character->id }}</td>
                        <td>{{ $character->name }}</td>
                        <td>{{ $character->height }}</td>
                        <td>{{ $character->weight }}</td>
                        <td>{{ $character->armour_class }}</td>
                        <td>{{ $character->FOR }}</td>
                        <td>{{ $character->DES }}</td>
                        <td>{{ $character->COS }}</td>
                        <td>{{ $character->INT }}</td>
                        <td>{{ $character->SAG }}</td>
                        <td>{{ $character->CAR }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('admin.characters.show', $character) }}"><i
                                    class="fa-solid fa-eye"></i></a>
                            <a class="btn btn-warning" href="{{ route('admin.characters.edit', $character) }}"><i
                                    class="fa-solid fa-pencil"></i></a>
                            @include('admin.partials.form-delete', [
                                'route' => route('admin.characters.destroy', $character),
                                'message' => 'Sei sicuro di voler eliminare questo personaggio?',
                            ])
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
