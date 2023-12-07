@extends('layouts.main')

@section('content')
    <div class="edit">
        <h1>Edit Character</h1>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.characters.update', $character) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name: </label>
                <input type="text" class="form-control @error('name') is-invalid  @enderror" id="name" name="name"
                    value="{{ old('name', $character->name) }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="background" class="form-label">Background: </label>
                <textarea class="form-control @error('background') is-invalid  @enderror" id="background" rows="3"
                    name="background">{{ old('background', $character->background) }}</textarea>
                @error('background')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        <label for="height" class="form-label">Altezza: </label>
                        <input type="number" class="form-control @error('height') is-invalid  @enderror" id="height"
                            name="height" value="{{ old('height', $character->height) }}">
                        @error('height')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="weight" class="form-label">Peso: </label>
                        <input type="number" class="form-control @error('weight') is-invalid  @enderror" id="weight"
                            name="weight" value="{{ old('weight', $character->weight) }}">
                        @error('weight')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="armour_class" class="form-label">Classe armatura: </label>
                        <select class="form-control @error('armour_class') is-invalid  @enderror" name="armour_class"
                            id="armour_class" value="{{ old('armour_class', $character->armour_class) }}">
                            <option value="Leggera">Leggera</option>
                            <option value="Media">Media</option>
                            <option value="Pesante">Pesante</option>
                        </select>
                        @error('armour_class')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image: </label>
                <input type="text" class="form-control @error('image') is-invalid  @enderror" id="image"
                    name="image" value="{{ old('image', $character->image) }}">
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="row">
                <div class="col-2">
                    <div class="mb-3">
                        <label for="FOR" class="form-label">FOR: </label>
                        <input type="number" class="form-control @error('FOR') is-invalid  @enderror" id="FOR"
                            name="FOR" value="{{ old('FOR', $character->FOR) }}">
                        @error('FOR')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-2">
                    <div class="mb-3">
                        <label for="DES" class="form-label">DES: </label>
                        <input type="number" class="form-control @error('DES') is-invalid  @enderror" id="DES"
                            name="DES" value="{{ old('DES', $character->DES) }}">
                        @error('DES')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-2">
                    <div class="mb-3">
                        <label for="COS" class="form-label">COS: </label>
                        <input type="number" class="form-control @error('COS') is-invalid  @enderror" id="COS"
                            name="COS" value="{{ old('COS', $character->COS) }}">
                        @error('COS')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-2">
                    <div class="mb-3">
                        <label for="INT" class="form-label">INT: </label>
                        <input type="number" class="form-control @error('INT') is-invalid  @enderror" id="INT"
                            name="INT" value="{{ old('INT', $character->INT) }}">
                        @error('INT')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-2">
                    <div class="mb-3">
                        <label for="SAG" class="form-label">SAG: </label>
                        <input type="number" class="form-control @error('SAG') is-invalid  @enderror" id="SAG"
                            name="SAG" value="{{ old('SAG', $character->SAG) }}">
                        @error('SAG')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-2">
                    <div class="mb-3">
                        <label for="CAR" class="form-label">CAR: </label>
                        <input type="number" class="form-control @error('CAR') is-invalid  @enderror" id="CAR"
                            name="CAR" value="{{ old('CAR', $character->CAR) }}">
                        @error('CAR')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>


            <button class="btn btn-primary" type="submit">Edit</button>

        </form>
    </div>
@endsection
