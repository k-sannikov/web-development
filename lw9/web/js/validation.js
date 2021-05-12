document.getElementById('name').oninput = function () {
  checkLength(this, 255);
};
document.getElementById('email').oninput = function () {
  checkLength(this, 255);
};
document.getElementById('message').oninput = function () {
  checkLength(this, 2000);
};

function checkLength(field, maxLength) {
  if (field.value.length > maxLength) {
    document.getElementById('submit').disabled = true;
    field.classList.add('error');
  } else {
    document.getElementById('submit').disabled = "";
    field.classList.remove('error');
  }
}
