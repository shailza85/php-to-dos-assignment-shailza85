<?php
// Before we can access storage on our server related to a particular client session,
// we need to announce we will use session using: session_start()
session_start();


function showToDoActive () { //Function to send the values to To Do Active section with list and checkbox added
 
  if ( isset( $_SESSION['todo-active'] ) && !empty( $_SESSION['todo-active'] ) ) {
    ?>
      <ul>
        <?php foreach ( $_SESSION['todo-active'] as $todoItem ) : ?>
          <li>
          <input type="checkbox" name="chkTask" id="chkTask"><?php echo $todoItem; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php
  
  
  } ?>

 
 <h2>Debugging</h2>
 <?php
  echo '<pre>';
  var_dump( $_SESSION );
  echo '</pre>';

 
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
}
?>

