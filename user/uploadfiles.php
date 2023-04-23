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
    <link rel="stylesheet" href="../css/custom.css?v=2">


    <!--google fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!--fontawesome icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>

  <body>


    <div class="wrapper">


      <div class="body-overlay"></div>

      <?php include 'sidebar.php'; ?>




      <?php include 'topnavbar.php'; ?>



        <!--------main-content------------->




              <div class="homecontent mt-5 mb-5" style="width: 95%; margin: 0 auto;">
                <div class="uploadfile">

                  <h2 class="textup"><i class="textupi material-icons">text_snippet</i>Upload Thesis File</h2>

                </div>

                <div class="contentfiles2">
                <form action="../Controller/uploadThesis.php" enctype='multipart/form-data' method="POST">
                  <div class="row">
                    <div class="col">
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-t"></i></span>
                        <input required name="Tittle" type="text" class="form-control" placeholder="Title of Thesis Paper" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                    </div>
                    <div class="col">
                      <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-diagram-project"></i></span>
                          <select name="Department"  class="form-control" aria-label="Default select example" required>
                            <option selected>- Department -</option>
                            <option value="IICT">Institute of Information and Communication Technology</option>
                            <option value="IBOA">Institute of Business and Office Administration</option>
                          </select>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3">
                      <div class="col">
                          <div class="input-group mb-3">
                              <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-calendar-days"></i></span>
                              <input name="DateUpload" type="date" class="form-control" aria-describedby="basic-addon1">
                          </div>
                      </div>
                      <div class="col">
                          <div class="input-group mb-3">
                              <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-file-pdf"></i></span>
                              <input name="uploadFile" type="file" class="form-control" accept="application/pdf" required>
                          </div>
                      </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                        <small>Note: Just put comma (,) after name for adding multiple user</small>
                        <div class="input-group mb-3">
                              <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-users"></i></span>
                              <input type="text" class="form-control" name="participants" required>
                          </div>
                    </div>
                  </div>
                  <button class="btn btn-info" type="submit">Submit</button>
                </form>
               <div class="card">
                <div class="card-body">
                  <p> <span class="mark">*</span> Fill out all form details</p>
                    <p><span class="mark">*</span>When admin approves your file, it will be added to the list of
                      published files.</p>
                    <p><span class="mark">*</span>Make sure that all data provided is correct.</p>
                    <p class="pdfonly"> <span class="notepdf">Note:</span> Please provide a PDF file only.</p>
                </div>
               </div>
                 




                </div>



              </div>




  
        <?php include 'footer.php'; ?>



  </body>

</html>