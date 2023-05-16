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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

    <body>
          <nav class="navbar navbar-expand-lg navbar-light  fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">  <span class="text-warning">PTC</span> <span
                        class="text-light"> - Archives</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <a class="nav-links" href="index.php"><i class="bi bi-house"></i> Home</a>
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
                        <form action="" class="form" id="forgotPassForm">
                          <input required type="email" name="email" id="" placeholder="Email" class="emailr">
                          <p class="question">Please provide your student ID number to recover your account</p>
                          <input required type="text" name="schoolID" id="" placeholder="Enter your answer here..." class="answer">
                          <input type="button" class="btnlog" value="Recover" id="btnSubmitForgotPass">

                         



                        </form>
                       

                    </div>


                </div>
            </div>


        </section>
       
        <!-- login section Ends -->


  <!-- Modal -->
  <div class="modal fade" id="myModal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="size modal-content">
        <div class="recoverypop modal-header">
          <h4 class="modal-title">Recovered Successfuly</h4>
        </div>
        <div class="modal-body">
          <p>Your account recovery password will be <span class="numrec"></span></p>
          <p> <span class="remind">Reminder: </span> Please change your password after Successfuly logging in to your account.</p>
        </div>
        <div class="modal-footer">
            <a href="login.html"  class="btn btn-default" >OK</a>
          
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


        <script>
          $(document).ready(function () {

            $("#btnSubmitForgotPass").on("click", function(){
              var formData = $("#forgotPassForm").serialize();
              $(this).attr("disabled", "disabled");
              $(this).css("background-color", "gray");
              $(this).val("Loading...");
              $.ajax({
                  type: 'POST',
                  url: 'Controller/forgotPass.php',

                  data: formData,
                  success: function (data) {
                      if(jQuery.trim(data) == "NoFound"){
                        Swal.fire(
                          'Failed',
                          'No account found. Please try again',
                          'error'
                        )
                      }else if(jQuery.trim(data) == "Success"){
                        Swal.fire(
                          'Success',
                          'Your password has been sent to your email address.',
                          'success'
                        )
                      }
                      $("#btnSubmitForgotPass").css("background-color", "#198b2c")
                      $("#btnSubmitForgotPass").attr("disabled", false);
                      $("#btnSubmitForgotPass").val("Recover");
                  }

                  
              });

            })
          })
        </script>
    </body>

</html>




<!--for getting the form download the code from download button-->