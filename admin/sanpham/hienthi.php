<div class="row">
            <div class="row formtitle mb">
                <h1>DANH SÁCH HÀNG HÓA</h1>
            </div>
            <div class="formtimkiem">
                
            <form action="index.php?act=listsp" method="post">
                        <input type="text" name="kyw">
                        <select name="iddm">
                            <option value="0" selected>Tất Cả</option>
                        <?php 
                        foreach ($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                        ?>
                        </select>
                        <input type="submit" name="listok" value="Tìm kiếm">
                    </form>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formloai">
                    
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ HÀNG HÓA</th>
                            <th>TÊN HÀNG HÓA</th>
                            <th>HÌNH</th>
                            <th>MÔ TẢ</th>
                            <th>GIÁ</th>
                            <th></th>
                        </tr>
                        
                        <?php 
                            foreach ($listsanpham as $sanpham) {
                                extract($sanpham);
                                $suasp="index.php?act=suasp&id=".$id_san_pham;
                                $xoasp="index.php?act=xoasp&id=".$id_san_pham;
                                $hinhpath="../../images/".$hinh;
                                if(is_file($hinhpath)){
                                    $hinh="<img src='" . $hinhpath . "' height='80'>";
                                }else{
                                    $hinh="no img";
                                }
                                echo '
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>'.$id_san_pham.'</td>
                            <td>'.$ten_san_pham.'</td>
                            <td>'.$hinh.'</td>
                            <td>'.$mo_ta.'</td>
                            <td>'.$gia.'</td>
                            <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a> <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                        </tr>
                        ';
                            }
                        ?>
                    </table>
                </div>
                <div class="row mb10">
                    <a href="index.php?act=themsp"><input type="button" value="Nhập thêm"></a>
                </div>
            </div>
        </div>