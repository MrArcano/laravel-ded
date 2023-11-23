@extends('layouts.main')

@section('content')
<h1 class="my-3 text-center ">D&D personaggi</h1>
<table class="table table-dark mt-5">
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
            </tr>
        @endforeach

    </tbody>
</table>



@endsection
