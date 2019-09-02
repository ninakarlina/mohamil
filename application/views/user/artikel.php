<section class="blog_w3ls py-5" id="blog">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section mb-md-5 mb-4">
				<h6 class="w3ls-title-sub">Latest Posts</h6>
				<h3 class="w3ls-title text-uppercase text-bl font-weight-bold">Artikel Kesehatan</h3>
			</div>
			<div class="row">
				<!-- blog grid -->
				<?php $no=1; 
				foreach($x as $row):
				$no++; if ($no%2)
				{
					?>
				<div class="col-lg-4 col-md-6">
					<div class="card border-0 med-blog">
						<div class="card-header p-0">
							<a href="single.html">
								<img class="card-img-bottom" src="<?php echo base_url().'gambar/'.$row->gambar?>" alt="image">
							</a>
						</div>
						<div class="card-body border border-top-0 pb-5">
							<div class="mb-3">
								<h5 class="blog-title card-title font-weight-bold m-0">
									<a href="<?php echo base_url();?>C_ibu/artikel/<?php echo $row->id_artikel?>"><?php echo $row->judul?></a>
								</h5>
								<div class="blog_w3icon">
									<span>
										<?php echo $row->tgl;?>- <?php echo $row->tema?></span>
								</div>
							</div>
							<p class="mb-4"><?php echo substr($row->isi_artikel,0,50); ?></p>
							<a href="<?php echo base_url();?>C_ibu/artikel/<?php echo $row->id_artikel?>" class="blog-btn btn">Read more</a>
						</div>
					</div>
				</div>
				<?php }else{
					?>
					<div class="col-lg-4 col-md-6 mt-md-0 mt-5">
					<div class="card border-0 med-blog">
						<div class="card-body border border-bottom-0 pb-5">
							<div class="mb-3">
								<h5 class="blog-title card-title font-weight-bold m-0">
									<a href="<?php echo base_url();?>C_ibu/artikel/<?php echo $row->id_artikel?>"><?php echo $row->judul?></a>
								</h5>
								<div class="blog_w3icon">
									<span>
										<?php echo $row->tgl;?>- <?php echo $row->tema?></span>
								</div>
							</div>
							<p class="mb-4"><?php echo substr($row->isi_artikel,0,50); ?></p>
							<a href="<?php echo base_url();?>C_ibu/artikel/<?php echo $row->id_artikel?>" class="blog-btn btn">Read more</a>
						</div>
						<div class="card-header p-0">
							<a href="single.html">
								<img class="card-img-bottom" src="<?php echo base_url().'gambar/'.$row->gambar?>" alt="image">
							</a>
						</div>
					</div>
				</div>
			
					<?php
				}endforeach;?>
				<!-- //blog grid -->
				<!-- blog grid -->
				<!-- //blog grid -->
			</div>
		</div>
	</section>