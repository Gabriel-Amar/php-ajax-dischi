<?php
include __DIR__ . "/database.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Dischi</title>
    <style>
    p{
        color: #706359;
    }
    h3{
        text-transform: uppercase;
        padding-left: 5px;
        padding-right: 5px;
    }
    img{
        width: 210px;
        padding: 20px;
    }
    .text-center{
        background-color:#2e3a46;
    }
    .col-lg-2{
        flex: 0 0 18%;
        display: flex;
    }
    .container{
        padding-top: 30px;
    }
    body{
        background-color: #1e2d3b;
    }
    </style>
</head>
<body>
    <div class="container" id="app">
        <div class="row">
            <?php foreach ($dischi as $value){ ?>
            <div class="col-6 col-md-4 col-lg-2 my-5"> 
                <div class="text-center">
                    <img src="<?php echo $value["poster"] ?>" alt="">
                    <h3 class="text-light"><?php echo $value["title"] ?></h3>
                    <p><?php echo $value["author"] ?></p>
                    <p><?php echo $value["genre"] ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
<script src="js/script.js" ></script>
</body>
</html>