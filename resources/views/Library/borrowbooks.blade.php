<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Books</title>
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
        <li><a href="/file_upload" class="logout_btn">Photography</a></li>
        <li><a href="offeradd.php" class="logout_btn">Add Offer</a></li>
        <li><a href="addchefs.php" class="logout_btn">Chefes Profile</a></li>
        <li><a href="addnews.php" class="logout_btn">LatestNews</a></li>
        </ul>
        </li>
        <li>  <a href="" class="logout_btn">Add Photo</a>
        <ul class="next">
        <li><a href="addslide.php" class="logout_btn">Add Slider</a></li>
        
        <li><a href="gellarypic.php" class="logout_btn">Add Gellary</a></li>
        </ul>
        </li>
         
        </ul>  
        </div>
        
    </header>

    <!---sidebar-->
    
        <div class="sidebar">
            <center>
                

                                   
                <img src="" class="profile-img" alt="">
               
                
            </center>
            <a href="/studentDashboard"><i class="fa fa-desktop" aria-hidden="true"></i><span>Dashboard</span></a>
            
           
            
        </div>
        
        <div class="content">
          
          <h1>Borrow Your Books</h1>
          <form method="post" id="library" enctype="multipart/form-data">
              <div class="content">
                  <div class="tableshow1">
                      <table>
                          <tr>
                              <td>Book Name</td>
                              <td><input type="text" name="name" value="{{$book_name}}"></td>
                          </tr>
                          <tr>
                            <td>Book ID</td>
                            <td><input type="text" name="lid" value="{{$lid}}"></td>
                        </tr>
                          <tr>
                              <td>Borrow Date</td>
                              <td><input type="datetime-local" id="birthdaytime" name="bdate"></td>
                          </tr>
                          <tr>
                            <td>Return Date</td>
                            <td><input type="datetime-local" id="birthdaytime" name="rdate"></td>
                        </tr>
                          <tr>
                              <td>Your Student Email</td>
                              <td><input type="text" id="" name="studentemail" value="{{$semail}}" ></td>
                          </tr>
                          <tr>
                              <td></td>
                              <td><input type="submit" name="submit" value="Borrow"></td>
                          </tr>
                         
                         
                      </table>
                  </div>
               </div>
          </form>
         </div>

         
    
</body>
</html>