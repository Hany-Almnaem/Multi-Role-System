@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>تعديل معلومات المستخدم</h1>
        <form action="{{ route('users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">الإسم</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">الإيميل</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}" required>
            </div>
            <div class="form-group">
                <label for="role">الدور</label>
                <select id="role" name="role" class="form-control" required>
                    <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>مستخدم</option>
                    <option value="app_admin" {{ $user->role === 'app_admin' ? 'selected' : '' }}>مسؤول التطييق</option>
                    <option value="app_manager" {{ $user->role === 'app_manager' ? 'selected' : '' }}>مدير التطبيق</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">تحديث التفاصيل</button>
        </form>
    </div>
@endsection
