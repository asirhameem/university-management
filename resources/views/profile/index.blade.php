


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/dashboardstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>

    <input type="checkbox" id="check">
    <!---header-->
    <header>
    
        <label for="check">
        <i class="fa fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left-area">
            <h3>Student <span>Profile</span></h3>
        </div>
        <div class="right-area">
        <ul class="navbar">
        <li>  <a href="/logout" class="logout_btn">Logout</a></li>
        <li>  <a href="#" class="logout_btn">Edit Tradition</a>
        <ul class="next">
        <li><a href="edit_feature.php" class="logout_btn">Edit Feature</a></li>
        
        </ul>
    </li>
          <li>  <a href="" class="logout_btn">Add Performance</a>
          <ul class="next">
        <li><a href="{{route('profile.skillupload')}}" class="logout_btn">Photography</a></li>
        
        </ul>
        </li>
       
         
        </ul>  
        </div>
        
    </header>

    <!---sidebar-->
    
        <div class="sidebar">
            <center>
               

                                   
                <img src="/<%= data[0].dp %>" class="profile-img" alt="">
               <h4>{{$email}}</h4>
               
                
                
            </center>
            <a href="/courses"><i class="fa fa-desktop" aria-hidden="true"></i><span>Registration</span></a>
            <a href="/library"><i class="fa fa-cogs" aria-hidden="true"></i><span>Library</span></a>
            <a href="/showregister/{{$email}}"><i class="fa fa-table" aria-hidden="true"></i><span>Show Registration</span></a>
            <a href="/studentDashboard/showborrow/<%=data[0].email%>"><i class="fa fa-th" aria-hidden="true"></i><span>Show Borrowed Book</span></a>
            <a href="{{route('profile.showskill', $uid)}}"><i class="fa fa-info-circle" aria-hidden="true"></i><span>Show Upload</span></a>
            <a href="{{route('profile.showorder', $uid)}}"><i class="fa fa-sliders-h" aria-hidden="true"></i><span>Show Order</span></a>
           
            
        </div>
        
        
<div class="content">
    <form method="post">
    {{csrf_field()}}
        <p>User Name</p>
            <input type="text" name="username" id="username" placeholder="enter username">
           
            <input type="submit" name="submit" value="post"></br>
    </form>
   <div class="tableform1">
       <button type="button" id="studentlist">Profile Info</button>

       <table id="student" class="table table-hover table-condensed" >
        <tr>
            <th>Department</th>
            <th>CGPA</th>
            <th>Admission Date</th>
            <th>Student Status</th>
        </tr>
       
    </table>
   </div>
</div>


<script>
    $('#studentlist').on('click', function() {
        $.ajax({
            url: '/student/<%=data[0].uid%>',
            method: 'get',
            dataType: 'json',
            success: function(data) {
                var msg = "";
                for (var i = 0; i < data.length; i++) {
                    //var msg = data[i].n_details + "  - " + data[i].posted_by;
                    msg = msg + "<tr> <td> " + data[i].department + " </td> <td> " + data[i].cgpa + " </td> <td> " + data[i].admission_date + " </td> <td> " + data[i].student_status + " </td> </tr>";
                }
                $('#student').append(msg);
            },
            error: function(response) {
                alert('server error occured')
            }
        });
    })
</script>
    
  
     
    
</body>
</html>