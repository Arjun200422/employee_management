@extends('layouts.app')

@section('content')
    <h2>Dashboard</h2>
    <p>Welcome to the Employee Management System!</p>
    <a href="{{ route('employees.index') }}" class="btn btn-primary">Go to Employee List</a>
    <a href="{{ route('employees.create') }}" class="btn btn-primary">Add New Employee</a>
@endsection