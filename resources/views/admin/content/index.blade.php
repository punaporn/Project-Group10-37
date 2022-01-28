
@extends('admin.layouts.app')

@section('content')
<section id="main-content">
    <section class="wrapper">

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              content
            </header>


            <a href="{{route('content_add')}}" class="btn btn-primary">เพิ่มข้อมูล</a>

            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อ</th>
                    <th>เนื้อหา</th>
                    <th>แก้ไขข้อมูล</th>
                    <th>ลบข้อมูล</th>

                  </tr>
                </thead>

                @foreach ($content as $rows)

                <tbody>
                    <tr>
                        <td>{{$rows->id }}</td>
                        <td>{{$rows->name  }}</td>
                        <td>{{$rows->detail }}</td>
                        <td><a href="{{route('content_edit',$rows->id)}}" class="btn btn-warning">แก้ไขข้อมูล</a></td>
                        <td><a href="{{route('content_remove',$rows->id)}}"class="btn btn-danger">ลบข้อมูล</a></td>
                    </tr>

                      </tbody>

                      @endforeach
                    </table>


                  </div>

                </section>
              </div>
            </div>

          </section>
        </section>
        <!--main content end-->

      </section>


@endsection
