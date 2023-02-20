let button = document.getElementById("myButton");

function onButtonClick() {
  var heading = document.getElementById("heading");
  heading.innerHTML = "Tombol ditekan";
}

function changeColor() {
  var colorInput = document.getElementById("colorInput");
  button.style.backgroundColor = colorInput.value;
}

function changeRadius() {
  var radiusInput = document.getElementById("radiusInput");
  button.style.borderRadius = radiusInput.value + "px";
}

// Fungsi untuk mengubah padding tombol
function changePadding() {
  var paddingInput = document.getElementById("paddingInput");
  button.style.padding = paddingInput.value + "px";
}