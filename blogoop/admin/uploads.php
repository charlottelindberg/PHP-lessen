<?php
include("includes/header.php");
include("includes/sidebar.php");
include("includes/content-top.php");
// include("includes/content.php");
?>

<?php
// inloggen 
if (!$session->is_signed_in()) {
    redirect("../login.php");
}

// upload 
$message = "";
if (isset($_POST['submit'])) {
    $photo = new Photo();
    $photo->title = $_POST['title'];
    $photo->set_file($_FILES['file']);

    if ($photo->save()) {
        $messge = "Photo uploaded successfully";
    } else {
        $message = join("<br>", $photo->errors);
    }
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="page-header">Upload</h1>
            <?php echo $message; ?>

            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">title</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="form-group">
                    <input type="text" name="title" class="form-control">
                </div>

                <input type="submit" name="submit" value="submit" class="btn btn-primary">

            </form>

        </div>
    </div>

</div>

<?php
include("includes/footer.php");
?>