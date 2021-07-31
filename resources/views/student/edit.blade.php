@extends("layout")
@section("page_title","Student")
@section("main")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Students</h1>
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
                    <form action="{{url("admin/students/update",["id"=>$student->id])}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="{{$student->name}}" class="form-control"/>
                            @error("name")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="text-capitalize">Email</label>
                            <input type="text" name="image"  value="{{$student->email}}" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="text-capitalize">Phone</label>
                            <input type="number" name="Phone" value="{{$student->phone}}" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="text-capitalize">FeedBack</label>
                            <input type="number" name="FeedBack" value="{{$student->feedBack}}" class="form-control"/>
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
