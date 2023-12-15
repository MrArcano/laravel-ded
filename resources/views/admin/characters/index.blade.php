@extends('layouts.main')

@section('content')
    <div class="index">

        <div class="d-flex align-items-center gap-3">
            <h1 class="d-inline-block my-4">Lista Personaggi</h1>
            <a class="btn btn-success" href="{{ route('admin.characters.create') }}">Add <i class="fa-solid fa-circle-plus"></i></a>
        </div>
        {{-- Export link --}}
        {{-- <a class="badge btn btn-secondary ms-2" href="{{ route('admin.export-csv') }}">Export CSV</a> --}}

        {{-- Import form --}}
        {{-- <form class="form-group" action="{{ route('admin.import-csv') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <input class=" form-control" type="file" name="csv_file" accept=".csv">
                <button class="btn btn-secondary" type="submit">Import CSV</button>
            </div>
        </form> --}}

        <table class="table table-dark bg-opacity-csm mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Razza</th>
                    <th scope="col">Abilità</th>
                    <th scope="col">Altezza</th>
                    <th scope="col">Peso</th>
                    <th scope="col" class="text-nowrap">Classe armatura</th>
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
                        <td>
                            <a class="badge text-bg-info text-decoration-none" href="#">{{ $character->race->name }}</a>
                        </td>
                        <td>
                            @forelse ($character->skills as $skill)
                                <a class="badge text-bg-info text-decoration-none" href="#">{{ $skill->name }}</a>
                            @empty
                                <a class="badge text-bg-info text-decoration-none" href="#">No Skill</a>
                            @endforelse

                        </td>
                        <td>{{ $character->height }}</td>
                        <td>{{ $character->weight }}</td>
                        <td>{{ $character->armour_class }}</td>
                        <td>{{ $character->FOR }}</td>
                        <td>{{ $character->DES }}</td>
                        <td>{{ $character->COS }}</td>
                        <td>{{ $character->INT }}</td>
                        <td>{{ $character->SAG }}</td>
                        <td>{{ $character->CAR }}</td>
                        <td class="text-nowrap">
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
