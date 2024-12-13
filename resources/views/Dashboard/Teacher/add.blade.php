@extends('Dashboard.layouts.master')
@section('main')


<h3 class="text-center">إضافة استاذ</h3>

<form action="{{route('trainers.store')}}" method="post">
  @csrf
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">الاسم</label>
    <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="enter your name" name="name">
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">البريد</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="enter your email" name="email">
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">رقم الهاتف</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="enter your phone" name="phone">
  </div>

  <select name="magor" id=""  class="form-select" aria-label="Default select example">
    <option selected value="هندسة ">هندسة البرمجيات</option>
    <option value="قواعد البيانات">قواعد البيانات</option>
    <option value="الذكاء الصنعي">الذكاء الاصطناعي</option>
    <option value="الشبكات">الشبكات</option>
  </select>


  <button class="btn btn-primary my-2">حفظ</button>

</form>
 @endsection