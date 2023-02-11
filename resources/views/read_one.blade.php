

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <br>
    <div class="container"></div>
    <div class="row">
<nav class="navbar navbar-light bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
        <br>
        <br>
        </a>
    </div>
</nav>
        
            <div class="col-md-8">
            <br>
            <h1 style="text-align:center; color:coral; font-size:Bold; font-family:Arial, Helvetica, sans-serif;">
                WELCOME TO {{ $post->post_tittle }}</h1>

            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> {{ $post->post_tittle }}</h5>
                        <p class="card-text">{{ $post->post_content }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </div>
            </div>
        <div class="col-md-4 bg-secondary">
        </div>
</div>
</div>




</body>
</html>