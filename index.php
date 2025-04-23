<?php
$submodule = (isset($_GET['s'])) ? $_GET['s'] : "tampil" ;
switch ($submodule) {
    case 'tampil': 
        default:
        include "books/tampil.php";
        break;   
    case 'tambah':
        include "books/tambah.php";
        break;
    case 'simpan' :
        include "books/simpan.php";
        break;       
    case 'edit' :
        include "books/edit.php";
        break;       
    case 'update' :
        include "books/update.php";
        break;       
    case 'hapus' :
        include "books/hapus.php";
        break;
        
  
}