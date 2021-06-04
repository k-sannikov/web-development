function kenny()
{
  const canvas = document.getElementById("kenny");
  const context = canvas.getContext("2d");

  // тело
  context.beginPath();
  context.moveTo(105, 200);
  context.quadraticCurveTo(90, 220, 88, 240);
  context.lineTo(104, 250);
  context.lineTo(104, 263);
  context.lineTo(113, 263);
  context.lineTo(113, 284);
  context.lineTo(216, 284);
  context.lineTo(216, 268);
  context.lineTo(225, 260);
  context.lineTo(240, 240);
  context.quadraticCurveTo(235, 220, 223, 200);
  context.fillStyle = "#f56600";
  context.fill();
  
  // полосы на теле
  context.beginPath();
  context.moveTo(110, 233);
  context.lineTo(106, 250);
  context.moveTo(217, 233);
  context.lineTo(219, 250);
  context.moveTo(165, 210);
  context.lineTo(165, 270);
  context.strokeStyle = "#38222d";
  context.stroke();


  // капюшон-тень
  context.beginPath();
  context.arc(164, 137, 89, 0, 2 * Math.PI);
  context.fillStyle = "#e75700";
  context.fill();

  // капюшон
  context.beginPath();
  context.arc(164, 136, 89, 0, 2 * Math.PI);
  context.fillStyle = "#f56500";
  context.fill();

  // шнурки на капюшоне
  context.beginPath();
  context.moveTo(160, 183);
  context.bezierCurveTo(164, 186, 158, 210, 165, 218);
  context.moveTo(160, 183);
  context.lineTo(150, 210);
  context.moveTo(160, 183);
  context.arc(160, 183, 2, 0, 2 * Math.PI);
  context.strokeStyle = "#602407";
  context.stroke();

  // голова
  context.beginPath();
  context.ellipse(160, 135, 35, 48, 0, 0, 2 * Math.PI);
  context.fillStyle = "#fff0c8";
  context.fill();

  // кромка капюшона
  context.beginPath();
  context.ellipse(162, 141, 63, 57, 0, 0, 2 * Math.PI);
  context.strokeStyle = "#602407";
  context.stroke();

  // левое веко
  context.beginPath();
  context.ellipse(140, 132, 23.5, 28, 0.16 * Math.PI, 0, 2 * Math.PI);
  context.fillStyle = "#6d634c";
  context.fill();

  // левый глаз
  context.beginPath();
  context.ellipse(140, 133, 24, 28, 0.16 * Math.PI, 0, 2 * Math.PI);
  context.fillStyle = "#fdfdfd";
  context.fill();

  // левый зрачек
  context.beginPath();
  context.arc(149, 131, 3, 0, 2 * Math.PI);
  context.fillStyle = "#1b1a18";
  context.fill();

  // правое веко
  context.beginPath();
  context.ellipse(190, 133, 23.5, 29, 0.8 * Math.PI, 0, 2 * Math.PI);
  context.fillStyle = "#787a6f";
  context.fill();

  // правый глаз
  context.beginPath();
  context.ellipse(190, 134, 24, 29, 0.8 * Math.PI, 1.17, 2.15 * Math.PI);
  context.fillStyle = "#fdfdfd";
  context.fill();

  // правый зрачек
  context.beginPath();
  context.arc(179, 132, 3, 0, 2 * Math.PI);
  context.fillStyle = "#1b1a18";
  context.fill();

  // мех на капюшоне
  context.beginPath();
  context.moveTo(172, 84);
  context.bezierCurveTo(108, 103, 123, 175, 160, 183);
  context.bezierCurveTo(98, 185, 74, 90, 172, 84);
  context.moveTo(160, 84);
  context.bezierCurveTo(210, 108, 205, 170, 160, 183);
  context.bezierCurveTo(238, 190, 236, 90, 160, 84);
  context.fillStyle = "#85491f";
  context.fill();
  context.strokeStyle = "#693718";
  context.stroke();

  // руки
  context.beginPath();
  context.arc(93, 252, 13, 0, 2 * Math.PI);
  context.fillStyle = "#85491f";
  context.fill();

  context.beginPath();
  context.arc(102, 248, 6, 0, 2 * Math.PI);
  context.strokeStyle = "#693718";
  context.lineWidth = 0.5;
  context.fill();
  context.stroke();

  context.beginPath();
  context.arc(233, 252, 13, 0, 2 * Math.PI);
  context.fillStyle = "#85491f";
  context.fill();

  context.beginPath();
  context.arc(223, 248, 6, 0, 2 * Math.PI);
  context.strokeStyle = "#693718";
  context.lineWidth = 0.5;
  context.fill();
  context.stroke();

  // ноги
  context.beginPath();
  context.moveTo(108, 285);
  context.lineTo(220, 285);
  context.lineWidth = 4.5;
  context.lineCap = "round";
  context.strokeStyle = "#0f0709";
  context.stroke();
}