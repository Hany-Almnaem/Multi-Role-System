@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>إنشاء مستخدم </h1>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">الإسم</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">الإيميل</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">كلمة المرور </label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="role">الدور</label>
                <select id="role" name="role" class="form-control" required>
                    <option value="user">مستخدم</option>
                    <option value="app_admin">مسؤول التطبيق</option>
                    <option value="app_manager">مدير التطبيق</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">إضافة مستخدم </button>
        </form>
    </div>
@endsection
