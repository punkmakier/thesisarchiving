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



        <!--------main-content------------->

        <div class="container-fluid mt-5 mb-5" style="width: 90%; margin-bottom: 50px; !important">
        <div style="background-color: #007e15; color: #fff; padding: 20px 30px; border-radius: 5px; margin-bottom: 30px; font-weight: 600; font-size: 1.3rem;">Approved Files</div>
        <table class="table table-striped mb-5" id="thisTable">
            <thead>
              <tr>
                <td>Title</td>
                <td>Status</td>
                <td>Remarks</td>
                <td>Action</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Online Archiving System</td>
                <td>Declined</td>
                <td>Reason For Declining..</td>
                <td><i class="material-icons" data-toggle="tooltip" title="Edit">visibility</i></td>
              </tr>
              <tr>
                <td>Online Archiving System</td>
                <td>Declined</td>
                <td>Reason For Declining..</td>
                <td><i class="material-icons" data-toggle="tooltip" title="Edit">visibility</i></td>
              </tr>
              <tr>
                <td>Online Archiving System</td>
                <td>Declined</td>
                <td>Reason For Declining..</td>
                <td><i class="material-icons" data-toggle="tooltip" title="Edit">visibility</i></td>
              </tr>
              <tr>
                <td>Online Archiving System</td>
                <td>Declined</td>
                <td>Reason For Declining..</td>
                <td><i class="material-icons" data-toggle="tooltip" title="Edit">visibility</i></td>
              </tr>
              <tr>
                <td>Online Archiving System</td>
                <td>Declined</td>
                <td>Reason For Declining..</td>
                <td><i class="material-icons" data-toggle="tooltip" title="Edit">visibility</i></td>
              </tr>
              <tr>
                <td>Online Archiving System</td>
                <td>Declined</td>
                <td>Reason For Declining..</td>
                <td><i class="material-icons" data-toggle="tooltip" title="Edit">visibility</i></td>
              </tr>
              <tr>
                <td>Online Archiving System</td>
                <td>Declined</td>
                <td>Reason For Declining..</td>
                <td><i class="material-icons" data-toggle="tooltip" title="Edit">visibility</i></td>
              </tr>
              <tr>
                <td>Online Archiving System</td>
                <td>Declined</td>
                <td>Reason For Declining..</td>
                <td><i class="material-icons" data-toggle="tooltip" title="Edit">visibility</i></td>
              </tr>
              <tr>
                <td>Online Archiving System</td>
                <td>Declined</td>
                <td>Reason For Declining..</td>
                <td><i class="material-icons" data-toggle="tooltip" title="Edit">visibility</i></td>
              </tr>
              <tr>
                <td>Online Archiving System</td>
                <td>Declined</td>
                <td>Reason For Declining..</td>
                <td><i class="material-icons" data-toggle="tooltip" title="Edit">visibility</i></td>
              </tr>
              <tr>
                <td>Online Archiving System</td>
                <td>Declined</td>
                <td>Reason For Declining..</td>
                <td><i class="material-icons" data-toggle="tooltip" title="Edit">visibility</i></td>
              </tr>
            </tbody>
        </table>
      </div>
        



              <!-- Edit Modal HTML -->
              <div id="editModal" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form>
                      <div class="headermodal modal-header">
                        <h4 class="modal-title">Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label>Date Published</label>
                          <input type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label>Authors</label>
                          <textarea class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                          <label>File</label>
                          <input type="text" class="form-control" required>
                        </div>
                      </div>
                      <div class="modal-footer">

                        <input type="button" class="btn btn-info" data-dismiss="modal" value="Save">
                      </div>
                    </form>
                  </div>
                </div>
              </div>

        



        <?php include 'footer.php'; ?>

  </body>

</html>