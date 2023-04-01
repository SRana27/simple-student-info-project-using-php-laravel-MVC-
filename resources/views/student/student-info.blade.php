@extends('master')
@section('title')
   Student-info
@endsection
@section('content')


<section class="pt-5 min-vh-100">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 m-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center"> All Student Info</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>sl</th>
                                        <th>SEID</th>
                                        <th> Name</th>
                                        <th>Eamil</th>
                                        <th> Phone</th>
                                        <th>Course_Name</th>
                                        <th> Department</th>
                                        <th>Gender</th>
                                        <th>Image</th>
                                        <th>Student Address</th>
                                     </tr>
                                </thead>
                                <tbody>
                                @php $i=1 @endphp
                                @foreach($student_data as $student)

                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$student->seid}}</td>

                                    <td>{{$student->name}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>{{$student->course_name}}</td>
                                    <td>{{$student->department}}</td>
                                    <td>{{$student->gender}}</td>
{{--                                    <td>{{$student->image}}</td>--}}
                                    <td> <img src="{{asset($student->image)}}" width="100"></td>

                                    <td>{{$student->address}}</td>

                                </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


