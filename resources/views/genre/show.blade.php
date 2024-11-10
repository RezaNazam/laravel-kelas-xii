<!DOCTYPE html>
<html lang="en">

@include('templates.component.head')

<body>
<!-- header -->
@include('templates.component.header')
<!-- //header -->
<!-- bootstrap-pop-up -->
@include('templates.component.login')
<!-- //bootstrap-pop-up -->
<!-- nav -->
@include('templates.component.navbar')
<!-- //nav -->
<div class="general_social_icons">
	<nav class="social">
		<ul>
			<li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
			<li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
			<li class="w3_dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>
			<li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>				  
		</ul>
	</nav>
</div>

<!-- /w3l-medile-movies-grids -->

<!-- untuk menampilkan detail dari genre -->
<div class="container mt-5">
	<h1 class="text-center mb-4">Detail Genre</h1>
    <p><strong>ID:</strong> {{ $genre->id }}</p>
    <p><strong>Nama Genre:</strong> {{ $genre->name }}</p>
	<a href="{{ route('genre.index') }}" class="btn btn-primary mt-3">Kembali</a>
</div>

<!-- Menampilkan film berdasarkan genre -->
<h2>Films in this Genre</h2>
    <div class="row">
        @foreach($films as $film)
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{ asset($film->poster) }}" class="card-img-top" alt="{{ $film->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $film->title }}</h5>
                    <p class="card-text">{{ $film->year }}</p>
                    <a href="{{ route('movies.show', $film->id) }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="mt-4">
        {{ $films->links() }} <!-- Pagination -->
    </div>

</div>

@include('templates.component.footer')

</body>
</html>
