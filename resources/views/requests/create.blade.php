@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>إنشاء طلب</h1>
        <form action="{{ route('requests.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="user_id">User</label>
                <select id="user_id" name="user_id" class="form-control" required>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="status">الحالة</label>
                <select id="status" name="status" class="form-control" required>
                    <option value="Pending">معلق</option>
                    <option value="Approved">مقيول</option>
                    <option value="Rejected">مرفوض</option>
                    <option value="Completed">مكتمل</option>
                </select>
            </div>
            <div class="form-group">
                <label for="details">التفاصيل</label>
                <textarea id="details" name="details" class="form-control" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">إنشاء طلب</button>
        </form>
    </div>
@endsection
