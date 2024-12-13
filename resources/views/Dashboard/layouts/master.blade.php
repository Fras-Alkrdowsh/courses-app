<!DOCTYPE html>
<html lang="en" >
@include('Dashboard.includes.head')
<body>
@include('Dashboard.layouts.header')
@include('Dashboard.layouts.sidebar')
<main id="main" class="main" dir="rtl">
@yield('main')
</main>
@include('Dashboard.layouts.footer')
</body>
@include('Dashboard.includes.scripts')
</html>