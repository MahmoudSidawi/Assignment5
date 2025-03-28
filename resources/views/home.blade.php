
@extends('layout')

@section('title', 'Home')

@section('content')
<h1 class="text-center">Welcome to Laravel Kickstart</h1>

<div class="text-center mt-4">
    <a href="{{ route('students.index') }}" class="btn btn-primary">View Students</a>
    <a href="{{ route('students.create') }}" class="btn btn-success">Add Student</a>
</div>
@endsection
