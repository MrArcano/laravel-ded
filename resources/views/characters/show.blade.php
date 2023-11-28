@extends('layouts.main')

@section('content')
    <h1 class="text-center">Show</h1>
    <div class="text-end">
        <a class="btn btn-warning " href="{{ route('characters.edit', $character) }}"><i class="fa-solid fa-pencil"></i></a>
    </div>
    <div class="show my-3">

        <div class="row">
            <div class="col">
                <div class="image m-auto">
                    <img src="{{ $character->image }}" alt="{{ $character->name }}">

                    <span class="name-character"><strong>{{ $character->name }}</strong></span>

                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <p><strong>Descrizione: </strong>{{ $character->background }}</p>
                    <p><strong>Altezza: </strong>{{ $character->height }} | <strong>Peso: </strong>{{ $character->weight }} | <strong>Classe Armor: </strong>{{ $character->armour_class }}</p>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-2 my-3">
                        <div class="attribute">
                            <p class="val">
                                <strong>{{ $character->FOR }}</strong>
                            </p>
                            <p class="text">FOR</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 my-3">
                        <div class="attribute">
                            <p class="val">
                                <strong>{{ $character->DES }}</strong>
                            </p>
                            <p class="text">DES</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 my-3">
                        <div class="attribute">
                            <p class="val">
                                <strong>{{ $character->COS }}</strong>
                            </p>
                            <p class="text">COS</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 my-3">
                        <div class="attribute">
                            <p class="val">
                                <strong>{{ $character->INT }}</strong>
                            </p>
                            <p class="text">INT</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 my-3">
                        <div class="attribute">
                            <p class="val">
                                <strong>{{ $character->SAG }}</strong>
                            </p>
                            <p class="text">SAG</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 my-3">
                        <div class="attribute">
                            <p class="val">
                                <strong>{{ $character->CAR }}</strong>
                            </p>
                            <p class="text">CAR</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
