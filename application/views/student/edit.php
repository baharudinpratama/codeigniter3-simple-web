<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Add Student Form</div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $student['id']; ?>">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="<?= $student['name'] ?>">
                            <?= form_error('name', '<div class="alert alert-danger mt-1">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" name="nim" id="nim" value="<?= $student['nim'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" value="<?= $student['email'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="major">Major</label>
                            <select class="form-control" id="major" name="major">
                                <?php foreach ($majors as $major) : ?>
                                    <?php if ($major == $student['major']) : ?>
                                        <option value="<?= $major ?>" selected>
                                            <?= $major ?>
                                        </option>
                                    <?php else : ?>
                                        <option value="<?= $major ?>">
                                            <?= $major ?>
                                        </option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Update Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>