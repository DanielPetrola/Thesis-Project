 <?php 
 include 'dbh.inc.php';
 $id = $_POST['idnum'];
$year = $_POST['year'];
$sem = $_POST['sem1'];
 $del = mysqli_query($conn,"DELETE FROM crecords1 WHERE id='$id' AND sy='$year' AND sem='$sem'");
                
                  if($del)
                  {
                      mysqli_close($conn);// Close connection]
                      echo "<script type='text/javascript'> document.location ='../counseling/counseling-p1-a.php'; </script>"; // redirects to all records page
                      exit;
                  }    
                ?>