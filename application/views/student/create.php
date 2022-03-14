<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Add Student Form</div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name">
                            <?= form_error('name', '<div class="alert alert-danger mt-1">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" name="nim" id="nim">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="major">Major</label>
                            <select class="form-control" id="major" name="major">
                                <option value="Informatics Engineering">Informatics Engineering</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Add Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>