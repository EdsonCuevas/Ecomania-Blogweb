<?php if($action == 'add'):?>

<div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="col-md-6 mx-auto">
            <h1 class="h3 mb-3 fw-normal">Create account</h1>
            <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">Please fix the errors below</div>
            <?php endif; ?>

            <div class="my-2">
                <?php if(!empty($errors['image'])):?>
                    <div class="text-danger">
                        <?=$errors['image']?>
                    </div>
                <?php endif;?>
                <label class="d-block">
                    <img class="mx-auto d-block image-preview-edit" src="<?=get_image('')?>"
                        style="cursor: pointer;width: 150px;height: 150px;object-fit: cover;">
                    <input onchange="display_image_edit(this.files[0])" type="file" name="image" class="d-none">
                </label>
                

                <script>

                    function display_image_edit(file) {
                        document.querySelector(".image-preview-edit").src = URL.createObjectURL(file);
                    }
                </script>
            </div>

            <div class="form-floating">
                <label for="floatingInput">Username</label>
                <?php if (!empty($errors['username'])): ?>
                    <div class="text-danger">
                        <?= $errors['username'] ?>
                    </div>
                <?php endif; ?>
                <input value="<?= old_value('username') ?>" name="username" type="text" class="form-control mb-2"
                    id="floatingInput" placeholder="Username">
            </div>
            <div class="form-floating">
                <label for="floatingInput">Email</label>
                <?php if (!empty($errors['email'])): ?>
                    <div class="text-danger">
                        <?= $errors['email'] ?>
                    </div>
                <?php endif; ?>
                <input value="<?= old_value('email') ?>" name="email" type="email" class="form-control"
                    id="floatingInput" placeholder="Email addres">
            </div>

            <div class="form-floating my-3">
                <label for="floatingInput">Role</label>
                <select name="role" class="form-select">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <div class="form-floating">
                <label for="floatingPassword">Password</label>
                <?php if (!empty($errors['password'])): ?>
                    <div class="text-danger">
                        <?= $errors['password'] ?>
                    </div>
                <?php endif; ?>
                <input value="<?= old_value('password') ?>" name="password" type="password" class="form-control"
                    id="floatingPassword" placeholder="Password">
            </div>
            <div class="form-floating">
                <label for="floatingPassword">Confirm Password</label>
                <input value="<?= old_value('retype_password') ?>" name="retype_password" type="password"
                    class="form-control" id="floatingPassword" placeholder="Password">
            </div>
            <a href="<?=ROOT?>/admin/users">
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

            <div class="my-2">
                <label class="d-block">
                    <img class="mx-auto d-block image-preview-edit" src="<?=get_image($row['image'])?>"
                        style="cursor: pointer; width: 150px; height: 150px; object-fit: cover;">
                    <input onchange="display_image_edit(this.files[0])" type="file" name="image" class="d-none">
                </label>

                <script>
                    function display_image_edit(file) {
                        document.querySelector(".image-preview-edit").src = URL.createObjectURL(file);
                    }
                </script>
            </div>

            <div class="form-floating">
                <label for="floatingInput">Username</label>
                <?php if (!empty($errors['username'])): ?>
                    <div class="text-danger">
                        <?= $errors['username'] ?>
                    </div>
                <?php endif; ?>
                <input value="<?= old_value('username', $row['username']) ?>" name="username" type="text"
                    class="form-control mb-2" id="floatingInput" placeholder="Username">
            </div>
            <div class="form-floating">
                <label for="floatingInput">Email</label>
                <?php if (!empty($errors['email'])): ?>
                    <div class="text-danger">
                        <?= $errors['email'] ?>
                    </div>
                <?php endif; ?>
                <input value="<?= old_value('email', $row['email']) ?>" name="email" type="email" class="form-control"
                    id="floatingInput" placeholder="Email addres">
            </div>

            <div class="form-floating my-3">
                <label for="floatingInput">Role</label>
                <select name="role" class="form-select">
                    <option <?=old_select('role', 'user' , $row['role']) ?> value="user">User</option>
                    <option <?=old_select('role', 'admin' , $row['role']) ?> value="admin">Admin</option>
                </select>
                <?php if (!empty($errors['role'])): ?>
                <div class="text-danger">
                    <?= $errors['role'] ?>
                </div>
                <?php endif; ?>
            </div>

            <div class="form-floating">
                <label for="floatingPassword">Password (Leave empty to keep old one)</label>
                <?php if (!empty($errors['password'])): ?>
                    <div class="text-danger">
                        <?= $errors['password'] ?>
                    </div>
                <?php endif; ?>
                <input value="<?= old_value('password') ?>" name="password" type="password" class="form-control"
                    id="floatingPassword" placeholder="Password">
            </div>
            <div class="form-floating">
                <label for="floatingPassword">Confirm Password</label>
                <input value="<?= old_value('retype_password') ?>" name="retype_password" type="password"
                    class="form-control" id="floatingPassword" placeholder="Password">
            </div>
            <a href="<?=ROOT?>/admin/users">
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
            <h1 class="h3 mb-3 fw-normal">Delete account</h1>
            <?php if(!empty($row)):?>
            <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">Please fix the errors below</div>
            <?php endif; ?>
            <div class="form-floating">
                <div class="form-control mb-2">
                    <?= old_value('username', $row['username']) ?>
                </div>
                <?php if (!empty($errors['username'])): ?>
                <div class="text-danger">
                    <?= $errors['username'] ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="form-floating">
                <div class="form-control mb-2">
                    <?= old_value('email', $row['email']) ?>
                </div>
                <?php if (!empty($errors['email'])): ?>
                <div class="text-danger">
                    <?= $errors['email'] ?>
                </div>
                <?php endif; ?>
            </div>

            <a href="<?=ROOT?>/admin/users">
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
<h4>Users</h4>

<a href="<?=ROOT?>/admin/users/add">
    <button class="btn btn-primary"><i class="fa fa-plus"></i></button>
</a>


<div class="table-responsive">
    <br>
    <table class="table">

        <tr>
            <th>#</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Image</th>
            <th>Date</th>
            <th>Action</th>
        </tr>

        <?php
                $limit = 10;
                $offset = ($PAGE['page_number'] - 1) * $limit;

                $query = "select * from users order by id desc limit $limit offset $offset";
                $rows = query($query);

            ?>

        <?php if(!empty($rows)):?>
        <?php foreach($rows as $row):?>
        <tr>
            <td>
                <?=$row['id']?>
            </td>
            <td>
                <?=esc($row['username'])?>
            </td>
            <td>
                <?=$row['email']?>
            </td>
            <td>
                <?=$row['role']?>
            </td>
            <td>
                <img src="<?=get_image($row['image'])?>" style="width: 100px; height: 100px; object-fit: cover;">
            </td>
            <td>
                <?=date("jS M, Y",strtotime($row['date']))?>
            </td>
            <td>
                <a href="<?=ROOT?>/admin/users/edit/<?=$row['id']?>">
                    <button class="btn btn-warning"><i class="fa fa-edit"></i></button>
                </a>
                <a href="<?=ROOT?>/admin/users/delete/<?=$row['id']?>">
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