<?= $this->extend('root_layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5 pt-5  w-75">
    <h2 class="fw-bold text-center pb-3">What is music of the month? 🎼</h2>
    <div class="card text-center">
        <div class="card-header">
            About
        </div>
        <div class="card-body">
            <h5 class="card-title fw-bold pb-3 pt-3">🎹 Music of The Month</h5>
            <p class="card-text pb-3">is a platform to save every song you listen to this month, you can add, view, edit and delete your favorite songs of the month according to your musical taste!!</p>
            <a href="/music" class="btn btn-primary w-25 mb-3">Try Now</a>
        </div>
        <div class="card-footer text-muted">
            Chill
        </div>
    </div>
</div>

<?= $this->endSection() ?>