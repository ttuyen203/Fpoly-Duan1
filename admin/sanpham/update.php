<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $hinh;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "Không có hình ảnh";
}
?>

<div class="box-right">
    <div class="title-page">
        <p>Sửa sản phẩm</p>
    </div>

    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="" class="title-form-group">Ảnh sản phẩm</label><br>
            <input type="file" name="hinh" id="" ><?= $hinh ?>
        </div>

        <div class="form-group">
            <label for="" class="title-form-group">Tên sản phẩm:</label><br>
            <input type="text" name="tensp" id="" class="form-input" value="<?= $tensp ?>">
        </div>

        <div class="form-group">
            <label for="" class="title-form-group">Danh mục:</label><br>
            <select name="iddm" id="" class="form-input">
            <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listdm as $danhmuc) {
                    if($iddm ==  $danhmuc['id']) $s = "selected"; else $s = "";
                    echo '<option value="'. $danhmuc['id'].'" '.$s.'>'.$danhmuc['tendm'].'</option>';
                }
                ?>
            </select>

            <div class="form-group">
                <label for="price">Giá sản phẩm:</label>
                <div class="form-group-price">
                    <span class="input-group-text">$</span>
                    <input type="text" name="giasp" class="form-input" value="<?= $giasp ?>">
                </div>
            </div>

            <div class="form-group">
                <label for="price">Số lượng:</label>
                <div class="form-group-price">
                    <input type="text" name="soluong" class="form-input" value="<?= $soluong ?>">
                </div>
            </div>

            <div class="form-group">
                <label>Mô tả sản phẩm</label>
                <textarea name="mota" class="form-input" style="height: 78px;"><?= $mota ?></textarea>
            </div>

            <div class="form-group">
                <label for="">Đơn vị:</label>
                <div class="form-group-price">
                    <input type="text" name="donvi" class="form-input" value="<?= $donvi ?>">
                </div>
            </div>

            <div class="form-group">
                <label for="">Ngày nhập:</label>
                <div class="form-group-price">
                    <input type="date" name="ngaynhap" class="form-input" value="<?= $ngaynhap ?>">
                </div>
            </div>

            <div>
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" class="btn-submit" name="capnhat" value="Submit">
            </div>

            <div class="thongbao">
                <?php
                if (isset($thongbao) && $thongbao != "")
                    echo $thongbao;
                ?>
            </div>
        </div>
    </form>
</div>
</div>