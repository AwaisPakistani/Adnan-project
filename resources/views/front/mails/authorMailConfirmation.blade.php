<!DOCTYPE html>
<html>
<head>
	<title>Register Email</title>
</head>
<body>
<table>
	<tr><td>Dear {{$name}}</td></tr>
	<tr><td>Please click below link to activate your account.</tr>
	<tr><td><a href="{{url('confirm/'.$code)}}" class="btn btn-success">Activate Account</a></td></tr>
	<tr><td>Thanks & Regards,</td></tr>
	<tr><td>Shukar Website</td></tr>
</table>
</body>
</html>