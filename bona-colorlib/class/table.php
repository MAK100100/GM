<?php

include_once 'class/config.php';

// Create connection
$conn = new mysqli($host, $username, $password, $dbName);
//====================================Create connection =====================================
function Create_conn()
{

    global $conn;
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $conn->set_charset("utf8");
    //echo "Initial character set: ", $conn->character_set_name()."\n";
    // echo "<div class='container'>Connected successfully</div>" . "<br>";

}
//=========================================================
function Close_conn()
{
    global $conn;
    $conn->close();
}
//=================================================INSERT======================================
function insert( $req_date,$req_time ,$place,$destination,$req_id,$driver,$cost,$tran_fees,$note,$status)
{
    global $conn;
    Create_conn();
    $sql = "INSERT INTO request (req_date,req_time ,place,destination,req_id,driver,cost,tran_fees,note,status) VALUES ('".$req_date. "','" .$req_time. "','" .$place. "','" .$destination. "','" .$req_id. "','".$driver. "','" .$cost. "','".$tran_fees. "','" .$note. "','" .$status. "')";
    //echo $sql;
    //$conn->query($sql);
     //echo $sql;

    if ( $conn->query($sql)=== TRUE)
      {
        echo "تم اضافة الطلبية بنجاح";
       // GetLastIndex();

      }
      else
          {
          //echo "Error: " . $sql . "<br>" . $conn->error;
           echo "فشلت العملية";
          }
    Close_conn();

}

//===========================================New Insert
function User_insert($username, $password, $access, $fees,$balance)
{
    global $conn;
    //Create_conn();
    //$birthday = "1950-01-01";
    //$t = time();
    // date("Y-m-d", $t);


    $sql = "INSERT INTO users (username,password,access,fees,balance) VALUES 
                              ('" . $username . "','" . $password . "','" . $access . "','" . $fees ."','" . $balance . "');";
   $conn->query($sql);
/*
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        //GetLastIndex();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }*/
   // Close_conn();
}
//=================================================INSERT======================================
function transaction_insert( $editor,$contractor,$bill_no ,$price,$balance,$note)
{
    global $conn;
    Create_conn();
    $sql = "INSERT INTO transactions_log  (trans_date,trans_time,editor,contractor,bill_no ,price,balance,note) VALUES ('".date("Y-m-d"). "','" .date("G:i:s"). "','" .$editor. "','" .$contractor ."','" .$bill_no. "','" .$price. "','" .$balance.  "','".$note."');";
    //echo $sql;
    $conn->query($sql);
    //echo $sql;
/*
    if ( $conn->query($sql)=== TRUE)
    {
        echo "تم اضافة العملية ";
        // GetLastIndex();

    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "فشلت العملية";
    }*/
    //Close_conn();

}

//================================= Select query : display all User table data======
function Dis_All_User()
{
    global $conn;
   // Create_conn();

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
      //  Close_conn();
    return ($result);
}

