@extends('admin.layouts.app')

@section('content')

<section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              conten2
            </header>


            <a href="add.php" class="btn btn-primary">เพิ่มข้อมูล</a>

            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>ลำดับ</th>
                    <th>อัพโหลดโดย</th>
                    <th>รูป</th>
                    <th>แก้ไขข้อมูล</th>
                    <th>ลบข้อมูล</th>

                  </tr>
                </thead>


                <tbody>
                    @foreach ($content as $rows)
                    <tr>
                        <td>{{$loop->iteration }}</td>
                        <td>{{$rows->user->username  }}</td>
                        <td>{{$rows->text }}</td>
                        <td>{{$rows->image }}</td>
                        <td><a href="editedit.php" class="btn btn-warning">แก้ไขข้อมูล</a></td>
                        <td><button type="submit" class="btn btn-danger">ลบข้อมูล</button></td>
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
  <!--main content end-->

</section>

@endsection
