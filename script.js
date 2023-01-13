const uploadArchive = document.getElementById('upload-btn');



uploadArchive.addEventListener("click", uploadFile)

function uploadFile(e){
    let uploadNewFile = document.createElement(file)
    uploadNewFile.innerHTML = `<button type="button" onclick="uploadFile(event)" class="btn  btn-outline-secondary view-more-btn" data-bs-toggle="modal" data-bs-target="#uploadArchive"> `;
}
