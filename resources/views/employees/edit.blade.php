@extends('layouts.app')

@section('content')
    <h2>Edit Employee</h2>
    <form action="{{ route('employees.update', $employee) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $employee->name }}" required>
        @error('name')
            <p class="error">{{ $message }}</p>
        @enderror

        <label for="age">Age:</label>
        <input type="number" name="age" id="age" value="{{ $employee->age }}" required>
        @error('age')
            <p class="error">{{ $message }}</p>
        @enderror

        <label for="gender">Gender:</label>
        <select name="gender" id="gender" required>
            <option value="male" {{ $employee->gender == 'male' ? 'selected' : '' }}>Male</option>
            <option value="female" {{ $employee->gender == 'female' ? 'selected' : '' }}>Female</option>
            <option value="other" {{ $employee->gender == 'other' ? 'selected' : '' }}>Other</option>
        </select>
        @error('gender')
            <p class="error">{{ $message }}</p>
        @enderror

        <label for="number">Phone Number:</label>
        <input type="text" name="number" id="number" value="{{ $employee->number }}" required>
        @error('number')
            <p class="error">{{ $message }}</p>
        @enderror

        <label for="position">Position:</label>
        <input type="text" name="position" id="position" value="{{ $employee->position }}" required>
        @error('position')
            <p class="error">{{ $message }}</p>
        @enderror

        <label for="address">Address:</label>
        <textarea name="address" id="address" required>{{ $employee->address }}</textarea>
        @error('address')
            <p class="error">{{ $message }}</p>
        @enderror

        <button type="submit">Update Employee</button>
    </form>
@endsection