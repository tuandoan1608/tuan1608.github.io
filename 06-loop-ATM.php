<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Loop</title>
	<style type="text/css">
		.content {
			margin: 15px auto;
			text-align: center;
			width: 700px;
			height: 600px;
			border: 1px solid #000000;
		}

		.header {
			height: 150px;
		}

		.header img {
			float: left;
			padding-left: 15px;
			padding-top: 5px;
			width: 200px;
		}

		.header input {
			margin-top: 20px;
		}

		.content h1 {
			text-align: center;
			color: red;
		}

		.normal {
			height: 50px;
			border: 1px solid #000000;
		}

		.col1 {
			padding-left: 100px;
			float: left;
		}

		.col2 {
			padding-left: 120px;
			float: left;
		}

		.col3 {
			padding-left: 120px;
			float: left;
		}
	</style>
</head>

<body>
	<div class="content">
		<?php
		$sum = "";
		if (isset($_POST["sum"])) {
			$sum = $_POST["sum"];
		}

		?>
		<div class="header">

			<h1>Mô phỏng máy ATM</h1>
			<form method="post">
				<p>Vui lòng nhập số tiền mà quý khách muốn thực hiện giao dịch</p>
				<input type="text" name="sum" value="<?php if(!empty($sum)){
					echo number_format($sum); 
				}?>" placeholder="Hãy nhập số tiền" />
				<input type="submit" value="Rút tiền" />
			</form>
		</div>
		<div class="noidung">
			<div class="normal">
				<p class="col1">Mệnh giá</p>
				<p class="col2">Số lượng</p>
				<p class="col3">Thành tiền</p>
			</div>

			<?php
			define("Five", 500000);
			define("Two", 200000);
			define("One", 100000);
			define("mFive", 50000);
			define("mTwo", 20000);
			define("mOne", 10000);
			define("nFive", 5000);
			define("nTwo", 2000);
			define("nOne", 1000);

			$five = 0;
			$two = 0;
			$one = 0;
			$mfive = 0;
			$mtwo = 0;
			$mone = 0;
			$nfive = 0;
			$ntwo = 0;
			$none = 0;

			if (is_numeric($sum) && $sum >= 1000) {
				while ($sum >= Five) {
					$five++;
					$sum -= Five;
				}
				while ($sum >= Two) {
					$two++;
					$sum -= Two;
				}
				while ($sum >= One) {
					$one++;
					$sum -= One;
				}
				while ($sum >= mFive) {
					$mfive++;
					$sum -= mFive;
				}
				while ($sum >= mTwo) {
					$mtwo++;
					$sum -= mTwo;
				}
				while ($sum >= mOne) {
					$mone++;
					$sum -= mOne;
				}
				while ($sum >= nFive) {
					$nfive++;
					$sum -= nFive;
				}
				while ($sum >= nTwo) {
					$ntwo++;
					$sum -= nTwo;
				}
				while ($sum >= nOne) {
					$none++;
					$sum -= nOne;
				}

				$total = Five * $five + Two * $two + One * $one + mFive * $mfive + mTwo * $mtwo + mOne * $mone + nFive * $nfive + nTwo * $ntwo + nOne * $none;
			} else {
				echo "Dữ liệu bạn nhập không hợp lệ";
			}

			?>
			<?php
			if ($five > 0) {
				echo '<div class="normal">
        			<p class="col1">' . number_format(Five) . '</p>
        			<p class="col2">' . $five . '</p>
        			<p class="col3">' . number_format(Five * $five) . '</p>
        		      </div>';
			}

			if ($two > 0) {
				echo '<div class="normal">
        			<p class="col1">' . number_format(Two) . '</p>
        			<p class="col2">' . $two . '</p>
        			<p class="col3">' . number_format(Two * $two) . '</p>
        		      </div>';
			}

			if ($one > 0) {
				echo '<div class="normal">
        			<p class="col1">' . number_format(One) . '</p>
        			<p class="col2">' . $one . '</p>
        			<p class="col3">' . number_format(One * $one) . '</p>
        		      </div>';
			}

			if ($mfive > 0) {
				echo '<div class="normal">
        			<p class="col1">' . number_format(mFive) . '</p>
        			<p class="col2">' . $mfive . '</p>
        			<p class="col3">' . number_format(mFive * $mfive) . '</p>
        		      </div>';
			}

			if ($mtwo > 0) {
				echo '<div class="normal">
        			<p class="col1">' . number_format(mTwo) . '</p>
        			<p class="col2">' . $mtwo . '</p>
        			<p class="col3">' . number_format(mTwo * $mtwo) . '</p>
        		      </div>';
			}

			if ($mone > 0) {
				echo '<div class="normal">
        			<p class="col1">' . number_format(mOne) . '</p>
        			<p class="col2">' . $mone . '</p>
        			<p class="col3">' . number_format(mOne * $mone) . '</p>
        		      </div>';
				}

				if ($nfive > 0) {
					echo '<div class="normal">
        			<p class="col1">' . number_format(nFive) . '</p>
        			<p class="col2">' . $nfive . '</p>
        			<p class="col3">' . number_format(nFive * $nfive) . '</p>
        		      </div>';
			}

			if ($ntwo > 0) {
				echo '<div class="normal">
        			<p class="col1">' . number_format(nTwo) . '</p>
        			<p class="col2">' . $ntwo . '</p>
        			<p class="col3">' . number_format(nTwo * $ntwo) . '</p>
        		      </div>';
			}

			if ($none > 0) {
				echo '<div class="normal">
        			<p class="col1">' . number_format(nOne) . '</p>
        			<p class="col2">' . $none . '</p>
        			<p class="col3">' . number_format(nOne * $none) . '</p>
        		      </div>';
			}
			?>

			<p style="float: right;">Tổng tiền: <?php if (isset($total)) echo number_format($total) ?></p>

		</div>
	</div>
</body>

</html>