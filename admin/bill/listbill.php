<h3 style="margin-top: 10px;">Liệt Kê Đơn Hàng</h3>
<form action="index.php?act=listdm" class="searchS" method="POST">
    <!-- <select name="cate_id" id="">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listdm as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="' . $id_cate . '">' . $name_cate . '</option>';
                }
                ?>
            </select> -->
    <div class="searchS-text">
        <input type="text" name="kyw" id="" placeholder="Tìm kiếm đơn hàng..">
        <input type="submit" name="listok">
    </div>
</form>
<form action="#" method="POST">
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Mã đơn hàng </th>
                <th>Tên khách hàng</th>
                <th>Số lượng đơn hàng</th>
                <th>Tình trạng đơn hàng</th>
                <th>Ngày đặt hàng</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <?php
        if (isset($_SESSION['listbill'])) {
            foreach ($listbill as $bill) {
                $i = 0;
                $xoalistbill = '<a href="index.php?act=dellistbill&idbill=' . $i . '"><input type="button" value="Xóa"></a>';
                extract($bill);

                $kh = $bill['bill_name'] . '
    <br> ' . $bill['bill_email'] . '
    <br> ' . $bill['bill_address'] . '
    <br> ' . $bill['bill_tel'];
                $countsp = loadall_cart_count($bill['id']);
                echo '
    <tr>
    <td><input type="checkbox" name=""  id="" ></td>
    <td>DAM-' . $bill['id'] . '</td>
    <td>' . $kh . '</td>
    <td>' . $countsp . '</td>
    <td>' . $ttdh . '</td>
    <td>' . $bill['ngaydathang'] . '</td>
    <td><input type="button" value ="Sửa"><br>' . $xoalistbill . '</td>
    </tr>
    ';
                $i += 1;
            }
        }

        ?>
        <!-- bill-edit -->
        </tr>
    </table>
</form>
<div class="table-btn">
    <input type="button" value="Chọn Tất Cả">
    <input type="button" value="Bỏ Chọn Tất Cả">
    <input type="button" value="Xóa Các Mục Đã Chọn">
    <a href="index.php?act=addsp"><input type="button" value="Nhập Thêm"></a>
</div>