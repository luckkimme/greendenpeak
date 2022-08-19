function setHiddenIdField(elementId, id) {
    const idField = document.getElementById(elementId);
    idField.value = id;
}

function previewImage(fileInput, elementId) {
    const imgTag = document.getElementById(elementId);
    const [file] = fileInput.files;
    if(file) imgTag.src = URL.createObjectURL(file);
}