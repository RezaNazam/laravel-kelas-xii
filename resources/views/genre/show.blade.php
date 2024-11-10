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
	
@include('templates.component.footer')

</body>
</html>
