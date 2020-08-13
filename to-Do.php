<?php
session_start(); //session started


global $title; // Try to avoid globals, as they are harder to troubleshoot and track through your application.
$title = 'PHP To Dos List'; // Alternate: $GLOBALS['title'] = 'PHP To Dos List';
include 'templates/header.php';
?>

  <h1><?php echo $title; ?></h1> 

  <?php

  $warnings ="";

  if(isset($_POST['newtask']) && !empty($_POST['newtask'])) {  //check if input field has value and not empty
      $newtask=$_POST['newtask'];
  }
  else {
    $warning ="Please enter a task"; //Display error if nothing entered by user
  }
  
  if ( isset( $newtask ) ) {
    // Push values to an array... 
    if ( !isset( $_SESSION['todo-active'] ) || empty( $_SESSION['todo-active'] ) ) {
      $_SESSION['todo-active'] = array();
    }
    array_push( // Add this result to the 'toDo-active' session array.
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

  
