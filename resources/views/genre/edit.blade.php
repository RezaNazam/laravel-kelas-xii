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



<!-- NOTIF MASIH BUG -->
{{-- <!-- SweetAlert2 JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
<script>
	$(document).ready(function(){
		$(".dropdown").hover(            
			function() {
				$('.dropdown-menu', this).stop(true, true).slideDown("fast");
				$(this).toggleClass('open');        
			},
			function() {
				$('.dropdown-menu', this).stop(true, true).slideUp("fast");
				$(this).toggleClass('open');       
			}
		);

		$('#filmEditForm').on('submit', function(e) {
			e.preventDefault(); // Mencegah pengiriman form secara default
			var isValid = true;
			var errors = [];

			if ($('#title').val().trim() === '') {
				isValid = false;
				errors.push("Judul");
			}
			if ($('#sinopsis').val().trim() === '') {
				isValid = false;
				errors.push("Sinopsis");
			}
			if ($('#year').val().trim() === '') {
				isValid = false;
				errors.push("Tahun");
			}
			// Poster optional, tetapi bisa ditambahkan validasi lain jika diperlukan
			if ($('#genre_id').val().trim() === '') {
				isValid = false;
				errors.push("Genre");
			}

			if (!isValid) {
				var errorText = "Tolong isi kolom:\n" + errors.join(", ");
				Swal.fire({
					title: 'Peringatan!',
					text: errorText,
					icon: 'error',
					confirmButtonText: 'Tutup'
				});
			} else {
				var formData = new FormData(this); // Menggunakan FormData untuk menangani form dengan file
				$.ajax({
    url: $(this).attr('action'),
    type: 'POST',
    data: formData,
    contentType: false,
    processData: false,
    success: function(response) {
        if (response.success) {
            Swal.fire({
                title: 'Berhasil!',
                text: response.success,
                icon: 'success',
                confirmButtonText: 'Tutup'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('film.index') }}"; 
                }
            });
        } else {
            Swal.fire({
                title: 'Error!',
                text: response.error,
                icon: 'error',
                confirmButtonText: 'Tutup'
            });
        }
    },
    error: function(xhr) {
        Swal.fire({
            title: 'Error!',
            text: 'Terjadi kesalahan saat memperbarui film.',
            icon: 'error',
            confirmButtonText: 'Tutup'
        });
    }
});

			}
		});
	});
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
	$(document).ready(function() {
		$().UItoTop({ easingType: 'easeOutQuart' });
	});
	@stack('script')
</script>
<!-- //here ends scrolling icon --> --}}
</body>
</html>