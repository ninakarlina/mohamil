function searchMovie() {
	$('#list').html('');

	$.ajax({
		url : 'http://omdbapi.com',
		type : 'get',
		dataType : 'json',
		data : {
			'apikey' : '18a2be3c',
			's' : $('#input').val()
		},
		success : function(result) {
			// console.log(result);
			if (result.Response == "True") {
				let movies = result.Search;

				$.each(movies, function(i, data) {
					$('#list').append(`
						<div class="col-md-4 mb-3">
							<div class="card">
							  <img src="`+ data.Poster +`" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title">`+ data.Title +`</h5>
							    <h6 class="card-subtitle mb-2 text-muted">`+ data.Year +`</h6>
							    <a href="#" class="btn btn-dark detail" data-toggle="modal" data-target="#exampleModal" data-id="`+ data.imdbID +`">Detail</a>
							  </div>
							</div>
						</div>
						`)
				})
				// console.log(movies);
			} else {
				$('#list').html(`
					<div class="col">
						<h1 class='text-center'>`+ result.Error +`</h1>
					</div>`);
			}
		}
	});
}

$('#search').on('click', function() {
	searchMovie();
});

$('#input').on('keyup', function(e) {
	if(e.keyCode === 13){
		searchMovie();
	}
});

$('#list').on('click', '.detail', function(e) {
	$.ajax ({
		url : 'http://omdbapi.com',
		dataType : 'json',
		type : 'get',
		data : {
			'apikey' : '18a2be3c',
			'i' : $(this).data('id')
		},
		success : function (movie) {
			if (movie.Response == "True") {
				$('.modal-body').html(`
						<div class="container-fluid">
						    <div class="row">
						      <div class="col-md-4 mb-5">
						      	<img src="`+movie.Poster+`" class="img-fluid">
						      </div>

						      <div class="col-md-8">
						     	<ul class="list-group">
								  <li class="list-group-item"><h5>`+movie.Title+`</h5></li>
								  <li class="list-group-item">IMDB : `+movie.imdbRating+`</li>
								  <li class="list-group-item">Morbi leo risus</li>
								  <li class="list-group-item">Porta ac consectetur ac</li>
								  <li class="list-group-item">Vestibulum at eros</li>
								</ul> 	
						      </div>
						    </div>
						</div>
					`);
			}
		}
	// console.log($(this).data('id'));
	});
})

