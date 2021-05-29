const formID = "contact-form";
const handler = "index.php";

document.getElementById(formID).onsubmit = async function (event) {
  this.submit.disabled = true;
  event.preventDefault();
  const formData = new FormData(this);
  let response = await submit(formData);
  hideElementById("notification");
  clearErrors();
  selectingAction(response);
  this.submit.disabled = "";
};

async function selectingAction(response) {
  switch (response.status) {
    case 201:
      showElementById("notification", 250);
      document.getElementById(formID).reset();
      break;
    case 422:
      const jsonResponse = await response.json();
      displayingErrors(jsonResponse);
      break;
    default:
      alert("Произошла непредвиденная ошибка");
      break;
  }
}