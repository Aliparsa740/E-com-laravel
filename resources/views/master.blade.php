<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-commeproject</title>

    <script src="/js/jquery.js"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.min.js"></script>

</head>
<body>
{{View::make('header')}}

@yield("content")
{{View::make('Footer')}}

</body>
<style>
    .custom-login{
        height: 500px;
        padding-top: 130px;

    }
    .custom-product{
        height: 600px;
    }
    .card-header{
        border: #95999c solid 2px;
        shape-image-threshold: initial;
    }
   .carousel{
       height: 300px !important;
       margin-top: 2px;
      text-align: center;
       background-color: cadetblue;
   }
   .img{
       height: 300px;
   }
   .carousel-caption{

       background-color: #35443585;
   }
</style>
</html>
