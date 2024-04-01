<div class="col-md-4">
    <div class="card mb-3">
        <img src="<?=get_image($row['image'])?>" class="card-img-top" alt="...">
        <div class="card-body">
        <strong class="d-inline-block mb-2 text-primary"><?=esc($row['category'] ?? 'Unknown')?></strong>
        <h5 class="card-title"><?=esc($row['title'])?></h5>
        <p class="card-text"><?=esc(substr($row['content'], 0, 200))?></p>
        <a href="#" class="btn btn-success">Go somewhere</a>
        <div class="d-flex justify-content-end text-muted"><?=date("jS M, Y",strtotime($row['date']))?></div>
        </div>
    </div>
</div>