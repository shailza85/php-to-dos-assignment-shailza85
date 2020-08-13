<?php
include 'includes/todo-active.php';
//include 'includes/todo-complete.php';
global $title; // Try to avoid globals, as they are harder to troubleshoot and track through your application.
$title = 'PHP To Dos List'; // $GLOBALS['title'] = 'PHP Homepage';
include 'templates/header.php';
?>

<?php 
include 'to-Do.php';
showToDoActive(); // (Defined in calc-history.php)
?>
<h2>Completed to do list</h2>
<?php
//showToDoComplete();
include 'templates/footer.php';