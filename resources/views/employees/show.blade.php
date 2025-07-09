@extends('layouts.app')

@section('content')
    <h2>Employee Details</h2>
    <p><strong>ID:</strong> {{ $employee->id }}</p>
    <p><strong>Name:</strong> {{ $employee->name }}</p>
    <p><strong>Age:</strong> {{ $employee->age }}</p>
    <p><strong>Gender:</strong> {{ $employee->gender }}</p>
    <p><strong>Phone Number:</strong> {{ $employee->number }}</p>
    <p><strong>Position:</strong> {{ $employee->position }}</p>
    <p><strong>Address:</strong> {{ $employee->address }}</p>
    <a href="{{ route('employees.index') }}" class="btn btn-primary">Back to List</a>
@endsection