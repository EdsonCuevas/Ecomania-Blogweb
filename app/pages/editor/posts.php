<?php if($action == 'add'):?>

<div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="col-md-12 mx-auto">
            <h1 class="h3 mb-3 fw-normal">Create post</h1>
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">Please fix the errors below</div>
            <?php endif; ?>

            <?php if(!empty($errors['image'])):?>
                    <div class="text-danger"><?=$errors['image']?></div>
            <?php endif;?>

            <div class="my-2">
                
                <center>Cover Image:<br></center>
                <label class="d-block">
                    <img class="mx-auto d-block image-preview-edit" src="<?=get_image('')?>" style="cursor: pointer;width: 250px;height: 250px;object-fit: cover;">
                    <input onchange="display_image_edit(this.files[0])" type="file" name="image" class="d-none">
                </label>
                

                <script>
                    
                    function display_image_edit(file)
                    {
                        document.querySelector(".image-preview-edit").src = URL.createObjectURL(file);
                    }
                </script>
            </div>

            <div class="form-floating">
                <label for="floatingInput">Title</label>
                <?php if (!empty($errors['title'])): ?>
                    <div class="text-danger"><?= $errors['title'] ?></div>
                <?php endif; ?>
                <input value="<?= old_value('title') ?>" name="title" type="text" class="form-control mb-2" id="floatingInput" placeholder="Title content">
                
            </div>
            <?php if (!empty($errors['content'])): ?>
                    <div class="text-danger"><?= $errors['content'] ?></div>
                <?php endif; ?>
            <div>
                <textarea rows="8" id="floatingInput" name="content" placeholder="Post content" type="text" class="form-control mySummernote"><?=old_value('content')?></textarea>
                
            </div>

            <div class="form-floating my-3">
                <label for="floatingInput">Category</label>
                <select name="category_id" class="form-select">

                    <?php

                        $query = "select * from categories order by id desc";
                        $categories = query($query);

                    ?>
                    <option value="">Select</option>
                    <?php if(!empty($categories)):?>
                        <?php foreach($categories as $cat):?>
                            <option <?= old_select('category_id',$cat['id']) ?> value="<?=$cat['id']?>"><?=$cat['category']?></option>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </select>
                <?php if (!empty($errors['category_id'])): ?>
                    <div class="text-danger"><?= $errors['category_id'] ?></div>
                <?php endif; ?>
            </div>

            <a href="<?=ROOT?>/editor/posts">
                <button class="mt-4 btn btn-lg btn-danger" type="button">Back</button>
            </a>
            <button class="mt-4 btn btn-lg btn-primary float-end" type="submit">Create</button>
        </div>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $(".mySummernote").summernote({
            height: 400,
            placeholder: "Post content"
        });
        $('.dropdown-toggle').dropdown();
    });
</script>

<?php elseif($action == 'edit'):?>

