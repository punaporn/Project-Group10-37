@extends('admin.layouts.app')

@section('content')

<section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
                Product
            </header>


            <a href="{{route('product_add')}}" class="btn btn-primary">เพิ่มข้อมูล</a>

            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>ชื่อ</th>
                    <th>รายละเอียด</th>
                    <th>ราคา</th>
                    <th>ประเภท</th>
                    <th>รูป</th>
                    <th>แก้ไขข้อมูล</th>
                    <th>ลบข้อมูล</th>

                  </tr>
                </thead>


                <tbody>
                    @foreach ($product as $rows)

                    <tr>
                        <td>{{$rows->name }}</td>
                        <td>{{$rows->description }}</td>
                        <td>{{$rows->price }}</td>
                        <td>{{$rows->category_id }}</td>
                        <td class="col-md-3"><img width="500" height="300" src="{{ asset('admin/product/' . $rows->image) }}" /></td>
                        <td><a href="{{route('product_edit',$rows)}}" class="btn btn-warning">แก้ไขข้อมูล</a></td>
                        <td><a href="{{route('product_remove',$rows)}}"class="btn btn-danger">ลบข้อมูล</a></td>
                    </tr>

                    @endforeach
                </tbody>
@endsection
