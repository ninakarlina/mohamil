<footer class="py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-lg-7 w3l-footer">
					<!-- logo -->
					<div class="logo2">
						<h2>
							<a href="index.html">
								<span class="fa fa-user-md mr-2"></span>
								<span class="logo-sp">Be</span> Clinic
							</a>
						</h2>
					</div>
					<!-- //logo -->
					<p class="mt-4 text-li">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
						laudantium, totam rem
						aperiam,
						eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					<ul class="list-unstyled list-styles mt-lg-5 mt-4">
						<li>
							<p class="text-li"><span class="fa fa-location-arrow mr-2"></span>Morris Park, New York</p>
						</li>
						<li class="my-3">
							<p class="text-li"><span class="fa fa-phone mr-2"></span>1234567890</p>
						</li>
						<li>
							<a href="mailto:info@example.com" class="text-wh"><span class="fa fa-envelope-open mr-2"></span>mail@example.com</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-5 w3l-footer mt-lg-0 mt-5">
					<h3 class="mb-sm-4 mb-3 text-wh">Partners</h3>
					<ul class="list-unstyled list-part text-wh pt-lg-3">
						<li><span class="fa fa-500px" aria-hidden="true"></span></li>
						<li class="mx-4"><span class="fa fa-gg" aria-hidden="true"></span></li>
						<li><span class="fa fa-lastfm" aria-hidden="true"></span></li>
						<li class="mx-4"><span class="fa fa-openid" aria-hidden="true"></span></li>
						<li><span class="fa fa-angellist" aria-hidden="true"></span></li>
					</ul>
					<div class="n-right-w3ls mt-5 pt-lg-4">
						<h3 class="mb-sm-4 mb-3 text-wh">Newsletter</h3>
						<form action="#" method="post">
							<div class="row pt-2">
								<div class="col-8 form-group">
									<input class="form-control" type="email" name="Email" placeholder="Email Address" required="">
								</div>
								<div class="col-4 form-group p-sm-0 pl-0">
									<button class="form-control submit btn font-weight-bold" type="submit">Subscribe</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="copy-w3pvt">
		<div class="container py-3">
			<div class="row">
				<div class="col-lg-7 w3ls_footer_grid1_left text-lg-left text-center">
					<p>© 2019 Be Clinic. All rights reserved | Design by
						<a href="http://w3layouts.com/">W3layouts</a>
					</p>
				</div>
				<div class="col-lg-5 w3ls_footer_grid_left1_pos text-lg-right text-center mt-lg-0 mt-2">
					<ul>
						<li>
							<a href="#" class="facebook">
								<span class="fa fa-facebook-f mr-2"></span>Facebook</a>
						</li>
						<li class="mx-3">
							<a href="#" class="twitter">
								<span class="fa fa-twitter mr-2"></span>Twitter</a>
						</li>
						<li>
							<a href="#" class="google">
								<span class="fa fa-google-plus mr-2"></span>Google Plus</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<a href="#home" class="move-top text-center"></a>
	 <!-- chosen select -->
    <script src="<?php echo base_url(); ?>assetss/plugins/chosen/js/chosen.jquery.min.js"></script>
    <!-- DATA TABES SCRIPT
    <script src="assetss/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="assetss/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    Datepicker -->
    <script src="<?php echo base_url(); ?>assetss/plugins/datepicker/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url(); ?>assetss/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url(); ?>assetss/plugins/fastclick/fastclick.min.js'></script>
    <!-- maskMoney -->
    <script src="<?php echo base_url(); ?>assetss/js/jquery.maskMoney.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assetss/js/app.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assetss/rupiah.js" type="text/javascript"></script>
    <!-- page script -->
	<script src="<?php echo base_url(); ?>assetss/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assetss/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
	<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assetss/datatables/buttons-1.5.6/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assetss/datatables/buttons-1.5.6/js/buttons.flash.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assetss/datatables/jszip-2.5.0/jszip.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assetss/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assetss/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assetss/datatables/buttons-1.5.6/js/buttons.html5.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assetss/datatables/buttons-1.5.6/js/buttons.print.min.js"></script>
    <script type="text/javascript">
      $(function () {
        // datepicker plugin
        $('.date-picker').datepicker({
          autoclose: true,
          todayHighlight: true
        });

        // chosen select
        $('.chosen-select').chosen({allow_single_deselect:true}); 
        //resize the chosen on window resize
        
        // mask money
        $('#harga_beli').maskMoney({thousands:'.', decimal:',', precision:0});
        $('#harga_jual').maskMoney({thousands:'.', decimal:',', precision:0});

        $(window)
        .off('resize.chosen')
        .on('resize.chosen', function() {
          $('.chosen-select').each(function() {
             var $this = $(this);
             $this.next().css({'width': $this.parent().width()});
          })
        }).trigger('resize.chosen');
        //resize chosen on sidebar collapse/expand
        $(document).on('settings.ace.chosen', function(e, event_name, event_val) {
          if(event_name != 'sidebar_collapsed') return;
          $('.chosen-select').each(function() {
             var $this = $(this);
             $this.next().css({'width': $this.parent().width()});
          })
        });
    
    
        $('#chosen-multiple-style .btn').on('click', function(e){
          var target = $(this).find('input[type=radio]');
          var which = parseInt(target.val());
          if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
           else $('#form-field-select-4').removeClass('tag-input-style');
        });

        // DataTables
        $("#dataTables1").dataTable({
			dom :'Bfrtip',
			buttons:['csv','excel','pdf','print']
		});
		$("#dataTables3").dataTable({
			
		});
		$("#example1").dataTable({
			
		});
        $('#dataTables2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false,
		  dom :'Bfrtip',
		 buttons:['csv','excel','pdf','print']
        });
      });
    </script>
</body>
</html>