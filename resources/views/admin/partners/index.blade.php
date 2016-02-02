@extends('layout/app')

@section('content')
    <h1>Partners</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Type</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($partners as $partner)
                <tr>
                    <td>{{ $partner->id }}</td>
                    <td>{{ $partner->name }}</td>
                    <td>{{ $partner->type }}</td>
                    <td>{{ $partner->createdAt }}</td>
                    <td>{{ $partner->updatedAt }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No partners found.</td>
                </tr>
            @endforelse

            </tbody>
        </table>
    </div>
@stop