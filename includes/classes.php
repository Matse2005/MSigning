<?php
class Log
{
  function save()
  {
    // Save to database
    $sql = "INSERT INTO logs (id, name, action) VALUES (:id, :name, :action)";
    $stmt = $this->conn->prepare($sql);
    // The user id is not the primary key of the table, so we need to bind it manually.
    $stmt->bindParam(':id', $this->id);
    // The name is the current name of the user, so when the user is updated or deleted, you can still see who did it.
    $stmt->bindParam(':name', $this->name);
    // The action is the action that was performed, from updating or deleting something to adding something.
    $stmt->bindParam(':action', $this->action);
    $stmt->execute();
  }
}
