<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <h1 class="page-header">Variabele Titel</h1>
            <hr>

            <?php
                $result = User::find_all_users();
                while($row = mysqli_fetch_array($result)){
                    echo $row['username']."<br>";
                }
            ?>

        </div>
    </div>

</div>
<!-- /.container-fluid -->