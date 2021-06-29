@extends("layout")
@section("page_title","Brands")
@section("main")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Brands</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url("brands/new")}}" >New Brands</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Logo</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Qty</th>
{{--                        <th>Category count</th>--}}
                        <th>Created at</th>
                        <th>Updated at</th>
                        </thead>
                        <tbody>
                        @foreach($brands as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td><img style="height:70px;width:70px;object-fit: contain" src=" {{$item->image}}" alt=""></td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->qty}}</td>
                                {{--                                <td>{{$item->category_name}} (Su dung Join table)</td>--}}
{{--                                <td>{{$item->Category->id}}</td>--}}
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
