<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>PTC - Archiving System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="../css/custom.css">


    <!--google fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

  </head>

  <body>


    <div class="wrapper">


      <div class="body-overlay"></div>

      <!-------------------------sidebar------------>
      <!-- Sidebar  -->
      <nav id="sidebar">
        <div class="sidebar-header">
          <h3><img src="../img/ptcoppa.png" class="img-fluid" /><span>PTC - Archives</span></h3>
          <h6 class="labelad">Admin</h6>
        </div>
        <ul class="list-unstyled components">
          <li class="active">
            <a href="dashboard.html" class="dashboard"><i class="material-icons">dashboard</i>
              <span>Dashboard</span></a>
          </li>


          <li class="">
            <a href="newfiles.html" >
              <i class="material-icons">create_new_folder</i>New files</a>

          </li>

       
          <li class="dropdown">
            <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">manage_accounts</i>


                <span>Accounts</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu4">
                <li class="">
                    <a href="accounts.html"><i class="material-icons">group_add</i><span>New Accounts</span></a>
                </li>
                <li>
                    <a href="#"><i class="material-icons">group</i><span>All accounts</span></a>
                </li>
            </ul>
        </li>

          <li class="dropdown">
            <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
              <i class="material-icons">history</i>


              <span>History</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu3">
              <li>
                <a href="#"><i class="material-icons">fact_check</i><span>Approved</span></a>
              </li>
              <li>
                <a href="#"><i class="material-icons">folder_delete</i><span>Declined</span></a>
              </li>
            </ul>
          </li>




          <li class="">
            <a href="#"><i class="material-icons">view_timeline</i><span>View</span></a>
          </li>


        </ul>


      </nav>




      <!--------page-content---------------->

      <div id="content">

        <!--top--navbar----design--------->

        <div class="top-navbar fixed-top">
          <div class="xp-topbar">

            <!-- Start XP Row -->
            <div class="row">
              <!-- Start XP Col -->
              <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                <div class="xp-menubar">
                  <span class="material-icons text-white">signal_cellular_alt
                  </span>
                </div>
              </div>
              <!-- End XP Col -->

              <!-- Start XP Col -->
              <div class="col-md-5 col-lg-3 order-3 order-md-2">
                <div class="xp-searchbar">
                  <form>
                    <div class="input-group">
                    
                    </div>
                  </form>
                </div>
              </div>
              <!-- End XP Col -->

              <!-- Start XP Col -->
              <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                <div class="xp-profilebar text-right">
                  <nav class="navbar p-0">
                    <ul class="nav navbar-nav flex-row ml-auto">
                  
                    
                      <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-toggle="dropdown">
                       
                          <img src="../img/profileup.png" style="width:40px; border-radius:50%;" />
                          <span class="xp-user-live"></span>
                        </a>
                        <ul class="dropdown-menu small-menu">
                          <li>
                            <a href="#accountmodel" data-toggle="modal">
                              <span class="material-icons" data-toggle="tooltip" title="Edit">
                                person_outline
                              </span>Profile

                            </a>
                          </li>
                       
                          <li>
                            <a href="#"><span class="material-icons">
                                logout</span>Logout</a>
                          </li>
                        </ul>
                      </li>
                    </ul>


                  </nav>

                </div>
              </div>
              <!-- End XP Col -->

            </div>
            <!-- End XP Row -->

          </div>
          <div class="xp-breadcrumbbar text-center">
            <h4 class="page-title">Dashboard</h4>
         
          </div>

        </div>



        <!--------main-content------------->

      
        <div class="main-content">

          <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-stats">
                      <div class="card-header">
                          <div class="icon icon-warning">
                              <span class="material-icons">folder_open</span>
                          </div>
                      </div>
                      <div class="card-content">
                          <p class="category"><strong>New Files</strong></p>
                          <h3 class="card-title">70,340</h3>
                      </div>
                      <div class="card-footer">
                          <div class="stats">
                              <i class="material-icons text-info">info</i>
                              <a href="#pablo">See detailed report</a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-stats">
                      <div class="card-header">
                          <div class="icon icon-rose">
                              <span class="material-icons">wysiwyg</span>


                          </div>
                      </div>
                      <div class="card-content">
                          <p class="category"><strong>Published Files</strong></p>
                          <h3 class="card-title">102</h3>
                      </div>
                      <div class="card-footer">
                          <div class="stats">
                              <i class="material-icons">update</i> 5 minutes ago
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-stats">
                      <div class="card-header">
                          <div class="icon icon-success">
                              <span class="material-icons">
                                  person_add
                              </span>

                          </div>
                      </div>
                      <div class="card-content">
                          <p class="category"><strong>Accounts</strong></p>
                          <h3 class="card-title">23,100</h3>
                      </div>
                      <div class="card-footer">
                          <div class="stats">
                              <i class="material-icons">update</i> 5 minutes ago
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-stats">
                      <div class="card-header">
                          <div class="icon icon-info">
                              <span class="material-icons">
                                  folder_delete
                              </span>
                          </div>
                      </div>
                      <div class="card-content">
                          <p class="category"><strong>Declined Files</strong></p>
                          <h3 class="card-title">+245</h3>
                      </div>
                      <div class="card-footer">
                          <div class="stats">
                              <i class="material-icons">update</i> 2 minutes ago
                          </div>
                      </div>
                  </div>
              </div>
          </div>


          <div class="row ">
              <div class="col-lg-7 col-md-12">
                  <div class="card" style="min-height: 245px; background-color:rgb(253, 255, 253)">
                      <div class="card-header card-header-text">
                          <h4 class="card-title"><span class="material-icons">
                                  bar_chart
                              </span> Archives Report</h4>
                          <p class="category">Updated: <span>January 20, 2023</span></p>
                      </div>
                      <div class="card-content table-responsive">
                          <table class="table table-hover">
                              <thead class="text-primary">


                                  </tbody>
                          </table>
                      </div>
                  </div>
              </div>


          </div>
          <div class="updatedata row ">
            <div class="col-lg-20 col-md-12">
                <div class="card" style="min-height: 245px; background-color:rgb(253, 255, 253)">
                    <div class="card-header card-header-text">
                        <h4 class="card-title"><span class="material-icons">
                                update
                            </span> Updated File Report</h4>
                            <table class="tbladmin">
                                <tr class="tradmin">
                                    <td class="tdadmin">
                                        <p class="category">The <span class="titleupdated">Online Archiving System</span>  has been updated <span>3 Minutes Ago</span><a href="#" class="viewipdate"> <u> View Details</u></a></p>

                                    </td>
                                </tr>
                            </table>
                     
                    </div>
                    <div class="card-content table-responsive">
                        <table class="table table-hover">
                            <thead class="text-primary">


                                </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
 <!-- Accunt Modal HTML -->
 <div id="accountmodel" class="modal fade">
  <div class="modal-dialog">
    <div class="accountdetails modal-content">
      <form>
        <div class="headermodal modal-header">
          <h4 class="modal-title">Account Details</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" required>
            <a href="#" class="editaccad stretched-link text-primary">Change Password</a>

          </div>
        </div>
        <div class="modal-footer">

          <input type="button" class="btn btn-info" data-dismiss="modal" value="Save">
        </div>
      </form>
    </div>
  </div>
</div>



       
        

    </div>
      <!---footer---->
      <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <nav class="d-flex">
                        Pateros Technological College || Online Archiving System
                    </nav>

                </div>

            </div>
        </div>
    </footer>

       
      </div>
    </div>











    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.3.1.min.js"></script>


    <script type="text/javascript">

      $( document ).ready( function () {
        $( ".xp-menubar" ).on( 'click', function () {
          $( '#sidebar' ).toggleClass( 'active' );
          $( '#content' ).toggleClass( 'active' );
        } );

        $( ".xp-menubar,.body-overlay" ).on( 'click', function () {
          $( '#sidebar,.body-overlay' ).toggleClass( 'show-nav' );
        } );

      } );

    </script>





  </body>

</html>