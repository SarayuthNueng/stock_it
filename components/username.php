
<div class="col-sm-6 clearfix">
    <div class="user-profile pull-right">
        <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
        <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['pname'].''.$_SESSION['fname'].'  &nbsp; '. $_SESSION['lname'];?><i class="fa fa-angle-down"></i></h4>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">โปรไฟล์</a>
            <a class="dropdown-item" href="logout.php">ออกจากระบบ</a>
        </div>
    </div>
</div>