<?php 
    require_once '../Model/DisplayTable.php';
    $display = new DisplayTable;

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
        <link rel="stylesheet" href="../css/bootstrap.min.css?v=1">
        <!----css3---->
        <link rel="stylesheet" href="../css/custom.css?v=5">


        <!--google fonts -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
            rel="stylesheet">
            
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        <!--google material icon-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

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
                        <div class="col-md-12">
                            <div class="table-wrapper">

                                <div class="table-title">
                                    <div class="row">
                                        <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                            <h2 class="ml-lg-2">New uploaded files</h2>
                                        </div>
                                        <!-- <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                                            <a href="#" class="btn btn-success" >
                                                <i class="material-icons">check_circle</i>
                                                <span>Publish files</span>
                                                </a>
                                            <a href="#deleteModal" class="btn btn-danger" data-toggle="modal">
                                                <i class="material-icons">&#xE15C;</i>
                                                <span>Delete</span>
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="newfiles">
                                <br>
                                <table class="table table-striped " id="thisTable">
                                    <thead>
                                        <tr>
                                            <td style='font-weight: 500'>Title</td>
                                            <td style='font-weight: 500'>Program</td>
                                            <td style='font-weight: 500'>Date Submitted</td>
                                            <td style='font-weight: 500; font-size: 0.94rem'>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php $display->displayThesis(); ?>
                                    </tbody>
                                </table>

                                <!----edit-modal end--------->



<!-- Modal -->
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



                                <!----delete-modal start--------->
                                <div class="modal fade" tabindex="-1" id="deleteModal" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content"  style="width: 40% !important; margin: 0 auto;">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Delete File</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you don't want to publish this file?</p>
                                                <div class="form-floating">
                                                    <form action="">

                                                   <input type="hidden" id="thesisID">
                                                    <textarea class="form-control" placeholder="Indicate your reason for not publishing this file..." id="reasonDisapprove" style="height: 100px"></textarea>
                                                    <p class="text-warning"><small>this action Cannot be Undone,</small></p>
                                                  </div>
                                               
                                            </div>
                                           
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-success" id="deleteThesis">Disapprove</button>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!----edit-modal end--------->








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











            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="../js/popper.min.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


            <script type="text/javascript">

                $( document ).ready( function () {

                    $("#thisTable").DataTable({
                        "bFilter": false,
                        "bInfo": false
                    });
                    $( ".xp-menubar" ).on( 'click', function () {
                        $( '#sidebar' ).toggleClass( 'active' );
                        $( '#content' ).toggleClass( 'active' );
                    } );

                    $( ".xp-menubar,.body-overlay" ).on( 'click', function () {
                        $( '#sidebar,.body-overlay' ).toggleClass( 'show-nav' );
                    } );


                    $(".approveThesis").click(function () {

                    var id = $(this).attr('id')
                    Swal.fire({
                    title: 'Confirmation needed',
                    text: "Are you sure you want to approve this thesis file",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "POST",
                            url: "../Controller/AppDisApp.php",
                            data: {UID : id , Action: "ApproveThesis"},
                            success: function (response) {
                                if(response == "Success"){
                                    Swal.fire({
                                    title: 'Success',
                                    text: "You successfully aprrove this thesis file",
                                    icon: 'success',
                                    showCancelButton: false,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Yes'
                                    }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.reload();
                                    }
                                    })
                                }else{
                                    Swal.fire(
                                    'Ops..',
                                    'Something went wrong...',
                                    'error'
                                    )
                                }
                            }
                        })
                    }
                    })

                    })


                    $(".disapproveThesis").click(function () {

                    var id = $(this).attr('id')
                    var thesisId = $("#thesisID").val(id)

                    $("#deleteModal").modal('show');

                    

                    })

                    $("#deleteThesis").click(function() {
                        var thesisId = $("#thesisID").val()
                        var reasonDis = $("#reasonDisapprove").val()

                            $.ajax({
                                type: "POST",
                                url: "../Controller/AppDisApp.php",
                                data: {UID : thesisId , Reason : reasonDis,  Action: "DisApproveThesis"},
                                success: function (response) {
                                    if(response == "Success"){
                                        Swal.fire({
                                        title: 'Success',
                                        text: "You successfully disaprrove this thesis file",
                                        icon: 'success',
                                        showCancelButton: false,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Yes'
                                        }).then((result) => {
                                        if (result.isConfirmed) {
                                            window.location.reload();
                                        }
                                        })
                                    }else{
                                        Swal.fire(
                                        'Ops..',
                                        'Something went wrong...',
                                        'error'
                                        )
                                    }
                                
           
                            }
                        })
                    })


                    $(".viewThesis").click(function(){
                        var id = $(this).attr('id')

                        $.ajax({
                            type: "POST",
                            url: "../Controller/AppDisApp.php",
                            data: {UID : id, Action: "ShowThesis"},
                            success: function (response) {
                              $("#displayThesisDetails").html(response)
                                $("#viewThesisFile").modal('show')

                        }
                        
                    })


                })
                    

                });

            </script>





    </body>

</html>