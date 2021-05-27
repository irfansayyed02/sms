<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <style>
        .btn{
            margin:0;
        }
    </style>

</head>
<body>
    
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
    <a class="navbar-brand" href="#">SMS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
        aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home
            <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Dropdown
            </a>
            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
        
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-default"
            aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        </ul>
    </div>
    </nav>
<!--/.Navbar -->
    <div class="d-flex shadow" style="height:500px;background:linear-gradient(-45deg, #9da8c7 50%, transparent 50%)">
        <div class="container-fluid my-auto">
            <div class="row">
                <div class="col-lg-6 my-auto">
                    <h1 class="display-2 font-weight-bold">School Management System</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <a href="" class="btn btn-lg btn-dark">call to action</a>
                </div>
                <div class="col-lg-6">
                   <div class="w-50 mx-auto card shadow-lg">
                        <div class="card-body">
                            <h3>Admission Form</h3>
                            <form action="" method="post" class="">
                                <!-- Material input -->
                                <div class="md-form">
                                    <input type="text" id="name" class="form-control">
                                    <label for="name">Your Name</label>
                                </div>
                                <!-- Material input -->
                                <div class="md-form">
                                    <input type="text" id="email" class="form-control">
                                    <label for="email">Your Email</label>
                                </div>
                                <!-- Material input -->
                                <div class="md-form">
                                    <input type="text" id="mobile" class="form-control">
                                    <label for="mobile">Your Mobile</label>
                                </div>
                                <!-- Material input -->
                                <div class="md-form">
                                    <input type="text" id="class" class="form-control">
                                    <label for="class">Your Class</label>
                                </div>
                                <button class="btn btn-dark btn-block">Submit Form</button>
                            </form>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
<!-- About us-->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-5">
                    <h2 class="font-weight-bold">About<br> School Management System</h2>
                    <div class="pr-5">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>
                    </div>
                    <a href="about-us-php" class="btn btn-dark">Know More</a>
                </div>
                <div class="col-lg-6" style="background:url(./images/school.jpg)">
                    <img src="./images/school.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>


<!--Our Courses-->
    <section class="py-5 bg-light">
        <div class="text-center">
            <h2 class="font-weight-bold">Our Courses</h2>
            <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <img src="./images/school.jpg" alt="" class="rounded-top">
                        <div class="card-body text-center">
                            <b>Web Designing</b>
                           <p class="card-text">
                                <b>Duration:</b>45 hours <br>
                                <b>Price: </b>4000/-rs
                           </p>
                           <button class="btn btn-block btn-dark">Enroll Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <img src="./images/school.jpg" alt="" class="rounded-top">
                        <div class="card-body text-center">
                            <b>Web Designing</b>
                           <p class="card-text">
                                <b>Duration:</b>45 hours <br>
                                <b>Price: </b>4000/-rs
                           </p>
                           <button class="btn btn-block btn-dark">Enroll Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <img src="./images/school.jpg" alt="" class="rounded-top">
                        <div class="card-body text-center">
                            <b>Web Designing</b>
                           <p class="card-text">
                                <b>Duration:</b>45 hours <br>
                                <b>Price: </b>4000/-rs
                           </p>
                           <button class="btn btn-block btn-dark">Enroll Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <img src="./images/school.jpg" alt="" class="rounded-top">
                        <div class="card-body text-center">
                            <b>Web Designing</b>
                           <p class="card-text">
                                <b>Duration:</b>45 hours <br>
                                <b>Price: </b>4000/-rs
                           </p>
                           <button class="btn btn-block btn-dark">Enroll Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <img src="./images/school.jpg" alt="" class="rounded-top">
                        <div class="card-body text-center">
                            <b>Web Designing</b>
                           <p class="card-text">
                                <b>Duration:</b>45 hours <br>
                                <b>Price: </b>4000/-rs
                           </p>
                           <button class="btn btn-block btn-dark">Enroll Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <img src="./images/school.jpg" alt="" class="rounded-top">
                        <div class="card-body text-center">
                            <b>Web Designing</b>
                           <p class="card-text">
                                <b>Duration:</b>45 hours <br>
                                <b>Price: </b>4000/-rs
                           </p>
                           <button class="btn btn-block btn-dark">Enroll Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <img src="./images/school.jpg" alt="" class="rounded-top">
                        <div class="card-body text-center">
                            <b>Web Designing</b>
                           <p class="card-text">
                                <b>Duration:</b>45 hours <br>
                                <b>Price: </b>4000/-rs
                           </p>
                           <button class="btn btn-block btn-dark">Enroll Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <img src="./images/school.jpg" alt="" class="rounded-top">
                        <div class="card-body text-center">
                            <b>Web Designing</b>
                           <p class="card-text">
                                <b>Duration:</b>45 hours <br>
                                <b>Price: </b>4000/-rs
                           </p>
                           <button class="btn btn-block btn-dark">Enroll Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--Teachers-->
    <section class="py-5">
            <div class="text-center">
                <h2 class="font-weight-bold">Our Teachers</h2>
                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>

            <div class="container">
                <div class="row">
                    <?php for($i = 0; $i < 8; $i++){ ?>
                        <div class="col-lg-3 my-5">
                        <div class="card">
                            <div class="col-7 position-absolute" style="top:-50px">
                                 <img src="./images/placeholder.png" alt="" class="mw-100 border rounded-circle" >
                             </div>
                            <div class="card-body pt-5 mt-4">
                                <h5 class="card-title mb-0">Teacher's Name</h5>
                                <p><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></p>
                                <p class="card-text">
                                    <b>Courses:</b>5 <br>
                                    <b>Rating:</b>
                                </p>
                                <div class="row">
                                    
                                    <div class="col-8">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php } ?>
                </div>
            </div>
    </section>
    