//==========================PRINT+++++++++++++++++++++++++
function Display_Users($result)
{
    // global $username;
    $count = 1;
    echo "<div class='container ' style='width: 100%'>";
    echo "<table class='table table-striped table-bordered' >";
    echo "<tr><th>#</th><th>ت</th><th>اسم المستخدم</th><th>كلمة السر</th><th>الوصف</th><th>كلفة النقل</th><th>الرصيد</th><th>تعديل</th><th>حذف</th></tr>";
    if ($result == "") {
        echo "not found ";
    } else
        foreach ($result as $array) {
            echo "<tr >
                        <td>".$count."</td>
                        <td>" . $array["id"] . "</td>
                        <td>" . $array["username"] . "</td>
                        <td>". $array["password"] . "</td>";
            if ($array["access"]==0) echo "<td>عميل</td>";
                elseif ($array["access"]==1) echo "<td>ادمن</td>";
                else
                    echo "<td>مشرف</td>";
                    echo "<td>" . $array["fees"] . "</td>
                          <td>" . $array["balance"] . "</td>
                          <td><a href='edit_client.php?Id=" . $array["id"] . "'> Edit</a></td>
                          <td><a class=\"text-danger\"  href='del_client.php?Id=" . $array["id"] . "&access&fees'> Delete</a></td>
                   </tr>";
            $count += 1;
        }
    echo "تم العثور على قيد عدد : " . ($count - 1);
    echo "</table>";
echo "</div>";
}
//==========================Display user balance only+++++++++++++++++++++++++
function Display_Balance($result)
{
    // global $username;
    $count = 1;
    echo "<div class='container ' style='width: 100%'>";
    echo "<table class='table table-striped table-bordered' >";
    echo "<tr><th style='text-align: center;'>#</th><th style='text-align: center;'>الرقم </th><th style='text-align: center;'>اسم المستخدم</th><th style='text-align: center;'>الرصيد</th><th style='text-align: center;'>تسديد مستحقات</th></tr>";
    if ($result == "") {
        echo "not found ";
    } else
        foreach ($result as $array)
        {
            if ($array["access"]==0)
                echo "<tr >
                      <td>".$count."</td>
                      <td style='width: 14px;'>" . $array["id"] . "</td>
                      <td>" . $array["username"] . "</td>
                      <td style='text-align: center;'>".$array["balance"]."</td>
                      <td style='text-align: center;'><a href='payment.php?id=" . $array["id"] . "' class='btn btn-danger'> تسديد </a></td></tr>";
            $count += 1;
        }
    echo "تم العثور على قيد عدد : " . ($count - 1);
    echo "</table>";
    echo "</div>";
}
//================================= Select query : display Transaction_log table data======
function transa_list($username,$access)
{
    global $conn;
    Create_conn();
    if ($access==0)
         $sql = "SELECT * FROM transactions_log WHERE contractor=".$username." ORDER BY id DESC;";
     else
         $sql = "SELECT * FROM transactions_log  ORDER BY id DESC;";
    $result = $conn->query($sql);
    echo $sql;
    if ($result->num_rows > 0) return ($result);
    Close_conn();
}
//SELECT * FROM transactions_log WHERE contractor=مهند عاصم ORDER BY id DESC;
//==========================PRINT+++++++++++++++++++++++++
function Display_transa($result)
{
    // global $username;
    $count = 1;
    echo "<div class='container ' style='width: 100%'>";
    echo "<table class='table table-striped table-bordered' >";
    echo "<tr><th>#</th><th>رقم العملية</th><th>التاريخ</th><th>المشرف</th><th>المتعاقد</th><th>رقم القائمة</th><th>الكلفة</th><th>الرصيد</th><th>ملاحظات</th></tr>";
if ($result == "") {
        echo "not found ";
    } else
        foreach ($result as $array) {
            echo "<tr >
                        <td>".$count."</td>
                        <td>" . $array["id"] . "</td>
                        <td>" . $array["trans_date"] . "<br>"
                              . $array["trans_time"] . "</td>
                        <td>" . $array["editor"] . "</td>
                        <td>". $array["contractor"] . "</td>";
            if ($array['bill_no']==0)
                 echo "<td>". $array["id"] . "</td>";
             else
                 echo "<td>". $array["bill_no"] . "</td>";

            if ($array["price"] <0)
                $color='#ff0000';
            else
                $color='#000000';

            echo    "<td style=\"color: $color\">". $array["price"] . "</td>
                     <td>". $array["balance"] . "</td>
                     <td>". $array["note"] . "</td>
                  </tr>";
            $count += 1;
        }
    echo "تم العثور على قيد عدد : " . ($count - 1);
    echo "</table>";
    echo "</div>";
}

//================================= ID of last Item insert to table===========
function GetLastIndex()
{
    global $conn;
    $last_id = 0;
    $last_id = $conn->insert_id;
    echo "the last add ID item is " . $last_id;

}


