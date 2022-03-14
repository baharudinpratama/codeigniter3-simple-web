<div class="container">
    <div class="row">
        <div class="col-md-6 mb-2">
            <a href="<?= base_url('student/create'); ?>" class="btn btn-primary">Add New Data</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3">Student List</h1>
            <ul class="list-group">
                <?php foreach ($students as $student) : ?>
                    <li class="list-group-item"><?= $student['name']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>