async function submit(data) {
  const response = await fetch(handler, {
    method: "POST",
    body: data,
  });
  return response;
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

function clearErrors() {
  document.querySelectorAll(".error").forEach(element => {
    element.classList.toggle("error");
    document.querySelector(`#${element.id}~div`).remove();
  });
}

function hideElementById(id) {
  document.getElementById(id).classList.add("hide");
}

function showElementById(id, timeout = 0) {
  setTimeout(function () {
    document.getElementById(id).classList.remove("hide");
  }, timeout);
}