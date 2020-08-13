<?php
session_start();


global $title; // Try to avoid globals, as they are harder to troubleshoot and track through your application.
$title = 'PHP To Dos List'; // $GLOBALS['title'] = 'PHP Homepage';
include 'templates/header.php';
?>

  <h1><?php echo $title; ?></h1> 

  <?php

  $warnings ="";

  if(isset($_POST['newtask']) && !empty($_POST['newtask'])) {
      $newtask=$_POST['newtask'];
  }
  else {
    $warning ="Please enter a task";
  }

  if ( isset( $newtask ) ) {
    // If we want to push to an array... it needs to be an array! Let's make sure it is the proper data-type if it isn't already defined.
    if ( !isset( $_SESSION['todo-active'] ) || empty( $_SESSION['todo-active'] ) ) {
      $_SESSION['todo-active'] = array();
    }
    array_push( // Add this result to the 'calc-history' session array.
      $_SESSION['todo-active'],
      "$newtask"
    );
  }

  ?>

  

  <h2>Add a To-Do</h2>
    <form action="index.php" method="POST">
    <?php if ( !empty( $warning ) ) : ?>
      <?php ?><p class="warning"><?php echo $warning; ?><p>
    <?php endif; ?><br/>
  <label for="newtask">Enter a new task:
  <input type="text" name="newtask" id="newtask">
  </label>

<input type="submit" value="Add To List">
<input type="reset" name="reset" id="reset" value="Reset">
<h2>Active To-Dos</h2>
  </form>

  
