@extends('layouts.main')

@section('content')
    <div class="show my-3">
        <h1>Show - {{ $character->name }}</h1>

        <div class="d-flex my-4">
            <img src="{{ $character->image }}" alt="{{ $character->name }}">
            <div class="p-3">
                <p>{{ $character->background }}</p>
                <p>Altezza: {{ $character->height }} | Peso: {{ $character->weight }} |Classe Armor: {{ $character->armour_class }}</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">FOR</th>
                            <th scope="col">DES</th>
                            <th scope="col">COS</th>
                            <th scope="col">INT</th>
                            <th scope="col">SAG</th>
                            <th scope="col">CAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>{{ $character->FOR }}</th>
                            <th>{{ $character->DES }}</th>
                            <th>{{ $character->COS }}</th>
                            <th>{{ $character->INT }}</th>
                            <th>{{ $character->SAG }}</th>
                            <th>{{ $character->CAR }}</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
@endsection
