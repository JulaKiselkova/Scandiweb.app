<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="view/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/css/util.css">
	<link rel="stylesheet" type="text/css" href="view/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="product_form" id="product_form">
					<span class="login100-form-title">
						Product Add
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="sku" id="sku" placeholder="SKU">
						<span class="focus-input100"></span>
						<span class="symbol-input100">SKU</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="text" name="name" id="name" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">Name</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="number" name="price" id="price" placeholder="Price">
						<span class="focus-input100"></span>
						<span class="symbol-input100">Price($)</span>
					</div>

					<div class="wrap-input100 validate-input">
						<select class="input100" type="text" name="productType" id="productType">
							<option value='dvd'>DVD</option>
							<option value='furniture'>Furniture</option>
							<option value='book'>Book</option>
						</select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">Type</span>
					</div>
					<div id="selection"></div>
					<div class="wrap-input100 validate-input" id="dvd" hidden>
						<input class="input100Select" type="number" name="size" id="size" placeholder="Size">
						<span class="focus-input100"></span>
						<span class="symbol-input100">Size(MB)</span>
					</div>
					<div id="furniture" hidden>
						<div class="wrap-input100 validate-input">
							<input class="input100Select" type="number" name="height" id="height" placeholder="Height">
							<span class="focus-input100"></span>
							<span class="symbol-input100">Height(CM)</span>
						</div>
						<div class="wrap-input100 validate-input">
							<input class="input100Select" type="number" name="width" id="width" placeholder="Width">
							<span class="focus-input100"></span>
							<span class="symbol-input100">Width(CM)</span>
						</div>
						<div class="wrap-input100 validate-input">
							<input class="input100Select" type="number" name="length" id="length" placeholder="Length">
							<span class="focus-input100"></span>
							<span class="symbol-input100">Length(CM)</span>
						</div>
					</div>
					<div class="wrap-input100 validate-input" id="book" hidden>
						<input class="input100Select" type="number" name="weight" id="weight" placeholder="Weight">
						<span class="focus-input100"></span>
						<span class="symbol-input100">Weight(KG)</span>
					</div>
					<div class="container-login100-form-btn">
						<button type="submit">
							ADD
						</button>
					</div>
					<div class="container-login100-form-btn">
						<button type="submit">
							CANCEL
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
<!--	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>-->
<!--&lt;!&ndash;===============================================================================================&ndash;&gt;-->
<!--	<script src="vendor/bootstrap/js/popper.js"></script>-->
<!--	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>-->
<!--&lt;!&ndash;===============================================================================================&ndash;&gt;-->
<!--	<script src="vendor/select2/select2.min.js"></script>-->
<!--&lt;!&ndash;===============================================================================================&ndash;&gt;-->
<!--	<script src="vendor/tilt/tilt.jquery.min.js"></script>-->
<!--	<script >-->
<!--		$('.js-tilt').tilt({-->
<!--			scale: 1.1-->
<!--		})-->
<!--	</script>-->
	<script>
		const select = document.getElementById('productType');

		function changeOption(){
			let selection = document.getElementById("selection");
			let selectedOption = select.options[select.selectedIndex];
			selection.textContent = "Вы выбрали: " + selectedOption.text + selectedOption.value;
		}
		//select.addEventListener("change", changeOption);

		function selectOption(){
			//let selection = document.getElementById("selection");
			let selectedOption = select.options[select.selectedIndex];
			if(selectedOption.value === 'dvd'){
				document.getElementById('dvd').hidden = false;
				document.getElementById('furniture').hidden = true;
				document.getElementById('book').hidden = true;
			}
			if(selectedOption.value === 'furniture'){
				document.getElementById('furniture').hidden = false
				document.getElementById('dvd').hidden = true;
				document.getElementById('book').hidden = true;
			}
			if(selectedOption.value === 'book'){
				document.getElementById('book').hidden = false;
				document.getElementById('furniture').hidden = true;
				document.getElementById('dvd').hidden = true;
			}
			//selection.textContent = "Вы выбрали: " + selectedOption.text + selectedOption.value;
		}
		select.addEventListener("change", selectOption);
	</script>
===============================================================================================
<!--	<script defer src="js/index.js" type="module"></script>-->
<!--	<script src="js/main.js"></script>-->
<!--	<script src="view/Login_v1/js/main.js"></script>-->

</body>
</html>