
function mover(direcao) {
  let thanosX = parseInt(document.getElementById("thanos_x").value);
  let thanosY = parseInt(document.getElementById("thanos_y").value);

  switch (direcao) {
    case "U": 
      thanosY -= 1;
      break;
    case "D": 
      thanosY += 1;
      break;
    case "L": 
      thanosX -= 1;
      break;
    case "R": 
      thanosX += 1;
      break;
  }

  let colunas = 5;
  let linhas = 5;
  if (thanosX >= 0  && thanosX < colunas && thanosY >= 0 && thanosY < linhas) {
    document.getElementById("thanos_x").value = thanosX;
    document.getElementById("thanos_y").value = thanosY;
    document.getElementById("form_posicao").submit();
  } else {
    alert("Movimento inválido!");
  }
}