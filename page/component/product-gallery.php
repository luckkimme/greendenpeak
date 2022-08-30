<div class="container py-3">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-prod-img-tab" data-bs-toggle="tab" data-bs-target="#nav-prod-img" type="button" role="tab" aria-controls="nav-prod-img" aria-selected="true">Images</button>
            <button class="nav-link" id="nav-prod-vid-tab" data-bs-toggle="tab" data-bs-target="#nav-prod-vid" type="button" role="tab" aria-controls="nav-prod-vid" aria-selected="false">Videos</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-prod-img" role="tabpanel" aria-labelledby="nav-prod-img-tab">
            <div class="container row row-cols-2 row-cols-md-4 g-4 py-3">
                <?php 
                    $img = "";
                    if($product_img) {
                        foreach($product_img as $showPhoto) {
                            $img .= '<button type="button" class="btn col btnImgID" data-bs-toggle="modal" data-bs-target="#showImg" value="' . $showPhoto['img_name'] . '*' . $showPhoto['img_desc'] . '+' . $showPhoto['img_src'] . ';">';
                            $img .= '<img src="' . $showPhoto['img_src'] . '" height="150px" class="w-100">';
                            $img .= '</button>';
                        }
                        
                        echo $img;  
                    } else {
                        echo "<h6 class='mt-3 mb-3'>There are no images to show.</h6>";
                    }
                ?>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-prod-vid" role="tabpanel" aria-labelledby="nav-prod-vid-tab">
            <div class="container row row-cols-2 row-cols-md-4 g-4 py-3">
                <?php 
                    $vid = "";
                    if($product_vid) {
                        //var_dump($product_vid);
                        foreach($product_vid as $showVid) {
                            $vid .= '<button type="button" class="btn col btnVidID" data-bs-toggle="modal" data-bs-target="#showVid" value="' . $showVid['product_vid_name'] . '*' . $showVid['product_vid_desc'] . '+' . $showVid['product_vid_src'] . ';">';
                            $vid .= '<iframe class="w-100" height="150px" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen';
                            $vid .= ' src="' . $showVid['product_vid_src'] . '">';
                            $vid .= '</iframe>';
                            $vid .= '</button>';
                        }
                        echo $vid;
                    } else {
                        echo "<h6 class='mt-3 mb-3'>There are no videos to show.</h6>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="showImg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="showImgLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showImgLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="" id="showImgSrc" class="w-100">
                <p id="showImgDesc"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="showVid" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="showVidLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showVidLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe id="showVidSrc" class="w-100" height="315" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                    src="">
                </iframe>
                <p id="showVidDesc"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>