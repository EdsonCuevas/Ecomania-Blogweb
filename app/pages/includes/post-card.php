<div class="col-md-4">
    <div class="card mb-3">
        <a href="<?=ROOT?>/post/<?=$row['slug']?>">
            <img src="<?=get_image($row['image'])?>" class="card-img-top" width="200" height="250" style="object-fit:cover;">
        </a>
        <div class="card-body">
        <strong class="d-inline-block mb-2 text-primary"><?=esc($row['category'] ?? 'Unknown')?></strong>
        <a href="<?=ROOT?>/post/<?=$row['slug']?>">
            <h5 class="card-title"><?=esc($row['title'])?></h5>
        </a>
        <div class="mb-2 text-muted"><?=date("jS M, Y",strtotime($row['date']))?></div>
        <p class="card-text"><?=esc(substr($row['content'], 0, 200))?></p>
        <a href="<?=ROOT?>/post/<?=$row['slug']?>" class="btn btn-success">Continue reading</a>
        </div>
    </div>
</div>