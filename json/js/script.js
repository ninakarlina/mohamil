
function allMenu() {
	$.getJSON('http://localhost/mohamil_bak/json/data/data.json', function(data) {
		
		let menu = data.menu;
		$.each(menu, function(i, data){
			$('#list').append('<div class="col-md-4"><div class="card mb-5"><img src="' + data.gambar+ '" class="card-img-top" alt="..." style="height: 200px;"><div class="card-body"><h5 class="card-title">'+ data.nama +'</h5><p class="card-text">Some quick example text to build on the card title and make up the bulk of the content.</p><h5 class="card-title">'+ data.harga +'</h5><a href="#" class="btn btn-primary">Pesan sekarang!</a></div></div></div>');
			// console.log(i);
		});
		
	});
}

allMenu();

$('.nav-link').on('click', function(){
	$('.nav-link').removeClass('active');
	$(this).addClass('active');

	let kategori = $(this).html();

	$("#title").html(kategori);
	$("#judul").html(kategori);
	// console.log(kategori);

	if (kategori == 'Home') {
		allMenu();
		return;
	}



	$.getJSON('data/data.json', function(data){
		let menu = data.menu;
		let konten = '';

		var re = new RegExp(kategori,"g");
		// console.log(menu[0].nama.match(re));

		$.each(menu, function(i, data){
			if (data.nama.match(re) == kategori) {
				konten += '<div class="col-md-4"><div class="card mb-5"><img src="' + data.gambar+ '" class="card-img-top" alt="..." style="height: 200px;"><div class="card-body"><h5 class="card-title">'+ data.nama +'</h5><p class="card-text">Some quick example text to build on the card title and make up the bulk of the content.</p><h5 class="card-title">'+ data.harga +'</h5><a href="#" class="btn btn-primary">Pesan sekarang!</a></div></div></div>';
			}
			console.log(data.nama.match(re), kategori);
		});

		$('#list').html(konten);
	});


});