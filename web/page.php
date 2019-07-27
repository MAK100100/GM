<html>
<head>
    <title>Pagination</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include_once 'class/config.php';
include_once 'class/table.php';
header('Content-Type: text/html; charset=utf-8');

if (isset($_GET['pageno']))
{
    $pageno = $_GET['pageno'];
} else
    {
    $pageno = 1;
}
$no_of_records_per_page = 10;
$offset = ($pageno-1) * $no_of_records_per_page;




$total_pages_sql = "SELECT COUNT(*) FROM request";
$result = mysqli_query($conn,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
echo $total_rows;

$total_pages = ceil($total_rows / $no_of_records_per_page);
$sql = "SELECT * FROM transactions_log LIMIT ". $offset.",". $no_of_records_per_page;
//echo $sql."<br>";
$result = $conn->query($sql);
if ($result == "") echo "not found ";
echo "<table>";
foreach ($result as $data)
{
    echo "<tr><td>".$data['bill_no']."</td></tr>";
}
echo "</table>";
mysqli_close($conn);

$pagLink = "<div class='pagination'>";
for ($i=1; $i<=5; $i++) {
    $pagLink .= "<a href='index.php?page=".$i."'>".$i."</a>";
};
echo $pagLink . "</div><br><br><br><br>";
?>
<ul class="pagination">
    <li><a href="?pageno=1">First</a></li>
    <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
        <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
    </li>
    <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
        <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
    </li>
    <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
</ul>
<div class="grid_3 grid_5">
    <div class="col-md-6 page_1">
        <nav>
            <ul class="pagination pagination-lg">
                <li><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </nav>
    </div>
</div>
</body>
</html>