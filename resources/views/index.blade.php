<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="css/style.css">
<style>
    .color{
        outline: 0;
        border-width: 0 0 2px;
        border-color: wheat;
        background-color: black;
    }
</style>
<body  style="background-color: black">

    <center><img src="img/IMG_0700.PNG"   style="width: 100%;"></center>

        <div id="carouselExampleIndicators fluid " class="carousel slide mt-1" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="Img/photo_2022-01-25_16-14-58.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Img/photo_2022-01-25_16-14-58.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Img/photo_2022-01-25_16-14-58.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    <form method="POST" action="/insert">
        @csrf

    <div class="form-row">
        <div class="form-group col-md-6  ">
            <label for="Name" class="text-white">Имя</label>
            <input type="text" style="" name="name"  class="form-control color" id="Name" >
        </div>
        <div class="form-group col-md-6  ">
            <label for="Firstname" class="text-white">Фамилия</label>
            <input type="text"name="lastname" class="form-control  color" id="Firstname" >
        </div>
        <div class="form-group col-md-6  ">
            <label for="telephone" class="text-white">Телефон</label>
            <input type="tel" name="tel" class="form-control  color" id="telephone" >
        </div>

    </div>

    <div class="form-group col-md-6  ">
        <label for="inputState" class="text-white">Тип Вашего заказа:</label>
        <select id="inputState" name="type"  class="form-control color text-white bg-dark">
            <option selected  disabled>-----</option>
            <option  value="1">Доставка курьером</option>
            <option value="2">В заведение</option>
            <option value="3">Самовывоз</option>
        </select>
    </div>

      <div class="type">

      </div>
    </form>











</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</html>

<script>
    $('#inputState').change(function(){
        var value = $(this).val();

        $.ajax({
            type:'get',
            url:'type',
            data:{'id':value},

            success:function(data){




                  $(".type").html(data);
                //$("#product_name").val(number.id);





            },

        });




    });
</script>
