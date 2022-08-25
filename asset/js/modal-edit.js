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

    let isConfirmed = confirm('Are you sure you want to delete?');
    if(!isConfirmed) return;

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
        
    }
    
    document.getElementById(elementId).remove();
}

async function deleteAccessoryItem(accessoryId, elementId) {
    
    let isConfirmed = confirm('Are you sure you want to delete?');
    if(!isConfirmed) return;

    if(accessoryId) {
        const formData = new FormData();
        formData.append('method', 'delete_accessory');
        formData.append('accessory_id', accessoryId);
        const response = await fetch( '/greendenpeak/includes/api/product-details.php',
            {
                method: 'POST',
                body: formData
            }
        );
        
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

function addAccessoryItem(accessoryDivId) {
    const btnId = Date.now();
    const imgId = btnId + Math.floor(Math.random() * 100)
    const accessoryDiv = document.getElementById(accessoryDivId);
    const accessoryItem = document.createElement('div');
    accessoryItem.setAttribute('id', btnId);
    accessoryItem.innerHTML = `
        <p class="modal-titles text-center">Accessory Item</p>
        <div class="modal-body">
            <div class="form-floating">
                <input class="form-control" id="Accessory Item Title" placeholder="Accessory Item Title" name="accessory_title[]" required/>
                <label for="Accessory Item Title">Accessory Item Title</label>
            </div>
        </div>
        <div class="modal-body">
            <div class="form-floating">
                <input class="form-control" id="Accessory Description" placeholder="Accessory Description" name="accessory_desc[]" required/>
                <label for="Accessory Description">Accessory Description</label>
            </div>
        </div>
        <p class="modal-titles text-center">Select a new Photo</p>
        <div class="input-group modal-body">
            <input type="file" class="form-control" id="inputGroupFile" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="Select a new Picture" onchange="previewImage(this, ${imgId})" name="accessory_img[]">
            <img id="${imgId}" src="" class="w-100" hidden/>
        </div>
        <div class="input-group modal-body">
            <button type="button" class="btn btn-secondary btn-sm" onclick="deleteAccessoryItem(null, '${btnId}')">Delete Item</button>
        </div>
        <hr>
    `;
    accessoryDiv.appendChild(accessoryItem);
}

async function toggleUserManualDetails(manualSelect, manualFieldId, nameFieldId, filePId, fileFieldId, editId) {
    const manualField = document.getElementById(manualFieldId);
    const nameField = document.getElementById(nameFieldId);
    const fileP = document.getElementById(filePId);
    const fileField = document.getElementById(fileFieldId);
    const editField = document.getElementById(editId);
    const manualId = manualSelect.value;

    if(manualId == 0) {
        editField.classList.remove('show');
        return;
    } 
    
    const response = await fetch(`/greendenpeak/includes/api/product-details.php?method=get_manual&manual_id=${manualId}`);
    const data = await response.json();

    if(data) {
        manualField.value = manualId;
        nameField.value = data['product_manual_name'];
        fileP.innerText = data['product_manual_src'];
        fileField.value = data['product_manual_src'];
        editField.classList.add('show');
    }
}

function toggleBootstrapWindow(tagId){
    const chosenElement = document.getElementById(tagId);
    chosenElement.classList.toggle('show');
}

async function deleteCategory(categoryId, tagId){

    if(!confirm('Are you sure you want to delete this category?')) return;

    const formData = new FormData();
    formData.append('method', 'delete_category')
    formData.append('category_id', categoryId);
    await fetch('/greendenpeak/includes/api/other-info.php',{
        method: 'POST',
        body: formData
    });
    document.getElementById(tagId).remove();

}

function setTextFieldById(tagId, value) {
    const textField = document.getElementById(tagId);
    textField.value = value;
}

async function setOtherInfoItemEdit(itemId) {
    const itemIdField = document.getElementById('item-id-field');
    const titleField = document.getElementById('edit-other-info-title');
    const subtitleField = document.getElementById('edit-other-info-subtitle');
    const descField = document.getElementById('edit-other-info-desc');
    const descListField = document.getElementById('edit-other-info-desc-list');
    const imgField = document.getElementById('edit-other-info-img');
    const imgTag = document.getElementById('edit-other-info-img-preview');

    const response = await fetch(`/greendenpeak/includes/api/other-info.php?method=get_item&item_id=${itemId}`);
    const data = await response.json();

    itemIdField.value = itemId;
    titleField.value = data['product_info_item_title'];
    subtitleField.value = data['product_info_item_subtitle'];
    descField.value = data['product_other_info_desc'];
    descListField.value = data['product_other_info_desc_list'];
    imgField.value = data['product_info_item_img'];
    imgTag.src = data['product_info_item_img'];
    imgTag.hidden = false;
}