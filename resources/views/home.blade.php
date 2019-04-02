<script>
	var myIndex = 0;
	carousel();

	function carousel() {
		var i;
		var x = document.getElementsByClassName("mySlides");
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";  
		}
		myIndex++;
		if (myIndex > x.length) {myIndex = 1}    
			x[myIndex-1].style.display = "block";  
		setTimeout(carousel, 5000);    
	}
</script>

<div class="w3-content w3-section" style="max-width:1350px;margin: auto;" >

	<a ui-sref="sharp"><img class="mySlides w3-animate-fading" src="picture/1.jpg" style="width:100%;"></a>
	<a ui-sref="sharp"><img class="mySlides w3-animate-fading" src="picture/2.jpg" style="width:100%;"></a>
	<a ui-sref="general"><img class="mySlides w3-animate-fading" src="picture/3.jpg" style="width:100%;"></a>
</div>




<div style="text-align: center;">
	<div style=" margin: 10px; text-align: center; float: left;width: 33%">
		<table>
			<tr>
				<th style="text-align: left">
					<i class='fas fa-cart-arrow-down' style='font-size:40px'></i>

				</th>
				<th style="text-align: right"><h2 style="color: red"><strong>Shope online </strong> </h2>
					Buy your fevorite product online

				</th>
			</tr>
		</table>



	</div>

	<div style=" margin: 10px; text-align: center; float: left;width: 31%">
		<table>
			<tr>
				<th style="text-align: left">
					<i class='fab fa-amazon-pay' style='font-size:40px'></i>

				</th>
				<th style="text-align: right"><h2 style="color: red"><strong>Secure Payment </strong> </h2>
					100% secure payment options

				</th>
			</tr>
		</table>



	</div>
	<div style=" margin: 10px; text-align: right; float: right;width: 31%">
		<table>
			<tr>
				<th style="text-align: left">
					<i class='fas fa-cart-arrow-down' style='font-size:40px'></i>

				</th>
				<th style="text-align: right"><h2 style="color: red"><strong>Free Delivery </strong> </h2>
					Free home delivery across Bangladesh

				</th>
			</tr>
		</table>



	</div>


	<div>
		<div style=" margin: 10px; text-align: center; float: left;width: 31%">
			<img src="picture/sp.jpg" width="320" height="275">


		</div>

		<div style=" margin: 10px; text-align: center; float: left;width: 31%">

			<iframe width="320" height="275" src="picture/general.mp4">
			</iframe>
		</div>
		<div style=" margin: 10px; text-align: center; float: right;width: 31%">


			<img src="picture/oven.jpg" width="320" height="275">


		</div>

	</div>

</div>

<div style="clear:both;"></div>