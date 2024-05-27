@extends('layouts.app')

@section('content')
<div class="container">
    <h1>User Details</h1>
    <div>
        <strong>ID:</strong> {{ $user->id }}
    </div>
    <div>
        <strong>Name:</strong> {{ $user->name }}
    </div>
    <div>
        <strong>Email:</strong> {{ $user->email }}
    </div>
    <a href="{{ route('users.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection
