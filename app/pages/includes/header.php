<div class="tiny-8 small-8 medium-8 tiny-end" style="position:relative;">
    <nav>
        <input type="checkbox" id="nav" class="hidden"/>
        <label for="nav" class="nav-open"></label>
        <div class="nav-container">
            <ul>
                <li><a href="<?=ROOT?>/home">Home</a></li>
                <li><a href="<?=ROOT?>/news">News</a></li>
                <li><a href="<?=ROOT?>/contact">Contact</a></li>
                <li><a href="<?=ROOT?>/about">About us</a></li>
                <?php if(!logged_in()):?>
                    <a href="<?=ROOT?>/login" style="position: relative; top: 10px; left: 20px;">
                        <img src="<?=ROOT?>/../public/assets/imgs/user-icon.png" style="" width="36" height="36">
                    </a>
                <?php endif;?>

                <?php if(logged_in()):?>
                    <a href="<?=ROOT?>/admin" style="position: relative; top: 15px; left: 20px;">
                        <img src="<?=get_image(user('image'))?>" style="object-fit: cover; border-radius:20px;" width="40" height="40">
                    </a>
                <?php endif;?>
                
            </ul>
        </div>
    </nav>
</div>