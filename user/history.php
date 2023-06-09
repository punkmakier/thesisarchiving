<?php 
  require_once '../Model/UserFiles.php';
  $userfiles = new UserFiles;


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
    <link rel="stylesheet" href="../css/custom.css?v=1">


    <!--google fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!--fontawesome icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>

  <body>


    <div class="wrapper">


      <div class="body-overlay"></div>

      <?php include 'sidebar.php'; ?>

      <?php include 'topnavbar.php'; ?>




      <!--------page-content---------------->

      <div class="container-fluid mt-5 mb-5" style="width: 90%; margin-bottom: 50px; !important">
        <div style="background-color: #007e15; color: #fff; padding: 20px 30px; border-radius: 5px; margin-bottom: 30px; font-weight: 600;font-size: 1.3rem;">History</div>
        <table class="table table-striped mb-5" id="thisTable">
            <thead>
              <tr>
                <td>Title</td>
                <td>Status</td>
                <td>Remarks</td>
                <td>DateSubmitted</td>
                <td>Date Approved/Disapproved</td>
                <td>Action</td>
              </tr>
            </thead>
            <tbody>
             <?php $userfiles->myFilesHistory($userID); ?>
            </tbody>
        </table>
      </div>

      <div class="modal fade" id="viewThesisFile" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog" style="width: 80% !important;" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Show Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="displayThesisDetails">
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

      <?php include 'footer.php'; ?>
      
    </div>


    <!----------html code compleate----------->

  </body>

</html>