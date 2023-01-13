const uploadArchive = document.getElementById('upload-btn');
const uploadModal = document.getElementById('upload-modal');
const createFolder = document.getElementById('createFolder-btn');
const ppalContainer = document.getElementById('main-container');


uploadArchive.addEventListener("click", uploadFile)
uploadModal.addEventListener("click", uploadFile)
createFolder.addEventListener("click", createDirectory)


function uploadFile(e){
  if(uploadModal.classList.contains("d-none")) {
    uploadModal.classList.remove("d-none");
}else{
    uploadModal.classList.add("d-none");
} }

function createDirectory(e){
    fetch('./createFolder.php', {
        method: "GET",
      })
        .then((response) => response.json())
        .then((data) => {
            let newFolder = document.createElement('p')
            newFolder.innerText = data.path
            ppalContainer.appendChild(newFolder)
        })
        .catch((err) => console.log("Request: ", err));    
}
