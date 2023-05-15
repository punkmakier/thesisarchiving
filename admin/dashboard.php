<?php 
    require_once '../Model/AdminDashboard.php';
    $admin = new AdminDashboard;

    function time_elapsed_string($datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);
    
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;
    
        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }
    
        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }
?>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>

  <body>


    <div class="wrapper">


      <div class="body-overlay"></div>

      <!-------------------------sidebar------------>
      
      <?php include 'sidebar.php'; ?>




      <!--------page-content---------------->

      <div id="content">

        <!--top--navbar----design--------->
        <?php include 'topbar.php'; ?>




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
                          <h3 class="card-title"><?php $admin->FilesStatus("Pending"); ?></h3>
                      </div>
                      <div class="card-footer">
                          <div class="stats">
                              <i class="material-icons text-info">info</i>
                              <a href="newfiles.php">See detailed report</a>
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
                          <h3 class="card-title"><?php $admin->FilesStatus("Approved"); ?></h3>
                      </div>
                      <div class="card-footer">
                          <div class="stats">
                              <i class="material-icons">update</i> <?php echo time_elapsed_string($admin->getFileStatusDate("Approved"), true); ?>
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
                          <h3 class="card-title"><?php $admin->TotalAccounts(); ?></h3>
                      </div>
                      <div class="card-footer">
                          <div class="stats">
                              <i class="material-icons">update</i> <?php echo time_elapsed_string($admin->getDateUser(), true); ?>
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
                          <h3 class="card-title"><?php $admin->FilesStatus("Disapproved"); ?></h3>
                      </div>
                      <div class="card-footer">
                          <div class="stats">
                              <i class="material-icons">update</i> <?php echo time_elapsed_string($admin->getFileStatusDate("Disapproved"), true); ?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>


          <div class="row ">
              <div class="col-lg-7 col-md-12">
                  <div class="card" style="min-height: 245px; background-color:rgb(253, 255, 253)">
                      <!-- <div class="card-header card-header-text">
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
                      </div> -->
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
                                        <p class="category">The <span class="titleupdated">Online Archiving System</span>  has been updated <span><?php echo time_elapsed_string($admin->getFileStatusLastUpdate(), true); ?></span><a href="view.php" class="viewipdate"> <u> View Details</u></a></p>

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

    <?php include 'footer.php'; ?>

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