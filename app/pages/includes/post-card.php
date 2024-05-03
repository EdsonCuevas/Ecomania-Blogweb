<link rel="stylesheet" href="<?=ROOT?>/../public/assets/css/post-styles.css">

<div class="card">
    <a href="<?=ROOT?>/post/<?=$row['slug']?>">
        <img src="<?=get_image($row['image'])?>" class="card-img-top" width="200" height="250"
            style="object-fit:cover;">
    </a>
    <div class="card-content">
        <p style="color: black;">
            <?=esc($row['category'] ?? 'Unknown')?>
        </p>
        <a href="<?=ROOT?>/post/<?=$row['slug']?>">
            <h2 style="margin: 0px;">
                <?=esc($row['title'])?>
            </h2>
        </a>

        <p>
            By:
            <?=$row['creator']?>
        </p>

        <p>
            <?=date("jS M, Y",strtotime($row['date']))?>
        </p>
        <a href="<?=ROOT?>/post/<?=$row['slug']?>" class="btn normal">Read more</a>
    </div>
</div>