<?php
//connect db
include("db/connect-db.php");
?>
<?php session_start(); ?>


<?php

if (!$_SESSION["user_id"]) {  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

} else { ?>
    <?php include 'components/head.php' ?>
    <!-- page container area start -->
    <div class="page-container">

        <?php include 'components/sidebar.php' ?>

        <!-- main content area start -->
        <div class="main-content">
            <?php include 'components/header.php' ?>
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">รายการเบิก</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="home.php">หน้าหลัก</a></li>
                                <li><span>รายการเบิก</span></li>
                            </ul>
                        </div>
                    </div>
                    <?php include 'components/username.php' ?>
                </div>
            </div>

            <!-- cart -->
            <?php
            if (isset($_GET['p_id']) && ($_GET['act'])) {
                $p_id = mysqli_real_escape_string($conn, $_GET['p_id']);
                $act = mysqli_real_escape_string($conn, $_GET['act']);

                // add to cart
                if ($act == 'add' && !empty($p_id)) {
                    if (isset($_SESSION['cart'][$p_id])) {
                        $_SESSION['cart'][$p_id]++;
                    } else {
                        $_SESSION['cart'][$p_id] = 1;
                    }
                }
                // add to cart

                // remove product
                if ($act == 'remove' && !empty($p_id))  //ยกเลิกการสั่งซื้อ
                {
                    unset($_SESSION['cart'][$p_id]);
                }
                // remove product

                // update cart
                if ($act == 'update') {
                    $amount_array = $_POST['amount'];
                    foreach ($amount_array as $p_id => $amount) {
                        $_SESSION['cart'][$p_id] = $amount;
                    }
                }
                // update cart

                // cancel cart
                if ($act == 'cancel') {
                    unset($_SESSION['cart']);
                }
                // cancel cart
            }
            ?>

            <!-- page title area end -->
            <div class="main-content-inner">
                <form id="frmcart" name="frmcart" method="post" action="?act=update&p_id=0">
                    <div id="shopping-cart">
                        <div class="col-12 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h4 class="header-title">รายการที่ต้องการเบิก</h4>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table table-stripped text-center" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th width='10%'>รูปภาพ</th>
                                                    <th>วัสดุ</th>
                                                    <th>ราคาต่อหน่วย</th>
                                                    <th width='10%'>จำนวน</th>
                                                    <th>ราคารวม</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $total = 0;
                                            if (!empty($_SESSION['cart'])) {
                                                foreach ($_SESSION['cart'] as $p_id => $qty) {
                                                    $sql = "SELECT * FROM product WHERE p_id=$p_id";
                                                    $query = mysqli_query($conn, $sql);
                                                    $row = mysqli_fetch_array($query);
                                                    $sum = $row['p_price'] * $qty; //เอาราคา คูณ จำนวน
                                                    $total += $sum; //ราคารวม
                                                    $p_qty = $row['p_qty']; //จำนวนสอนค้าในสต๊อก
                                                    echo "<tr>";
                                                    echo "<td>" .  @$i += 1 . "</td>";
                                                    echo "<td><img src='assets/images/" . $row["p_pic"] . " ' ></td>";
                                                    echo "<td>"
                                                        . "<b>ชื่อวัสดุ : &nbsp;&nbsp;</b>"
                                                        . $row["p_name"]
                                                        . "<br>"
                                                        . "<b>จำนวนคงเหลือ : &nbsp;&nbsp;</b>"
                                                        . $row["p_qty"]
                                                        . "</td>";
                                                    echo "<td>" . number_format($row["p_price"], 2) . "&nbsp;&nbsp;บาท</td>";
                                                    echo "<td>";
                                                    echo "<input class='form-control text-center' type='number' name='amount[$p_id]' value='$qty' size='2'min='1' max='$p_qty'/></td>";
                                                    echo "<td>" . number_format($sum, 2) . "&nbsp;&nbsp;บาท</td>";
                                                    //remove product
                                                    echo "<td><a class='btn btn-danger' href='home.php?p_id=$p_id&act=remove'>ลบ</td>";
                                                    echo "</tr>";
                                                }
                                                echo "<tr>";
                                                echo "<td colspan='5'><b>ราคารวมทั้งหมด</b></td>";
                                                echo "<td>" . "<b>" . number_format($total, 2) . "</b>&nbsp;&nbsp;บาท" . "</td>";
                                                echo "<td></td>";
                                                echo "</tr>";
                                            }
                                            if ($total > 0) {
                                            ?>
                                                <tr>

                                                    <td colspan="7">
                                                        <input type="button" class="btn btn-danger" name="btncancel" value="ยกเลิก" onclick="window.location='home.php?act=cancel&p_id=0';" />
                                                        <input type="submit" class="btn btn-warning" name="button" id="button" value="ยืนยันการเบิก" />

                                                        <?php if (isset($_GET['p_id']) && ($_GET['act'])) { ?>
                                                            <?php if ($act == 'update') {
                                                            ?>
                                                                <input type="button" class="btn btn-success" name="Submit2" value="เบิกวัสดุ" onclick="window.location='confirmorder.php';" />
                                                            <?php  }
                                                            ?>
                                                        <?php } ?>

                                                    </td>
                                                </tr>
                                            <?php } else { ?>
                                                <tr>
                                                    <td colspan="6">
                                                        <h6 class="text-center">-- ไม่มีรายการเบิก --</h6>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>


                <!-- list tool -->
                <?php
                $sql = "SELECT * FROM product ORDER BY p_id DESC";  //เรียกข้อมูลมาแสดงทั้งหมด
                $result = mysqli_query($conn, $sql);
                ?>

                <div class="card-area">
                    <div class="row">
                        <?php while ($row = mysqli_fetch_array($result)) { ?>
                            <div class="col-lg-2 col-md-4 mt-5">
                                <div class="card card-bordered">
                                    <img class="card-img-top img-fluid" src="assets/images/<?php echo $row["p_pic"]; ?>" alt="image">
                                    <div class="card-body">
                                        <h6 class="">ชื่อ : <?php echo  $row["p_name"]; ?></h6>
                                        <h6 class="">ราคา : <?php echo  $row["p_price"]; ?></h6>
                                        <h6 class="">จำนวน : <?php echo  $row["p_qty"]; ?></h6>
                                        <p class="">รายละเอียด : <?php echo  $row["p_detail"]; ?></p>
                                        <div class="row justify-content-center">
                                            <?php if ($row["p_qty"] > 0) { ?>
                                                <a href="home.php?p_id=<?php echo $row["p_id"]; ?>&act=add" class="text-center mt-3 btn btn-primary">
                                                    <h6>เบิกวัสดุ</h6>
                                                </a>
                                            <?php } else { ?>
                                                <button class="mt-3 btn btn-secondary" disabled>
                                                    <h6>วัสดุหมด</h6>
                                                </button>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>

            </div>
        </div>
        <!-- main content area end -->

        <?php include 'components/footer.php' ?>

    <?php } ?>