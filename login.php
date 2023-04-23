<!DOCTYPE html>
<html lang="en">
    <!--divinectorweb.com-->

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>

        <!-- All CSS -->
        <link href="css/bootstrap2.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-light  fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.html"> <img src="img/ptcoppa.png" alt="logo"
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
                            <a class="nav-link" href="index.html"><i class="bi bi-house"></i> Home</a>
                        </li>
                     
                        <li class="nav-item">
                            <a class="nav-link" href="about.html"><i class="bi bi-info-square"></i> About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="active" href="login.php"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                          </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="register.php"><i class="bi bi-person-plus"></i> Signup</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>


        <!-- login section starts -->
        <section id="login" class="login section-padding">
            <div class="container">
                <div class="loginform">
                  
                    
                    <div class="logincontent">
                        <img src="img/profilelogin.png" alt="" class="profilelog">
                        <svg> </svg>
                        <h2 class="welcome">Welcome</h2>
                        <form action="" class="form" id="loginForm">
                          <input required type="email" name="Email" id="" placeholder="Email" class="email">
                          <input required type="password" name="Password" id="" placeholder="Password" class="pass">
                          <i class="show bi bi-eye"></i>
                            <a href="forgetpass.html" class="forget"> Forget Password </a>
                            <select class="account" required name="UserType">
                                <option value="">Account Type</option>
                                <option value="Student">Student</option>
                                <option value="Admin">Admin</option>
                            </select>
                            
                            <input class="btnlog text-center" style="cursor: pointer;" id="loginBtn" value="Login" />
                           <p class="dacc">Don't have an account yet?<a href="register.php"> Create one here</a> </p> 



                        </form>
                       

                    </div>


                </div>
            </div>
        </section>
        <!-- login section Ends -->

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
                $("#loginBtn").on("click", function(e){
                var formData = $("#loginForm").serialize();
                $.ajax({
                    type: "POST",
                    url: "Controller/UserLogin.php",
                    data: formData,
                    success: function(response){
                        alert(response)
                        if(response == "Student"){
                            window.location.href="user/dashboard.php";
                        }
                        else if(response == "Admin"){
                            window.location.href="admin/dashboard.php";
                            
                        }
                        else{
                            Swal.fire(
                            'Failed',
                            'Invalid email or password',
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