//===========================================Request Search ====================================
function req_Search($id,$place,$req_id,$driver,$status,$from,$to)
{
    global $conn,$total_pages, $total_rows ;
    Create_conn();
    $filter = "";
    $bol = false;
    if (!(strlen($id) == ""))
    {
        $filter = "id='" . $id . "'";
        $bol = true;
    }
    if (!(strlen($place) == "") && ($bol == true))
    {
        $filter = $filter . " AND place='" . $place . "'";
    }
    elseif (!(strlen($place )== ""))
    {
        $filter = $filter . " place='" . $place . "'";
        $bol=true;
    }

    if (!(strlen($req_id) == "") && ($bol == true))
    {
        $filter = $filter . " AND req_id='" . $req_id . "'";
    }
    elseif (!(strlen($req_id )== ""))
    {
        $filter = $filter . " req_id='" . $req_id . "'";
        $bol=true;
    }

    if (!(strlen($driver) == "") && ($bol == true))
    {
        $filter = $filter . " AND driver='" . $driver . "'";
    }
    elseif (!(strlen($driver) == ""))
    {
        $filter = $filter . " driver='" . $driver . "'";
        $bol=true;
    }

    if (!(strlen($status) == "") && ($bol == true))
    {
        $filter = $filter . " AND status='" . $status . "'";
    }
    elseif (!(strlen($status )== ""))
    {
        $filter = $filter . " status='" . $status . "'";

    }

    if (!(strlen($from) == "") && ($bol == true))
    {
        $filter = $filter . " AND 	req_date='" . $from . "'";
    }
    elseif (!(strlen($from )== ""))
    {
        $filter = $filter . " 	req_date='" . $from . "'";

    }


    $sql = "SELECT * FROM request WHERE " . $filter.";" ;
    echo $sql;
    $result = $conn->query($sql);
    $total_rows = $result->num_rows;
    //if(!empty($res)) SELECT * FROM request WHERE ;
    if ($result->num_rows > 0)
        return ($result);
    Close_conn();
}

//===========================================Request Search ====================================
function req_Search_pagination($id,$place,$req_id,$driver,$status,$from,$to,$offset,$no_of_records_per_page)
{
    global $conn,$total_pages, $total_rows ;
    Create_conn();
    $filter = "";
    $bol = false;
    if (!(strlen($id) == ""))
    {
        $filter = "id='" . $id . "'";
        $bol = true;
    }
    if (!(strlen($place) == "") && ($bol == true))
    {
        $filter = $filter . " AND place='" . $place . "'";
    }
    elseif (!(strlen($place )== ""))
    {
        $filter = $filter . " place='" . $place . "'";
        $bol=true;
    }

    if (!(strlen($req_id) == "") && ($bol == true))
    {
        $filter = $filter . " AND req_id='" . $req_id . "'";
    }
    elseif (!(strlen($req_id )== ""))
    {
        $filter = $filter . " req_id='" . $req_id . "'";
        $bol=true;
    }

    if (!(strlen($driver) == "") && ($bol == true))
    {
        $filter = $filter . " AND driver='" . $driver . "'";
    }
    elseif (!(strlen($driver) == ""))
    {
        $filter = $filter . " driver='" . $driver . "'";
        $bol=true;
    }

    if (!(strlen($status) == "") && ($bol == true))
    {
        $filter = $filter . " AND status='" . $status . "'";
    }
    elseif (!(strlen($status )== ""))
    {
        $filter = $filter . " status='" . $status . "'";

    }

    $number_of_row_sql = "SELECT COUNT(*) FROM request WHERE ".$filter.";";
    $result = mysqli_query($conn,$number_of_row_sql);
    $total_rows = mysqli_fetch_array($result)[0];
    $total_pages = ceil($total_rows / $no_of_records_per_page);
    $sql = "SELECT * FROM request WHERE " . $filter.  " LIMIT ". $offset .",".$no_of_records_per_page.";" ;
    echo $sql;
    // echo "(".$id.")";//."   ".$_POST["driver"]."   ".$status;
    $result = $conn->query($sql);
    //$total_rows = $result->num_rows;
    //if(!empty($res)) SELECT * FROM request WHERE ;
    // if ($result->num_rows > 0)
    return ($result);
    Close_conn();
}
//===========================================USER_Search ====================================
function User_Search($id, $username, $password, $access, $fees)
{
    global $conn;
    //Create_conn();
    $filter = "";
    $bol = false;
    if (!(strlen($id) == 0))
    {
        $filter = "id='" . $id . "'";
        $bol = true;
    }
    if (!(strlen($username) == 0) && ($bol == true)) {
        $filter = $filter . " AND username='" . $username . "'";
    } elseif (!(strlen($username) == 0)) {
        $filter = $filter . " username='" . $username . "'";
        $bol = true;
    }
    if (!(strlen($password) == 0) && ($bol == true)) {
        $filter = $filter . " AND password='" . $password . "'";
    } elseif (!(strlen($password) == 0)) {
        $filter = $filter . " password='" . $password . "'";
        $bol = true;
    }
    if (!(strlen($access) == 0) && ($bol == true)) {
        $filter = $filter . " AND access='" . $access . "'";
    } elseif (!(strlen($access) == 0)) {
        $filter = $filter . " access='" . $access . "'";
        $bol = true;
    }
    if (!(strlen($fees) == 0) && ($bol == true)) {
        $filter = $filter . " AND fees='" . $fees . "'";
    } elseif (!(strlen($fees) == 0)) {
        $filter = $filter . " fees='" . $fees . "'";
        $bol = true;
    }


    $sql = "SELECT * FROM users WHERE " . $filter . ";";
    //echo $sql;
    $result = $conn->query($sql);
    //if(!empty($res))
    //Close_conn();
    if ($result->num_rows > 0)
        return ($result);

}

