<?php
session_start();
if(isset($_SESSION["em"])) {
    header("location:page.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interncrowd Landing page </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- This is the line of the code for linking the bootstrap css file when you are not using the CDN link  -->
    <!-- <link rel="stylesheet" href="bootstrap.min.css" /> -->
    <link rel="stylesheet" href="style.css" />
</head>

<body>

        <!-- This is how you can separate the component of the particular web page  -->
    <?php
    include "include/navbar.php";
    ?>

   <?php
   include "include/breadcrumb.php";
   ?>

    <div class="container-lg">

        <h3>
            Enter The World Of Coding By<br>
            Enrolling In Our Internship Program<br>
            Today!!
        </h3>
        <p>
            "In every student, there is a power to change the world"
        </p>


        <button class="btn btn-danger">Let's Go </button>


    </div>

    <div>
        <h1 style="text-align:center; margin-bottom: 100px;"> Our Services</h1>
    </div>

    <div id="card" class="card" onmouseover="mouse()" style="width: 18rem;">

        <img src="image3.png" class="card-img-top" alt="Web development">
        <div class="card-body">
            <h5 class="card-title">Web Development</h5>
            <p class="card-text">Website needs to work across all devices and it needs to be fast as possible.</p>
            <a href="#" class="btn btn-primary">Click To Visit</a>
        </div>
    </div>
    <div id="card1" class="card" onmouseover="mouse()" style="width: 18rem;">

        <img src="image4.png" class="card-img-top" alt="Java">
        <div class="card-body">
            <h5 class="card-title">Java Development</h5>
            <p class="card-text">It includes owning a particular application or working on several at one time..</p>
            <a href="#" class="btn btn-primary">Click To Visit</a>
        </div>
    </div>

    <div id="card2" class="card" onmouseover="mouse()" style="width: 18rem;">

        <img src="image5.png" class="card-img-top" alt="Cloud ">
        <div class="card-body">
            <h5 class="card-title">Cloud Computing</h5>
            <p class="card-text">It is the delivery of distinct services over the Internet..</p>
            <a href="#" class="btn btn-primary">Click To Visit</a>
        </div>
    </div>

    <div id="card3" class="card" onmouseover="mouse()" style="width: 18rem;">
        <img src="image6.png" class="card-img-top" alt="Digital ">
        <div class="card-body">
            <h5 class="card-title">Digital Marketing</h5>
            <p class="card-text">It is the marketing and advertising of a business, product, or service using social
                media.</p>
            <a href="#" class="btn btn-primary">Click To Visit</a>
        </div>
</div>




<?php
include "include/footer.php";
?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="dom.js"></script>
</body>

</html>