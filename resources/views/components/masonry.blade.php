<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script>
    var elem = document.querySelector('.grid');
    var msnry = new Masonry(elem, {
        itemSelector: '.grid-item',
        percentPosition: true
    });
</script>

<script>
    msnry.layout() // Initialize masonry layout to prevent images overlapping
</script>