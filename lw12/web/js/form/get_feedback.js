const formID = "feedback-form";
const handler = "feedbacks.php";

document.getElementById(formID).onsubmit = async function (event) {
  this.submit.disabled = true;
  event.preventDefault();
  const formData = new FormData(this);
  let response = await submit(formData);
  hideElementById("list");
  clearErrors();
  selectingAction(response);
  this.submit.disabled = "";
};

async function selectingAction(response) {
  const jsonResponse = await response.json();
  switch (response.status) {
    case 200:
      fillingList(jsonResponse);
      document.getElementById(formID).reset();
      break;
    case 422:
      displayingErrors(jsonResponse);
      break;
    default:
      alert("Произошла непредвиденная ошибка");
      break;
  }
}

function fillingList(data) {
  showElementById("list");
  document.getElementById("item-name").innerHTML = data.name;
  document.getElementById("item-email").innerHTML = data.email;
  document.getElementById("item-country").innerHTML = data.country;
  document.getElementById("item-gender").innerHTML = data.gender;
  document.getElementById("item-message").innerHTML = data.message;
}