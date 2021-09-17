<?php

$connection = mysqli_connect("localhost", "root", "", "desproj");
session_start();

              


 					if(isset($_POST['delete_btn'])) // when click on Update button
              {
                  $id = $_POST['delete_id'];
                
                  $del = mysqli_query($connection,"DELETE FROM accounts WHERE id='$id'");
                
                  if($del)
                  {
                      mysqli_close($connection);// Close connection
                      header("location:../accounts/accounts-p1.php"); // redirects to all records page
                      exit;
                  }    
              }









              ?>