<div>

    <div>Giỏ hàng</div>
    <div>
        <table>
            <tr>

                <th>Hình</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Thao tác</th>
            </tr>

            <?php
            if(isset($_SESSION['mycart'])){
            foreach ($_SESSION['mycart'] as $spadd ){
            $hinh=$img_path.$cart[2];
            $ttien=$cart[3]*$cart[4];  
            $tong+=$ttien;
            echo '
            
            <tr>
            <td><img src="'.$hinh.'" alt="" height="80px"></td>
            <td>'.$id.'</td>
            <td>'.$name.'</td>
            <td>'.$price.'</td>
            <td>'.$ttien.'</td>
            <td><input type="button" value ="xóa"></td>
            </tr>
            ';
            echo'
            <tr>
            <td colspan="4"> Tổng đơn hàng <td>
            <td>'.$tong.'</td>
            </tr>
            
            ';
            }
        }
            ?>
        </table>

    </div>
    <div>
        <input type="submit" value="Đống ý đặt hàng"> <a href="index.php?act=delcart"><input type="button"
                value="Xóa giỏ hàng"></a>
    </div>
    <div>

    </div>
</div>