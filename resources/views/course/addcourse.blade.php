<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Add Course</title>
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
  
     <div class="col-md-9 register-right">
                       
                        
                            

                             
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Add Course</h3>
                                <form method="post" enctype="multipart/form-data" action="{{route('book.add')}}">

                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="row register-form">
                                   <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Course Name " name="cname"  />
                                            <br><div style="color: red"> {{$errors->first('cname')}}</div>
                                         
                                        </div>
                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Course Description "  name="cdescription"  />
                                            <br><div style="color: red"> {{$errors->first('cdescription')}}</div>
                                         
                                        </div>
                                       
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Course Teacher" name="cteacher"  />
                                            <br><div style="color: red"> {{$errors->first('cteacher ')}}</div>
                                      
                                        </div>

                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Course Start" name="cstart"  />
                                            <br><div style="color: red"> {{$errors->first('cstart')}}</div>
                                      
                                        </div>

                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Course End" name="cend"  />
                                            <br><div style="color: red"> {{$errors->first('cend')}}</div>
                                      
                                        </div>

                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Course Pic" name="cpic"  />
                                            <br><div style="color: red"> {{$errors->first('cpic')}}</div>
                                      
                                        </div>
                                        
                                       
                                        <input type="submit" name="submit" value="Add Course">

                                        
                                    </div>
                                   
                                    </div>
                                        
                                </div>
                                </div>
                                  </form> 
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
</body>
</html>                  
