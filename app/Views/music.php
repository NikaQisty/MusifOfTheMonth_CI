<?= $this->extend('root_layout') ?>
<?= $this->section('content') ?>


<div class="mt-3 pt-3">
    <h1 class="fw-bold text-center mb-4 mt-5">Music of The Month</h1>

    <table class="table table-dark table-striped text-center w-85">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Singer</th>
            <th scope="col">Genre</th>
            <th scope="col">Date Added</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($music as $song => $row ): ?>
            <tr>
            <th scope="row"><?= $song + 1 ?></th>
            <td><?= $row['title'] ?></td>
            <td><?= $row['singer'] ?></td>
            <td><?= $row['genre'] ?></td>
            <td><?= $row['date_added'] ?></td>
            <td><a href="/edit/<?= $row['id']?>" class="btn btn-outline-success btn-sm">Edit</a> 
            <a href="/delete/<?= $row['id']?>" class="btn btn-outline-danger btn-sm" onclick="hapus()">Delete</a></td>
            <script type="text/javascript">
            function hapus() {
            Swal.fire({
                    position: 'top-50 start-50 translate-middle',
                    icon: 'success',
                    title: 'Music Deleted',
                    showConfirmButton: false,
                    timer: 10000
                })
                }
                </script>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="sweetalert2.all.min.js"></script>
            <?php endforeach ?>
        </tbody>
    </table>
    <a href="/new-music" class="btn btn-secondary w-100 mt-3">Add New Music</a>
</div>
<?= $this->endSection() ?>