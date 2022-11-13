<?= $this->extend('root_layout') ?>
<?= $this->section('content') ?>

<div class="mt-3 pt-3">
<h1 class="fw-bold text-center mt-5 pt-5">Add New Music</h1>
    <form action="/add-music" method="post" class="w-50 position-absolute top-50 start-50 translate-middle">
        <div class="input-group mb-3">
            <span class="input-group-text " id="basic-addon1">Title</span>
            <input name="title" type="text" class="form-control" placeholder="Title of music" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Singer</span>
            <input name="singer" type="text" class="form-control" placeholder="Name of singer" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Genre</span>
            <input name="genre" type="text" class="form-control" placeholder="Genre of Music" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Date</span>
            <input name="date_added" type="date" class="form-control" required>
        </div>
        <button type="submit"  class="btn btn-secondary w-100 mt-3" onclick="add()">Add </button>
        <script type="text/javascript">
                function add() {
                Swal.fire({
                        position: 'top-50 start-50 translate-middle',
                        icon: 'success',
                        title: 'Music added',
                        showConfirmButton: false,
                        timer: 10000
                    })
                    }
                    </script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="sweetalert2.all.min.js"></script>
    </form>
</div>
<?= $this->endSection() ?>



