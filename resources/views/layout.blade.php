<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home rental</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
    
</body>
<style>
    
    .slider-img{
        height: 500px !important;
    }
    .trending-img{
        height: 100px;
    }
    .trending-item{
        float: left;
        width: 20%;
        /* display: block; */
    }
    .trending-wrapper{
        margin: 20px;
    }
    .detail-img{
        height: 300px;
    }
    .search-box{
        width:500px !important;
    }
    .foot{
        margin-top: 15rem;
    }
    /* .custom{
        background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRK3yv3oXVqvD2irGtKy8iXRoGLmDXBHbKNKw&usqp=CAU");
        height: 30rem;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    } */
</style>
</html>