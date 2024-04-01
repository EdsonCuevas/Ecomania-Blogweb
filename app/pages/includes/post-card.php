<div class="col-md-4">
    <div class="card mb-3">
        <img src="<?=get_image($row['image'])?>" class="card-img-top" width="200" height="250" style="object-fit:cover;">
        <div class="card-body">
        <strong class="d-inline-block mb-2 text-primary"><?=esc($row['category'] ?? 'Unknown')?></strong>
        <h5 class="card-title"><?=esc($row['title'])?></h5>
        <p class="card-text"><?=esc(substr($row['content'], 0, 200))?></p>
        <div class="mb-2 text-muted"><?=date("jS M, Y",strtotime($row['date']))?></div>
        <a href="#" class="btn btn-success">Go somewhere</a>
        </div>
    </div>
</div>