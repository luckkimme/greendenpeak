function setHiddenIdField(elementId, id) {
    const idField = document.getElementById(elementId);
    idField.value = id;
}

function previewImage(fileInput, elementId) {
    const imgTag = document.getElementById(elementId);
    const [file] = fileInput.files;
    if(file) {
        imgTag.src = URL.createObjectURL(file);
        imgTag.hidden = false;
    }
    else imgTag.hidden = true;
}

async function deleteCarouselItem(carouselId, elementId) {
    if(carouselId) {
        const formData = new FormData();
        formData.append('method', 'delete_carousel');
        formData.append('carousel_id', carouselId);
        const response = await fetch( '/greendenpeak/includes/api/product-details.php',
            {
                method: 'POST',
                body: formData
            }
        );
        console.log(response.text());
    }
    
    document.getElementById(elementId).remove();
}

function addCarouselItem(carouselDivId) {
    const btnId = Date.now();
    const imgId = btnId + Math.floor(Math.random() * 100)
    const carouselDiv = document.getElementById(carouselDivId);
    const carouselItem = document.createElement('div');
    carouselItem.setAttribute('id', btnId);
    carouselItem.innerHTML = `
        <p class="modal-titles text-center">Carousel Item</p>
        <div class="modal-body">
            <div class="form-floating">
                <input class="form-control" id="Carousel Item Title" placeholder="Carousel Item Title" name="carousel_title[]" required/>
                <label for="Carousel Item Title">Carousel Item Title</label>
            </div>
        </div>
        <div class="modal-body">
            <div class="form-floating">
                <input class="form-control" id="Carousel Description" placeholder="Carousel Description" name="carousel_desc[]" required/>
                <label for="Carousel Description">Carousel Description</label>
            </div>
        </div>
        <p class="modal-titles text-center">Select a new Photo</p>
        <div class="input-group modal-body">
            <input type="file" class="form-control" id="inputGroupFile" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="Select a new Picture" onchange="previewImage(this, ${imgId})" name="carousel_img[]">
            <img id="${imgId}" src="" class="w-100" hidden/>
        </div>
        <div class="input-group modal-body">
            <button type="button" class="btn btn-secondary btn-sm" onclick="deleteCarouselItem(null, '${btnId}')">Delete Item</button>
        </div>
        <hr>
    `;
    carouselDiv.appendChild(carouselItem);
}

