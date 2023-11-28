@extends('layouts.template')
@section('title', 'Deportes')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('deportes.create') }}" class="btn btn-secondary"><i class="nav-icon fas fa-plus-circle"></i>
                    Agregar deporte</a>
                <div class="card mt-2">
                    <table class="table table-sm table-hover">
                        <thead>
                            <tr class="table-borderless">
                                <th>Nombre del deporte</th>
                                <th>Descripción del deporte</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($deportes as $deporte)
                                <tr>
                                    <td>{{ $deporte->name }}</td>
                                    <td>{{ $deporte->description }}</td>
                                    <td>
                                        <a href="{{ route('deportes.show', $deporte) }}" class="btn btn-secondary btn-sm">
                                            <i class="nav-icon fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('deportes.edit', $deporte) }}" class="btn btn-warning btn-sm">
                                            <i class="nav-icon fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('deportes.destroy', $deporte)}}" method="post" style="display: inline-block">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="nav-icon fas fa-trash"></i>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No hay deportes.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {!! $deportes->withQueryString()->links('pagination::bootstrap-4') !!}
                </div>
            </div>
        </div>
    </div>
@endsection
