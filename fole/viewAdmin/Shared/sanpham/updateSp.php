<?php 
include('../../../conn/connect.php');
if(isset($_POST['luu'])){
    $masp = $_POST['masp'];
    $tensp = $_POST['tensp'];
    $maloai = $_POST['maloai'];
    $machatlieu = $_POST['machatlieu'];
    $mancc = $_POST['mancc'];
    $mancc = $_POST['mathuonghieu'];
    $dongianhap = $_POST['dongianhap'];
    $dongiaban = $_POST['dongiaban'];
    $soluong = $_POST['soluong'];
    $baoquan = $_POST['baoquan'];
    $huongvi = $_POST['huongvi'];
    if($_POST['anh'] ==""){
        $anh = $_POST['anh1'];
    }else{
        $anh = $_POST['anh'];
    }
   
    $ghichu = $_POST['ghichu'];

    $update = "UPDATE tbl_sanpham SET tensp = '$tensp', maloai = '$maloai', machatlieu = '$machatlieu', mancc = '$mancc', 
    mathuonghieu = '$mathuonghieu', dongianhap = '$dongianhap', dongiaban = '$dongiaban', 
    soluong = '$soluong', baoquan = '$baoquan', huongvi = '$huongvi', anh = '$anh', ghichu = '$ghichu'
     WHERE masp = '$masp'";
    mysqli_query($conn, $update);
    
    header("Location: ../../index.php?pg=danhmucsanpham");
}
