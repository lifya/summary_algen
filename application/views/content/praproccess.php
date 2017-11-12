<div class="container">
	<div class="col-md-6">
		<h3 style="color: white">BEFORE</h3>
		<form action="<?php echo base_url('C_praproccess') ?>" method="POST">
				<textarea class="form-control" rows="3">
					<?php 
						if(isset($isi)){
							echo $isi;
						}
					 ?>
				</textarea><br>
				<button type="button" class="btn btn-primary ">Submit</button>
		</form>
	</div>	

	<div class="col-md-6">
		<h3 style="color: white">AFTER</h3>
		<form action="<?php echo base_url('C_praproccess') ?>" method="POST">
				<textarea class="form-control" rows="3">
					<?php 
						if(isset($isi)){
							echo $isi;
						}
					 ?>
				</textarea>
		</form>
	</div>
		
</div>