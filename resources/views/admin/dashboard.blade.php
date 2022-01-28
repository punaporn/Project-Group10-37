@extends('admin.layouts.app')

@section('content')

<!-- container section start -->
<section id="container">
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            admin
                        </header>


                        <a href="editadmin.php" class="btn btn-primary">เพิ่มข้อมูล</a>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>Name</th>
                                        <th>Usersname</th>
                                        <th>เบอร์โทรศัพท์</th>
                                        <th>แก้ไขข้อมูล</th>
                                        <th>ลบข้อมูล</th>

                                    </tr>
                                </thead>

                              {{-- @foreach ($user as $rows)

                                <tbody>
                                    <tr>
                                        <td>{{$rows->id }}</td>
                                        <td>{{$rows->name }}</td>
                                        <td>{{$rows->username }}</td>
                                        <td>{{$rows->phone }}</td>
                                        <td><a href="editedit.php" class="btn btn-warning">แก้ไขข้อมูล</a></td>
                                        <td><button type="submit" class="btn btn-danger">ลบข้อมูล</button></td>
                                    </tr>

                                </tbody>

                         @endforeach --}}

                            </table>
                        </div>

                    </section>
                </div>
            </div>

        </section>
    </section>
</section>



@endsection
