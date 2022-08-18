const dropArea = document.querySelector(".drop-area");
const dragArea = dropArea.querySelector("h2");
const button = dropArea.querySelector("button");
const input = dropArea.querySelector("#input-file");

button.addEventListener("click", (e) => {
  input.click();
});

input.addEventListener("change", (e) => {
  files = this.files;
  dropArea.classList.add("active");
  showFiles(files);
  dropArea.classList.remove("active");
});

dropArea.addEventListener("dragover", (e) => {
  e.preventDefault();
  files = e.dataTransfer.files;
  showFiles(files);
  dropArea.classList.add("active");
  dragText.textContent = "Suelta para subir los archivos";
});

dropArea.addEventListener("dragleave", (e) => {
  e.preventDefault();
  dropArea.classList.add("active");
  dragText.textContent = "Arrastra y suelta archivos";
});

dropArea.addEventListener("drop", (e) => {
  e.preventDefault();
  dropArea.classList.add("active");
  dragText.textContent = "Arrastra y suelta archivos";
});


function showFiles(files) {
  if(files.length == undefined){
    processFile(files);
  }
  else{
    for(const file of files){
      processFile(file);
    }
  }
}

function processFile(file){
  const docType = file.type;
  const validExtensions=["image/jpeg","image/jpg","image/png","image/gif"];
 }
  //if(validExtensions.includes(docType)){
     // archivo válido
  //}else{
     // no es un archivo válido
     //alert("No es un archivo válido");
  //}