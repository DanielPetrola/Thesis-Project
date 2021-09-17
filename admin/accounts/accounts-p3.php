<?php


include('../includes/dbh.inc.php');
session_start();
{
if(isset($_POST['edit_btn'])){
        $id = $_POST['user_id'];

$ses_sql=mysqli_query($conn, "select * from accounts where id='$id'");

$row = mysqli_fetch_assoc($ses_sql);

?>



<!DOCTYPE html>
<html>
	<head>
		<title>UPHSD GUIDANCE | ACCOUNTS MANAGEMENT</title>
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
			<!-- <button class="back-btn" onclick="location.href='../accounts/accounts-p2.php'">Back</button> -->
			 <div style="
	position: absolute;
	left: 1%;
	bottom: 1%;">
			<form action="accounts-p2.php" method="post">
                          <input type="hidden" name="user_id" value="<?php echo htmlentities($row['id']);?>">
                          <button type="submit" name="edit_btn" class="btn btn-light btn-sm">Back</button>
                          </form></div>
			<!-- top of body -->
			<div class="white-top center">
				<span class="body-title"><i class="maroon fa fa-users"></i> ACCOUNTS MANAGEMENT</span>
			</div>

     
			<!-- table container -->
			<div class="maroon-div-2 center">
				<span class="body-title-m">EDIT ACCOUNT</span>
  			<!-- form -->
				<div class="">
          <form class="" method="post" action="../includes/code.php" name="edit">
            <div style="position: absolute; top: 10%; width: 45%; left: 2%;">
            <div class="form-group">
              <input class="form-control form-control-sm" type="hidden" id="edit_id" name="edit_id" value="<?php echo $row['id']?>" required readonly>
            </div><div class="form-group">
              <small id="bday" class="form-text text-muted">ID number</small>
              <input class="form-control form-control-sm" type="text" id="edit_id" name="edit_id" value="<?php echo $row['idnum']?>" required >
            </div>
            <div class="form-group">
              <small id="bday" class="form-text text-muted">Lastname</small>
              <input class="form-control form-control-sm" type="text" id="lastname" name="lastname" value="<?php echo $row['lastname']?>" required>
            </div>
            <div class="form-group">
              <small id="bday" class="form-text text-muted">Firstname</small>
              <input class="form-control form-control-sm" type="text" id="firstname" name="firstname" value="<?php echo ucwords($row['firstname']) ?>" required>
            </div>
            <div class="form-group">
              <small id="bday" class="form-text text-muted">Middle initial</small>
              <input class="form-control form-control-sm" type="text" id="middlinit" name="middleinit" value="<?php echo ucwords($row['middleinit']) ?>" required> 
            </div>
            <div class="form-group">
                
              <small id="bday" class="form-text text-muted">Age</small>
              <select class="form-control " type="radio" id="age" name="age" required>
                <option class="form-control " vdisabled selected><?php echo $row['age'] ?></option>
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
            </div>
            <div class="form-group">
              <small id="bday" class="form-text text-muted">Gender</small>
              <select class="form-control " type="radio" id="gender" name="gender" value="<?php echo ucwords('gender') ?>" required>
                <option class="form-control " vdisabled selected><?php echo ucwords($row['gender']) ?></option>
                <option class="form-control " value="Male">Male</option>
                <option class="form-control " value="Female">Female</option>
              </select>
            </div>
            <div class="form-group">
              <small id="bday" class="form-text text-muted">Birthday</small>
              <input class="form-control form-control-sm" type="date" id="birthday" name="birthday" value="<?php echo ucwords($row['birthday']) ?>" required>
            </div>
          </div>
            <div style="position: absolute; top: 12%; left: 50%; width: 48%;">
            <div class="form-group">
              <small id="bday" class="form-text text-muted">Contact</small>
              <input class="form-control " type="tel"  pattern="[0,9]{2}[0-9]{9}" id="contact" name="contact" value="<?php echo ucwords($row['contact']) ?>" placeholder="Contact (09xxxxxxxxx)" required>
            </div>
            <div class="form-group">
              <small id="bday" class="form-text text-muted">Role</small>
              <select class="form-control " type="radio" id="role" name="role" required>
                <option class="form-control " vdisabled selected><?php echo ucwords($row['role']) ?></option>
                <option class="form-control " value="Counselor">Counselor</option>
                <option class="form-control " value="Administrator">Administrator</option>
              </select>
            </div>
            <div class="form-group">
              <small id="bday" class="form-text text-muted">Position</small>
              <select class="form-control " type="radio" id="position" name="position" required>
                <option class="form-control " vdisabled selected><?php echo ucwords($row['position']) ?></option>
                <option class="form-control " value="Dean">Dean</option>
                <option class="form-control " value="Instructor">Instructor</option>
                <option class="form-control " value="Counselor">Counselor</option>
              </select>
            </div>
            <div class="form-group">
              <small id="bday" class="form-text text-muted">Email</small>
              <input class="form-control form-control-sm" type="text" id="email" name="email" value="<?php echo $row['email'] ?>" required>
            </div>
            <div class="form-group">              
              <input class="btn btn-success" type="submit" name="edits" onclick="return confirm('Are you sure to save changes to this account?')" value="Save Changes"><br><br>
			  </div>

            </div>
            </div>
          </form> 
          
        </div>


			</div>
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