//===========================================Transaction Search ====================================
function Trans_Search($id,$place,$req_id,$supervisor,$from,$to)
{
    global $conn;
    Create_conn();
    $filter = "";
    $bol = false;
    if (!(strlen($id) == ""))
    {
        $filter = "id='" . $id . "'";
        $bol = true;
    }
    if (!(strlen($place) == "") && ($bol == true))
    {
        $filter = $filter . " AND contractor='" . $place . "'";
    }
    elseif (!(strlen($place )== ""))
    {
        $filter = $filter . " contractor='" . $place . "'";
        $bol=true;
    }

    if (!(strlen($req_id) == "") && ($bol == true))
    {
        $filter = $filter . " AND bill_no='" . $req_id . "'";
    }
    elseif (!(strlen($req_id )== ""))
    {
        $filter = $filter . " bill_no='" . $req_id . "'";
        $bol=true;
    }

    if (!(strlen($supervisor) == "") && ($bol == true))
    {
        $filter = $filter . " AND editor='" . $supervisor . "'";
    }
    elseif (!(strlen($supervisor) == ""))
    {
        $filter = $filter . " editor='" . $supervisor . "'";
        $bol=true;
    }

    if (!(strlen($from) == "") && ($bol == true))
    {
        $filter = $filter . " AND trans_date='" . $from . "'";
    }
    elseif (!(strlen($from) == ""))
    {
        $filter = $filter . " trans_date='" . $from . "'";
        $bol=true;
    }

    $sql = "SELECT * FROM transactions_log WHERE " . $filter . " ORDER BY id DESC;";
    echo $sql;
    $result = $conn->query($sql);
    //if(!empty($res)) SELECT * FROM request WHERE ;
    if ($result->num_rows > 0)
        return ($result);
    Close_conn();
}


//================================= Select query : display all table data======
function Dis_All()
{
    global $conn;
    Create_conn();
    //Check user access to display request
    if($_SESSION['access']==0)
        //limited access
        $sql = "SELECT * FROM request WHERE place='".$_SESSION['username']."' ORDER BY id DESC;";
    else//fill access
        $sql = "SELECT * FROM request ORDER BY id DESC;";

    $result = $conn->query($sql);
    //echo $sql;
    if ($result->num_rows > 0)
       // Close_conn();
    return ($result);
}

