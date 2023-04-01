@extends('master')
@section('title')
    Add-Student
@endsection
@section('content')

    <section class="pt-5 min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto" >
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center"> Add Student</h3>

                        </div>
                        <div class="card-body">
                            <form action="{{route('add.student')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row my-2">
                                    <label for="" class="col-md-3 form-label"><b>SEID</b></label>
                                    <div class="col-md-9">
                                        <input type="text" name="seid" class="form-control" placeholder="input Your seid">
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label for="" class="col-md-3 form-label"> <b>Name</b></label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control" placeholder="input Your name">
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label for="" class="col-md-3 form-label"><b>email</b></label>
                                    <div class="col-md-9">
                                        <input type="email" name="email"  value="" class="form-control" placeholder="input Your email">
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label for="" class="col-md-3 form-label"><b>Phone</b></label>
                                    <div class="col-md-9">
                                        <input type="text" name="phone"  value="" class="form-control" placeholder="input Your phone number">
                                    </div>
                                </div>

                                <div class="form-group row my-2">
                                    <label for="" class="col-md-3 form-label"><b>Course Name</b></label>
                                    <div class="col-md-9">
                                        <input type="text" name="course_name"  class="form-control" placeholder="input Your course">
                                    </div>
                                </div>

                                <div class="form-group row my-2">
                                    <label for="" class="col-md-3 form-label"><b>Department</b></label>
                                    <div class="col-md-9">
                                        <select name="department" id="" class="form-control">
                                            <option value="">select department</option>
                                            @foreach($departments as $department)
                                            <option value="{{$department->dept_name}}">{{$department->dept_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row my-2">
                                    <label for="" class="col-md-3 form-label"><b>Gender</b></label>
                                    <div class="col-md-9">
                                        <select name="gender" id="">
                                            <option value="">select</option>
                                            <option value="MALE">MALE</option>
                                            <option value="FEMALE">FEMALE</option>
                                            <option value="OTHER">OTHER</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label for="" class="col-md-3 form-label"><b>Image</b></label>
                                    <div class="col-md-9">
                                        <input type="file" name="image"  class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label for="" class="col-md-3 form-label"><b>Address</b></label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="address" id="" cols="20" rows="5"></textarea>
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
