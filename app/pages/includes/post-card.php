<style>
    .card-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .card {
        width: 325px;
        background-color: #f0f0f0;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
        margin: 20px;
    }

    .card img {
        width: 100%;
        height: 200px;
    }

    .card-content {
        padding: 16px;
    }

    .card-content h5 {
        font-size: 28px;
        margin-bottom: 8px;
        margin-top: 0px;
    }

    .card-content p {
        color: #666;
        font-size: 15px;
        line-height: 1.3;
    }

    .card-content .btn {
        display: inline-block;
        padding: 8px 16px;
        text-decoration: none;
        border-radius: 4px;
        margin-top: 16px;
        color: #fff;
    }
</style>


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
            <?=esc(substr($row['content'], 0, 200))?>
        </p>

        <p>
            <?=date("jS M, Y",strtotime($row['date']))?>
        </p>
        <a href="/contact/" class="btn normal">Read more</a>
    </div>
</div>