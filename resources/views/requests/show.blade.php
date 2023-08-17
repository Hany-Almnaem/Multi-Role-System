@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>تفاصيل الطلب</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">المستخدم : {{ $request->user->name }}</h5>
                <p class="card-text"><strong>الحالة :</strong> {{ $request->status }}</p>
                <p class="card-text"><strong>التفاصيل:</strong> {{ $request->details }}</p>
            </div>
        </div>
        <a href="{{ route('requests.edit', $request) }}" class="btn btn-warning">تعديل الطلب</a>
        <form action="{{ route('requests.destroy', $request) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('هل آنت متأكد?')">حذف الطلب</button>
        </form>
    </div>
@endsection
