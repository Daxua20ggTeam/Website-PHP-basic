<!DOCTYPE html>
<html lang="vi">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/Website-PHP-Basic/css/style.css">
	<link rel="stylesheet" type="text/css" href="/Website-PHP-Basic/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/Website-PHP-Basic/css/bootstrap.css">
	<script type="text/javascript" charset="utf-8" async defer>
		function trangChu(){
			parent.document.getElementById("_center").src = 'model.Show/center/trangchu.php';
		}
		function xemNhanVien(){
			parent.document.getElementById("_center").src = 'model.Show/center/xemnhanvien.php';
		}
		function xemPhongBan(){
			parent.document.getElementById("_center").src = 'model.Show/center/xemphongban.php';
		}
		function timKiem(){
			parent.document.getElementById("_center").src = 'model.Show/center/timkiem.php';
		}
	</script>
</head>
<body id="left">
	<div id="left_content">
		<form  method="post" accept-charset="utf-8" name="left_content">
			<ul>
				<li><input type="button" name="submit" value="Trang chủ" onclick="trangChu()"></li>
				<li><input type="button" name="submit" value="Xem nhân viên" onclick="xemNhanVien()"></li>
				<li><input type="button" name="submit" value="Xem phòng ban" onclick="xemPhongBan()"></li>
				<li><input type="button" name="submit" value="Tìm kiếm" onclick="timKiem()"></li>
				<li><input type="button" name="submit" value="Cập nhập thông tin"></li>
				<li><input type="button" name="submit" value="Xóa thông tin"></li>
				<li><input type="button" name="submit" value="Xóa tất cả"></li>
				<li><input type="button" name="submit" value="Trợ giúp chương trình"></li>	
			</ul>
		</form>
	</div>

</body>
</html>