//==================================================pagination===============
function Display_Request_Pagination($offset,$no_of_records_per_page)
{
    global $conn,$total_pages, $total_rows ;
    Create_conn();



    if($_SESSION['access']==0)
        //limited access
    {
        $sql = "SELECT * FROM request WHERE place='".$_SESSION['username']."' ORDER BY id DESC LIMIT ". $offset.",". $no_of_records_per_page;
        $number_of_row_sql = "SELECT COUNT(*) FROM request WHERE place=".$_SESSION['username'];
    }
    else//fill access
    {
        $sql = "SELECT * FROM request ORDER BY id DESC LIMIT ". $offset.",". $no_of_records_per_page;
        $number_of_row_sql = "SELECT COUNT(*) FROM request";
    }
    $result = mysqli_query($conn,$number_of_row_sql);
    $total_rows = mysqli_fetch_array($result)[0];
    $total_pages = ceil($total_rows / $no_of_records_per_page);

    $result = $conn->query($sql);
    return($result);
}
//==========================PRINT+++++++++++++++++++++++++
function Display($result)
{
    global $total_rows ;
    $count = 1;

    echo "<div class='container' style='width: 100%'>";

    echo "<table class='table table-striped table-bordered ' style='font-size:10pt; '>";
    echo "</tr><th style='text-align: center'>#</th>
          <th style='text-align: center'>التاريخ</th>
          <th style='text-align: center'>الوجهه</th>
          <th style='text-align: center'>السائق</th>
          <th style='text-align: center'>رقم الطلب</th>
          <th style='text-align: center'>الكلفة</th>
          <th style='text-align: center'>ملاحظات</th>
          <th style='text-align: center'>الحالة</th>
          <th style='text-align: center'>تعديل</th></tr>";
    if ($result == "") {
        echo "not found ";
    } else
        foreach ($result as $array) {
            echo "<tr >";
            if (($array["status"]==0)||($array["status"]==1))
                echo "<tr class='warning' >";
            elseif($array["status"]==2)
                echo "<tr class='info' >";
            elseif($array["status"]==3)
                echo "<tr class='success' >";
            else
                echo "<tr class='danger' >";
                echo "<td>".$array["req_id"]."</td>
                        <td>" . $array["req_date"] . "<br>"
                              . $array["req_time"] . "</td>
                        <td> من : " . $array["place"] . "<br>  الى : " . $array["destination"] ."</td>
                        <td>" . $array["driver"] ."</td>
                        <td>" . $array["req_id"] . "</td>
                        <td>" . $array["cost"] . "</td>
                        <td style='min-width: 160px; max-width: 160px;'>" . $array["note"] . "</td>";
            if ($array["status"]==0)
                    echo "<td>جاري المعالجة</td>";
                elseif($array["status"]==1)
                          echo "<td>السائق في الطريق</td>";
                      elseif($array["status"]==2)
                             echo "<td>جاري التوصيل</td>";
                           elseif($array["status"]==3)
                                 echo "<td>تم التوصيل</td>";
                                else
                                   echo "<td>طلب ملغي</td>";
            echo "<td  style='text-align: center; min-width: 210px; max-width:210px;'>";
            echo "<a href='driver_2_request.php?i=".$array["id"]."' style='margin-left: 10px'><img src=\"images/assign-driver.gif\" class='myImg' width='40px'></a>";
            echo "<a href='request.php?i=".$array["id"]."&stage=2&b=".$array["req_id"]."&p=".$array["cost"]."'  style='margin-left: 10px'><img src=\"images/driver-on-the-way.gif\" class='myImg' width='40px'></a>";
            echo "<a href='request.php?i=".$array["id"]."&stage=3&b=".$array["req_id"]."&p=".$array["cost"]."' style='margin-left: 10px'><img src=\"images/deliver.gif\" class='myImg' width='40px'></a>";
            echo "<a href='edit_request.php?i=".$array["id"]."' style='margin-left: 10px'><img src=\"images/edit-req.gif\" class='myImg' width='40px'></a>";
            echo"      </tr>";
            $count += 1;

        }
    echo "تم العثور على قيد عدد : " . $total_rows ;
    echo "</table>";
    echo "</div>";

}

//==========================UPDATE=======================
function Request_Update($id, $driver, $status,$destination,$req_id,$cost)
{
    //if(permission($_SESSION['access']))
    {
        global $conn;
        Create_conn();
        if (!(strlen($driver)==""))
            $sql = "UPDATE request SET driver='" . $driver . "' ,status='" . $status .  "' WHERE id=" . $id;
        elseif($cost!=0)
                 $sql = "UPDATE request SET req_id='" . $req_id . "' ,destination='" . $destination . "' ,cost='" . $cost .  "' WHERE id=" . $id;
            else
                 $sql = "UPDATE request SET status='" . $status .  "' WHERE id=" . $id;
        //echo $sql;
        $conn->query($sql);
    }

}
//
//============================================USER Update ==============
function User_Update($id, $username, $password, $access, $fees,$balance)
{
   //Create_conn();
    global $conn;
   // Create_conn();
    if ($balance==0)
        //Update user information
         $sql = "UPDATE users SET username='" . $username . "',password='" . $password . "',access='" . $access . "',fees='" . $fees . "' WHERE id='" . $id . "'";
    else
        //Update user balance only
        $sql = "UPDATE users SET balance='" . $balance . "' WHERE username='" . $username . "'";
    //echo $sql;
    $conn->query($sql);
    /*if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }*/

}

