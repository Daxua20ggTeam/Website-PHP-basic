<!DOCTYPE html>
<html lang="vi">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/Website-PHP-Basic/css/style.css">
	<link rel="stylesheet" type="text/css" href="/Website-PHP-Basic/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/Website-PHP-Basic/css/bootstrap.css">
</head>
<body id="center_content">
	
<?php
	$conn = mysqli_connect("localhost","root","","dulieu") or die ('khong ket noi dc db');
?>
<h2>DANH SÁCH PHÒNG BAN</h2>
<table class="table table-hover">
	<thead>
		<tr class="danger">
			<th class="col-lg-2">ID</th>
			<th class="col-lg-4">Mô tả</th>
			<th class="col-lg-3">Thời gian</th>
			<th class="col-lg-2">Xem Nhân Viên</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$sql = 'SELECT * FROM tb_phongban';
		$result = mysqli_query($conn,$sql);
		while ($row = mysqli_fetch_row($result)) {
			$id = $row[0];	
			$mota = $row[1];
			$thoigian = $row[2];
			echo 
				'<tr class="success">
			 		<td>'.$id.'</td>
			 		<td>'.$mota.'</td>
			 		<td>'.$thoigian.'</td>
			 		<td><a href="/Website-PHP-Basic/model.Show/center/xemnhanvien.php" title="xemnhanvien">...</a></td>
				</tr>';
		}
	?>
	</tbody>
</table>
</body>
</html>

	