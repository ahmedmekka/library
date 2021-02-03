<?php
 include('db.php');

    $query = "SELECT * FROM Books";
    $query_run = mysqli_query($connection,$query);
    
  ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="./books.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>LIBRARY</title>
        <style>
            *,
             ::after,
             ::before {
                box-sizing: initial;
            }
            
            th {
                text-align: center;
            }
        </style>
    </head>

    <body>
        <!--nav start-->
        <nav class="navbar navbar-expand-lg nav">
            <div class="container-md">
                <a class="navbar-brand" href="#">LIBRARY</a>
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
        <!--books table-->
        <div class="container">
            <?php
      include('function.php');
     ?>
                <form class="form-inline mb-3">
                    <h2 class="title">LIST OF BOOKS :</h2>
                    <button type="button" id="btn">Add</button>
                </form>
                <div id="main" class="card card-body">

                    <table id="table">
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>image</th>
                            <th>published at</th>
                            <th>action</th>
                        </tr>
                        <?php
          include('read.php');
          ?>
                    </table>
                </div>
                <!--books table end-->


    </body>

    </html>