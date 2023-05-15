



<script>
    $(document).ready(function(){
        $("#submitUpdateForm").click(function(){
            var formData = $("#updateAdminAccount").serialize();
            $.ajax({
                url: '../Controller/UpdateAccount.php',
                type: 'POST',
                data: formData,
                success: function(response){
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
                },
                error: function(res){
                    alert(res)
                }
            });
        })
    })
</script>