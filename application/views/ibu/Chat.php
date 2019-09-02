<?php
foreach($all as $row):
$ir=$this->session->userdata('id_user');
if ($row->id_kirim == $ir ){
	?>
<div class="direct-chat-msg right">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right"><?php echo $row->nama_bidan; ?></span>
                        <span class="direct-chat-timestamp pull-left"><?php echo $row->waktu; ?></span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="<?php echo base_url();?>assets/dist/img/user2-128x128.jpg" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        <?php echo $row->pesan; ?>
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>	
	
	<?php
}else{
	?>
<div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left"><?php echo $row->nama_ibu; ?></span>
                        <span class="direct-chat-timestamp pull-right"><?php echo $row->waktu; ?></span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="<?php echo base_url();?>assets/dist/img/user2-128x128.jpg" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        <?php echo $row->pesan; ?>
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

	<?php
}
?>


<?php endforeach; ?>
