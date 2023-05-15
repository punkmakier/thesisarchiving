<!DOCTYPE html>
<html lang="en">
    <!--divinectorweb.com-->

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Account Recovery</title>

        <!-- All CSS -->
        <link href="css/bootstrap2.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>
          <nav class="navbar navbar-expand-lg navbar-light  fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.html">  <span class="text-warning">PTC</span> <span
                        class="text-light"> - Archives</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <a class="nav-links" href="index.html"><i class="bi bi-house"></i> Home</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>


        <!-- login section starts -->
        <section id="login" class="login section-paddings">
            <div class="container">
                <div class="loginform">
                  
                    
                    <div class="logincontent">
                        <img src="img/profilelogin.png" alt="" class="profilelog">
                        <svg> </svg>
                        <h2 class="recovery">Recover my Account</h2>
                        <form action="" class="form">
                          <input required type="email" name="" id="" placeholder="Email" class="emailr">
                          <p class="question">Please provide your student ID number to recover your account</p>
                          <input required type="password" name="" id="" placeholder="Enter your answer here..." class="answer">
                          <button type="submit" class="btnlog" data-toggle="modal" data-target="#myModal">Recover</button>
                           
                         



                        </form>
                       

                    </div>


                </div>
            </div>


        </section>
       
        <!-- login section Ends -->
<div class="container">

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="size modal-content">
        <div class="recoverypop modal-header">
          <h4 class="modal-title">Recovered Successfuly</h4>
        </div>
        <div class="modal-body">
          <p>Your account recovery password will be <span class="numrec">100020</span></p>
          <p> <span class="remind">Reminder: </span> Please change your password after Successfuly logging in to your account.</p>
        </div>
        <div class="modal-footer">
            <a href="login.html"  class="btn btn-default" >OK</a>
          
        </div>
      </div>
      
    </div>
  </div>
  
</div>
        <!-- footer starts -->
        <footer class="footer p-2 text-center">
            <div class="container">
                <p class="text-white">@PTC - Archives</p>
            </div>
        </footer>
        <!-- footer ends -->










        <!-- All Js -->
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/script.js"></script>

    </body>

</html>




<!--for getting the form download the code from download button-->