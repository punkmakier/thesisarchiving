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
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <!----css3---->
        <link rel="stylesheet" href="../css/custom.css">


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

            <?php include 'sidebar.php'; ?>
            




            <!--------page-content---------------->

            <div id="content">

                <?php include 'topbar.php'; ?>
                


                <!--------main-content------------->


                <div class="main-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-wrapper">

                                <div class="table-title">
                                    <div class="row">
                                        <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                            <h2 class="ml-lg-2">History</h2>
                                        </div>
                                        <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                                          
                                            <!-- <a href="#deleteModal" class="btn btn-danger" data-toggle="modal">
                                                <i class="material-icons">cancel</i>
                                                <span>Delete</span>
                                            </a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="newfiles">
<br>
                                <table class="table table-striped" id="thisTable">
                                    <thead>
                                        <tr>
                                            <td style='font-weight: 500; width: 600px;' class='text-center'>Description</td>
                                            <td style='font-weight: 500; font-size: 0.95rem' class='text-center'>Date Created</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $display->displayApproveDisapprove(); ?>
                                    </tbody>
                                </table>

                                <!----edit-modal end--------->





                                <!----edit-modal start--------->
                                <div class="modal fade" tabindex="-1" id="editModal" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">View Details</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body viewSelectedUserDetails">
                                              
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
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




                } );

            </script>





    </body>

</html>