<?php
  namespace Migrations;
  use Core\Migration;

  class Migration1550023025 extends Migration {
    public function up() {
      $table = "product_images";
      $this->addColumn($table,'sort','int',['after'=>'url']);
      $this->addIndex($table,'sort');
    }
  }
