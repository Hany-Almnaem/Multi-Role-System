@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>إدارة الطلبات</h1>
        <a href="{{ route('requests.create') }}" class="btn btn-primary">إنشاء طلب</a>
        <table class="table">
            <thead>
                <tr>
                    <th>المستخدم</th>
                    <th>الحالة </th>
                    <th>التفاصيل</th>
                    <th>القيام بـ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($requests as $request)
                    <tr>
                        <td>{{ $request->user->name }}</td>
                        <td>{{ $request->status }}</td>
                        <td>{{ $request->details }}</td>
                        <td>

                            <a href="{{ route('requests.show', $request) }}" class="btn btn-info">عرض</a>
                            <a href="{{ route('requests.edit', $request) }}" class="btn btn-warning">تعديل</a>
                            <form action="{{ route('requests.destroy', $request) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure?')">حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
