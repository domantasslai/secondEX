<?php
class Comment{
  private $db;

  public function __construct(){
			$this->db = new Database;
		}

  public function getAllComments(){
      $this->db->query("SELECT * FROM message ORDER BY post_date DESC");
      $results = $this->db->resultSet();

			return $results;
  }

  public function getComment($id){
    $this->db->query("SELECT * FROM message where id = :id");
    $this->db->bind(':id', $id);
    $row = $this->db->single();
    return $row;
  }

  public function create($data){
    $this->db->query("INSERT INTO message (user_name, email, message)
    VALUES (:user_name, :email, :message)");

    $this->db->bind(':user_name', $data['user_name']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':message', $data['message']);

    if ($this->db->execute()) {
      return true;
    }else {
      return false;
    }
  }

  public function deleteComment($id){
    $this->db->query("DELETE FROM message WHERE id=$id");

    if ($this->db->execute()) {
      return true;
    }else {
      return false;
    }
  }

  public function editComment($id, $data){
    $this->db->query("UPDATE message SET
    user_name = :user_name,
    email = :email,
    message = :message
    WHERE id = $id");

    $this->db->bind(':user_name', $data['user_name']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':message', $data['message']);

    if ($this->db->execute()) {
      return true;
    }else {
      return false;
    }
  }

  public function parseToJsonFile(){
    if (isset($_POST['json'])) {
      $this->db->query("SELECT * FROM `message` ORDER BY `post_date` DESC ");
      $results = $this->db->resultSet();
      $data=array($results);

      $fp = fopen('commentsRecords.json', 'w');

      if(!fwrite($fp, json_encode($data, JSON_UNESCAPED_UNICODE)))
      {
        redirect('index.php', 'Error : File Not Opened.', 'error');
      }
      else{
        redirect('index.php', 'Data Upload Successfully', 'success');
      }
      fclose($fp);
    }
  }
}
