<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Student Detail
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $student['name']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $student['email'] ?></h6>
                    <p class="card-text"><?= $student['nim']; ?></p>
                    <p class="card-text"><?= $student['major']; ?></p>
                    <a href="<?= base_url('student'); ?>" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>