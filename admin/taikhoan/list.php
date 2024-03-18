<div class="box-right">
    <div class="title-page">
        <p>Tài khoản</p>
    </div>

    <div class="form-search">
        <form action="index.php?act=listtk" method="post">
            <input type="text" name="kyw" placeholder="Nhập từ khóa" > 
            <!-- keyword -->
            <input type="submit" name="timkiemtk" value="Tìm kiếm">
        </form>
    </div>

    <div class="row form-content">
        <table>
            <tr>
                <th>STT</th>
                <th>Username</th>
                <th>Email</th>
                <th>Vai trò</th>
                <th class="text-center">Thao tác</th>
            </tr>

            <?php
            if (isset($listtaikhoan)) {
                foreach ($listtaikhoan as $key=>$tk) {
                    extract($tk);
                    $suatk = "index.php?act=suatk&id=" . $id;
                    $xoatk = "index.php?act=xoatk&id=" . $id;
                    $chitiettk = "index.php?act=chitiettk&id=" . $id;
                    $stt = $key+1;
                    echo ' <tr>
                            <td>' . $stt . '</td>
                            <td>' . $tendn . '</td>
                            <td>' . $email . '</td>
                            <td>' . $vaitro . '</td>
                            <td class="text-center">
                                <a href="'.$suatk.'"><input type="button" value="Sửa" class="btn-update"></a>
                                <a href="'.$xoatk.'"  class="deleteLink" data-id="' . $id . '"><input type="button" value="Xóa" class="btn-delete"></a>
                                <a href="'.$chitiettk.'"><input type="button" value="Chi tiết" class="btn-detail"></a>
                            </td>
                        </tr>';
                }
            }
            ?>
        </table>
    </div>
</div>
</div>
<script>
    // Gắn sự kiện lắng nghe cho tất cả các phần tử có class deleteLink
    const deleteLinks = document.querySelectorAll('.deleteLink');
    deleteLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của liên kết

            const id = this.getAttribute('data-id'); // Lấy ID từ thuộc tính data
            const xoatk = "index.php?act=xoatk&id=" + id;

            Swal.fire({
                title: "Xác nhận xóa?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Xác nhận"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Thực hiện yêu cầu xóa 
                    Swal.fire({
                        title: "Đã xóa!",
                        icon: "success"
                    }).then(() => {
                        // Chuyển hướng đến URL xóa
                        window.location.href = xoatk;
                    });
                }
            });
        });
    });
</script>