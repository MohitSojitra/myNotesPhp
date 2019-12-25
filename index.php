<?php

    include "config.php";
    if(isset($_POST['done']))
    {
        $heading = $_POST['headings'];
        $hDes = $_POST['hDescription'];
        
        $q = "INSERT INTO `Notes`( `heading`, `hDescription`) VALUES ('$heading','$hDes')";

        $query = mysqli_query($link,$q);
    }
   
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JavaScript Notes App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <div class="container">

        <!-- Navigation Bar  -->
        <nav class="navbar navbar-dark bg-dark my-2 navStyle">
            <a class="navbar-brand text-white">My Notes</a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>

        <!-- Add Notes Section -->

        <div class="card my-2">

            <div class="card-body">
                <h5 class="card-title">My Notes</h5>
                <form method="POST">
                    <div class="form-group">
                        <input  name = "headings" type="text" id="nTitle" class="form-control my-2" placeholder="Enter Your Note Title">
                        <input type="text" name="hDescription" class="form-control" id="text" placeholder="Your Notes Text....."  >
                    </div>
                    <button class="btn btn-primary" id="addNote" name = "done">Add Note</button>
                </form>
            </div>
        </div>
        <hr>
        <h3> Your Notes Show Below</h3>
        <hr>
        <div class="container-fluid row" id="dynemic">
      
        <?php
        $q1 = "SELECT * FROM Notes";
        $query1 = mysqli_query($link , $q1);

        
            while($result = mysqli_fetch_array($query1))
            {
        ?>
            <div class="card my-3 mx-3 cardSearch" style="width: 18rem;">
                <div class="card-body" >
                    <h5 class="card-title"> <?php echo $result['heading'];?> </h5>
                    <p class="card-text"><?php echo $result['hDescription'];?></p>
                    <a href="delete.php?id=<?php echo $result['id']?>"><button class="btn btn-primary">delete</button></a>
                </div>
            </div>
            <?php
            }
            ?>

        </div>

    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- <script src="script.js"></script> -->
</body>

</html>
