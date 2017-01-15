<?php

class Controller
{
  private static $db;

  /*
  ** This function will create a new instance of a model
  ** return it and allow communication with the database
  */

  protected function model($model)
  {
    if (file_exists('../app/models/' . $model . '.php'))
    {
      require_once '../app/models/' . $model . '.php';
      return new $model(self::$db);
    }
    return NULL;
  }

  /*
  ** This function will render a view, if it exists
  */

  protected function view($view, $data = [])
  {
    if (file_exists('../app/views/' . $view . '.php'))
    {
      require_once '../app/views/' . $view . '.php';
    }
  }

  public static function getDB()
  {
    return self::$db;
  }

  public static function setDB($db)
  {
    if (isset($db))
      self::$db = $db;
  }
}
