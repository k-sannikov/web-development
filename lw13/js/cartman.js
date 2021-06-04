function cartman()
{
  const canvas = document.getElementById("сartman");
  const context = canvas.getContext("2d");

  // штаны
  context.beginPath();
  context.moveTo(55, 255);
  context.lineTo(65, 286);
  context.lineTo(256, 286);
  context.lineTo(266, 256);
  context.fillStyle = "#684027";
  context.fill();

  // ноги
  context.beginPath();
  context.moveTo(58, 286);
  context.lineTo(262, 286);
  context.lineTo(262, 284);
  context.quadraticCurveTo(210, 270, 160, 286);
  context.quadraticCurveTo(150, 270, 58, 282);
  context.fillStyle = "#24160b";
  context.fill();

  // тело
  context.beginPath();
  context.moveTo(70, 164);
  context.quadraticCurveTo(52, 170, 35, 200);
  context.lineTo(49, 253);
  context.bezierCurveTo(80, 285, 190, 278, 210, 265);
  context.bezierCurveTo(218, 258, 305, 290, 275, 195);
  context.lineTo(280, 190);
  context.bezierCurveTo(278, 190, 265, 163, 250, 165);
  context.fillStyle = "#ff2349";
  context.fill();

  // пуговицы
  context.beginPath();
  context.moveTo(166, 217);
  context.lineTo(166, 222);

  context.moveTo(168, 240);
  context.lineTo(168, 245);

  context.moveTo(167, 262);
  context.lineTo(167, 267);

  context.strokeStyle = "#38222d";
  context.lineWidth = 3;
  context.stroke();

  context.beginPath();
  context.moveTo(173, 215);
  context.lineTo(173, 275);
  context.strokeStyle = "#67202a";
  context.lineWidth = 0.5;
  context.stroke();

  // левая рука
  context.beginPath();
  context.moveTo(45, 196);
  context.quadraticCurveTo(25, 195, 27, 215);
  context.quadraticCurveTo(30, 229, 55, 232);
  context.bezierCurveTo(112, 228, 50, 193, 45, 196);
  context.fillStyle = "#ffe01d";
  context.fill();

  // правая рука
  context.beginPath();
  context.moveTo(270, 190);
  context.bezierCurveTo(258, 193, 257, 195, 252, 210);
  context.quadraticCurveTo(237, 225, 262, 223);
  context.quadraticCurveTo(275, 233, 285, 228);
  context.bezierCurveTo(295, 225, 300, 180, 270, 190);
  context.fillStyle = "#ffe01d";
  context.fill();

  // голова
  context.beginPath();
  context.ellipse(160, 135, 98, 80, 0, 0, 2 * Math.PI);
  context.fillStyle = "#fff0c8";
  context.fill();

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
  context.arc(149, 131, 2.5, 0, 2 * Math.PI);
  context.fillStyle = "#1b1a18";
  context.fill();

  // правое веко
  context.beginPath();
  context.ellipse(190, 133, 23.5, 29, 0.8 * Math.PI, 0, 2 * Math.PI);
  context.fillStyle = "#787a6f";
  context.fill();

  // правый глаз
  context.beginPath();
  context.ellipse(190, 134, 24, 29, 0.8 * Math.PI, 0.37 * Math.PI, 2.15 * Math.PI);
  context.fillStyle = "#fdfdfd";
  context.fill();

  // правый зрачек
  context.beginPath();
  context.arc(179, 132, 2.5, 0, 2 * Math.PI);
  context.fillStyle = "#1b1a18";
  context.fill();

  // рот
  context.beginPath();
  context.lineTo(147, 182);
  context.quadraticCurveTo(148, 178, 155, 178);
  context.lineTo(176, 179);
  context.quadraticCurveTo(178, 179, 179, 182);
  context.quadraticCurveTo(174, 190, 172, 196);
  context.quadraticCurveTo(166, 196, 156, 193);
  context.fillStyle = "#1b1a18";
  context.fill();

  // зубы
  context.beginPath();  
  context.moveTo(153, 182.5);
  context.lineTo(157, 182.5);
  context.moveTo(160, 183);
  context.lineTo(165, 183);
  context.moveTo(168, 183);
  context.lineTo(176, 183);
  context.lineCap = "round";
  context.lineWidth = 3;
  context.strokeStyle = "#fff";
  context.stroke();

  // подбородок
  context.beginPath();
  context.arc(164, 119, 80, 0.56 * Math.PI, 0.41 * Math.PI, true);
  context.strokeStyle = "#ae9368";
  context.lineWidth = 1.5;
  context.stroke();

  // второй подбородок
  context.beginPath();
  context.moveTo(85, 177);
  context.bezierCurveTo(115, 207, 185, 227, 240, 172);
  context.lineWidth = 1.8;
  context.strokeStyle = "#ab9065";
  context.stroke();

  // шапка
  context.beginPath();
  context.ellipse(160, 135, 99, 81, Math.PI, 0.02, Math.PI * 0.95);
  context.quadraticCurveTo(160, 75, 61, 135);
  context.fillStyle = "#00bac9";
  context.fill();

  context.beginPath();
  context.moveTo(60, 136);
  context.quadraticCurveTo(160, 80, 258, 123);
  context.lineTo(258, 117);
  context.quadraticCurveTo(160, 73, 60, 130);
  context.fillStyle = "#ffe01d";
  context.fill();

  // помпон
  context.beginPath();
  context.moveTo(145, 55);
  context.lineTo(145, 63);
  context.lineTo(150, 63);
  context.lineTo(156, 59);
  context.lineTo(155, 60);
  context.quadraticCurveTo(160, 68, 172, 60);
  context.quadraticCurveTo(178, 65, 185, 55);
  context.quadraticCurveTo(180, 50, 172, 49);
  context.quadraticCurveTo(165, 45, 158, 47);
  context.lineTo(145, 47);
  context.lineTo(140, 50);
  context.quadraticCurveTo(124, 52, 127, 60);
  context.lineTo(128, 62);
  context.lineTo(138, 63);
  context.fillStyle = "#ffe01d";
  context.fill();
}