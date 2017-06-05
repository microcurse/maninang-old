<?php include('templates/header.php');?>
<main>
	<h2>Tools</h2>
	<!-- Start Calculator -->
		<h3>jQuery Calculator</h3>
		<p>This calculator is Material Design inspired.</p>
		<div class="calculator-container">
			<div id="calculator">
				<div class="top">
					<button class="clear ripple" data-ripple-color="#f38a69">C</button>
					<div class="screen"> </div>
				</div>
				<div class="calc-buttons">
					<button>7</button>
					<button>8</button>
					<button>9</button>
					<button class="operators">+</button>
					<button>4</button>
					<button>5</button>
					<button>6</button>
					<button class="operators">-</button>
					<button>3</button>
					<button>2</button>
					<button>1</button>
					<button class="operators">x</button>
					<button>.</button>
					<button>0</button>
					<button id="equals">=</button>
					<button class="operators">÷</button>
				</div>
				<div style="clear:both;"></div>
			</div>
		</div>
</main>
<?php include('templates/footer.php');?>