<!DOCTYPE html>
<html lang="en">
<head>
    @include('templates.component.head')
</head>
<body>
    @include('templates.component.header')
    @include('templates.component.login')
    @include('templates.component.navbar')


    
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

    <div class="container mt-5">
        <h1 class="text-center mb-4">Daftar Genre</h1>
        <a href="{{ route('genre.create') }}" class="btn btn-success mb-3">Tambah Genre</a>
    
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Genre</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($genres as $genre)
                    <tr>
                        <td>{{ $genre->id }}</td>
                        <td>{{ $genre->name }}</td>
                        <td>
                            <a href="{{ route('genre.show', $genre->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('genre.edit', $genre->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('genre.destroy', $genre->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <!-- Menampilkan Pagination -->
    <div class="text-center">
        {{ $genres->links() }}
    </div>

    @include('templates.component.footer')

    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
<script>
	$(document).ready(function(){
		$(".dropdown").hover(            
			function() {
				$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
				$(this).toggleClass('open');        
			},
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
					}
    );
});
</script>
</body>
</html>
