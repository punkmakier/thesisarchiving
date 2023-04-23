<?php
  session_start();
  require_once '../Model/UserInfo.php';
  $user = new UserInfo;
  $userID = $_SESSION['School_ID'];

?>

<!--------page-content---------------->

<div id="content">

<!--top--navbar----design--------->

<div class="top-navbars">
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
                  <i class="notifsicons fa-solid fa-bell"></i>
                </a>
                <ul class="dropnotif dropdown-menu small-menu">
                  <li>
                    <table class="notiftbl">
                      <tr class="notiftr">
                        <td class="notiftd">

                          <p class="contentparanotif"> <span class="notifyicon material-icons">
                              notifications_active
                            </span> &nbsp; &nbsp; &nbsp; &nbsp; Your file has been published <a href="#"
                              class="notiview"> <u>View</u></a></p>


                        </td>
                      </tr>
                    </table>



                  </li>


                </ul>
              </li>


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
                    <a href="../Controller/Logout.php"><span class="material-icons">
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

</div>


<!-- Accunt Modal HTML -->
<div id="accountmodel" class="modal fade">
                <div class="modal-dialog">
                  <div class="accountdetails modal-content">
                    <form id="updateAccountForm">
                      <div class="headermodal modal-header">
                        <h4 class="modal-title">Account Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
                        <div class="form1 form-group">
                          <label>First Name</label>
                          <input name="fname" type="text" class="form-control" value="<?php echo $user->showFirstName($userID); ?>" required>
                        </div>
                        <div class="form1 form-group">
                          <label>Last Name</label>
                          <input name="lname" type="text" class="form-control" value="<?php echo $user->showLastName($userID); ?>" required>
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input name="email"  type="email" class="form-control" value="<?php echo $user->showEmail($userID); ?>" required>
                        </div>
                        <div class="form2 form-group">
                          <label>School ID</label>
                          <input name="schoolid"  type="text" class="form-control" value="<?php echo $user->showSchoolID($userID); ?>" readonly>
                        </div>
                        <div class="form2 form-group">
                          <label>Password</label>
                          <input name="password" type="password" class="form-control" value="<?php echo $user->showPassword($userID); ?>" required>
                          <!-- <a href="#" class="editacc stretched-link text-primary">Change Password</a> -->

                        </div>
                      </div>
                      <div class="modal-footer">

                        <input class="btn btn-info" id="submitUpdateForm" value="Save">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
