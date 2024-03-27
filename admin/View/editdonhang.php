<?php
if (isset ($_GET['id'])) {
    $masohd = $_GET['id'];
    $hh = new Donhang();
    $kq = $hh->getdonhangID($masohd);
    $kq1 = $hh->getHangHoaMSHD($masohd);

    $tinhtrang = $kq['tinhtrang'];
    $tong = $kq['tong'];

}
?>

<div class="row col-md-6 col-md-offset-2">
    <form action="index.php?action=donhang&act=update_action" method="post" enctype="multipart/form-data">

        <table class="table" style="border: 0px;">

            <tr>
                <td>Mã hóa đơn</td>
                <td> <input type="text" class="form-control" name="masohd" value="<?php if (isset ($masohd))
                    echo $masohd; ?>" readonly />
                </td>
            </tr>
            <tr>
                <td>Thông tin dơn hàng</td>
                <td>
                    <?php
                    while ($set1 = $kq1->fetch()) {
                        ?>
                    <p>
                        <?php echo $set1['tenhh']; ?>-số lượng:
                        <?php echo $set1['soluongmua']; ?>
                    </p><br>
                    <?php
                    } ?>
            </tr>
            <tr>
                <td>Thành tiền</td>

                <td>
                    <?php if (isset ($tong))
                        echo number_format($tong); ?>
                </td>
            </tr>
            <tr>
                <td>Tình trạng</td>

                <td><select class="custom-select" name="tinhtrang" id="">
                        <option selected value="<?php if ($tinhtrang) {
                            echo $tinhtrang;
                        } ?>">
                            <?php
                           if( $tinhtrang==0){
                            echo "Đã nhận đơn";
                        }
                        if( $tinhtrang==1){
                            echo "Đang Vận chuyển";
                        }
                        if( $tinhtrang==2){
                            echo "Đã giao hàng";
                        }
                        if( $tinhtrang==3){
                            echo "Hàng bị mất";
                        }
                            ?>
                        </option>
                        <option value="0">Đã nhận đơn</option>
                        <option value="1">Đang Vận chuyển</option>
                        <option value="2">Đã giao hàng</option>
                        <option value="3">Hàng bị mất</option>

                    </select></td>
            </tr>










            <tr>
                <td colspan="2">
                    <input type="submit" value="submit">


                </td>
            </tr>

        </table>
    </form>
</div>