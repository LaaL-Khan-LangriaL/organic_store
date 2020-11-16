
<footer class="container ">
	<p class="float-right">
		<a href="#">Top</a>
	</p>
	<div class="row">
		Towards | Organic
	</div>
</footer>
</body>



<!-- <<<<<<<<<<<JQUERY C.D.N>>>>>>>>>>> -->
	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->




	<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<CART ITEM JAVASCRIPT FILE>>>>>>>>>>>>>>>>>> -->
	<!-- 	<script type="text/javascript" src="Assets/js/wow.js"></script>
		<script type="text/javascript" src="Assets/js/main.js"></script>	
 -->


</html>




<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<Ajax for cart page >>>>>>>>>>>>>>>>>>>>> -->

	
<script type="text/javascript">
	function addToCart(id,tableName) {
		// body...
		
		$.post('views/cartLib.php', {addToCart: 'value1',id,tableName}, function(data) {
			/*optional stuff to do after success */
		});
	}
</script>