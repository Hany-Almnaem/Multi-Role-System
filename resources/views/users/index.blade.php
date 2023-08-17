<!-- resources/views/users/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>أدارة المستخدمين</h1>
        <a href="{{ route('users.create') }}" class="btn btn-primary">إضافة مستخدم </a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>الاسم </th>
                    <th>الإيميل</th>
                    <th>الدور</th>
                    <th>القيام بـ</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">عرض</a>
<a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">تعديل</a>

                            <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('هل انت متأكد?')">حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
