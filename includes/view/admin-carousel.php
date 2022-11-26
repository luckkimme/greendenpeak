<?php
function create_carousel_item(string $img_name, string $img_src, int $img_id) {
    return <<< EOL
    <div class="col">
        <div class="card h-100" id="div-carousel">
            <img src="$img_src" id="img-src">
            <div class="card-body">
                <h5 class="card-title" id="txt-img-name">$img_name</h5>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between">
                <button class="btn btn-danger mb-3" type="button" data-bs-toggle="modal" data-bs-target="#deleteCarouselImg" value="$img_id" onclick="setCarouselId($img_id, 'delete-carousel-img')">Delete</button>
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#editImg" aria-expanded="false" aria-controls="editImg" value="$img_id+$img_name~$img_src" onclick="setEditCarouselImageModal(this.value)">Edit Image</button> 
            </div>
        </div>
    </div>
    EOL;
}
?>