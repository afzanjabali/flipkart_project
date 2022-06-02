<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Flipkart</title>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

    
</body>
<style>
    .custom-login{
          height:500px;
          padding-top:100px;
    }
    img.slider-img
    {
        height:400px !important;
    }
    .trending-image
    {
        height:100px !important;

    }
    .slider-text
    {
        background-color: #35443585;
    }
    .tending-item
    {
        float:left;
        width:20%;
    }
    .custom-product
    {
        height:2000px;
    }
    .trending-wrapper
    {
        margin:30px;

    }
    .trending-heading
    {
        padding-left:500px;
    }
    .detail-img
    {
        height:200px;
    }
    .search-product
    {
        margin:50px 0px;
    }
    .cart{
        padding-right:3px;
        padding-top:6px !important;
        text-decoration:none !important;
    }
    .cart-list{
        border-bottom:1px solid  #35443585 !important;
        margin-bottom:5px;
        padding-top:5px;
        padding-bottom:5px;
        padding-left:10px
        
    }
    </style>
</html>