//================================================Del+Ins=> Insert removed data removed table to archive table
function Del_Ins($id, $book, $author, $free)
{
    global $conn;
    $sql = "INSERT INTO book_archive (org_id,book,author,status) VALUES ('" . $id . "','" . $book . "','" . $author . "','" . $free . "')";
    $conn->query($sql);

    /*if ( $conn->query($sql)=== TRUE)
      {
        echo "New record created successfully";
        GetLastIndex();

      }
      else
          {
          echo "Error: " . $sql . "<br>" . $conn->error;
          }*/
}

//==================================================DELETE
function Del($id)
{
    global $url;
    global $conn;
    Create_conn();
    $result = Search($id, "", "");
    foreach ($result as $buf) {
        Del_ins($id, $buf["book_title"], $buf["author"], $buf["status"]);
    }

    $sql = "DELETE FROM books WHERE  Id=" . $id;
    //echo $sql;
    $conn->query($sql);
    Close_conn();
    header(sprintf('Location: %s/Home.php', $url));
}
//==================================================User_DELETE
function User_Del($id)
{
    //global $url;
    global $conn;
   // Create_conn();
    //$result = Search($id, "", "");
    //foreach ($result as $buf) {
    //    Del_ins($id, $buf["book_title"], $buf["author"], $buf["status"]);
  //  }
    echo $id;
    $sql = "DELETE FROM users WHERE  id=" . $id;
    echo $sql;
    $conn->query($sql);
  //  Close_conn();

}


//==================================================Upload and check image===============
function image()
{
    $name = $_FILES['file']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    $image_info = getimagesize($_FILES["file"]["tmp_name"]);
    $image_width = $image_info[0];
    $image_height = $image_info[1];
    if ($image_width <= 400) {
        // Select file type
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Valid file extensions
        $extensions_arr = array("jpg", "jpeg", "png", "gif");
        // Check extension
        if (in_array($imageFileType, $extensions_arr)) {
            // Convert to base64
            $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']));
            $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;
            // Upload file
            move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $name);
            return ($image);
        }
    } else return ("Please Select image with size 400*400");


}
function Export($type)
{

    $data=$_SESSION['data'];
    $count = 1;
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=Orders.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
    echo "<div class='container' style='width: 100%'>";
    echo "<table class='table table-striped table-bordered ' style='font-size:10pt; '>";
    echo "</tr><th style='text-align: center'>ت</th>
          <th style='text-align: center'>التاريخ</th>
          <th style='text-align: center'>الوقت</th>
          <th style='text-align: center'>من</th>
          <th style='text-align: center'>الى</th>
          <th style='text-align: center'>السائق</th>
          <th style='text-align: center'>رقم الطلب</th>
          <th style='text-align: center'>الكلفة</th>
          <th style='text-align: center'>ملاحظات</th>
          <th style='text-align: center'>الحالة</th></tr>";
    if ($data == "") {
        echo "not found ";
    } else
        foreach ($data as $array) {
            echo "<tr >";
            echo "<td>".$count."</td>
              <td>".$array["req_id"]."</td>
              <td>" . $array["req_date"] . "</td>
              <td>" . $array["req_time"] . "</td>
              <td>" . $array["place"] . "</td>
              <td>" . $array["destination"] ."</td>
              <td>" . $array["driver"] ."</td>
              <td>" . $array["req_id"] . "</td>
              <td>" . $array["cost"] . "</td>
              <td style='min-width: 160px; max-width: 160px;'>" . $array["note"] . "</td>";
            if ($array["status"]==0)
                echo "<td>جاري المعالجة</td>";
            elseif($array["status"]==1)
                echo "<td>السائق في الطريق</td>";
            elseif($array["status"]==2)
                echo "<td>جاري التوصيل</td>";
            elseif($array["status"]==3)
                echo "<td>تم التوصيل</td>";
            else
                echo "<td>طلب ملغي</td>";
            echo"      </tr>";
            $count += 1;

        }
    echo "</table>";
    echo "</div>";
}
function permission($access)
{
if ($access==0)
    return(0);
else
    return(1);

}
?>

