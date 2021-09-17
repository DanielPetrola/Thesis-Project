<?php
	session_start();
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
      <div style="position:absolute;left:1%; bottom:1%;">
			<button class="btn btn-white btn-sm" onclick="location.href='records-p1.php'">Back</button>
			<!-- top of body --></div>
			<div class="white-top center">
				<span class="body-title"><i class="maroon fa fa-users"></i> CREATE STUDENT RECORD</span>
			</div>
			
			<!-- table container -->
			<div class="maroon-div-2 center">

				<!-- form -->
				<div class="">
          <form class="" method="post"  action="../includes/records.inc.php" name="registration">
            <div class="form-group">
              <div style="position: absolute; top: 2%; left: 2%; width: 45%;">
	            <input class="form-control form-control-sm" type="tel" pattern="(0,9){2}-(0,9){4}-(0,9){3}" id="idnumber" name="idnumber" placeholder="ID Number" required>
              <input class="form-control form-control-sm" type="text" id="lastname" name="lastname" placeholder="Last Name" required>
              <input class="form-control form-control-sm" type="text" id="firstname" name="firstname" placeholder="First Name" required>
              <input class="form-control form-control-sm" type="text" id="middleinitial" name="middleinitial" placeholder="Middle Initial" required> 
          	  <select class="form-control " type="radio" id="course" name="course" placeholder="Course" required>
                <option class="form-control " value="" disabled selected>Course</option>
          		  <option class="form-control " value="Aeronautical Engineering">Aeronautical Engineering</option>
          		  <option class="form-control " value="Civil Engineering">Civil Engineering</option>
          		  <option class="form-control " value="Computer Engineering">Computer Engineering</option>
          		  <option class="form-control " value="Electrical Engineering">Electrical Engineering</option>
          		  <option class="form-control " value="Electronics Engineering">Electronics Engineering</option>
          		  <option class="form-control " value="Industrial Engineering">Industrial Engineering</option>
          		  <option class="form-control " value="Marine Engineering">Marine Engineering</option>
                    <option class="form-control " value="Mechanical Engineering">Mechanical Engineering</option>
                </select><br>
            	  <select class="form-control" type="radio" id="yearlevel" name="yearlevel" placeholder="Year Level" required>
                  <option class="form-control " value="" disabled selected>Year Level</option>
            		  <option class="form-control " value="First Year">First Year</option>
            		  <option class="form-control " value="Second Year">Second Year</option>
            		  <option class="form-control " value="Third Year">Third Year</option>
            		  <option class="form-control " value="Fourth Year">Fourth Year</option>
            		  <option class="form-control " value="Fifth Year">Fifth Year</option>
                </select><br>
                <select class="form-control" type="radio" id="age" name="age" placeholder="Age" required>
                  <option class="form-control " value="" disabled selected>Age</option>
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
                </select><br>
            	  <select class="form-control " type="radio" id="gender" name="gender" placeholder="Gender" required>
                  <option class="form-control " value="" disabled selected>Gender</option>
                  <option class="form-control " value="Male">Male</option>
                  <option class="form-control " value="Female">Female</option>
                </select><br>
              </div>
              <div style="position: absolute;top: 3%; left: 50%; width: 48%;">
                <select class="form-control " type="radio" id="civilstatus" name="civilstatus" placeholder="Civil Status" required>
                  <option class="form-control " value="" disabled selected>Civil Status</option>
                  <option class="form-control " value="Single">Single</option>
                  <option class="form-control " value="Married">Married</option>
                  <option class="form-control " value="Divorced">Divorced</option>
                  <option class="form-control " value="Separated">Separated</option>
                  <option class="form-control " value="Widowed">Widowed</option>
                </select>
                <input class="form-control form-control-sm" type="text" id="citizenship" name="citizenship" placeholder="Citizenship" required>
            	  <input class="form-control form-control-sm" type="text" id="religion" name="religion" placeholder="Religion" required>
                <small>BIRTHDAY</small>
                <input class="form-control" type="date" id="birthday" name="birthday" placeholder="Birthday" required><br>
                <input class="form-control" type="tel" pattern="[0,9]{2}[0-9]{9}" id="contact" name="contact" placeholder="Contact (09xxxxxxxxx)" required>
                <input class="form-control form-control-sm" type="text" id="address" name="address" placeholder="Address" required>
                <input class="form-control form-control-sm" type="text" id="scholarship" name="scholarship" placeholder="Scholarship">
                <input class="btn btn-success" type="submit" onclick="return confirm('Are you sure to save changes?')" name="submit" value="Create">
              </div>
              </div>
            </form> 
	        </div> 
        </div>

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