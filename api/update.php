<?php

require('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);

if ($method === 'put') {

  parse_str(file_get_contents('php://input'), $input);

  //verifica se os dados foram enviados
  $id = $input['id'] ?? null;
  $title = $input['title'] ?? null;
  $body = $input['body'] ?? null;

  //filtra os dados
  $id = filter_var($id);
  $title = filter_var($title);
  $body = filter_var($body);

  if($id && $title && $body) {

    $sql = $pdo->prepare("SELECT * FROM notes WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    //verifica se teve retorno
    if($sql->rowCount() > 0) {
      //atualiza os dados
      $sql = $pdo->prepare("UPDATE notes SET title = :title, body = :body WHERE id = :id");
      $sql->bindValue(':id', $id);
      $sql->bindValue(':title', $title);
      $sql->bindValue(':body', $body);
      $sql->execute();

      //retorna os dados atualizados
      $array['result'] = [
        'id' => $id,
        'title' => $title,
        'body' => $body
      ];
    } else {
      $array['error'] = 'ID inexistente';
    }
  } else {
    $array['error'] = 'Dados não enviados';
  }

} else {
  $array['error'] = 'Método não permitido (apenas PUT)';
}

require('../return.php');
