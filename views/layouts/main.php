<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Test TODOLIST</title>
</head>
<body>
<div class="container">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">TodoList</a>
                <a class="nav-link active" aria-current="page" href="/admin">admin panel</a>
            </div>
        </nav>
    </header>
    <div id="content">
        <form  method="post" action="/blog/create" novalidate>
            <div class="col-md-4">
                <label for="validationServer01" class="form-label">Name</label>
                <input type="text" name="name" class="form-control " placeholder="Enter your name" id="validationServer01" required>
            </div>

            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
            </div>
            <div class="col-md-6">
                <label for="exampleFormControlTextarea1" class="form-label">Textarea</label>
                <textarea class="form-control" name="description" placeholder="Todo" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">GO</button>
        </form>

        <div id="posts">

            <?php include '../views/' . $template . '.php' ?>

        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>