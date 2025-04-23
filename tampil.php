<div class="card ">
        <div class="card-body row bg-warning">
        <div class="card-title h3 col-8">Data Books</div>
        <div class="col-4 mb-2">
            <a href="?m=books&s=tambah" class="btn btn-lg btn-primary float-end">Tambah</a>
        </div>
        <table class="table table-striped table-bordered table-hover ">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>publisher</th>
                    <th>Year</th>
                    <th>Aksi</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                include_once "setting.php";
                $sql = "SELECT * FROM ujianawal";
                $result = mysqli_query($koneksi, $sql);
                if($r=mysqli_num_rows($result) > 0) {
                    $no=1;
                    while ($r=mysqli_fetch_assoc($result)) {
                        echo '<tr>
                        <td>'.$no. '</td>
                        <td>'.$r['id'].'</td>
                        <td>'.$r['title'].'</td>
                        <td>'.$r['author'].'</td>
                        <td>'.$r['publisher'].'</td>
                        <td>'.$r['year'].'</td>
                        
                        <td>
                        <a href="?m=books&s=edit&id=' . $r['id'] . '" class="btn btn-sm btn-warning">Edit</a>
                        <a href="?m=books&s=hapus&id=' . $r['id'] . '" class="btn btn-sm btn-danger" onclick="return confirm(\'Apakah anda yakin?\')">Hapus</a>
                        </td>
                        </tr>';
                        $no++;
                        
                    }
                } else {
                    echo '<tr>
                    <td colspan="7" align="center">Data Kosong</td>
                    </tr>';
                    
                }
                ?>
               </tbody> 
            </table>
        </div>
    </div>

    