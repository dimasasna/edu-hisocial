<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href={{ $logo }}>
    <link href="https://fonts.cdnfonts.com/css/cabinet-grotesk" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('partials.sidebar')

    <div class="p-4 sm:ml-72 mt-20 lg:mr-10">
        @yield('container')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script script type = "text/javascript" >
            $(function() {
                $(document).on('submit', '#deleteForm', function(e) {
                    e.preventDefault();
                    var form = $(this);
                    var link = form.attr('action');

                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Lanjutkan dengan penghapusan
                            $.ajax({
                                url: link,
                                type: 'POST', // Ganti dengan POST karena HTML forms hanya mendukung POST dan GET
                                data: form.serialize(),
                                success: function(response) {
                                    // Tampilkan notifikasi setelah penghapusan berhasil
                                    Swal.fire({
                                        title: "Deleted!",
                                        text: "Your file has been deleted.",
                                        icon: "success"
                                    }).then(() => {
                                        // Refresh halaman setelah menutup notifikasi
                                        location.reload();
                                    });
                                },
                                error: function(error) {
                                    console.error('Error deleting item:', error);
                                    // Tampilkan notifikasi jika terjadi kesalahan saat menghapus
                                    Swal.fire({
                                        title: "Error!",
                                        text: "There was an error deleting the item.",
                                        icon: "error"
                                    });
                                }
                            });
                        }
                    });
                });
            });
            </script>

</body>
