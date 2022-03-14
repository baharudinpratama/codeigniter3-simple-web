<div class="container">
    <?php if ($this->session->flashdata('message')) : ?>
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissable fade show" role="alert">
                    <?= $this->session->flashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
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
                    <li class="list-group-item"><?= $student['name']; ?><a href="<?= base_url('student/delete/' . $student['id']); ?>" class="badge badge-danger float-right" onclick="return confirm('Are you sure?');">delete</a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>