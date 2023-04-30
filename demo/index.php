

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Testing Demo Project</title>
</head>
<body>

<h1 class="bg-info text-light text-center py-2">Testing</h1>
<div class="container">

<!-- Modal -->
<?php 
include 'modal.php';
include 'user.php';


 ?>
 


<div class="row" id="bot">
    <div class="col-10">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class ="input-group-text bg-primary">
                    <input class="form-control my-9 mx-auto" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0 bg-dark" type="submit">Search</button>

                </span>
            </div>
        </div>
    </div>
    <button class="btn btn-primary" data-toggle="modal" data-target="#usermodal">
        Add user

    </button>
    <a href='viewpa.php'class='mr-3 profile'title='View Profile'><i class='fa-solid fa-eye' style='color: #06891c;'></i></a>
    

    </button>
</div>
<?php
include 'table.php';


?>
<?php
 
 
 ?>
 <div class="container"><nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled" ><a class="page-link" href="#">Previous</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</div>

</div>



<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script> 
<script src="js/script.js">

</script>   
</body>
</html>