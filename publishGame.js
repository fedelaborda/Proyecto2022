const dropArea = document.querySelector(".drop-area");
const dragArea = dropArea.querySelector("h2");
const button = dropArea.querySelector("button");
const input = dropArea.querySelector("#input-file");

button.addEventListener("click", (e) => {
  input.click();
});

input.addEventListener