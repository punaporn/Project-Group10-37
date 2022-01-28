@extends('admin.layouts.app')

@section('content')
<section id="main-content">
    <section class="wrapper">


      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Background
            </header>


            <a href="add.php" class="btn btn-primary">เพิ่มข้อมูล</a>

            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>ลำดับ</th>
                    <th>รูป</th>
                    <th>แก้ไขข้อมูล</th>
                    <th>ลบข้อมูล</th>
                  </tr>
            </table>
          </div>

        </section>
      </div>
    </div>
    </section>
</section>
@endsection
