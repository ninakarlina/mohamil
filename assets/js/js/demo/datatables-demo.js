// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable( {
      dom :'Bfrtip',
      buttons:['csv','excel','pdf','print']
  });
  $('#dataTable1').DataTable({
      dom :'Bfrtip',
      buttons:['csv','excel','pdf','print']
  });
  $('#dataTable2').DataTable({
      dom :'Bfrtip',
      buttons:['csv','excel','pdf','print']
  });
});
