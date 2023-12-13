@extends('layouts.main')




@section('content')
    <div class="create">
        <h1>Create Skill</h1>

        <form action="{{ route('admin.skills.store') }}" method="post">
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
                <label for="Trait" class="form-label">Tratto distintivo: </label>
                <select name="trait" class="form-select" aria-label="Default select example">

                    <option value="">Seleziona tratto</option>
                    <option value="FOR">FOR </option>
                    <option value="DES">DES </option>
                    <option value="COS">COS </option>
                    <option value="INT">INT </option>
                    <option value="SAG">SAG </option>
                    <option value="CAR">CAR </option>

                  </select>
            </div>


            <button class="btn btn-primary" type="submit">Crea</button>
            <button class="btn btn-danger" type="reset">Reset</button>

        </form>
    </div>
@endsection
