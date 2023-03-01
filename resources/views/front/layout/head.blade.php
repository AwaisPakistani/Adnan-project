<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="generator" content="Hugo 0.84.0">
    <title>{{$site_identity->site_name}}</title>
    <link rel="icon" href="{{url('storage/'.$site_icon->site_icon->url)}}" type="image/png" />
      <!-- summernote -->
<link rel="stylesheet" href="{{url('assets/plugins/summernote/summernote-bs4.css')}}">
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
 
<script>tinymce.init({selector:'textarea'});</script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css">
    <!-- Bootstrap core CSS -->
<link href="{{url('assets/front/dist/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{url('assets/front/dist/css/datatable.min.css')}}" rel="stylesheet">
<link href="{{url('assets/front/dist/css/cdn.css')}}" rel="stylesheet">
<link href="{{url('assets/front/dist/css/style.css')}}" rel="stylesheet">
<link href="{{url('assets/front/dist/css/signin.css')}}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{url('assets/front/dist/css/headers.css')}}" rel="stylesheet">
    <link href="{{url('assets/front/dist/css/carousel.css')}}" rel="stylesheet">
    <!-- <link href="{{url('assets/front/dist/css/cheatsheet.css')}}" rel="stylesheet"> -->
    
  </head>
  <body style="padding:0px;">
    


<main>

  
   
  

