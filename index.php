<?php include(__DIR__.'/header.php'); ?>

<body>
	<section class="painel-notas">
		<div class="container">
			<div class="row">
				<?php for ($i=0; $i < 10; $i++) { ?>
					<div class="col-12 col-md-4 mb-3">
						<div class="card mx-auto text-center" style="width: 18rem;">
							<img class="card-img-top" src="./img/bloco-notas.jpg" alt="Card image cap">
							<!-- <i class="fa fa-desktop" aria-hidden="true"></i> -->
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
</body>

<?php include(__DIR__.'/footer.php'); ?>
