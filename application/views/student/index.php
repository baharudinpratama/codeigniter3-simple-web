<div class="container">
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