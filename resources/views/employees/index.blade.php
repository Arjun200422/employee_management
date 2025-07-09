@extends('layouts.app')

@section('content')
    <h2>Employees</h2>
    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Number</th>
                <th>Position</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->age }}</td>
                    <td>{{ $employee->gender }}</td>
                    <td>{{ $employee->number }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>
                        <a href="{{ route('employees.show', $employee) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('employees.edit', $employee) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">No employees found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection