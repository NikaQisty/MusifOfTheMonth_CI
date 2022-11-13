<?= $this->extend('root_layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5 pt-5  w-75">
    <h2 class="fw-bold text-center pb-3">About Me</h2>
    <div class="card text-center">
        <div class="card-header">
            Biodata
        </div>
        <div class="card-body">
            <h5 class="card-title fw-bold pb-1 pt-3">© Nika Qisty Fatharani</h5>
            <p class="card-text mb-3">a software engineering student studying many things in the universe</p>
            
        </div>
        <div class="card-footer text-muted pt-3">
            <a href="https://github.com/NikaQisty" class="btn btn-dark mb-2">Github</a>
            <a href="https://www.linkedin.com/in/nika-qisty-fatharani-5633b4218/" class="btn btn-dark mb-2">Linkedin</a>
            <a href="mailto:nikaqistyy@upi.edu" class="btn btn-dark mb-2">Email</a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>



