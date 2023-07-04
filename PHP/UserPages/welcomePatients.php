<?php 
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<link rel="stylesheet" href="../../CSS/pages.css">

<body>

  <!--here is the maincontainer holding our elements-->

  <div class="maincontainer">

    <!--the navigation elements are stored here in this div box-->
    <div class="navbar">
      <h3>Welcome, <?php echo $_SESSION["userVar"]; ?></>
      <div class="navbtn">
        <button class="togglebtn" onclick="logOut()">Log Out</button>
        <button class="togglebtn" onclick="toggle('mainPage',this)" id="defaultDisplay">Welcome Page!</button>
        <button class="togglebtn" onclick="toggle('settings',this)">account settings</button>
        <button class="togglebtn" onclick="toggle('patientManagement',this)">Patient Management</button>
      </div>
    </div>


  <!--where the content is stored-->
  <div class="content">
	<!--here is where the shifters are stored-->




      <div class="contentForms" id="mainPage">
          <!--content for the pages-->
          <div class="content1">
            <p>welcome to your user account! here are the features you can perform as a patient
            </p>
            <ul>
              <li>post symptoms</li>
              <li>review prescription</li>
              <li>update account information</li>
              <li>log out</li>
            </ul>
      
            <h1>FAQs</h1>
            <p>the most commonly asked qns include:</p>
            <ul>
              <li>how to delete the account</li>
              <li>example 1</li>
              <li>example 2</li>
              <li>example 3</li>
            </ul>
          </div>
          
      </div>

      <!--settings form-->
	    <div class="contentForms" id="settings">
      <h1>User Settings</h1>

      <!--this is the level 2 toggle settings-->
      <div class="level2togglebtns">
        <button class="innertogglebutton"  id="defaultDisplay" onclick="innertoggle('updatePatientProperties',this,'black')">Update Account Details</button>
        <button class="innertogglebutton" class="negBtn" onclick="innertoggle('deletePatientAccount',this,'red')">Request deletion</button>
      </div>

      <!--level 2 content containers-->
      <div class="innertogglecontent" id="updatePatientProperties">
        <form>
          <input type="text" name="fname" id="fname" placeholder="first name"> <br><br>
          <input type="text" name="sname" id="sname" placeholder="second name"><br><br>
          <input type="text" name="ssn" id="ssn" placeholder="SSN"><br><br>
          <input type="text" name="pno" id="pno" placeholder="phone No"><br><br>
          <input type="text" name="address" id="address" placeholder="address"><br><br>
          <input type="text" name="age" id="age" placeholder="age"><br><br>
          <input type="password" id="pw" name="pw" placeholder="password"><br><br>
          <input type="submit" value="Update" name="submit" id="submit">
        </form>
      </div>

      <!--here is where deletion of account occurs-->
      <div class="innertogglecontent" id="deletePatientAccount" >
        <form action="PHP/Users/deleteUser.php" method="post">
          <h3>input your password, we will confirm pending deletion of your account in 28 days</h3>
          <input type="password" name="password" placeholder="password"><br><br>
          <input type="submit" value="Request Deletion" class="negBtn" id="btnDeletionUser">
        </form>
      </div>
    </div>


    <!--next content form-->
    <div class="contentForms" id="patientManagement">
      <div class="level2togglebtns">
        <button class="innertogglebutton"  id="defaultDisplay" onclick="innertoggle('updatePatientForm',this,'green')">post symptoms</button>
        <button class="innertogglebutton"  id="defaultDisplay" onclick="innertoggle('viewPatientPrescription',this,'green')">view prescription</button>
      </div>
      
      <!-- form to update the patient's symptoms details-->
        <div class="innertogglecontent" id="updatePatientForm">
          <form>
            <input type="text" id="patientName" placeholder="patientName"><br><br>
            <textarea placeholder="Description of symptoms"></textarea>
          </form>
        </div>

        <!-- table to view the patient's symptoms details-->
        <div class="innertogglecontent" id="viewPatientPrescription">
          <form>
            <!--here table will be automatically updated with php and echoed here-->
            <p>table soon!</p>
          </form>
        </div>
      

    </div>
	
  
    </div>

    <!--where the footer is located-->
    <div class="footer">
      <h5>drug company co</h5>
      <h6>all rights reserved</h6>
      <h6>2023</h6>
    </div>

  </div>
  
</body>

  <script src="../../JS/toggleUnified.js"></script>
  <script src="../../JS/innertoggleUnified.js"></script>
  <script src="../../JS/redirections.js"></script>

</html>