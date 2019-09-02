			  <script type="text/javascript">// <![CDATA[
$(document).ready(function() {
$.ajaxSetup({ cache: false }); // This part addresses an IE bug. without it, IE will only load the first number and will never refresh
setInterval(function() {
$('#results').load('<?php echo base_url('C_Ibu/chat');?>');
}, 1000); // the "3000" here refers to the time to refresh the div. it is in milliseconds.
});
// ]]></script>
<script>
$(document).ready(function(){
	$("#submit").click(function(){
		$.ajax({
			url:"<?php echo base_url();?>C_Ibu/add",
			type: "POST",
			data:$("#form_chat").serialize(),
			success: function(data){
				
			}
		});
		return false;
	});
});
</script>
              <!-- /.row -->
           
        <!-- /.col -->
      <section class="logins py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section mb-md-5 mb-4">
				<h6 class="w3ls-title-sub">Kemudahan Berkomunikasi</h6>
				<h3 class="w3ls-title text-uppercase text-dark font-weight-bold">Chat</h3>
			</div>
			<div class="login px-sm-4 mx-auto mw-100 login-wrapper">
				<div class="login-wrapper">
					  <div class="box box-warning direct-chat direct-chat-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Direct Chat</h3>

                  <div class="box-tools pull-right">
                    <span data-toggle="tooltip" title="" class="badge bg-yellow" data-original-title="3 New Messages">3</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="" data-widget="chat-pane-toggle" data-original-title="Contacts">
                      <i class="fa fa-comments"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body" style="">
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages tampildata">
                    <!-- Message. Default to the left -->
                    

                    <div id="results">Loading data ...</div> 
                  </div>
                  <!--/.direct-chat-messages-->

                  <!-- Contacts are loaded here -->
                 <div class="direct-chat-contacts">
                    <ul class="contacts-list">
                    <?php  foreach($x as $row2): ?>
					  <li>
                        <a href="<?php echo base_url();?>C_ibu/percakapan/<?php echo $row2->id_user; ?>">
                          <img class="contacts-list-img" src="<?php echo base_url();?>assets/dist/img/user3-128x128.jpg">
                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              <?php echo $row2->nama_bidan; ?>
                              <small class="contacts-list-date pull-right"><?php echo $row2->tlp_bidan; ?></small>
                            </span>
                            <span class="contacts-list-msg"><?php echo $row2->alamat_bidan; ?></span>
                          </div><!-- /.contacts-list-info -->
                        </a>
                      </li><!-- End Contact Item -->
                    <?php endforeach; ?>
                    </ul><!-- /.contatcts-list -->
                  </div>
                  <!-- /.direct-chat-pane -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer" style="">
                  <form id="form_chat" method="post">
                    <div class="input-group">
                      <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-btn">
                            <button id="submit" class="btn btn-warning btn-flat tombol-simpan">Send</button>
                          </span>
                    </div>
                  </div>
                </div>
				<!-- /.box-footer-->
              </div>
              <!--/.direct-chat -->
				</form>
			</div>
		</div>
	</section>