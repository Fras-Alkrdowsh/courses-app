
@extends('Dashboard.layouts.master')
@section('main')
<form action="{{route('students.store')}}" method="post">
  @csrf
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">الاسم</label>
    <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="enter your name" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">البريد</label>
    <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="enter your name" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">رقم الهاتف</label>
    <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="enter your name" name="phone">
  </div>

  <br>

  <button class="btn btn-primary my-2">save</button>

</form>

@endsection