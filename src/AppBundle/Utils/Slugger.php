<?php

/**
 * Created by PhpStorm.
 * User: raymond
 * Date: 20/07/16
 * Time: 11:19 PM
 */
class Slugger
{
  public function slugify($string)
  {
    return preg_replace(
      '/[^a-z0-9]/', '-', strtolower(trim(strip_tags($string)))
    );
  }
}