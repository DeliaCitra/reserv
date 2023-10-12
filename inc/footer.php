<div class="container-fluid bg-white mt-5">
    <div class="row">
        <div class="col-lg-6 p-4">
            <h3 class="h-font fw-bold fs-3 mb-2">Asriloka Wonosalam</h3>
            <p>Asriloka Wonosalam merupakan salah satu provider outbound terbaik di Wonosalam yang memfokuskan pelatihan
                pengembangan sumber daya manusia dengan program yang bisa disesuaikan dengan permintaan klien. Kami
                memiliki tim dan fasilitator yng sudah profesional dan berpengalaman dalam bidangnya.</p>
        </div>
        <div class="col-lg-6 p-4">
            <h5 class="mb-3">Follow Us</h5>
            <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-instagram me-1"></i> Instagram
                </span>
            </a>
            <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-whatsapp me-1"></i> WhatsApp
                </span>
            </a>
            <br>
            <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-youtube me-1"></i> Youtube
                </span>
            </a>
            <a href="#" class="d-inline-block text-dark text-decoration-none">
                <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-tiktok me-1"></i> Tiktok
                </span>
            </a>
        </div>
    </div>
</div>

<h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by .....</h6>

<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php if (@$_SESSION['sukses']) { ?>
    <script>
        swal("Berhasil!", "<?php echo $_SESSION['sukses']; ?>", "success");
    </script>
    <?php unset($_SESSION['sukses']);
} ?>
<?php if (@$_SESSION['gagal']) { ?>
    <script>
        swal("Gagal!", "<?php echo $_SESSION['gagal']; ?>", "error");
    </script>
    <?php unset($_SESSION['gagal']);
} ?>