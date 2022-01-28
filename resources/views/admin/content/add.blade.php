@extends('admin/layouts.app')



@section('content')



        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">หน้า contents1</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">หน้า contents1</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">หน้า contents1</h6>
                </div>
                <div class="card-body">
                  <form method="post" action="{{route('content_create')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label for="exampleInputEmail1">deadtext</label>
                      <input type="text" class="form-control"  id="name" name="name" aria-describedby="emailHelp" placeholder="ชื่อ">

                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">text</label>
                      <input type="text" class="form-control" id="detail" name="detail" aria-describedby="emailHelp" placeholder="detail">

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>



            </div>


          </div>

          <!--Row-->


        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
@endsection
