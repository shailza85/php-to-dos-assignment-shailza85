<?php
// Before we can access storage on our server related to a particular client session,
// we need to announce we will use session using: session_start()
session_start();
//session_unset();

function showToDoComplete () {
if ( isset( $_SESSION['todo-complete'] ) && !empty( $_SESSION['todo-complete'] ) ) {
    ?>
      <ul>
        <?php foreach ( $_SESSION['todo-complete'] as $todoItemComplete ) : ?>
          <li>
          <input type="checkbox" name="chkTask" id="chkTask"><?php echo $todoItemComplete; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php
  
  
  }
}
  