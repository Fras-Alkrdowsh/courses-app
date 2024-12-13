@extends('Dashboard.layouts.master')
@section('main')

<form action="{{route('courses.update',$catigory->id)}}" method="post" enctype="multipart/form-data">
  @method('put')

  @csrf

  
  
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">الاسم</label>
    <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="" name="name" value="{{$catigory->name}}">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">لمحة</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="description" value="{{$catigory->description}}">
  </div> 
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">مدة الكورس وقت </label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="duration" value="{{$catigory->duration}}">
  </div> 
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">صورة</label>
    <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="" name="image" value="{{$catigory->image}}">
  </div>
  <br>


  <select name="trainer_id" id=""  class="form-select" aria-label="Default select example">
    @foreach ($trainers as $item)
    <option selected value="{{$item->id}}">{{$item->name}}</option>

    @endforeach
    
  </select>

  <button class="btn btn-primary my-2">save</button>

</form>
@endsection