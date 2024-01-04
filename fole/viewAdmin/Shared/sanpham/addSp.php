
<?php
 include('../../../conn/connect.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tensp = $_POST['tensp'];
    $maloai = $_POST['maloai'];
    $machatlieu = $_POST['machatlieu'];
    $mancc = $_POST['mancc'];
    $mathuonghieu = $_POST['mathuonghieu'];
    $dongianhap = $_POST['dongianhap'];
    $dongiaban = $_POST['dongiaban'];
    $soluong = $_POST['soluong'];
    $baoquan = $_POST['$baoquan'];
    $huongvi = $_POST['$huongvi'];
    $anh = $_POST['anh'];
    $ghichu = $_POST['ghichu'];
    
    $add = "INSERT INTO tbl_sanpham (tensp, maloai, machatlieu, dongianhap, dongiaban, mancc, mathuonghieu, soluong, baoquan, huongvi, anh, ghichu) 
    VALUES ('$tensp', '$maloai', '$machatlieu', '$dongianhap', '$dongiaban', '$mancc', '$mathuonghieu', '$soluong', '$baoquan', '$huongvi', '$anh', '$ghichu')";
    mysqli_query($conn, $add);
    header("Location: ../../index.php?pg=danhmucsanpham");
    
}
?>

