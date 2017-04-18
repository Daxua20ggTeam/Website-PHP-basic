<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/Website-PHP-Basic/css/style.css">
	<link rel="stylesheet" type="text/css" href="/Website-PHP-Basic/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/Website-PHP-Basic/css/bootstrap.css">
</head>
<body>
	<?php
		$conn = mysqli_connect('localhost','root','','dulieu') or die ('Khong ket noi duoc db');
	?>
	<h2>DANH SÁCH NHÂN VIÊN PHÒNG BAN</h2>
	<table class="table table-hover">
		<thead>
			<tr class="danger">
				<th class="col-lg-2">ID</th>
				<th class="col-lg-4">Tên Nhân Viên</th>
				<th class="col-lg-3">Địa Chỉ</th>
				<th class="col-lg-2">Phòng Ban</th>	
			</tr>
		</thead>
		<tbody>
		<?php 
			$sql = 'SELECT * FROM tb_nhanvien';
			$result = mysqli_query($conn,$sql);
			while ($row = mysqli_fetch_row($result)) {
				$id=$row[0];
				$tenNV=$row[1];
				$diaChi=$row[2];
				$phong=$row[3];
				echo '
					<tr class="success">
						<td>'.$id.'</td>
						<td>'.$tenNV.'</td>
						<td>'.$diaChi.'</td>
						<td>'.$phong.'</td>
					</tr>';
			}			
		?>	
		</tbody>
	</table>	
</body>
</html>




