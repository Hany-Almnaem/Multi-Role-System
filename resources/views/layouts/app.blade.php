<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>نظام متعدد المستخدمين </title>
</head>
<body>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <nav>
        <!-- Navigation links -->
        <a href="#">الرئيسية </a>
        <a href="#">حول</a>
        <a href="#">المحتوى</a>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        <!-- Footer content -->
        <p>&copy; {{ date('2023') }}. كل الحقوق محفوظة.</p>
    </footer>
</body>
</html>
