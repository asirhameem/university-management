<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill Performance</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="container">
        
            <img class="logo" src="/images/aiub.png" width="150" height="150">
            <img class="logo" src="/images/a.jpg" width="200" height="150">
            <div class="datetime">
                <div class="date">
                    <p id="test"></p>
                </div>
                
    </div>
</header>
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#feature">Offer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/library">library</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/course">courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/skill">Student Skill</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/studentlogin">Login</a>
          </li>
          
        </ul>
      </div>
    </nav>
    </section>
<div class="container">
    <div class="categories">
        <div class="small-container">
        <div class="row">
        @for($i=0; $i < count($studentskill); $i++)
            <div class="col-3">
                  
          <a href="{{route('home.details', $studentskill[$i]['id'])}}"> <img src="{{asset('uploads/' . $studentskill[$i]['photo'])}}" class="profile-img" alt=""></a>
                <div class="item">
                    <h4>{{$studentskill[$i]['id']}}</h4>
                    
                </div>
                
            </div>
            @endfor
        </div>
        </div>
    </div>
</div>
   
<script>
  var date = new Date();
 document.getElementById("test").innerHTML = date.toDateString();
</script>

</body>
</html>