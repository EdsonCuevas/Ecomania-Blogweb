<h4>Users</h4>

<table class="table">

    <tr>
        <th>#</th>
        <th>Username</th>
        <th>Email</th>
        <th>Role</th>
        <th>Image</th>
        <th>Date</th>
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
        </tr>
        <?php endforeach;?>
    <?php endif;?>
</table>