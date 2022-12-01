<h1>Liệt kê đơn hàng</h1>
<form action="index.php?act=listbill" class="search" method="post">

    <input type="text" name="bill-search" placeholder="nhập mã đơn hàng">

    <input type="submit" name="listok" value="Go">

</form>
<form class="listbill">
    <table>
        <tr>
            <th>Id</th>
            <th>Mã đơm hàng </th>
            <th>Tên khách hàng</th>
            <th>Số lượng đơn hàng</th>
            <th>Tình trạng đơn hàng</th>
            <th>Ngày đặt hàng</th>
            <th>Thao tác</th>
        </tr>
        <?php
if(isset($_SESSION['listbill'])){
foreach($listbill as $bill){
$i=0;
    $xoalistbill = '<a href="index.php?act=dellistbill&idbill='.$i.'"><input type="button" value="Xóa"></a>';
    extract($bill);

    $kh=$bill['bill_name'].'
    <br> '.$bill['bill_email'].'
    <br> '.$bill['bill_address'].'
    <br> '.$bill['bill_tel'];
    $countsp=loadall_cart_count($bill['id']);
    echo'
    <tr>
    <td><input type="checkbox" name=""  id="" ></td>
    <td>DAM-'.$bill['id'].'</td>
    <td>'.$kh.'</td>
    <td>'.$countsp.'</td>
    <td>'.$ttdh.'</td>
    <td>'.$bill['ngaydathang'].'</td>
    <td><input type="button" value ="Sửa"><br>'.$xoalistbill.'</td>
    </tr>
    ';
    $i+=1;
}
}
 
?>
        <!-- bill-edit -->
        <div class="bill-edit">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="xóa các mục đã chọn">
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
        </div>
        </tr>

</form>