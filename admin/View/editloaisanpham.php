<?php
if (isset ($_GET['id'])) {
    $mahh = $_GET['id'];
    $hh = new loai();
    $kq = $hh->getLoaiID($mahh);
    $tenloai = $kq['tenloai'];
    $iddanhmuc = $kq['iddanhmuc'];


}
?>

<div style="padding-left:30% ;">
    <div class="card " style="display: flex; flex-direction: column; width: 50%; ">

        <div class="card-header" style="text-align: center ;">
            <h1> CẬP NHẬT LOẠI HÀNG</h1><br>
        </div>

        <form action="index.php?action=loai&act=update_loai_action" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="">Mã danh mục</label>
                <input type="text" readonly name="maloai" class="form-control" value="<?php if (isset ($mahh))
                        echo $mahh; ?>">

            </div>
            <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" name="tenloai" class="form-control" value="<?php if (isset ($tenloai))
                        echo $tenloai; ?>">
            </div>
            <div class="form-group">

                <label for="">Menu số:</label>
                <input type="text" readonly name="iddanhmuc" class="form-control" value="<?php if (isset ($iddanhmuc))
                        echo $iddanhmuc; ?>">
            </div>
            <div class="form-group">

                <label for="">Hình ảnh::</label>
                <input type="file" class="form-control" value="<?php if (isset ($hinh))
                    echo $hinh; ?>" name="hinh">
            </div>
            <div class="form-group">
                <label for="">act:</label>
                <input type="hidden" readonly name="act" class="form-control" value="<?php
                if (isset ($tenloai)) {
                    // Chuyển đổi sang chữ thường
                    $tenloai_khongdau = strtolower($tenloai);

                    // Thay thế khoảng trắng và dấu bằng chuỗi rỗng
                    $tenloai_khongdau = str_replace(" ", "", $tenloai_khongdau);
                    $tenloai_khongdau = str_replace(".", "", $tenloai_khongdau);

                    // Loại bỏ dấu
                    $tenloai_khongdau =str_replace(
                        array("á", "à", "ả", "ã", "ạ", "â", "ấ", "ầ", "ẩ", "ẫ", "ậ", "ă", "ắ", "ằ", "ẳ", "ẵ", "ặ"),
                        array("a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a"),
                        $tenloai_khongdau
                      );;
                    echo $tenloai_khongdau;
                } ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>
        <a href="index.php?action=loai&act=danhsach" class="btn btn-danger">Danh sách</a>

    </div>
</div>