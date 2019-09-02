
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Chat Konsultasi
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Chat Konsultasi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
         
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

     
              
          <!-- /.box -->

          <!-- BAR CHART -->
          <!-- /.box -->

                <!-- /.col -->
               <!-- /.col -->
        <div class="col-md-6">
              <!-- DIRECT CHAT -->
              <div class="box box-primary direct-chat direct-chat-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Chat Konsultasi</h3>

                  <div class="box-tools pull-right">
                    <!-- <span data-toggle="tooltip" title="" class="badge bg-blue" data-original-title="3 New Messages">3</span> -->
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
                        <a href="<?php echo base_url();?>C_user/percakapan/<?php echo $row2->id_user; ?>">
                          <img class="contacts-list-img" src="<?php echo base_url();?>assets/dist/img/user2-128x128.jpg">
                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              <?php echo $row2->nama_ibu; ?>
                              <small class="contacts-list-date pull-right"><?php echo $row2->tgl_lahir_ibu; ?></small>
                            </span>
                            <span class="contacts-list-msg"><?php echo $row2->no_tlp; ?></span>
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
                            <button id="submit" class="btn btn-primary btn-flat tombol-simpan">Send</button>
                          </span>
                    </div>
                  </form>
                </div>
        <!-- /.box-footer-->
              </div>
              <!--/.direct-chat -->
            </div>
              </div>
        <script type="text/javascript">// <![CDATA[
$(document).ready(function() {
$.ajaxSetup({ cache: false }); // This part addresses an IE bug. without it, IE will only load the first number and will never refresh
setInterval(function() {
$('#results').load('<?php echo base_url('C_user/chat');?>');
}, 1000); // the "3000" here refers to the time to refresh the div. it is in milliseconds.
});
// ]]></script>
<script>
$(document).ready(function(){
  $("#submit").click(function(){
    $.ajax({
      url:"<?php echo base_url();?>C_user/add",
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
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
              <div class="row">
              
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
        
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
     </section>
   </div>