<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="{{asset('jquery-3.5.1.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

  <input type="number" id="search" placeholder="Enter course id">
  <input type="button" id="btn_search" value="search">
  </br>

  <input type="button" name="btn_fetchall" value="Fetch all Notice">
  </br>

  <table id="userTable" style="border-collapse: collapse;" border="1">
  <thead>
  <tr>
        <th> s.no </th>
        <th> Course Id </th>
        <th> Notice </th>
        <th> Description </th>
  </tr>
  </thead>
  <tbody></tbody>
  </table>

  <script type="text/javascript">

  $(document).ready(function(){
     //fetch all records
     $('#btn_fetchall').click(function(){
          fetchRecords(0);
     });

      //fetch record by id
      $('#btn_search').click(function(){
          var userid = $('#search').val();
          if(userid > 0)
          {
              fetchRecords(userid);
          }
        });
  });

  function fetchRecords(nid)
  {
      $.ajax({
          url: 'getUsers/'+nid,
          type: 'get',
          dataType: 'json',
          success: function(response){
              var len = 0;
              if(response[data] != null){
                  len = response['data'].length;
              }
              //Empty tbody
              $('#userTable tbody').empty();

              if(len > 0)
              {
                  for(var i = 0 ; i < len ; i++)
                  {
                      var nid = response['data'][i].nid;
                      var cid = response['data'][i].cid;
                      var noticename = response['data'][i].noticename;
                      var description = response['data'][i].description;

                      var tr_str = "<tr>" +
                         "<td align= 'center'>"+(i+1)+"</td>"+
                         "<td align= 'center'>"+cid+"</td>"+
                         "<td align= 'center'>"+noticename+"</td>"+
                         "<td align= 'center'>"+description+"</td>"+
                         
                         "</tr>";

                         $('#userTable tbody').append(tr_str);
                         
                  }

              }
              else
              {
                  var tr_str = "<tr>"+
                       "<td align='center' colspan='4'> No record found.</td>"
                       +"</tr>";
                       $('#userTable tbody').append(tr_str);
              }
          }
      });
  }
  
  </script>
    
</body>
</html>