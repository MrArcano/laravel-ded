@extends('layouts.main')




@section('content')
    <div class="create">
        <h1>Create Race</h1>

        <form action="{{ route('admin.races.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name: </label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione: </label>
                <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="Mod_FOR" class="form-label">Mod_FOR: </label>
                <input type="number" class="form-control" id="Mod_FOR" name="Mod_FOR" value="{{ old('Mod_FOR') }}">
            </div>
            <div class="mb-3">
                <label for="Mod_DES" class="form-label">Mod_DES: </label>
                <input type="number" class="form-control" id="Mod_DES" name="Mod_DES" value="{{ old('Mod_DES') }}">
            </div>
            <div class="mb-3">
                <label for="Mod_COS" class="form-label">Mod_COS </label>
                <input type="number" class="form-control" id="Mod_COS" name="Mod_COS" value="{{ old('Mod_COS') }}">
            </div>
            <div class="mb-3">
                <label for="Mod_INT" class="form-label">Mod_INT </label>
                <input type="number" class="form-control" id="Mod_INT" name="Mod_INT" value="{{ old('Mod_INT') }}">
            </div>
            <div class="mb-3">
                <label for="Mod_SAG" class="form-label">Mod_SAG </label>
                <input type="number" class="form-control" id="Mod_SAG" name="Mod_SAG" value="{{ old('Mod_SAG') }}">
            </div>
            <div class="mb-3">
                <label for="Mod_CAR" class="form-label">Mod_CAR </label>
                <input type="number" class="form-control" id="Mod_CAR" name="Mod_CAR" value="{{ old('Mod_CAR') }}">
            </div>

            <button class="btn btn-primary" type="submit">Crea</button>
            <button class="btn btn-danger" type="reset">Reset</button>

        </form>
    </div>
@endsection
