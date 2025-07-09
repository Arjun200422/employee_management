@extends('layouts.app')

@section('content')
    <h2>Add Employee</h2>
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        @error('name')
            <p class="error">{{ $message }}</p>
        @enderror

        <label for="age">Age:</label>
        <input type="number" name="age" id="age" value="{{ old('age') }}" required>
        @error('age')
            <p class="error">{{ $message }}</p>
        @enderror

        <label for="gender">Gender:</label>
        <select name="gender" id="gender" required>
            <option value="">Select Gender</option>
            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
            <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
        </select>
        @error('gender')
            <p class="error">{{ $message }}</p>
        @enderror

        <label for="number">Phone Number:</label>
        <input type="text" name="number" id="number" value="{{ old('number') }}" required>
        @error('number')
            <p class="error">{{ $message }}</p>
        @enderror

        <label for="position">Position:</label>
        <input type="text" name="position" id="position" value="{{ old('position') }}" required>
        @error('position')
            <p class="error">{{ $message }}</p>
        @enderror

        <label for="address">Address:</label>
        <textarea name="address" id="address" required>{{ old('address') }}</textarea>
        @error('address')
            <p class="error">{{ $message }}</p>
        @enderror

        <button type="submit">Add Employee</button>
    </form>
@endsection