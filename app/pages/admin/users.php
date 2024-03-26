<?php if($action == 'add'):?>

    <div class="container">
        <form method="post">
            <div class="col-md-6 mx-auto">
                <h1 class="h3 mb-3 fw-normal">Create account</h1>
                <?php if (!empty($errors)): ?>
                    <div class="alert alert-danger">Please fix the errors below</div>
                <?php endif; ?>
                <div class="form-floating">
                    <input value="<?= old_value('username') ?>" name="username" type="text" class="form-control mb-2" id="floatingInput" placeholder="Username">
                    <label for="floatingInput">Username</label>
                    <?php if (!empty($errors['username'])): ?>
                        <div class="text-danger"><?= $errors['username'] ?></div>
                    <?php endif; ?>
                </div>
                <div class="form-floating">
                    <input value="<?= old_value('email') ?>" name="email" type="email" class="form-control" id="floatingInput" placeholder="Email addres">
                    <label for="floatingInput">Email</label>
                    <?php if (!empty($errors['email'])): ?>
                        <div class="text-danger"><?= $errors['email'] ?></div>
                    <?php endif; ?>
                </div>
                <div class="form-floating">
                    <input value="<?= old_value('password') ?>" name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    <?php if (!empty($errors['password'])): ?>
                        <div class="text-danger"><?= $errors['password'] ?></div>
                    <?php endif; ?>
                </div>
                <div class="form-floating">
                    <input value="<?= old_value('retype_password') ?>" name="retype_password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <a href="<?=ROOT?>/admin/users">
                    <button class="mt-4 btn btn-lg btn-primary" type="button">Back</button>
                </a>
                <button class="mt-4 btn btn-lg btn-primary float-end" type="submit">Create</button>
            </div>
        </form>
    </div>

<?php elseif($action == 'edit'):?>

    <div class="container">
        <form method="post">
            <div class="col-md-6 mx-auto">
                <h1 class="h3 mb-3 fw-normal">Edit account</h1>
                <?php if(!empty($row)):?>
                <?php if (!empty($errors)): ?>
                    <div class="alert alert-danger">Please fix the errors below</div>
                <?php endif; ?>
                <div class="form-floating">
                    <input value="<?= old_value('username', $row['username']) ?>" name="username" type="text" class="form-control mb-2" id="floatingInput" placeholder="Username">
                    <label for="floatingInput">Username</label>
                    <?php if (!empty($errors['username'])): ?>
                        <div class="text-danger"><?= $errors['username'] ?></div>
                    <?php endif; ?>
                </div>
                <div class="form-floating">
                    <input value="<?= old_value('email', $row['email']) ?>" name="email" type="email" class="form-control" id="floatingInput" placeholder="Email addres">
                    <label for="floatingInput">Email</label>
                    <?php if (!empty($errors['email'])): ?>
                        <div class="text-danger"><?= $errors['email'] ?></div>
                    <?php endif; ?>
                </div>
                <div class="form-floating">
                    <input value="<?= old_value('password') ?>" name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password (Leave empty to keep old one)</label>
                    <?php if (!empty($errors['password'])): ?>
                        <div class="text-danger"><?= $errors['password'] ?></div>
                    <?php endif; ?>
                </div>
                <div class="form-floating">
                    <input value="<?= old_value('retype_password') ?>" name="retype_password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <a href="<?=ROOT?>/admin/users">
                    <button class="mt-4 btn btn-lg btn-primary" type="button">Back</button>
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
                    <div class="form-control mb-2"><?= old_value('username', $row['username']) ?></div>
                    <?php if (!empty($errors['username'])): ?>
                        <div class="text-danger"><?= $errors['username'] ?></div>
                    <?php endif; ?>
                </div>
                <div class="form-floating">
                <div class="form-control mb-2"><?= old_value('email', $row['email']) ?></div>
                    <?php if (!empty($errors['email'])): ?>
                        <div class="text-danger"><?= $errors['email'] ?></div>
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
        <button class="btn btn-primary">Add New</button>
    </a>
    

    <div class="table-responsive">
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

                $query = "select * from users order by id desc";
                $rows = query($query);

            ?>

            <?php if(!empty($rows)):?>
                <?php foreach($rows as $row):?>
                <tr>
                    <td><?=$row['id']?></td>
                    <td><?=esc($row['username'])?></td>
                    <td><?=$row['email']?></td>
                    <td><?=$row['role']?></td>
                    <td>Image</td>
                    <td><?=date("jS M, Y",strtotime($row['date']))?></td>
                    <td>
                        <a href="<?=ROOT?>/admin/users/edit/<?=$row['id']?>">
                            <button class="btn btn-warning text-white btn-sm"><i class="bi bi-pencil-square"></i></button>
                        </a>
                        <a href="<?=ROOT?>/admin/users/delete/<?=$row['id']?>">
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button>
                        </a>
                    </td>
                </tr>
                <?php endforeach;?>
            <?php endif;?>
        </table>
    </div>

<?php endif;?>