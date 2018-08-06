<div class="menu-mobile-burger">
    <button class="burger-menu">
        <div class="lines">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </button>
</div>
<div class="title-mobile">
    <a class="title-menu" href="index.php"><span>Convivial</span></a>
</div>
<div class="social-mobile">
    <a href="#" class="social"><i class="fab fa-facebook-f fa-1x"></i></a>
    <a href="#" class="social"><i class="fab fa-instagram fa-1x"></i></a>
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