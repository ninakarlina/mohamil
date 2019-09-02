<?php foreach($x as $row):	?>
<div class="blog-w3l py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section mb-sm-5 mb-4">
				<h6 class="w3ls-title-sub"><?php echo $row->tema?></h6>
				<h3 class="w3ls-title text-uppercase text-dark font-weight-bold"><?php echo $row->judul?></h3>
			</div>
			<div class="blog_section px-lg-5">
				<div class="card border-0">
					<a href="sngle.html">
						<img src="<?php echo base_url().'gambar/'.$row->gambar?>" alt="" class="img-fluid">
					</a>
					<div class="card-body p-0 py-4">
						<div class="row border-bottom pb-3">
							<div class="col-sm-6 col-4 perso-wthree">
								<h6 class="blog-first text-bl">
									<span class="fa fa-user mr-2"></span>
								</h6>
							</div>
							<div class="col-sm-6 col-8 info-commt text-right">
								<ul class="blog_list">
									<li><?php echo $row->tgl?></li>
									
								</ul>
							</div>
						</div>
						
					</div>
				</div>
				
				<?php echo $row->isi_artikel;?>
			</div>
		</div>
	</div>
	<?php endforeach;?>