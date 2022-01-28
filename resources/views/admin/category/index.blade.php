@extends('admin.layouts.app')

@section('content')

<section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
                Categories
            </header>


            <a href="{{route('category_add')}}" class="btn btn-primary">เพิ่มข้อมูล</a>

            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>ชื่อ</th>
                    <th>แก้ไขข้อมูล</th>
                    <th>ลบข้อมูล</th>

                  </tr>
                </thead>


                <tbody>
                    @foreach ($category as $row)
                    <tr>
                        <td>{{$row->name }}</td>
                        <td><a href="{{route('category_edit',$row->id)}}" class="btn btn-warning">แก้ไขข้อมูล</a></td>
                        <td><a href="{{route('category_remove',$row->id)}}" class="btn btn-danger">ลบข้อมูล</a></td>
                    </tr>
                    @endforeach
                </tbody>


              </table>
            </div>

          </section>
        </div>
      </div>

    </section>
  </section>
  <!--main Category end-->

</section>

@endsection
