<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
<script>
    var elem = document.querySelector('.grid');
    var msnry = new Masonry(elem, {
        itemSelector: '.grid-item',
        percentPosition: true
    });
</script>

<script>
    imagesLoaded('.grid', function() {
        msnry.layout() // Initialize masonry layout to prevent images overlapping
    });
</script>
