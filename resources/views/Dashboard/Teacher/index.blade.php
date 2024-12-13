@extends('Dashboard.layouts.master')
@section('main')


<div class="pagetitle">
  
  <h1 class="text-center p-5">المدربين</h1>
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
                  الأسم
                </th>
       
                <th class="text-center">البريد</th>
                <th class="text-center">الهاتف</th>

            
                <th class="text-center">الاختصاص</th>

                <th class="text-center">تعديل معلومات أستاذ</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($trainers as $item)
                
              <tr class="text-center">
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->magor}}</td>

                <td>
                  <form action="{{route('trainers.destroy',$item->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button  class="btn btn-outline-danger">حذف</button>
                  </form><a href="{{route('trainers.edit',$item->id)}}" class="btn btn-outline-warning" >تعديل</a></td>
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