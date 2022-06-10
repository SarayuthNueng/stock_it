<?php 
session_start();
        if(isset($_POST['username'])){
				//connection
                  include("db/connect-db.php");
				//รับค่า user & password
                  $username = $_POST['username'];
                  $password = md5($_POST['password']);
				//query 
                  $sql="SELECT * FROM users Where username='".$username."' and password='".$password."' ";

                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["userid"] = $row["user_id"];
                      $_SESSION["user"] = $row["firstname"]." ".$row["lastname"];
                      $_SESSION["userlevel"] = $row["ulevel"];

                      if($_SESSION["userlevel"]=="admin"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        Header("Location: adminpage.php");

                      }

                      if ($_SESSION["userlevel"]=="member"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                        Header("Location: userpage.php");

                      }

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: form.php"); //user & password incorrect back to login again

        }
?>