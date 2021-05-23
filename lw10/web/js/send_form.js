document.getElementById("contact-form").onsubmit = async function (event) {
  this.submit.disabled = true;
  event.preventDefault();
  const formData = new FormData(this);
  await submit(formData);
  this.submit.disabled = "";
};

async function submit(data) {
  const response = await fetch("index.php", {
    method: "POST",
    body: data,
  });
  const jsonResponse = await response.json();

  clearNotification();
  clearErrors();

  switch (response.status) {
    case 201:
      displayingNotification();
      break;
    case 422:
      displayingErrors(jsonResponse);
      break;
    default:
      alert("Произошла непредвиденная ошибка");
      break;
  }
}

function displayingErrors(jsonResponse) {
  let div = document.createElement("div");
  div.className = "form__text_error";
  for (let key in jsonResponse) {
    let currentDiv = div.cloneNode();
    currentDiv.innerHTML = jsonResponse[key];
    document.getElementById(key).after(currentDiv);
    document.getElementById(key).classList.toggle("error");
  }
}

function displayingNotification() {
  setTimeout(function () {
    document.querySelector(".form__info-box").classList.remove("hide");
  }, 250);
}

function clearErrors() {
  document.querySelectorAll(".error").forEach(element => {
    element.classList.toggle("error");
    document.querySelector(`#${element.id}~div`).remove();
  });
}

function clearNotification() {
  document.querySelector(".form__info-box").classList.add("hide");
}