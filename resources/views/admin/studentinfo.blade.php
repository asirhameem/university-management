<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Student INFO </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/ionicons.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="#">University Management System</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="/adminhome" class="nav-link">Home</a></li>
          <li class="nav-item active">
            <div class="bs-example">
              <div class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Userlist</a>
                <div class="dropdown-menu">
                  <a href="{{route('adminhome.studentshow')}}" class="dropdown-item">Student</a>
                  <a href="{{route('adminhome.teachershow')}}" class="dropdown-item">Teacher</a>
                   <a href="{{route('adminhome.employeeshow')}}" class="dropdown-item">Employee</a>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item"><a href="{{route('adminhome.profile')}}" class="nav-link">Profile</a></li>
         
          <li class="nav-item">
            <div class="bs-example">
              <div class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Others</a>
                <div class="dropdown-menu">
                  <a href="{{route('adminhome.course')}}" class="dropdown-item">All Course</a>
                  <a href="{{route('adminhome.message')}}" class="dropdown-item">Messages</a>
                   <a href="{{route('adminhome.warning')}}" class="dropdown-item">Notice</a>
                  <a href="{{route('adminhome.library')}}" class="dropdown-item">Library</a>
                 <a href="{{route('adminhome.financials')}}" class="dropdown-item">Financials</a>
                </div>
              </div>
            </div>
          </li>
         
          <li class="nav-item"><a href="/logout" class="nav-link">Logout</a></li>

        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    

     <section class="ftco-section ftco-no-pb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading"></span>
            <h2 class="mb-2"> Student -- {{$users[0]->name}} </h2>
          </div>
        </div>
      </div>
    </section>

    <div class="list-group" align="center" >
    


<div class="row">
@foreach($users as $user)
                            <div class="col-12">
                               
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">UserId</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            {{$users[0]->uid}} 
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Full Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            {{ $users[0]->name }}
                                            </div>
                                        </div>
                                        <hr />

                                         <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            {{ $users[0]->email }}
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Username</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            {{ $users[0]->username }}
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Password</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            {{ $users[0]->password }}
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">status</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            {{ $users[0]->status }}
                                            </div>
                                        </div>
                                        <hr />

                                       
                                           <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">CGPA</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            {{ $students[0]->cgpa }}  
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Department</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            {{ $students[0]->department }}  
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">DOB</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            {{ $students[0]->dob }}  
                                            </div>
                                        </div>
                                        <hr />

                                         <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Admission Date </label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            {{ $students[0]->admission_date  }}  
                                            </div>
                                        </div>
                                        <hr />

                                         <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Student Status </label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            {{ $students[0]->student_status  }}  
                                            </div>
                                        </div>
                                        <hr />

                                       
                                    </div>
                                   
                                </div>
                            </div>
                            @endforeach
                        </div>


                    
    

   
   
    <div class="col-md-6">
      <a href="{{ route('student.edit', $users[0]->uid) }} " class="list-group-item list-group-item-action"><h4>Update</h4> </a>
      <a href=" {{ route('student.delete', $users[0]->uid) }}" class="list-group-item list-group-item-action"><h4>Disable</h4> <br> </a>
       <a href="{{ route('student.message', $users[0]->uid) }}" class="list-group-item list-group-item-action"><h4>Message</h4> <br> </a>
        <a href="{{ route('student.warn', $users[0]->uid) }} " class="list-group-item list-group-item-action"><h4>Notice</h4>  </a>
     
</div>
</div>
</div>

<script src="/js/jquery.min.js"></script>
  <script src="/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.easing.1.3.js"></script>
  <script src="/js/jquery.waypoints.min.js"></script>
  <script src="/js/jquery.stellar.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.magnific-popup.min.js"></script>
  <script src="/js/aos.js"></script>
  <script src="/js/jquery.animateNumber.min.js"></script>
  <script src="/js/bootstrap-datepicker.js"></script>
  <script src="/js/jquery.timepicker.min.js"></script>
  <script src="/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="/js/google-map.js"></script>
  <script src="/js/main.js"></script>

  </body>
  </html>