<?php
/**
 * 
 * CLASSE DE EXEMPLO
 * 
 */
class Produto
{
  protected \PDO $db;

  public function __construct($db)
  {
    $this->db = $db;
  }

  public function getProdutos()
  {
    try {

      $query = "SELECT id, descricao FROM tb_produtos";
      $stmt = $this->db->prepare($query);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result;
    } catch (\Throwable $e) {
      echo $e->getMessage();
    }
  }
}
