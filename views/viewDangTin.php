
<html>
	<head>
		<title>Thêm Phòng Trọ</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="text-center">THÊM PHÒNG</h2>
				</div>
				<form action="?task=themphong" method="POST" enctype="multipart/form-data">
					<div class="panel-body">
						<div class="form-group">
							<label for="usr">Nhập họ tên chủ phòng:</label>
							<input required="true" name="HOTEN_CHUPHONG" type="text" class="form-control" id="usr">
						</div>
						<div class="form-group">
							<label for="usr">Nhập số điện thoại chủ phòng:</label>
							<input required="true" name="SDT_CHUPHONG" type="text" class="form-control" id="usr">
						</div>
						<div class="form-group">
							<label for="usr">Nhập email chủ phòng:</label>
							<input required="true" name="EMAIL_CHUPHONG" type="text" class="form-control" id="usr">
						</div>
						<div class="form-group">
							<label for="usr">Nhập giá phòng:</label>
							<input required="true" name="GIA_PHONG" type="text" class="form-control" id="usr">
						</div>
						<div class="form-group">
							<label for="usr">Nhập diện tích:</label>
							<input required="true" name="DIENTICH" type="text" class="form-control" id="usr">
						</div>
						<div class="form-group">
							<label for="usr">Nhập Giá Điện:</label>
							<input required="true" name="GIADIEN" type="text" class="form-control" id="usr">
						</div>
						<div class="form-group">
							<label for="usr">Nhập Giá nước:</label>
							<input required="true" name="GIANUOC" type="text" class="form-control" id="usr">
						</div>
						<div class="form-group">
							<label for="usr">Nhập TỈNH/TP:</label>
							<input required="true" name="TINH_TP" type="text" class="form-control" id="usr">
						</div>
						<div class="form-group">
							<label for="usr">Nhập QUẬN/HUYỆN:</label>
							<input required="true" name="QUAN_HUYEN" type="text" class="form-control" id="usr">
						</div>
						<div class="form-group">
							<label for="usr">Nhập XÃ/PHƯỜNG:</label>
							<input required="true" name="XA_PHUONG" type="text" class="form-control" id="usr">
						</div>
						<div class="form-group">
							<label for="usr">Nhập SỐ NHÀ:</label>
							<input required="true" name="SONHA" type="text" class="form-control" id="usr">
						</div>
						<div class="form-group">
							<label for="usr">Thêm Ảnh thứ 1:</label>
							<input required="true" name="ANH1" type="file" class="form-control" id="usr">
						</div>
						<div class="form-group">
							<label for="usr">Thêm Ảnh thứ 2:</label>
							<input required="true" name="ANH2" type="file" class="form-control" id="usr">
						</div>
						<div class="form-group">
							<label for="usr">Thêm Ảnh thứ 3:</label>
							<input required="true" name="ANH3" type="file" class="form-control" id="usr">
						</div>
						<div class="form-group">
							<label for="usr">Nhập mô tả thêm:</label>
							<textarea required="true" name="MOTA" type="text" class="form-control" id="usr"></textarea>  
						</div>	
							<button type="submit" name="submit1" class="btn btn-success">Đăng Tin</button>				
					</div>
				</form>
				
				</div>
			</div>
		</div>
	</body>
</html>