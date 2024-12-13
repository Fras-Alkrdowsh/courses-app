@extends('Dashboard.layouts.master')
@section('main')


<div class="pagetitle">
  
  <h1 class="text-center p-5">قائمة الدروس</h1>
  <nav>
    <ol class="breadcrumb">
    
     
    </ol>
  </nav>
</div>
<section class="section" >
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
     

          <!-- Table with stripped rows -->
          <table class="table datatable" >
            <thead>
              <tr>
                <th class="text-center">
                  اسم الدرس
                </th>
       
                <th class="text-center">المدة</th>
                <th class="text-center">الوصف</th>
            
                <th class="text-center">الكورس</th>

                <th class="text-center">تعديل معلومات الدرس</th>
              </tr>
            </thead>
            <tbody>
             
              @foreach ($lessons as $item)
                
              <tr class="text-center">
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->duration}}</td>
                <td>{{$item->catigory->name}}</td>

                <td>
                  <form action="{{route('lessons.destroy',$item->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button  class="btn btn-outline-danger">حذف</button>
                  </form>
                  <a href="{{route('lessons.edit',$item->id)}}" class="btn btn-outline-warning" >تعديل</a></td>
              </tr>  
              @endforeach
              
             
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>


    @endsection