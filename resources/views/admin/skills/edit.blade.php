@extends('layouts.main')




@section('content')
    <div class="create">
        <h1>Create Skill</h1>

        <form action="{{ route('admin.skills.update', $skill) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name: </label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name',$skill->name) }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione: </label>
                <textarea class="form-control" id="description" rows="3" name="description">{{ old('description',$skill->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="Trait" class="form-label">Tratto distintivo: </label>
                <select name="trait" class="form-select" aria-label="Default select example">

                    <option {{  old('trait',$skill->trait) === 'FOR' ? 'selected' : '' }} value="FOR">FOR </option>
                    <option {{  old('trait',$skill->trait) === 'DES' ? 'selected' : '' }} value="DES">DES </option>
                    <option {{  old('trait',$skill->trait) === 'COS' ? 'selected' : '' }} value="COS">COS </option>
                    <option {{  old('trait',$skill->trait) === 'INT' ? 'selected' : '' }} value="INT">INT </option>
                    <option {{  old('trait',$skill->trait) === 'SAG' ? 'selected' : '' }} value="SAG">SAG </option>
                    <option {{  old('trait',$skill->trait) === 'CAR' ? 'selected' : '' }} value="CAR">CAR </option>

                  </select>
            </div>


            <button class="btn btn-primary" type="submit">Crea</button>
            <button class="btn btn-danger" type="reset">Reset</button>

        </form>
    </div>
@endsection
