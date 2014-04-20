<?php if(!isset($_REQUEST['ajax'])) { ?>
            </section>

            <a class="exit-off-canvas"></a>

            </div>
            <footer class="text-center">
                &copy;2014, Josh Austin
            </footer>
        </div>
    </div>
    

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.2.2/js/foundation/foundation.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.2.2/js/foundation/foundation.topbar.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.2.2/js/foundation/foundation.offcanvas.min.js"></script>
        <script src="assets/slick/slick.min.js"></script>
        <script>
            $(function(){ 
                
                function setupEvents() {
                    $('#headerLink').click(function(){
                        loadPage('index.php');
                    });

                    $('#homeLink').click(function(){
                        loadPage('index.php');
                    });

                    $('#projectLink').click(function(){
                        loadPage('projects.php');
                    });

                    $('#projectButton').click(function(){
                        loadPage('projects.php');
                    });

                    $('#aboutLink').click(function(){
                        loadPage('about.php');
                    });

                    $(document).foundation(); 

                    $('#myCarousel').slick({
                        autoplay: true,
                        arrows: false,
                        dots: true,
                        speed: 450
                    });
                }
                
                function loadPage(url) {
                    $('.main-section')
                        .css({'opacity' : '0'})
                        .load(url + '?ajax=yes',
                             function(){
                                 setupEvents();
                                })
                        .animate({'opacity' : '1'}, 'slow', 'swing');
                }
                
                setupEvents();
                
            });            
        </script>
</body>

</html>
<?php } ?>