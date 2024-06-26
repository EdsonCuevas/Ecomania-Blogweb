<footer class="site_footer" style="height: 100px; margin-top: 150px;">
    <div class="site_footer_inner">
        <p>
            Designed, built, and maintained by <a href="https://github.com/EdsonCuevas/Ecomania-Blogweb/graphs/contributors" target="_blank">Team 4</a> © 2024.<br>
            <br>
        </p>
        <p><a href="<?=ROOT?>/contact">Contact</a> | <a href="<?=ROOT?>/news">News</a> | <a href="<?=ROOT?>/privacy">Privacy & Terms</a> | <a href="<?=ROOT?>/about">About</a></p>
        <br>
        <div id="google_translate_element"></div>
        <div id="co2Badge"></div>

        <script src="/assets/js/badge.js"></script>

        <script>
        const myCo2Badge = new Badge({
            target: '#co2Badge',
            key: '425e5e5a59100505494518044548594f585c4f580559435e4f05155f584617494518044548594f585c4f58066b01061a041a1d4d0a696518055c434f5d067e4243590a5d4f4859435e4f0a43590a49464f4b444f580a5e424b440a12130f'
        });
        myCo2Badge.init();
        </script>

        <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'en'},
                'google_translate_element'
            );
        } 
        </script>
        <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </div>
</footer>