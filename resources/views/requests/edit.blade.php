@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>تعديل الطلب</h1>
        <form action="{{ route('requests.update', $request) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="user_id">المستخدم</label>
                <select id="user_id" name="user_id" class="form-control" required>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" {{ $user->id === $request->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="status">الحالة</label>
                <select id="status" name="status" class="form-control" required>
                    <option value="Pending" {{ $request->status === 'Pending' ? 'selected' : '' }}>معلق</option>
                    <option value="Approved" {{ $request->status === 'Approved' ? 'selected' : '' }}>مقبول</option>
                    <option value="Rejected" {{ $request->status === 'Rejected' ? 'selected' : '' }}>مرفوض</option>
                    <option value="Completed" {{ $request->status === 'Completed' ? 'selected' : '' }}>مكتمل</option>
                </select>
            </div>
            <div class="form-group">
                <label for="details">التفاصيل</label>
                <textarea id="details" name="details" class="form-control" rows="4" required>{{ $request->details }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">تعديل الطلب</button>
        </form>
    </div>
@endsection
