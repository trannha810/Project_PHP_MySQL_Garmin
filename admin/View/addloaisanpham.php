
<?php
$hh = new loai();

$kq =$hh-> countLoai() ;
$count=$kq['count']+1;

?>
<div style="padding-left:30% ;">
    <div class="card " style="display: flex; flex-direction: column; width: 50%; ">

        <div class="card-header" style="text-align: center ;">
            <h1> QUẢN LÝ LOẠI HÀNG</h1><br>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#loai-form" class="nav-link active">Thêm CSV</a>

                </li>
                <li class="nav-item">
                    <a href="#khac-form" class="nav-link">Thêm Loại</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane active show" id="loai-form">
                    <form action="index.php?action=loai&act=loai_action" method="post" enctype="multipart/form-data">
                        <input type="file" name="file" id="">
                        <input type="submit" value="Submit">
                    </form>
                </div>
                <div class="tab-pane" id="khac-form">
                    <form action="index.php?action=loai&act=loai_action_1" method="post" enctype="multipart/form-data">
                      
                        <div class="form-group">
                            <label for="">Mã danh mục</label>
                            <input type="text" readonly name="maloai" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Tên danh mục</label>
                            <input type="text" name="tenloai" class="form-control">
                        </div>
                        <div class="form-group">

                            <label for="">Menu số:</label>
                            <input type="text" name="iddanhmuc" class="form-control" value="<?php echo $count;?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       
            <a href="index.php?action=loai&act=danhsach" class="btn btn-danger">Danh sách</a>
    </div>
</div>


<script>
$(document).ready(function() {
    $('.nav-tabs a').click(function(e) {
        e.preventDefault(); // Prevent default link behavior

        // Hide all tab content (active and inactive)
        $('.tab-pane').removeClass('active show');

        // Get the ID of the clicked link
        const clickedLinkId = $(this).attr('href').slice(1); // Remove the leading "#"

        // Show the content associated with the clicked link
        $(`#${clickedLinkId}`).addClass('active show');
    });
});
</script>