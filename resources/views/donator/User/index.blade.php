@extends('layouts.donator')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <div>
            <h2 class="text-2xl font-bold mb-4">User Details</h2>
        </div>
    </div>

    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Password:</strong> 12345678</p>
        <p><strong>Registered At:</strong> {{ $user->created_at->format('d M Y, h:i A') }}</p>
    </div>
@endsection
