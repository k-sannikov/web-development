const period = 600;
const animation = "ease"; // linear, ease, ease-in, ease-out, ease-in-out
const mobileSize = 768; // px

document.getElementById("left").onclick = function () {
  leftShift(this);
};

document.getElementById("right").onclick = function () {
  rightShift(this);
};

document.querySelector(".cards").onclick = function (event) {
  if ((this.offsetWidth / 2 < event.pageX) && (screen.width < mobileSize)) {
    rightShift(this);
  } else if ((this.offsetWidth / 2 > event.pageX) && (screen.width < mobileSize)) {
    leftShift(this);
  }
}

function leftShift(button) {
  button.disabled = true;
  const sliderList = document.querySelector(".cards");
  const firstElement = sliderList.firstElementChild;
  const lastElementClone = sliderList.lastElementChild.cloneNode(true);
  const elementWidth = parseFloat(getComputedStyle(firstElement, true).width)
  const elementPaddingRight = parseFloat(getComputedStyle(firstElement, true).paddingRight);

  sliderList.style.pointerEvents = "none";

  lastElementClone.style.marginLeft = -(elementWidth + elementPaddingRight * 2) + "px";
  lastElementClone.style.transition = `margin-left ${period}ms ${animation}`;
  sliderList.insertBefore(lastElementClone, firstElement);
  setTimeout(function () {
    lastElementClone.style.marginLeft = 0;
  });

  setTimeout(function () {
    sliderList.lastElementChild.remove(true);
    document.getElementById("left").disabled = "";
    sliderList.style.pointerEvents = "auto";
  }, period);
}

function rightShift(button) {
  button.disabled = true;
  const sliderList = document.querySelector(".cards");
  const firstElement = sliderList.firstElementChild;
  const firstElementClone = firstElement.cloneNode(true);
  const elementWidth = parseFloat(getComputedStyle(firstElement, true).width)
  const elementPaddingRight = parseFloat(getComputedStyle(firstElement, true).paddingRight);

  sliderList.style.pointerEvents = "none";

  sliderList.style.transition = `margin-left ${period}ms ${animation}`;
  sliderList.style.marginLeft = -(elementWidth + elementPaddingRight * 2) + "px";


  setTimeout(function () {
    sliderList.append(firstElementClone);
    sliderList.firstElementChild.remove(true);
    sliderList.style.transition = "";
    sliderList.style.marginLeft = 0;
    document.getElementById("right").disabled = "";
    sliderList.style.pointerEvents = "auto";
  }, period);
}
