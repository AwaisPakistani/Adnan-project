<!DOCTYPE html>
<html>
<head>
	<title>Shukaar-Contact Form </title>
    <style>
        table tr td b{
            color:red;
        }
    </style>
</head>
<body>
<table style="border:0px;">
   
    <tr>
        <td><b>Name :</b></td>
        <td>{{$name}}</td>
    </tr>
    <tr>
      <td><b>Email:</b></td>
      <td>{{$email}}</td>
    </tr>
    <tr>
       <td><b>Phone:</b></td>
       <td>{{$phone}}</td>
    </tr>
    <tr>
       <td><b>Message:</b></td>
       <td>{{$messages}}</td>
    </tr>
</table>
</body>
</html>
