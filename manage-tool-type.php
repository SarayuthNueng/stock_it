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
                        <h4 class="page-title pull-left">จัดการประเภทวัสดุ</h4>
                        <ul class="breadcrumbs pull-left">
                            <li><a href="dashboard_admin.php">หน้าแรก</a></li>
                            <li><span>จัดการประเภทวัสดุ</span></li>
                        </ul>
                    </div>
                </div>
                <?php include 'components/username.php' ?>
            </div>
        </div>
        <!-- page title area end -->
        <div class="main-content-inner">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4 class="header-title">จัดการประเภทวัสดุคงคลังทั้งหมด</h4>
                            </div>
                            <div class="col-lg-6">
                                <div class="row justify-content-end">
                                    <div class="col-lg-2 ">
                                        <button style="float: right;" class="mb-3 btn btn-primary"><i class="ti-plus mx-2"></i>เพิ่มประเภทวัสดุ</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="data-tables ">
                            <div class="table-responsive">
                                <table id="dataTable" class=" table table table-stripped text-center" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>รหัส</th>
                                            <th>ชื่อประเภทวัสดุ</th>
                                            <th>แก้ไข</th>
                                            <th>ลบ</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td><i style="color: green;" class="ti-settings"></i></td>
                                            <td><i style="color: red;" class="ti-trash"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td><i style="color: green;" class="ti-settings"></i></td>
                                            <td><i style="color: red;" class="ti-trash"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td><i style="color: green;" class="ti-settings"></i></td>
                                            <td><i style="color: red;" class="ti-trash"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td><i style="color: green;" class="ti-settings"></i></td>
                                            <td><i style="color: red;" class="ti-trash"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td><i style="color: green;" class="ti-settings"></i></td>
                                            <td><i style="color: red;" class="ti-trash"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td><i style="color: green;" class="ti-settings"></i></td>
                                            <td><i style="color: red;" class="ti-trash"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td><i style="color: green;" class="ti-settings"></i></td>
                                            <td><i style="color: red;" class="ti-trash"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td><i style="color: green;" class="ti-settings"></i></td>
                                            <td><i style="color: red;" class="ti-trash"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td><i style="color: green;" class="ti-settings"></i></td>
                                            <td><i style="color: red;" class="ti-trash"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td><i style="color: green;" class="ti-settings"></i></td>
                                            <td><i style="color: red;" class="ti-trash"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td><i style="color: green;" class="ti-settings"></i></td>
                                            <td><i style="color: red;" class="ti-trash"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td><i style="color: green;" class="ti-settings"></i></td>
                                            <td><i style="color: red;" class="ti-trash"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td><i style="color: green;" class="ti-settings"></i></td>
                                            <td><i style="color: red;" class="ti-trash"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td><i style="color: green;" class="ti-settings"></i></td>
                                            <td><i style="color: red;" class="ti-trash"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td><i style="color: green;" class="ti-settings"></i></td>
                                            <td><i style="color: red;" class="ti-trash"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td><i style="color: green;" class="ti-settings"></i></td>
                                            <td><i style="color: red;" class="ti-trash"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td><i style="color: green;" class="ti-settings"></i></td>
                                            <td><i style="color: red;" class="ti-trash"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main content area end -->

    <?php include 'components/footer.php' ?>

    <?php } ?>