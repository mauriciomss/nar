<?php include_once (dirname( __FILE__ )."/templates/header.php"); ?>

	<main id="main">

		<!-- ======= Intro Single ======= -->
		<section class="intro-single">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-8">
						<div class="title-single-box">
							<h1 class="title-single">Nuestras propiedades</h1>
							<span class="color-text-a">Grilla de propiedades</span>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="<?=base_url();?>">Inicio</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">
									Grilla de propiedades
								</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</section><!-- End Intro Single-->

		<!-- ======= Property Grid ======= -->
		<section class="property-grid grid">
			<div class="container">
				
				<div class="row">

					<?php if (count($propiedades)>0): ?>
						<?php foreach ($propiedades as $item): ?>
						<div class="col-md-4">
							<div class="card-box-a card-shadow">
								<div class="img-box-a">
									<img src="<?=base_url('imagenes').'/'.$item['file'];?>" alt="" class="img-a img-fluid">
								</div>
								<div class="card-overlay">
									<div class="card-overlay-a-content">
										<div class="card-header-a">
											<h2 class="card-title-a">
												<a href="property-single.html"><?=$item['titulo'] ?>
													<br /><?=$item['subtitulo'] ?></a>
											</h2>
										</div>
										<div class="card-body-a">
											<div class="price-box d-flex">
												<span class="price-a"><?=$item['estado'] ?> | <?=$item['signo'] ?> <?=$Gral->formatPrecio($item['precio']) ?></span>
											</div>
											<a href="<?=base_url();?>/propiedades/<?=$item['slug'] ?>" class="link-a">ver mas
												<span class="bi bi-chevron-right"></span>
											</a>
										</div>
										<div class="card-footer-a">
											<ul class="card-info d-flex justify-content-around">
												<li>
													<h4 class="card-info-title">Área</h4>
													<span><?=$item['area'] ?>m<sup>2</sup>
													</span>
												</li>
												<li>
													<h4 class="card-info-title">Hab.</h4>
													<span><?=$item['dormitorios'] ?></span>
												</li>
												<li>
													<h4 class="card-info-title">Baños</h4>
													<span><?=$item['banos'] ?></span>
												</li>
												<li>
													<h4 class="card-info-title">Garaje</h4>
													<span><?=$item['garage'] ?></span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach?>
					<?php else: ?>
						<h1>No existen propiedades para su búsqueda.</h1>
					<?php endif ?>					

				</div>
			</div>
		</section><!-- End Property Grid Single-->

	</main><!-- End #main -->

<?php include_once (dirname( __FILE__ )."/templates/footer.php"); ?>