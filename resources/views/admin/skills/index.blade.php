@extends('layouts.main')

@section('content')
    <div class="index">

        <h1 class="d-inline-block my-4">Index Skill</h1>
        <a class="btn btn-success" href="{{ route('admin.skills.create') }}"><i class="fa-solid fa-circle-plus"></i></a>

        <table class="table table-dark mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Trait</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($skills as $skill)
                    <tr>
                        <td>{{ $skill->id }}</td>
                        <td>{{ $skill->name }}</td>
                        <td>{{ $skill->description }}</td>
                        <td>{{ $skill->trait }}</td>

                        <td>
                            <a class="btn btn-warning" href="{{ route('admin.skills.edit', $skill) }}"><i
                                    class="fa-solid fa-pencil"></i></a>
                            @include('admin.partials.form-delete', [
                                'route' => route('admin.skills.destroy', $skill),
                                'message' => 'Sei sicuro di voler eliminare questa abilità?',
                            ])
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
