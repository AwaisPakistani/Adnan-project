@php 
use App\Models\Siteintro;
$icon=Siteintro::with('site_icon')->where('id',1)->first();
$iconpath=$icon->site_icon->url;
@endphp
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{url('storage/'.$iconpath)}}" type="image/png" />
  <!--plugins-->
  <link href="{{url('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
  <link href="{{url('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
  <link href="{{url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
  <link href="{{url('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{url('assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
  <link href="{{url('assets/plugins/input-tags/css/tagsinput.css')}}" rel="stylesheet" />
  <link href="{{url('assets/css/style.css')}}" rel="stylesheet" />
  <link href="{{url('assets/css/icons.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- loader-->
	<link href="{{url('assets/css/pace.min.css')}}" rel="stylesheet" />
  <!--Theme Styles-->
  <link href="{{url('assets/css/dark-theme.css')}}" rel="stylesheet" />
  <link href="{{url('assets/css/light-theme.css')}}" rel="stylesheet" />
  <link href="{{url('assets/css/semi-dark.css')}}" rel="stylesheet" />
  <link href="{{url('assets/css/header-colors.css')}}" rel="stylesheet" />
  <!--plugins-->
  <link href="{{url('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <!-- Datatable -->
  <link href="{{url('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
  <!--end datatable-->
<!-- Start Select2 links -->
  <link href="{{url('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
	<link href="{{url('assets/plugins/select2/css/select2-bootstrap4.css')}}" rel="stylesheet" />
  <!-- End Select2 links -->
  <!--Theme Styles-->
  <style>
    #profile_display{
      display: block;
      width: 40%;
      height:220px;
      margin: 10px auto;
      border-radius: 100%;
    }
     #profile_display:hover{
      display: block;
      width: 40%;
      height:220px;
      margin: 10px auto;
      border-radius: 100%;
      opacity: 0.7;
      background-color: grey;
     }

     #icon_display{
      display: block;
      width: 20%;
      height:75px;
      margin: 10px auto;
      border-radius: 100%;
    }
     #icon_display:hover{
      display: block;
      width: 20%;
      height:75px;
      margin: 10px auto;
      border-radius: 100%;
      opacity: 0.7;
      background-color: grey;
     }
     #logo_display{
      display: block;
      width: 25%;
      height:100px;
      margin: 10px auto;
      border-radius: 10%;
    }
     #logo_display:hover{
      display: block;
      width: 25%;
      height:100px;
      margin: 10px auto;
      border-radius: 10%;
      opacity: 0.7;
      background-color: grey;
     }
  </style>
  <title>{{$icon->site_name}}</title>
</head>
