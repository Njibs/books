<div class="card">
    <div class="card-body row">
        <h5 class="card-title h3 col-8">Edit Data books</h5>
        <div class="col-4 mb-2">
                    <a href="?m=books&s=kembali" class="btn btn-lg btn-primary float-end">back</a>
        </div>
        <?php
        include_once "setting.php";
        $id = $_GET['id'];
        $sql = "SELECT * FROM ujianawal WHERE id='$id'";
        $query = mysqli_query(mysql: $koneksi, query: $sql);
        $r = mysqli_fetch_array($query); 
        ?>
        <form action="?m=books&s=update" method="post">
            <div class="mb-2">
                    <input type="number" class="form-control" name="id" value="<?php echo $r['id'];?>" placeholder="Nomor Induk"  required>
            </div>
            <div class="mb-2">
                    <input type="text" class="form-control" name="title" value="<?php echo $r['title'];?>"placeholder="title"  required>
            </div>
            <div class="mb-2">
                    <input type="text" class="form-control" name="author" value="<?php echo $r['author'];?>"placeholder="author"  required>
            </div>
            <div class="mb-2">
                    <input type="text" class="form-control" name="publisher" value="<?php echo $r['publisher'];?>"placeholder="publisher"  required>
            </div>
            <div class="mb-2">
                    <input type="text" class="form-control" name="year" value="<?php echo $r['year'];?>"placeholder="year"  required>
            </div>
            
            <div class="mb-2">
                <input type="hidden" name="id" value="<?php echo $r['id']; ?>">
                <input type="reset" class="btn btn-sm btn-danger">
                <input type="submit" class="btn btn-sm btn-primary" name="update" value="Update">
            </div>
        </form>
    </div>
</div>
