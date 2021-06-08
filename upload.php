<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="uploadstyle.css">
    <title>Files Upload </title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form action="upload.php" method="post" enctype="multipart/form-data" >
          <h1>Upload File</h1>
          <h1>
          <input type="file" name="myfile"> <br>
          <?php include 'fileslogic.php';?>
          <button type="submit" class="btn" name="save">upload</button>
          </h1>
        </form>
      </div>
    </div>
  </body>
</html>