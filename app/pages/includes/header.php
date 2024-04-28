<style>
    @media screen and (max-width: 1023px) {
        .user {
            position: relative;
            /* Adjust positioning as needed */
            top: -380px;
            /* Adjust top position */
            left: -310px;
            /* Remove or adjust left position */
            right: 0px;
            /* Consider right-alignment on smaller screens */
        }

        .user img {
            width: 50px;
            /* Adjust width for smaller icons */
            height: 50px;
            /* Adjust height for smaller icons */
        }
    }

    @media screen and (min-width: 1024px) {
        .user {
            top: 10px;
            left: 15px;
        }
    }

    @media screen and (min-width: 760px) {
        .comments {
            margin: 100px;
        }
    }

    @media screen and (max-width: 760px) {
        .comments {
            margin: 10px;
        }
    }
</style>

<div class="tiny-8 small-8 medium-8 tiny-end" style="position:relative;">
    <nav>
        <input type="checkbox" id="nav" class="hidden" />
        <label for="nav" class="nav-open"></label>
        <div class="nav-container">
            <ul>
                <li><a href="<?=ROOT?>/home">Home</a></li>
                <li><a href="<?=ROOT?>/news">News</a></li>
                <li><a href="<?=ROOT?>/contact">Contact</a></li>
                <li><a href="<?=ROOT?>/about">About us</a></li>
                <?php if(!logged_in()):?>
                <a href="<?=ROOT?>/login" class="user" style="position: relative;">
                    <img src="<?=ROOT?>/../public/assets/imgs/user-icon.png" width="36" height="36">
                </a>
                <?php endif;?>

                <?php if(logged_in()):?>
                <a href="<?=ROOT?>/admin" class="user" style="position: relative;">
                    <img src="<?=get_image(user('image'))?>" width="36" height="36"
                        style="object-fit: cover; border-radius:30px;">
                </a>
                <?php endif;?>

            </ul>
        </div>
    </nav>
</div>