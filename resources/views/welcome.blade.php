<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js">
    <title>Home</title>
</head>
<body>
    <section class="container mt-5">
        <div class="box">
            <div class="box-body">
                    <div class="form-group">
                        <h1>
                            Menu Link is here
                        </h1>
                        <a href="{{ url('menus')}}" class="btn btn-dark">Menu Create </a>
                        <a href="{{ url('menus-show')}}" class="btn btn-info">Menu Show</a>
                    </div>
            </div>
        </div>
    </section>
</body>
</html>