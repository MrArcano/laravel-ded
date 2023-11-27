@extends('layouts.main')

@section('content')
    <div class="create">
        <h1>Create Character</h1>
        <form action="{{ route('characters.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name: </label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="background" class="form-label">Background: </label>
                <textarea class="form-control" id="background" rows="3" name="background"></textarea>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        <label for="height" class="form-label">Altezza: </label>
                        <input type="number" class="form-control" id="height" name="height">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="weight" class="form-label">Peso: </label>
                        <input type="number" class="form-control" id="weight" name="weight">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="armour_class" class="form-label">Classe armatura:  </label>
                        <select class="form-control" name="armour_class" id="armour_class">
                            <option value="Leggera">Leggera</option>
                            <option value="Media">Media</option>
                            <option value="Pesante">Pesante</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image: </label>
                <input type="text" class="form-control" id="image" name="image">
            </div>

            <div class="row">
                <div class="col-2">
                    <div class="mb-3">
                        <label for="FOR" class="form-label">FOR: </label>
                        <input type="number" class="form-control" id="FOR" name="FOR">
                    </div>
                </div>
                <div class="col-2">
                    <div class="mb-3">
                        <label for="DES" class="form-label">DES: </label>
                        <input type="number" class="form-control" id="DES" name="DES">
                    </div>
                </div>
                <div class="col-2">
                    <div class="mb-3">
                        <label for="COS" class="form-label">COS: </label>
                        <input type="number" class="form-control" id="COS" name="COS">
                    </div>
                </div>
                <div class="col-2">
                    <div class="mb-3">
                        <label for="INT" class="form-label">INT: </label>
                        <input type="number" class="form-control" id="INT" name="INT">
                    </div>
                </div>
                <div class="col-2">
                    <div class="mb-3">
                        <label for="SAG" class="form-label">SAG: </label>
                        <input type="number" class="form-control" id="SAG" name="SAG">
                    </div>
                </div>
                <div class="col-2">
                    <div class="mb-3">
                        <label for="CAR" class="form-label">CAR: </label>
                        <input type="number" class="form-control" id="CAR" name="CAR">
                    </div>
                </div>
            </div>


            <button class="btn btn-primary" type="submit">Crea</button>
            <button class="btn btn-danger" type="reset">Reset</button>

        </form>
    </div>
@endsection
