<?php

require('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);

if ($method === 'delete') {

  parse_str(file_get_contents('php://input'), $input);
  $id = $input['id'] ?? null;
  $id = filter_var($id);

  if($id) {
    $sql = $pdo->prepare("DELETE FROM notes WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    $array['result'] = [
      'id' => $id
    ];
  } else {
    $array['error'] = 'ID não enviados';
  }

} else {
  $array['error'] = 'Método não permitido (apenas DELETE)';
}

require('../return.php');
