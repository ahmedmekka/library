<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="./addbooks.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Library</title>
</head>

<body>
    <!--nav start-->
    <nav class="navbar navbar-expand-lg nav">
        <div class="container-md">
            <a class="navbar-brand" href="#">Library</a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="./index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">books</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--nav end-->
    <!--start of form to add books-->
    <div class="header2">
        <form class="form-inline mb-3">
            <h3 class="title">LIST OF BOOKS :</h3>
            <button type="button" id="btn">ajouter</button>
        </form>
    </div>
    <div class="mrgn1">
        <div class="container">

            <form action="create.php" method="post">
                <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" class="form-control" name="Title">
                </div>
                <div class="form-group">
                    <label for="Author">Author</label>
                    <input type="text" class="form-control" name="Author">
                </div>
                <div class="input-group">
                    <label for="inputGroupFile04">image</label>
                    <input type="file" class="form-control" name="image">

                </div>
                <div class="form-group">
                    <label for="Title">published at</label>
                    <input type="text" class="form-control" id="dateP">
                </div>
                <button type="submit" name="Add" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
    <!--end of form to add books-->
</body>

</html>