<!--Achievment-->
    <section class="py-5" style="background:#9da8c7">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pr-5">
                        <h2 class="font-weight-bold">Achievments</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        <img src="./images/school.jpg" alt="" class="img-fluid rounded"> 
                    </div>
                    <div class="col-lg-6 my-auto">
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="card border-rounded">
                                    <div class="card-body text-center">
                                        <span><i class="fa fa-graduation-cap fa-2x"></i></span>
                                        <h2 class="my-2 font-weight-bold h1">334</h2>
                                        <hr class="border-dark">
                                        <h4>Graduates</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card border-rounded">
                                    <div class="card-body text-center">
                                        <span><i class="fa fa-graduation-cap fa-2x"></i></span>
                                        <h2 class="my-2 font-weight-bold h1">334</h2>
                                        <hr class="border-dark">
                                        <h4>Graduates</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card border-rounded">
                                    <div class="card-body text-center">
                                        <span><i class="fa fa-graduation-cap fa-2x"></i></span>
                                        <h2 class="my-2 font-weight-bold h1">334</h2>
                                        <hr class="border-dark">
                                        <h4>Graduates</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card border-rounded">
                                    <div class="card-body text-center">
                                        <span><i class="fa fa-graduation-cap fa-2x"></i></span>
                                        <h2 class="my-2 font-weight-bold h1">334</h2>
                                        <hr class="border-dark">
                                        <h4>Graduates</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

<!--testimonials-->
    <section class="py-5" >
        <div class="text-center mb-5">
            <h2 class="font-weight-bold">What People Says</h2>
            <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div class="container">
           <div class="row">
                <div class="col-6">
                     <div class="border rounded position-relative">
                        <div class="p-4 text-center">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting indust 
                        </div>
                        <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left:.5rem; opacity:.2"></i>
                    </div>
                     <div class="text-center mt-n2">
                            <img src="./images/placeholder.png" alt="" class="rounded-circle border" width="100" height="100">
                            <h6 class="mb-0 font-weight-bold">Name Of Candidates</h6>
                            <p><i>Designation</p></i> 
                        </div>
                </div>
                <div class="col-6">
                <div class="border rounded position-relative">
                    <div class="p-4 text-center">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting indust 
                    </div>
                        <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left:.5rem; opacity:.2"></i>
                    </div>
                    <div class="text-center mt-n2">
                        <img src="./images/placeholder.png" alt="" class="rounded-circle border" width="100" height="100">
                        <h6 class="mb-0 font-weight-bold">Name Of Candidates</h6>
                        <p><i>Designation</p></i> 
                </div>
           </div>
           <div class="col-6">
                <div class="border rounded position-relative">
                    <div class="p-4 text-center">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting indust 
                    </div>
                        <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left:.5rem; opacity:.2"></i>
                    </div>
                    <div class="text-center mt-n2">
                        <img src="./images/placeholder.png" alt="" class="rounded-circle border" width="100" height="100">
                        <h6 class="mb-0 font-weight-bold">Name Of Candidates</h6>
                        <p><i>Designation</p></i> 
                </div>
           </div>
           <div class="col-6">
                <div class="border rounded position-relative">
                    <div class="p-4 text-center">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting indust 
                    </div>
                        <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left:.5rem; opacity:.2"></i>
                    </div>
                    <div class="text-center mt-n2">
                        <img src="./images/placeholder.png" alt="" class="rounded-circle border" width="100" height="100">
                        <h6 class="mb-0 font-weight-bold">Name Of Candidates</h6>
                        <p><i>Designation</p></i> 
                </div>
           </div>
           </div>
           
        </div>
            
    </section>

<!--footer-->
    <footer style="background:url(./images/school.jpg) center/cover no-repeat">
        <div class="py-5 text-white" style="background:#00000088">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <h5>Useful links</h5>

                        <ul class="fa-ul ml-4">
                            <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>List icons</a></li>
                            <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>can be used</a></li>
                            <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>as bullets</a></li>
                            <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>in lists</a></li>
                        </ul>

                    </div>
                    <div class="col-lg-4">
                        <h5>Useful links</h5>
                            <div>
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse text-dark"></i>
                                </span>
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x fa-inverse text-dark"></i>
                                </span>
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x fa-inverse text-dark"></i>
                                </span>
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-youtube fa-stack-1x fa-inverse text-dark"></i>
                                </span>

                            </div>
                        
                    </div>
                    <div class="col-lg-3">
                        <h5>Suscribe Now</h5>
                        <form action="">
                            <!-- Material input -->
                            <div class="form-group">
                                <input type="email" id="email-s" class="form-control" placeholder="Your Email">
                            </div>
                            <button class="btn btn-secondary btn-sm btn-secondary">submit</button> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <section class="py-2 bg-dark text-light">
        <div class="container-fluid">
        Copyright all right reserved. <a href="" class="text-light">school management system</a> 
        </div>
    </section>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

</body>
</html>