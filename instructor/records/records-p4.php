<?php


include('../includes/dbh.inc.php');
session_start();
{
if(isset($_POST['edit_btn_r'])){
        $id = $_POST['user_id_r'];

$ses_sql=mysqli_query($conn, "select * from records where id='$id'");

$row = mysqli_fetch_assoc($ses_sql);

?>



<!DOCTYPE html>
<html>
  <head>
    <title>UPHSD GUIDANCE | STUDENT RECORDS</title>
      <meta name="description" content="Guidance Office System">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="GROUP4">
        <link rel="shortcut icon" href="../../images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../scss/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>

       <body>
    <!-- navbar -->
    <?php include('../includes/navbar.php');?>

    <div class="center white-div2">
      <!-- <button class="back-btn" onclick="location.href='records-p1.php'">Back</button> -->
	  <form action="records-p3.php" method="post">
                          <input type="hidden" name="user_id_r" value="<?php echo htmlentities($row['id']);?>">
                          </form>
      <!-- top of body -->
      <div class="white-top center">
        <span class="body-title"><i class="maroon fa fa-users"></i> STUDENT RECORDS</span>
      </div>
      
      <!-- table container -->
      <div class="maroon-div-2 center">


          <span class="body-title-m">EDIT STUDENT RECORD</span>
        <!-- form -->
        <div class="">
          <form class="" method="post"  action="../includes/code.php" name="registration">
            <div class="form-group">
              <div style="position: absolute; top: 6%; left: 2%; width: 45%;">

              <small for="date" class="form-text text-muted" style="width: 50%;">Lastname</small>
              <input class="form-control form-control-sm" type="text" id="lastname" name="lastname"  value="<?php echo ucwords($row['lastname'])?>" required>
              <small for="date" class="form-text text-muted" style="width: 50%;">Firstname</small>
              <input class="form-control form-control-sm" type="text" id="firstname" name="firstname"  value="<?php echo ucwords($row['firstname'])?>" required>
              <small for="date" class="form-text text-muted" style="width: 50%;">Middle initial</small>
              <input class="form-control form-control-sm" type="text" id="middleinitial" name="middleinitial"  value="<?php echo ucwords($row['middleinitial'])?>" required>
              <small for="date" class="form-text text-muted" style="width: 50%;">Course</small>
              <select class="form-control " type="radio" id="course" name="course"  >
                <option class="form-control " vdisabled selected><?php echo $row['course']?></option>
                <option class="form-control " value="Aeronautical Engineering">Aeronautical Engineering</option>
                <option class="form-control " value="Civil Engineering">Civil Engineering</option>
                <option class="form-control " value="Computer Engineering">Computer Engineering</option>
                <option class="form-control " value="Electrical Engineering">Electrical Engineering</option>
                <option class="form-control " value="Electronics Engineering">Electronics Engineering</option>
                <option class="form-control " value="Industrial Engineering">Industrial Engineering</option>
                <option class="form-control " value="Marine Engineering">Marine Engineering</option>
                    <option class="form-control " value="Mechanical Engineering">Mechanical Engineering</option>
                </select>
              <small for="date" class="form-text text-muted" style="width: 50%;">Year level</small>
                <select class="form-control " type="radio" id="yearlevel" name="yearlevel" placeholder="Year Level" required>
                  <option class="form-control " vdisabled selected><?php echo $row['yearlevel']?></option>
                  <option class="form-control " value="First Year">First Year</option>
                  <option class="form-control " value="Second Year">Second Year</option>
                  <option class="form-control " value="Third Year">Third Year</option>
                  <option class="form-control " value="Fourth Year">Fourth Year</option>
                  <option class="form-control " value="Fifth Year">Fifth Year</option>
                </select>
                <small for="date" class="form-text text-muted" style="width: 50%;">Age</small>
                <select class="form-control " type="radio" id="age" name="age" placeholder="Age" required>
                  <option class="form-control " vdisabled selected><?php echo $row['age']?></option>
                  <option class="form-control " value="18">18</option>
                  <option class="form-control " value="19">19</option>
                  <option class="form-control " value="20">20</option>
                  <option class="form-control " value="22">21</option>
                  <option class="form-control " value="22">22</option>
                  <option class="form-control " value="23">23</option>
                  <option class="form-control " value="24">24</option>
                  <option class="form-control " value="25">25</option>
                  <option class="form-control " value="26">26</option>
                  <option class="form-control " value="27">27</option>
                  <option class="form-control " value="28">28</option>
                  <option class="form-control " value="29">29</option>
                  <option class="form-control " value="30">30</option>
                  <option class="form-control " value="31">31</option>
                  <option class="form-control " value="32">32</option>
                  <option class="form-control " value="33">33</option>
                  <option class="form-control " value="34">34</option>
                  <option class="form-control " value="35">35</option>
                  <option class="form-control " value="36">36</option>
                  <option class="form-control " value="37">37</option>
                  <option class="form-control " value="38">38</option>
                  <option class="form-control " value="39">39</option>
                  <option class="form-control " value="40">40</option>
                  <option class="form-control " value="41">41</option>
                  <option class="form-control " value="42">42</option>
                  <option class="form-control " value="43">43</option>
                  <option class="form-control " value="44">44</option>
                  <option class="form-control " value="45">45</option>
                  <option class="form-control " value="46">46</option>
                  <option class="form-control " value="47">47</option>
                  <option class="form-control " value="48">48</option>
                  <option class="form-control " value="49">49</option>
                  <option class="form-control " value="50">50</option>
                  <option class="form-control " value="51">51</option>
                  <option class="form-control " value="52">52</option>
                  <option class="form-control " value="53">53</option>
                  <option class="form-control " value="54">54</option>
                  <option class="form-control " value="55">55</option>
                  <option class="form-control " value="56">56</option>
                  <option class="form-control " value="57">57</option>
                  <option class="form-control " value="58">58</option>
                  <option class="form-control " value="59">59</option>
                  <option class="form-control " value="60">60</option>
                  <option class="form-control " value="61">61</option>
                  <option class="form-control " value="62">62</option>
                  <option class="form-control " value="63">63</option>
                  <option class="form-control " value="64">64</option>
                  <option class="form-control " value="65">65</option>
                  <option class="form-control " value="66">66</option>
                  <option class="form-control " value="67">67</option>
                  <option class="form-control " value="68">68</option>
                  <option class="form-control " value="69">69</option>
                  <option class="form-control " value="70">70</option>
                  <option class="form-control " value="71">71</option>
                  <option class="form-control " value="72">72</option>
                  <option class="form-control " value="73">73</option>
                  <option class="form-control " value="74">74</option>
                  <option class="form-control " value="75">75</option>
                  <option class="form-control " value="76">76</option>
                  <option class="form-control " value="77">77</option>
                  <option class="form-control " value="78">78</option>
                  <option class="form-control " value="79">79</option>
                  <option class="form-control " value="80">80</option>
                </select>
              <small for="date" class="form-text text-muted" style="width: 50%;">Gender</small>
                <select class="form-control " type="radio" id="gender" name="gender" placeholder="Gender" required>
                  <option class="form-control " vdisabled selected><?php echo $row['gender']?></option>
                  <option class="form-control " value="Male">Male</option>
                  <option class="form-control " value="Female">Female</option>
                </select>
              </div>
              <div style="position: absolute;top: 7%; left: 50%; width: 48%;">
              <small for="date" class="form-text text-muted" style="width: 50%;">Civil status</small>
                <select class="form-control " type="radio" id="civilstatus" name="civilstatus">
                  <option class="form-control " vdisabled selected><?php echo $row['civilstatus']?></option>
                  <option class="form-control " value="Single">Single</option>
                  <option class="form-control " value="Married">Married</option>
                  <option class="form-control " value="Divorced">Divorced</option>
                  <option class="form-control " value="Separated">Separated</option>
                  <option class="form-control " value="Widowed">Widowed</option>
                </select>
              <small for="date" class="form-text text-muted" style="width: 50%;">Citizenship</small>
                <input class="form-control form-control-sm" type="text" id="citizenship" name="citizenship"  value="<?php echo $row['citizenship']?>" required>
              <small for="date" class="form-text text-muted" style="width: 50%;">Religion</small>
                <input class="form-control form-control-sm" type="text" id="religion" name="religion"  value="<?php echo $row['religion']?>" required>
              <small for="date" class="form-text text-muted" style="width: 50%;">Birthday</small>
                <input class="form-control " type="date" id="birthday" name="birthday"  value="<?php echo $row['birthday']?>" required>
              <small for="date" class="form-text text-muted" style="width: 50%;">Contact</small>
                <input class="form-control" type="tel" pattern="[0-9]{11}" id="contact" name="contact"  value="<?php echo $row['contact']?>" required>
              <small for="date" class="form-text text-muted" style="width: 50%;">Address</small>
                <input class="form-control form-control-sm" type="text" id="address" name="address"  value="<?php echo $row['address']?>" required>
              <small for="date" class="form-text text-muted" style="width: 50%;">Scholarship</small>
                <input class="form-control form-control-sm" type="text" id="scholarship" name="scholarship"  value="<?php echo $row['scholarship']?>" required><br>
                <input class="form-control form-control-sm" type="hidden" id="edit_id_r" name="edit_id_r" value="<?php echo $row['id']?>">
                <input class="btn btn-success" type="submit" onclick="return confirm('Are you sure to save changes?')" name="edit_r" value="Save Changes">
				
            </div>
            </form> 
              </div>  
          </div> 
        </div>
            <form action="records-p3.php" method="post">
	                      	<input type="hidden" name="user_idnum_r" value="<?php echo htmlentities($row['idnum']);?>">
	                      	<input type="hidden" name="user_id_r" value="<?php echo $id;?>">
                          <div class="back-btn">
	                      	<button type="submit" name="edit_btn_r" class="btn btn-light btn-sm">Cancel</button>
                        </div>
	                      	</form></div>

    <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
          echo "<p>Please fill out all fields.</p>";
        }
        else if ($_GET["error"] == "invalididnumber") {
          echo "<p>Please provide a valid id number.</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
          echo "<p>Something went wrong, please try again.</p>";
        }
      }
    ?>
      
      </div>

      <?php include('../includes/menu.php');?>
      <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "20%";
        }

        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
      </script>
      
  </body>
</html>
<?php
      
     }
} 
      ?>
