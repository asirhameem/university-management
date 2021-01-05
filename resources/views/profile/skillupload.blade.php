<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
    <link rel="stylesheet" href="/css/fileupload.css">
</head>
<body>
    <div class="content">
        

        <div class="form">
      
        <h4>Add File</h4>
        <form name="myForm" method="post" enctype="multipart/form-data">
        
        <font color="green"> <p> Photo Title :</p><input type="text" id="title" name="title" value="{{old('title')}}" ></font>
       
      
       <font color="green"> <p> Upload Photo :</p><input type="file" id="photo" name="photo"></font>
        
       <font color="green"> <p> photo description :</p><input type="text" id="description" name="description" value="{{old('description')}}" ></font>
       
       <input type="hidden"  name="uid" value="{{$uid}}">
        <input type="submit" value="upload">
       </form>
       <a class="btn btn-primary" href="{{route('profile.index')}}" role="button">Back</a></br>

       @foreach($errors->all() as $err)

         {{$err}} </br>

           @endforeach  
       </div>
       
       </div>

      

      
</body>
</html>