<div class="card">
    <div class="card-body row">
        <div class="card-title h3 col-8">Tambah Data books</div>
        <div class="col-4 mb-2">
            <a href="?m=books&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
        </div>

        <form action="?m=books&s=simpan" method="post">
            <div class="mb-2">
                <input type="number" class="form-control" name="id" placeholder="Nomor Induk" autofocus required>
            </div>
            <div class="mb-2">
                <input type="text" class="form-control" name="title" placeholder="Title">
            </div>
            
            <div class="mb-2">
                <input type="text" class="form-control" name="author" placeholder="author">
            </div>
            <div class="mb-2">
                <input type="text" class="form-control" name="publisher" placeholder="publisher">
            </div>
            <div class="mb-2">
                <input type="text" class="form-control" name="year" placeholder="year">
            </div>
            
            
               
            
            <div class="mb-2">
                <input type="reset" class="btn btn-sm btn-danger">
                <input type="submit" class="btn btn-sm btn-primary" name="simpan" value="Simpan">
            </div>
        </form>
    </div>
</div>