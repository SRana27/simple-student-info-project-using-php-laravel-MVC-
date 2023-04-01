@extends('master')
@section('title')
    Student-info
@endsection
@section('content')


    <section class="pt-5 min-vh-100">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 m-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center"> All Student Info</h3>
                        </div>
                        <div class="card-body ">
                            <table class="table table-bordered table-hover">

                                <thead>
                                <tr class="text-center">
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
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>


                                         @php $i=1 @endphp
                                         @foreach($student_data as $student)
                                    <tr class="text-center">
                                         <td>{{$i++}}</td>
                                        <td>{{$student->seid}}</td>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->phone}}</td>
                                        <td>{{$student->course_name}}</td>
                                        <td>{{$student->department}}</td>
                                        <td>{{$student->gender}}</td>
                                        <td>
                                            <img src="{{asset($student->image)}}" height="50px" width="50" class="img-fluid">
                                        </td>
                                        <td>{{$student->address}}</td>
                                        <td class="d-flex">
                                            <a href="{{route('student.edit.from',['student_id'=>$student->id])}}" class="btn btn-primary mx-2">Edit</a>

                                            <form action="{{route('student.delete')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="student_id" value="{{$student->id}}">

                                                <button class="btn btn-danger mx-2"  onclick="return confirm('are you sure for delete')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>

                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

