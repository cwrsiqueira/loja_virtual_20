<script src="js/bootstrap.js"> </script>

<div class="items">
	 <div class="container">
		 <div class="items-sec">
		 	<?php foreach($viewData['list'] as $prod): ?>
				<div class="col-md-3 feature-grid">
				 <a href="product.html"><img src="<?php echo BASE_URL; ?>media/Products/<?php echo (!empty($prod['images']))?$prod['images'][0]['url']:''; ?>" alt=""/>	
					 <div class="arrival-info">
						 <h4><?php echo $prod['name']; ?></h4>
						 <p>R$ <?php echo number_format($prod['price'], 2, ',', '.'); ?></p>
						 <span class="pric1"><del>R$ <?php echo number_format($prod['price_from'], 2, ',', '.'); ?></del></span>
						 <span class="disc">[<?php echo number_format((($prod['price'] / $prod['price_from']) * 100),0); ?>% de Desconto]</span>
					 </div>
					 <div class="viw">
						<a href="product.html"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
					 </div>
				  </a>
				</div>
			<?php endforeach; ?>
			 <div class="clearfix"></div>
		 </div>

		<ul class="pagination">
			<?php for($q=1; $q<=$numberOfPages; $q++): ?>
		  <li class="page-item <?php echo ($currentPage == $q)?'active':''?>"><a class="page-link" href="<?php BASE_URL; ?>?<?php
		  $pag_array = $_GET;
		  $pag_array['p'] = $q;
		  echo http_build_query($pag_array);
		  ?>"><?php echo $q; ?></a></li>
			<?php endfor; ?>
		</ul>
	 </div>

</div>
<!---->

<div class="offers">
	 <div class="container">
	 <h3>Destaques</h3>
	 <div class="offer-grids">
	 	<?php foreach($bestsellers as $bs): ?>
	 		<?php if($bs['bestseller'] == 1): ?>
				<div class="col-md-6 grid-left">
				 <a href="#"><div class="offer-grid1">
					 <div class="ofr-pic">
						 <img src="<?php echo BASE_URL; ?>media/Products/<?php echo (!empty($bs['image']))?$bs['image'][0]['url']:''; ?>" class="img-responsive" alt=""/>
					 </div>
					 <div class="ofr-pic-info">
						 <h4><?php echo $bs['name'] ?></h4>
						 <span>COM <?php echo number_format((($prod['price'] / $prod['price_from']) * 100),0); ?>% DE DESCONTO</span>
						 <p>COMPRE AGORA</p>
					 </div>
					 <div class="clearfix"></div>
				 </div></a>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>

		 <div class="clearfix"></div>
	 </div>
	 </div>
</div>
