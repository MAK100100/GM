<?PHP


include_once 'class/config.php';
include_once 'class/table.php';
if ($_SESSION['username'] == "") header(sprintf("Location: %s/notification.php", $url));
$count = 1;

if (isset($_GET['type']))
    if ($_GET['type'] == 1)
    {
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
          <th style='text-align: center'>السائق</th>
          <th style='text-align: center'>الى</th>
          <th style='text-align: center'>رقم الطلب</th>
          <th style='text-align: center'>الكلفة</th>
          <th style='text-align: center'>ملاحظات</th>
          <th style='text-align: center'>الحالة</th></tr>";
        if ($_SESSION['data'] == "") {
            echo "not found ";
        } else
            foreach ($_SESSION['data'] as $array) {
                echo "<tr >";
                echo "<td>" . $count . "</td>
              <td>" . $array["req_id"] . "</td>
              <td>" . $array["req_date"] . "</td>
              <td>" . $array["req_time"] . "</td>
              <td>" . $array["place"] . "</td>
              <td>" . $array["destination"] . "</td>
              <td>" . $array["driver"] . "</td>
              <td>" . $array["req_id"] . "</td>
              <td>" . $array["cost"] . "</td>
              <td style='min-width: 160px; max-width: 160px;'>" . $array["note"] . "</td>";
                if ($array["status"] == 0)
                    echo "<td>جاري المعالجة</td>";
                elseif ($array["status"] == 1)
                    echo "<td>السائق في الطريق</td>";
                elseif ($array["status"] == 2)
                    echo "<td>جاري التوصيل</td>";
                elseif ($array["status"] == 3)
                    echo "<td>تم التوصيل</td>";
                else
                    echo "<td>طلب ملغي</td>";
                echo "      </tr>";
                $count += 1;

            }

        echo "</table>";
        echo "</div>";
    }
    else if ($_GET['type'] == 2)
    {
        header("Content-Type: application/xls");
        header("Content-Disposition: attachment; filename=transaction list.xls");
        header("Pragma: no-cache");
        header("Expires: 0");
        echo "<div class='container' style='width: 100%'>";
        echo "<table class='table table-striped table-bordered ' style='font-size:10pt; '>";
        echo "</tr><th style='text-align: center'>ت</th>
          <th style='text-align: center'>رقم العملية</th>
          <th style='text-align: center'>التاريخ</th>
          <th style='text-align: center'>الوقت</th>
          <th style='text-align: center'>المشرف</th>
          <th style='text-align: center'>الزبون</th>
          <th style='text-align: center'>رقم القائمة</th>
          <th style='text-align: center'>الكلفة</th>
          <th style='text-align: center'>الرصيد الحالي</th>
          <th style='text-align: center'>الملاحظات</th></tr>";
        if ($_SESSION['transaction'] == "") {
            echo "not found ";
        } else
            foreach ($_SESSION['transaction'] as $array) {
                echo "<tr >";
                echo "<td>" . $count . "</td>
                      <td>" . $array["id"] . "</td>
                      <td>" . $array["trans_date"] . "</td>
                      <td>" . $array["trans_time"] . "</td>
                      <td>" . $array["editor"] . "</td>
                      <td>" . $array["contractor"] . "</td>
                      <td>" . $array["bill_no"] . "</td>
                      <td>" . $array["price"] . "</td>
                      <td>" . $array["balance"] . "</td>
                      <td>" . $array["note"] . "</td>";

                $count += 1;

            }
        echo "</table>";
        echo "</div>";
    }
?>