<div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="col-md-12 mx-auto">
            <h1 class="h3 mb-3 fw-normal">Edit post</h1>
            <?php if(!empty($row)):?>
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">Please fix the errors below</div>
            <?php endif; ?>

            <div class="my-2">
                <center>Cover Image:<br></center>
                <label class="d-block">
                    <img class="mx-auto d-block image-preview-edit" src="<?=get_image($row['image'])?>" style="cursor: pointer; width: 250px; height: 250px; object-fit: cover;">
                    <input onchange="display_image_edit(this.files[0])" type="file" name="image" class="d-none">
                </label>

                <script>
                    function display_image_edit(file){
                        document.querySelector(".image-preview-edit").src = URL.createObjectURL(file);
                    }
                </script>
            </div>

            <div class="form-floating">
                <label for="floatingInput">Title</label>
                <?php if (!empty($errors['title'])): ?>
                    <div class="text-danger"><?= $errors['title'] ?></div>
                <?php endif; ?>
                <input value="<?= old_value('title', $row['title']) ?>" name="title" type="text" class="form-control mb-2" id="floatingInput" placeholder="Title content">
                
            </div>

            <?php if (!empty($errors['content'])): ?>
                <div class="text-danger"><?= $errors['content'] ?></div>
            <?php endif; ?>
            <div>
                <textarea id="floatingInput" name="content" type="text" class="form-control mySummernote"><?=old_value('content',add_root_to_images($row['content']))?></textarea>
            </div>

            <div class="form-floating my-3">
                <label for="floatingInput">Category</label>
                <select name="category_id" class="form-select">

                    <?php

                        $query = "select * from categories order by id desc";
                        $categories = query($query);

                    ?>
                    <option value="">Select</option>
                    <?php if(!empty($categories)):?>
                        <?php foreach($categories as $cat):?>
                            <option <?= old_select('category_id',$cat['id'],$row['category_id']) ?> value="<?=$cat['id']?>"><?=$cat['category']?></option>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </select>
                <?php if (!empty($errors['category_id'])): ?>
                    <div class="text-danger"><?= $errors['category_id'] ?></div>
                <?php endif; ?>
            </div>

            <a href="<?=ROOT?>/editor/posts">
                <button class="mt-4 btn btn-lg btn-danger" type="button">Back</button>
            </a>
            <button class="mt-4 btn btn-lg btn-primary float-end" type="submit">Save</button>
            <?php else: ?>

                <div class="alert alert-danger text-center">Record not found!</div>

            <?php endif; ?>
        </div>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $(".mySummernote").summernote({
            height: 400,
            placeholder: "Post content"
        });
        $('.dropdown-toggle').dropdown();
    });
</script>

<?php elseif($action == 'delete'):?>

<div class="container">
    <form method="post">
        <div class="col-md-6 mx-auto">
            <h1 class="h3 mb-3 fw-normal">Delete post</h1>
            <?php if(!empty($row)):?>
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">Please fix the errors below</div>
            <?php endif; ?>
            <div class="form-floating">
                <div class="form-control mb-2"><?= old_value('title', $row['title']) ?></div>
                <?php if (!empty($errors['title'])): ?>
                    <div class="text-danger"><?= $errors['title'] ?></div>
                <?php endif; ?>
            </div>
            <div class="form-floating">
            <div class="form-control mb-2"><?= old_value('slug', $row['slug']) ?></div>
                <?php if (!empty($errors['slug'])): ?>
                    <div class="text-danger"><?= $errors['slug'] ?></div>
                <?php endif; ?>
            </div>
            
            <a href="<?=ROOT?>/editor/posts">
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
<h4>Posts</h4>
<a href="<?=ROOT?>/editor/posts/add">
    <button class="btn btn-primary"><i class="fa fa-plus"></i></button>
</a>


<div class="table-responsive">
    <br>
    <table class="table">

        <tr>
            <th>Title</th>
            <th>Status</th>
            <th>Image</th>
            <th>Date</th>
            <th>Action</th>
        </tr>

        <?php
            $limit = 10;
            $offset = ($PAGE['page_number'] - 1) * $limit;

            $user = user('username');

            $query = "SELECT * FROM posts WHERE creator = '$user' ORDER BY id DESC LIMIT $limit OFFSET $offset";
            $rows = query($query);

        ?>

        <?php if(!empty($rows)):?>
            <?php foreach($rows as $row):?>
            <tr>
                <td><?=esc($row['title'])?></td>
                <td><?=$row['status']?></td>
                <td>
                    <img src="<?=get_image($row['image'])?>" style="width: 100px; height: 100px; object-fit: cover;">
                </td>
                <td><?=date("jS M, Y",strtotime($row['date']))?></td>
                <td>
                    <a href="<?=ROOT?>/editor/posts/edit/<?=$row['id']?>">
                        <button class="btn btn-warning"><i class="fa fa-edit"></i></button>
                    </a>
                    <a href="<?=ROOT?>/editor/posts/delete/<?=$row['id']?>">
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