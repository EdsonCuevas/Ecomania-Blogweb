<center><h4>Statistics</h4></center>
<div class="row justify-content-center">
    <div class="m-1 col-md-4 bg-light rounded shadow border text-center">
        <a href="<?=ROOT?>/admin/users" style="color: black;">
            <h1><i class="nc-icon nc-badge"></i></h1>
            <div>
                Admins
            </div>
            <?php
                $query = "select count(id) as num from users where role = 'admin'";
                $res = query_row($query);
            ?>
            <h1><?=$res['num'] ?? 0?></h1>
        </a>
    </div>

    <div class="m-1 col-md-4 bg-light rounded shadow border text-center">
        <a href="<?=ROOT?>/admin/users" style="color: black;">
            <h1><i class="nc-icon nc-single-02"></i></h1>
            <div>
                Users
            </div>
            <?php
                $query = "select count(id) as num from users where role = 'user'";
                $res = query_row($query);
            ?>
            <h1><?=$res['num'] ?? 0?></h1>
        </a>
    </div>

    <div class="m-1 col-md-4 bg-light rounded shadow border text-center">
        <a href="<?=ROOT?>/admin/categories" style="color: black;">
            <h1><i class="nc-icon nc-tag-content"></i></h1>
            <div>
                Categories
            </div>
            <?php
                $query = "select count(id) as num from categories";
                $res = query_row($query);
            ?>
            <h1><?=$res['num'] ?? 0?></h1>
        </a>
    </div>

    <div class="m-1 col-md-4 bg-light rounded shadow border text-center">
        <a href="<?=ROOT?>/admin/posts" style="color: black;">
            <h1><i class="nc-icon nc-single-copy-04"></i></h1>
            <div>
                Posts
            </div>
            <?php
                $query = "select count(id) as num from posts";
                $res = query_row($query);
            ?>
            <h1><?=$res['num'] ?? 0?></h1>
        </a>
    </div>
</div>