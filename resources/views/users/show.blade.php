@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>تفاصيل المستخدم</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $user->name }}</h5>
                <p class="card-text"><strong>الإيميل :</strong> {{ $user->email }}</p>
                <p class="card-text"><strong>الدور:</strong> {{ $user->role }}</p>
                <!-- Other user details -->
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">تعديل التفاصيل</a>
            </div>
        </div>
    </div>
@endsection
