<h1>Liệt kê đơn hàng</h1>
<form action="index.php?act=listbill" class="search"  method="post">

<input type="text" name="bill-search" placeholder="nhập mã đơn hàng">

<input type="submit"  name="listok" value="Go"> 

</form>
<form class="listbill">
    <table>
<tr>
<!-- <th>Id</th> -->
<th>Mã đơm hàng </th>
<th>Tên khách hàng</th>
<th>Số lượng đơn hàng</th>
<th>Tình trạng đơn hàng</th>
<th>Thao tác</th>
</tr>
<!-- 
<tr>
<td><?php  echo $i  ?></td>
<td><?php  echo $row['id_cate']?></td>
<td><?php  echo $row['username']?></td> -->


<!-- bill-edit -->
<div class="bill-edit">
<input type="button"  value="Chọn tất cả">
<input type="button" value="Bỏ chọn tất cả">
<input type="button" value="xóa các mục đã chọn">
<a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
</div>
</tr>

</form>