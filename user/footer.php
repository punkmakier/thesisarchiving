        <!---footer---->
        <footer class="footer mb-5">
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


    <!----------html code compleate----------->









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript">

      $( document ).ready( function () {

        $("#thisTable").DataTable();

        $( ".xp-menubar" ).on( 'click', function () {
          $( '#sidebar' ).toggleClass( 'active' );
          $( '#content' ).toggleClass( 'active' );
        } );

        $( ".xp-menubar,.body-overlay" ).on( 'click', function () {
          $( '#sidebar,.body-overlay' ).toggleClass( 'show-nav' );
        } );




        $("#submitUpdateForm").on("click", function () {
          var formData = $("#updateAccountForm").serialize();
          $.ajax({
            type: "POST",
            url: "../Controller/UpdateAccount.php",
            data: formData,
            success: function (response) {
              if(response == "Success"){
                Swal.fire({
                  title: 'Success',
                  text: "Account updated successfully",
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
                'Something went wrong updating your account',
                'error'
              )
              }
            }
          })

        })









      } );

    </script>