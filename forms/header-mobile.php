<div class="menu-mobile-burger">
    <button class="burger-menu" role="menubar" aria-label="menu" aria-expanded="false">
        <div class="lines">
            <span aria-label="Menu-span" aria-required="true"></span>
            <span aria-label="Menu-span" aria-required="true"></span>
            <span aria-label="Menu-span" aria-required="true"></span>
        </div>
    </button>
</div>
<div class="title-mobile">
    <a class="title-menu" href="index.php"><span>Convivial</span></a>
</div>
<div class="social-mobile">
    <a href="#" class="social"><i class="fab fa-facebook-f fa-1x" alt="facebook" title="facebook"></i></a>
    <a href="#" class="social"><i class="fab fa-instagram fa-1x" alt="instagram" title="instagram"></i></a>
</div>

<script>
    $(document).ready(function(){
        $('button.burger-menu').click( function(event){
        event.stopPropagation();
        $('.index-mobile').toggle("drop");
    });

    $(document).click( function(){
        $('.index-mobile').hide("drop");
    });
});
</script>