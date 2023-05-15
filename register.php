<!DOCTYPE html>
<html lang="en">
    <!--divinectorweb.com-->

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>

        <!-- All CSS -->
        <link href="css/bootstrap2.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-light  fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php"> <img src="img/ptcoppa.png" alt="logo"
                        style="height: 40px; width: 40px;"> <span class="text-warning">PTC</span> <span
                        class="text-light"> - Archives</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link" href="index.php"><i class="bi bi-house"></i> Home</a>
                        </li>
                     
                        <li class="nav-item">
                            <a class="nav-link" href="about.php"><i class="bi bi-info-square"></i> About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                          </li> 
                        <li class="nav-item">
                            <a class="nav-link" id="active"  href="register.php"><i class="bi bi-person-plus"></i> Signup</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>


        <!-- register section starts -->
        <section id="login" class="login section-padding">
            <div class="container">
                <div class="loginform">
                  
                    
                    <div class="logincontent">
                        <img src="img/profilelogin.png" alt="" class="profilelog">
                        <svg> </svg>
                        <h2 class="register">Register</h2>
                        <form action="" id="registerForm">
                          <input required type="text" name="Firstname" id="Firstname" placeholder="First Name" class="fname">
                          <input required type="text" name="Lastname" id="Lastname" placeholder="Last Name" class="lname">
                          <input required type="email" name="Email" id="Email" placeholder="Email" class="email2">
                          <input required type="text" name="SchoolID" id="SchoolID" placeholder="School ID" class="id">
                          <input required type="password" name="Password" id="Password" placeholder="Password" class="pass2">
                          <i class="show2 bi bi-eye"></i>
                            
                            <input class="btnlog2 text-center" style="cursor: pointer;" id="submitRegisterBTN" value="Signup" />
                           <p class="dacc2">Already have an account?<a href="login.php"> Login here</a> </p> 



                        </form>
                       

                    </div>


                </div>
            </div>
        </section>
        <!-- register section Ends -->

        <!-- footer starts -->
        <footer class="footer p-2 text-center">
            <div class="container">
                <p class="text-white">@PTC - Archives</p>
            </div>
        </footer>
        <!-- footer ends -->










        <!-- All Js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/script.js"></script>



        <script>
            $(document).ready(function(){
                $("#submitRegisterBTN").on("click", function(e){
                var formData = $("#registerForm").serialize();
                $.ajax({
                    type: "POST",
                    url: "Controller/UserRegistration.php",
                    data: formData,
                    success: function(response){
                        if(response == "Success"){
                            Swal.fire({
                            title: 'Success',
                            text: "You have successfully registered",
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Okay'
                            }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload();
                            }
                            })
                        }else{
                            Swal.fire(
                            'Failed',
                            'Registration failed',
                            'error'
                            )
                        }
                    }
                })
            })
            })
          
        </script>
    </body>

</html>




<!--for getting the form download the code from download button-->