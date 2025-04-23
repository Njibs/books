<?php
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author= $_POST['author'];
    $publisher= $_POST['publisher'];
    $year = $_POST['year'];
    

    include_once "setting.php";
    $sql = "UPDATE ujianawal SET id='$id', title='$title', author='$author', publisher='$publisher', year='$year' WHERE id='$id'";
    $result = mysqli_query($koneksi, $sql);
    if($result) {
        header('location: ?m=books&s=tampil');
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
} else {
    echo "Jangan Akses langsung ke file simpan.php";
}
