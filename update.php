<?php
        include 'process.php';

        
        if (isset($_POST['save'])){
           /*  echo "<pre>";
            print_r($_POST);
            echo "<pre>";
            exit; */
                $id = $_GET['id'];
            $name = $_POST['name'];
            $location = $_POST['location'];
            $sql = "UPDATE data SET name = '".$name."', location='".$location."' WHERE id = '".$id."'";
            $query = mysqli_query($conn,$sql);

            if ($query){
                header("location: display.php");
            }else {
                echo "Please check Your query";
            }

            }
          
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>

<body>
    <div class="row">
        <div class="container justify-content-center">
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="location">location: </label>
                    <input type="text" name="location" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" name="save" class="btn btn-primary">Save</button>
                </div>

            </form>
        </div>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>