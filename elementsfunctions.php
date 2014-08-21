<?php

function showStoreElement()
{
	?>
	<div class="col-md-4 col-sm-6 portfolio-item Element">
    	<img src="http://placehold.it/480x555" alt="" width="380" height="400"/>
      	<h3>
      		Nombre producto
      		<br/>
      		Precio $X.XX
      	</h3>
      	<div class="portfolio-details">
	        <h4>Nombre producto</h4>
        	<p>Fusce auctor magna aus feugiat ultricies. Donec aliquet dolor elit volutpat neque pulvinar eu. Nullam dapibus metus sed dui congue congue. </p>
        	<a href="producto.php" class="btn btn-success">Read More</a> 
        </div>
    </div>
	<?php
}

function showStore()
{
	//for($i=0; $i<3; $i++)
	//	showStoreElementLine();
?>
<div class="row push-down-62 portfolio-grid index_portfolio_content" id="grid">
    <?php for($i=0; $i<6; $i++)
    {
    	showStoreElement();
    } ?>
    <!-- /.col-md-4 portfolio-item mix --> 
  </div>

<?php

}
?>