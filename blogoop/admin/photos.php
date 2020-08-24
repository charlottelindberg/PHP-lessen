<?php
include("includes/header.php");
if (!$session->is_signed_in()) {
    redirect("../login.php");
}

$photos = Photo::find_all();
?>

<?php
include("includes/sidebar.php");
include("includes/content-top.php");
include("includes/content.php");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Photos</h2>
            <table class="table table-header">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>ID</th>
                        <th>Title</th>
                        <th>File</th>
                        <th>Size</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($photos as $photo) : ?>
                    <tr>
                        <td>
                            <img src="http://placehold.it/62x62" height="62" width="62" alt="">
                        </td>
                        <td><?php echo $photo->photo_id; ?></td>
                        <td><?php echo $photo->title; ?></td>
                        <td><?php echo $photo->filename; ?></td>
                        <td><?php echo $photo->size; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include("includes/footer.php");
?>