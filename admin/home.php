<?php
$tongdoanhthu = tong_doanhthu();
$tongsanpham = tong_sanpham();
$tongdonhang = tong_donhang();
$tongtaikhoan = tong_taikhoan();
$sp_banchay = sp_banchay();
$donhang_moi = donhang_moi();
$tongbinhluan = tong_binhluan();
?>
<div class="box-right">
    <div class="title-page">
        <p>Dashboards</p>
    </div>

    <div class="statistics">
        <div class="statistics-items">
            <div class="statistics-content">
                <a href="index.php?act=listbill">
                    <div class="statistics-title">
                        Tổng doanh thu
                    </div>

                    <div class="widget-numbers">
                        <?php echo number_format($tongdoanhthu[0]["SUM(tong)"], 0, ",", ".") ?>
                        <u>đ</u>
                    </div>
                </a>
            </div>
        </div>

        <div class="statistics-items">
            <div class="statistics-content">
                <a href="index.php?act=listsp">
                    <div class="statistics-title">
                        Tổng sản phẩm
                    </div>
                    <div class="widget-numbers">
                        <?php echo $tongsanpham ?>
                    </div>
                </a>
            </div>
        </div>

        <div class="statistics-items">
            <div class="statistics-content">
                <a href="index.php?act=listbill">
                    <div class="statistics-title">
                        Tổng đơn hàng
                    </div>
                    <div class="widget-numbers">
                        <?php echo $tongdonhang ?>
                    </div>
                </a>
            </div>
        </div>

        <div class="statistics-items">
            <div class="statistics-content">
                <a href="index.php?act=listtk">
                    <div class="statistics-title">
                        Số lượng tài khoản
                    </div>
                    <div class="widget-numbers">
                        <?php echo $tongtaikhoan ?>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- end -->

    <div class="statistics">
        <div class="statistics-revenue">
            <div class="row form-content">
                <div class="statistics-title2">
                    <p>Sản phẩm bán chạy</p>
                </div>

                <table>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Lượt mua</th>
                    </tr>

                    <?php
                    foreach ($sp_banchay as $key => $sp) {
                        extract($sp);
                        $stt = $key + 1;
                        echo '<tr>
                        <td>' . $stt . '</td>
                        <td>' . $ten . '</td>
                        <td>' . $luot_mua . '</td>
                    </tr>';
                    }
                    ?>
                </table>
            </div>
        </div>

        <div class="statistics-order">
            <div class="row form-content">
                <a href="index.php?act=listbill">
                    <div class="statistics-title2">
                        <p>Đơn hàng mới</p>
                    </div>
                    <table>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Trạng thái</th>
                        </tr>

                        <?php
                        foreach ($donhang_moi as $dh) {
                            extract($dh);
                            echo '<tr>
                        <td><a href="index.php?act=chitietbill&id=' . $id . '">DH-' . $id . '</a></td>
                        <td><a href="index.php?act=chitietbill&id=' . $id . '" class="text-red">' . get_ttdh($trangthai_dh) . '</a></td>
                    </tr>';
                        }
                        ?>
                    </table>
                </a>
            </div>
        </div>

        <div class="statistics-items">
            <div class="statistics-content">
                <a href="index.php?act=listbl">
                    <div class="statistics-title">
                        Số lượng bình luận
                    </div>
                    <div class="widget-numbers">
                        <?php echo $tongbinhluan ?>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
</div>