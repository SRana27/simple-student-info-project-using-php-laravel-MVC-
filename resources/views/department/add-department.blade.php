@extends('master')
@section('title')
    Department from
@endsection
@section('content')
    <section class="pt-5 min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto" >
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center"> Add Department</h3>

                        </div>
                        <div class="card-body">
                            <form action="{{route('add.department')}}" method="post">
                                @csrf
                                <h3 class="text-success  text-center">{{session('message')}}</h3>
                                <div class="form-group row my-2">
                                    <label for="" class="col-md-3 form-label"><b>Department Code</b></label>
                                    <div class="col-md-9">
                                        <input type="text" name="dept_code" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label for="" class="col-md-3 form-label"><b>Department Name</b></label>
                                    <div class="col-md-9">
                                        <input type="text" name="dept_name" class="form-control" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row my-2">
                                    <label for="" class="col-md-6 form-label"></label>
                                    <div class="col-md-3">
                                        <div class="d-grid">
                                            <input type="submit" name="btn" value="add" class="btn btn-outline-primary">
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

