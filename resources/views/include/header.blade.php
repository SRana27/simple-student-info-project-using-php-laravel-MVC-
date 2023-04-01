<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('assets')}}/image/images.jpg" height="40px" width="60px"></a>
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Student
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('student.from')}}">Student-Add</a></li>
                    <li><a class="dropdown-item" href="{{route('student.info')}}">Student-Info</a> </li>
                    <li><a class="dropdown-item" href="{{route('student.update')}}">Student-Update</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Department
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('department.from')}}">Department-Add</a></li>
                    <li><a class="dropdown-item" href="{{route('department.info')}}">Department-Info</a></li>
                    <li><a class="dropdown-item" href="{{route('department.update')}}">Department-Update</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>

    </div>
</nav>
