@extends('layouts.main')

@section('content')
    <div class="index">

        <div class="d-flex align-items-center gap-3">
            <h1 class="d-inline-block my-4">Lista Razze</h1>
            <a class="btn btn-success" href="{{ route('admin.races.create') }}">Add <i class="fa-solid fa-circle-plus"></i></a>
        </div>

        <table class="table table-dark mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Mod_FOR</th>
                    <th scope="col">Mod_DES</th>
                    <th scope="col">Mod_COS</th>
                    <th scope="col">Mod_INT</th>
                    <th scope="col">Mod_SAG</th>
                    <th scope="col">Mod_CAR</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($races as $race)
                    <tr>
                        <td>{{ $race->id }}</td>
                        <td>{{ $race->name }}</td>
                        <td>{{ $race->description }}</td>
                        <td>{{ $race->Mod_FOR }}</td>
                        <td>{{ $race->Mod_DES }}</td>
                        <td>{{ $race->Mod_COS }}</td>
                        <td>{{ $race->Mod_INT }}</td>
                        <td>{{ $race->Mod_SAG }}</td>
                        <td>{{ $race->Mod_CAR }}</td>
                        <td class="text-nowrap">
                            <a class="btn btn-warning" href="{{ route('admin.races.edit', $race) }}"><i
                                    class="fa-solid fa-pencil"></i></a>
                            @include('admin.partials.form-delete', [
                                'route' => route('admin.races.destroy', $race),
                                'message' => 'Sei sicuro di voler eliminare questa razza?',
                            ])
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
