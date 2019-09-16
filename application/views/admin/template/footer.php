   </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <strong>2019 - <a href="www.ti.polindra.ac.id">Teknik Informatika-Politeknik Negeri Indramayu</a>.</strong>
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="<?php echo base_url(); ?>assetss/plugins/jQuery/jQuery-2.1.3.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/select2/dist/js/select2.full.min.js" type="text/javascript"></script>    
    

    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url(); ?>assetss/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assetss/js/adminlte.js" type="text/javascript"></script>    
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url(); ?>assetss/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- datepicker -->
    <script src="<?php echo base_url(); ?>assetss/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
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
      //Initialize Select2 Elements
      $('.select2').select2()


    })
  </script>
    <script type="text/javascript">
      $(function () {
        // datepicker plugin
        $('.date-picker').datepicker({
          autoclose: true,
          dateFormat: 'dd-mm-yy',
          todayHighlight: true
        });

        $('.datepicker').datepicker({
          autoclose: true,
          format: 'yyyy-mm-dd',
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
<script type="text/javascript">
  CKEDITOR.replace( 'isi_artikel' );
  CKEDITOR.replace( 'persyaratan_umum' );
  CKEDITOR.replace( 'persyaratan_keahlian' );
</script>

<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = [<?php foreach ($pekerjaan as $item) {
  echo '"' . $item->pekerjaan_ibu . '",';
} ?>];

// console.log(countries);

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script>

  </body>
</html>