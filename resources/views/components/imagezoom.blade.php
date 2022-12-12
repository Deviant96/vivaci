{{-- Bootstrap modal to use for zooming image when clicked --}}
<div class="modal fade" id="zoomModal" aria-hidden="true" aria-labelledby="zoomModalLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="btn-close-container">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <img class="modal-content" id="img01">
        </div>
    </div>
</div>
<script>
    const zoomImg = document.querySelectorAll('main section img');
    const modalImg = document.getElementById("img01");

    zoomImg.forEach(element => {
        element.dataset.bsToggle = 'modal';
        element.dataset.bsTarget = '#zoomModal';
        element.addEventListener('click', event => {
            modalImg.src = element.src;
        })
        element.style.cursor = "pointer";
    });
</script>
