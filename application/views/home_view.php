<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
	<div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

		<!-- Slide 1 -->
		<div class="carousel-item active">
			<div class="carousel-container">
				<h2 class="animate__animated animate__fadeInDown">Welcome to <span>Sekolah Clarissa </span></h2>
				<p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
			</div>
		</div>

		<!-- Slide 2 -->
		<div class="carousel-item">
			<div class="carousel-container">
				<h2 class="animate__animated animate__fadeInDown">telah dibuka pendaftaran calon siswa</h2>
				<p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>

			</div>
		</div>

		<!-- Slide 3 -->
		<div class="carousel-item">
			<div class="carousel-container">
				<h2 class="animate__animated animate__fadeInDown">Gabung bersama kami sekarang</h2>
				<p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
			</div>
		</div>

		<a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>

		<a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>

	</div>
</section><!-- End Hero -->

<main id="main">

	<!-- ======= Features Section ======= -->
	<section class="features">
		<div class="container">
			<?php foreach ($jadwal as $jad) : ?>
				<div class="section-title">
					<h2>Pemberitahuan Jadwal Test tertulis masuk SMP Clarissa</h2>
					<p>di beritahukan kepada seluruh calon siswa yang telah mendaftar untuk mengikuti test tertulis untuk datang tepat pada waktunya</p>
				</div>


				<div class="row" data-aos="fade-up">
					<div class="col-md-7 pt-4">
						<h3>Detail info jadwal</h3>
						<ul>
							<li><i class="icofont-check"></i> tanggal <?= $jad->tanggal_test; ?></li>
							<li><i class="icofont-check"></i> jam <?= $jad->jam; ?></li>
						</ul>
						<p class="font-italic">
							<?= $jad->keterangan; ?>
						</p>
						<p> Regards, <?= $jad->nama; ?><br><u><b>Staff kesiswaan</b></u></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</section><!-- End Features Section -->

</main><!-- End #main -->