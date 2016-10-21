<?php

class simpleCMS{
  var $host;
  var $username;
  var $password;
  var $table;

  public function display_public() {

  }

  public function display_admin() { 
    return <<<ADMIN_FORM

    <form action="{$_SERVER['PHP_SELF']}" method="post">
      <label for="title">Title:</label>
      <input name="title" id="title" type="text" maxlength="150" />
      <label for="bodytext">Body text:</label>
      <textarea name="bodytext" id="bodytext"></textarea>
      <input type="submit" value="Create this entry!" />
    </form>
ADMIN_FORM;
  }

  public function write() {
    if ( $p['title'])
      $title = mysql_real_escape_string($p['title']);

    if ( $p['bodytext'])
      $bodytext = mysql_real_escape_string($p['bodytext']);

    if ( $title && $bodytext ){
      $created = time();

      $sql = "INSERT INTO testDB VALUES('$title','$bodytext','$created')";

      return mysql_query($sql);
      
    } else {
      return false;
    }
  }

  public function connect() {
    mysql_connect($this->host,$this->username,$this->password) or die("Could not connect. " . mysql_error());
    mysql_select_db($this->table) or die("Could not select DB. " . mysql_error());

    return $this->buildDB();
  }

  private function buildDB() {
    $sql = <<<MySQL_QUERY
      CREATE TABLE IF NOT EXISTS testDB (
        title VARCHAR(150),
        bodytext TEXT,
        created VARCHAR(100)
      )
MySQL_QUERY;

      return mysql_query($sql)
  }
}

 ?>
