@extends('Dashboard.layouts.master')
@section('main')

<form action="{{route('trainers.update',$trainer->id)}}" method="post">
    @csrf
    @method('put')



    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">الاسم</label>
    <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="enter your name" name="name" value="{{$trainer->name}}">
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">البريد</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="enter your email" name="email"  value="{{$trainer->email}}">
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">رقم الهاتف</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="enter your phone" name="phone" value="{{$trainer->phone}}">
  </div>

  <select name="magor" id=""  class="form-select" aria-label="Default select example">
    <option selected value="هندسة ">هندسة البرمجيات</option>
    <option value="قواعد البيانات">قواعد البيانات</option>
    <option value="الذكاء الصنعي">الذكاء الاصطناعي</option>
    <option value="الشبكات">الشبكات</option>
  </select>

  
<button class="btn btn-primary my-2">save</button>
  
  </form>
  

  @endsection