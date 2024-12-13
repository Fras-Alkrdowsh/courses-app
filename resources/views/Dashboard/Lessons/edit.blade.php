@extends('Dashboard.layouts.master')
@section('main')

<form action="{{route('lessons.update',$lesson->id)}}" method="post" enctype="multipart/form-data">
  @method('put')

  @csrf

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">الاسم</label>
    <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="name" value="{{$lesson->name}}">
  </div>
  
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">لمحة</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="description" value="{{$lesson->description}}">
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">صورة</label>
    <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="" name="image" value="{{$lesson->image}}">
  </div>
  <select name="catigory_id" id="" class="form-select" aria-label="Default select example">
    @foreach ($catigories as $item)
    <option selected value="{{$item->id}}">{{$item->name}}</option>

    @endforeach
    
  </select>


  <button class="btn btn-primary my-2">save</button>


</form>
@endsection