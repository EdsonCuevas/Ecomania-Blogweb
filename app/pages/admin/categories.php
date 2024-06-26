<?php if($action == 'add'):?>

<div class="container">
    <form method="post">
        <div class="col-md-6 mx-auto">
            <h1 class="h3 mb-3 fw-normal">Create category</h1>
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">Please fix the errors below</div>
            <?php endif; ?>


            <div class="form-floating">
                <label for="floatingInput">Category</label>
                <input value="<?= old_value('category') ?>" name="category" type="text" class="form-control mb-2" id="floatingInput" placeholder="Category name">
                <?php if (!empty($errors['category'])): ?>
                    <div class="text-danger"><?= $errors['category'] ?></div>
                <?php endif; ?>
            </div>
           
    

            <div class="form-floating my-3">
                <label for="floatingInput">Active</label>
                <select name="disabled" class="form-select">
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                </select>
            </div>

           
            <a href="<?=ROOT?>/admin/categories">
                <button class="mt-4 btn btn-lg btn-danger" type="button">Back</button>
            </a>
            <button class="mt-4 btn btn-lg btn-primary float-end" type="submit">Create</button>
        </div>
    </form>
</div>

<?php elseif($action == 'edit'):?>

<div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="col-md-6 mx-auto">
            <h1 class="h3 mb-3 fw-normal">Edit account</h1>
            <?php if(!empty($row)):?>
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">Please fix the errors below</div>
            <?php endif; ?>


            <div class="form-floating">
                <label for="floatingInput">Category</label>
                <input value="<?= old_value('category', $row['category']) ?>" name="category" type="text" class="form-control mb-2" id="floatingInput" placeholder="category">
                <?php if (!empty($errors['category'])): ?>
                    <div class="text-danger"><?= $errors['category'] ?></div>
                <?php endif; ?>
            </div>
           

            <div class="form-floating my-3">
                <label for="floatingInput">Active</label>
                <select name="disabled" class="form-select">
                    <option <?=old_select('disabled', '0', $row['disabled']) ?> value="0">Yes</option>
                    <option <?=old_select('disabled', '1', $row['disabled']) ?> value="1">No</option>
                </select>
            </div>

            <a href="<?=ROOT?>/admin/categories">
                <button class="mt-4 btn btn-lg btn-danger" type="button">Back</button>
            </a>
            <button class="mt-4 btn btn-lg btn-primary float-end" type="submit">Save</button>
            <?php else: ?>

                <div class="alert alert-danger text-center">Record not found!</div>

            <?php endif; ?>
        </div>
    </form>
</div>

<?php elseif($action == 'delete'):?>

<div class="container">
    <form method="post">
        <div class="col-md-6 mx-auto">

            <h1 class="h3 mb-3 fw-normal">Delete category</h1>

            <?php if(!empty($row)):?>


            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">Please fix the errors below</div>
            <?php endif; ?>
            <div class="form-floating">
                <div class="form-control mb-2"><?= old_value('category', $row['category']) ?></div>
                <?php if (!empty($errors['category'])): ?>
                    <div class="text-danger"><?= $errors['category'] ?></div>
                <?php endif; ?>
            </div>
            <div class="form-floating">
            <div class="form-control mb-2"><?= old_value('slug', $row['slug']) ?></div>
                <?php if (!empty($errors['slug'])): ?>
                    <div class="text-danger"><?= $errors['slug'] ?></div>
                <?php endif; ?>
            </div>
            
            <a href="<?=ROOT?>/admin/categories">
                <button class="mt-4 btn btn-lg btn-primary" type="button">Back</button>
            </a>
            <button class="mt-4 btn btn-lg btn-danger float-end" type="submit">Delete</button>
            <?php else: ?>

                <div class="alert alert-danger text-center">Record not found!</div>

            <?php endif; ?>
        </div>
    </form>
</div>

<?php else:?>
<h4>Categories</h4>
<a href="<?=ROOT?>/admin/categories/add">
    <button class="btn btn-primary"><i class="fa fa-plus"></i></button>
</a>


<div class="table-responsive">
    <br>
    <table class="table">

        <tr>
            <th>#</th>
            <th>Category</th>
            <th>Slug</th>
            <th>Active</th>
            <th>Action</th>
        </tr>

        <?php
            $limit = 10;
            $offset = ($PAGE['page_number'] - 1) * $limit;

            $query = "select * from categories order by id desc limit $limit offset $offset";
            $rows = query($query);

        ?>

        <?php if(!empty($rows)):?>
            <?php foreach($rows as $row):?>
            <tr>
                <td><?=$row['id']?></td>
                <td><?=esc($row['category'])?></td>
                <td><?=$row['slug']?></td>
                <td><?=$row['disabled'] ? 'No':'Yes'?></td>
                
                <td>
                    <a href="<?=ROOT?>/admin/categories/edit/<?=$row['id']?>">
                        <button class="btn btn-warning"><i class="fa fa-edit"></i></button>
                    </a>
                    <a href="<?=ROOT?>/admin/categories/delete/<?=$row['id']?>">
                        <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                    </a>
                </td>
            </tr>
            <?php endforeach;?>
        <?php endif;?>
    </table>

    <div class="col-md-12 mb-4">
        <a href="<?=$PAGE['prev_link']?>">
        <button class="btn btn-primary">Prev Page</button>
        </a>
        <a href="<?=$PAGE['next_link']?>">
        <button class="btn btn-primary float-end">Next Page</button>
        </a>
    </div>
</div>

<?php endif;?>