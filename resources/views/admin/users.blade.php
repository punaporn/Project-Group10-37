@extends('admin.layouts.app')

@section('content')
<section id="main-content">
    <section class="wrapper">

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        จัดการสมาชิก
                    </header>
                    <a href="add.php" class="btn btn-primary">เพิ่มข้อมูล</a>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>แก้ไขข้อมูล</th>
                                    <th>ลบข้อมูล</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>นางสาว พรรณพร โตนวล</td>
                                    <td>พรรณพร</td>
                                    <td>*************</td>
                                    <td><a href="editchart-chartjs.php" class="btn btn-warning">แก้ไขข้อมูล</a></td>
                                    <td><button type="submit" class="btn btn-danger">ลบข้อมูล</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>นาย กฤตภัค สกุลวัชรโยธิน</td>
                                    <td>กฤตภัค</td>
                                    <td>*************</td>
                                    <td><a href="editchart-chartjs.php" class="btn btn-warning">แก้ไขข้อมูล</a></td>
                                    <td><button type="submit" class="btn btn-danger">ลบข้อมูล</button></td>

                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>นาย ภูริพัฒน์ ยาวิไชย</td>
                                    <td>ภูริพัฒน์</td>
                                    <td>*************</td>
                                    <td><a href="editchart-chartjs.php" class="btn btn-warning">แก้ไขข้อมูล</a></td>
                                    <td><button type="submit" class="btn btn-danger">ลบข้อมูล</button></td>

                                <tr>
                                    <td>4</td>
                                    <td>นาย ศรัณย์ ศรีทอง</td>
                                    <td>ศรัณย์</td>
                                    <td>*************</td>
                                    <td><a href="editchart-chartjs.php" class="btn btn-warning">แก้ไขข้อมูล</a></td>
                                    <td><button type="submit" class="btn btn-danger">ลบข้อมูล</button></td>

                                </tr>

                                </tr>
                            </tbody>
                        </table>
                    </div>

                </section>
            </div>
        </div>
    </section>
</section>

@endsection
