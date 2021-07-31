@extends("layout")
@section("page_title","Student")
@section("main")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Student</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-6">
                    <form action="{{url("admin/students/save")}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="{{old("name")}}" class="form-control"/>
                            @error("name")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="text-capitalize">email</label>
                            <input type="file" name="email"  value="{{old("email")}}" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="text-capitalize">phone</label>
                            <input type="number" name="phone" value="{{old("phone")}}" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="text-capitalize">feedback</label>
                            <input type="number" name="feedback" value="{{old("feedback")}}" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
