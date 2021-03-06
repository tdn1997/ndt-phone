<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>
	<div class="container-fluid form" style="margin-top: -23px; padding: 20px">
		<div class="row">
			<div class="product-detail">
				<div class="main-prd">
					<img src="/nguyen-duy-thuan/images/uploads/<?php echo $data['anhchinh'] ?>" class="main-prd-img">
					<div class="basic-info">
						<h2><?php echo $data['tensp'] ?></h2>
						<span class="main-prd-price"><?php echo number_format( $data['gia']) ?> VND</span>
						<hr/>
						<h4><b>Thông tin cơ bản</b></h4>
						<ul>
							<li>Bảo hành: <?php echo $data['baohanh'] ?> tháng</li>
							<?php 
								if(!empty($data['khuyenmai'])){
									echo "<li><span class='km'>Khuyến mãi: ".$data['khuyenmai']." %</span></li>";
								}
							?>
							<br><a class="btn btn-primary rounded" href="client/buynow/<?php echo $data['masp'] ?>">Mua ngay</a>
						</ul>
					</div>
				</div>

				<div style="clear: both;"></div>

				<div class="introduce-prd">
					<h3>Thông số kỹ thuật</h3>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Đặc điểm</th><th>Giá trị</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Bảo hành</td><td><?php echo $data['baohanh'] ?> tháng</td>
							</tr>
							<!-- <tr>
								<td>Trọng lượng(g)</td><td><?php echo $data['trongluong'] ?></td>
							</tr>
							<tr>
								<td>Chất liệu</td><td><?php echo $data['chatlieu'] ?></td>
							</tr>
							<tr>
								<td>Loại hình bảo hành</td><td><?php echo $data['loaibh'] ?></td>
							</tr>
							<tr>
								<td>Kích thước (d x r x c) (cm)</td><td><?php echo $data['kichthuoc'] ?></td>
							</tr>
							<tr>
								<td>Màu</td><td><?php echo $data['mau'] ?></td>
							</tr>
							<tr>
								<td>Dành cho</td><td><?php echo $data['danhcho'] ?></td>
							</tr>
							<tr>
								<td>Phụ kiện đi kèm</td><td><?php echo $data['phukien'] ?></td>
							</tr><tr>
								<td>Khuyễn mãi/ Quà tặng</td><td><?php echo $data['khuyenmai'] ?> %</td>
							</tr>
							<tr>
								<td>Tình trạng</td><td><?php echo $data['tinhtrang'] ?></td>
							</tr> -->
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
	</div>