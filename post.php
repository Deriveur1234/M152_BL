<?php include_once 'function.php'; ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>webublogoverflow Tutorial</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
<style></style>
  </head>
  <body>
      <?php include_once 'nav.php'; ?>
      <div style="padding-bottom: 100px;"></div>
      
      <div class="container">

        <div class="row">

        <!-- Blog Entries Column -->
            <div class="col-md-8">
                <!-- Page Content -->
                <div class="card mb-4">
                    <form action="scriptPhp/upload.php" method="POST">
                        <div class="form-group">
                          <label for="fileToUpload">Image que vous voulez upload :</label>
                          <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Comment">Commentaire</label>
                            <input type="textarea" class="form-control" id="Comment"/>
                        </div>
                        <button type="submit" class="btn btn-default">Upload</button>
                  </form>
                </div>
            </div>
        </div>
      </div>
  </body>
  
</body>
