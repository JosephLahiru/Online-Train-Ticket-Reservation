<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../res/main.css">
		<script type="text/javascript" res="../res/signin.js"></script>
	</head>
	<body>
		<img src="../res/pictures/SL.jpg" width="100%">
		<div>
			<ul id = "ulnav">
			  <li style="float: left;"><a id = "nava" href="home.html">HOME</a></li>
			  <li style="float: left;"><a id = "nava" href="orderTickets.html">ORDER TICKETS</a></li>
			  <li style="float: left;"><a id = "nava" href="contact.html">CONTACT</a></li>
			  <li style="float: left;"><a id = "nava" href="login.html">LOGIN</a></li>
			  <li style="float: left;"><a id = "nava" href="index.html">INDEX</a></li>
			  <li style="float: left;"><a id = "nava" href="about.html">ABOUT</a></li>
			</ul>
		</div>
		<div id="top">SIGN IN</div>
		<div id="formd">
			<form name="signin" action="signin.php" method="post">
				First name : <input type="text" name="fname"><br>
				Surname : <input type="text" name="sname"><br>
				Mobile number : <input type="text" name="mnum"><br>
				Email : <input type="text" name="email"><br>
				Date of birth:
				<select>
					<option>Date</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					<option>13</option>
					<option>14</option>
					<option>15</option>
					<option>16</option>
					<option>17</option>
					<option>18</option>
					<option>19</option>
					<option>20</option>
					<option>21</option>
					<option>22</option>
					<option>23</option>
					<option>24</option>
					<option>25</option>
					<option>26</option>
					<option>27</option>
					<option>28</option>
					<option>29</option>
					<option>30</option>
					<option>2</option>
				</select>
				<select>
					<option>Month</option>
					<option>January</option>
					<option>February</option>
					<option>March</option>
					<option>April</option>
					<option>May</option>
					<option>June</option>
					<option>July</option>
					<option>August</option>
					<option>September</option>
					<option>October</option>
					<option>November</option>
					<option>December</option>
				</select>
				<select>
					<option>Year</option>
					<option>2020</option>
					<option>2019</option>
					<option>2018</option>
					<option>2017</option>
					<option>2016</option>
					<option>2015</option>
					<option>2014</option>
					<option>2013</option>
					<option>2012</option>
					<option>2011</option>
					<option>2010</option>
					<option>2009</option>
					<option>2008</option>
					<option>2007</option>
					<option>2006</option>
					<option>2005</option>
					<option>2004</option>
					<option>2003</option>
					<option>2002</option>
					<option>2001</option>
					<option>2000</option>
					<option>1999</option>
					<option>1998</option>
				</select>
				Gender:
				<select>
					<option>Gender</option>
					<option>Male</option>
					<option>Female</option>
				</select>
				<input type="submit" name="Submit">
			</form>		
		</div>

		<?php
		$fname = $_POST["fname"];
		$sname = $_POST["sname"];
		$mnum = $_POST["mnum"];
		$email = $_POST["email"];

		$myfile = fopen("data.txt", "a") or die("Unable to open file!");
		fwrite($myfile, $fname);
		fwrite($myfile, "\n");
		fwrite($myfile, $sname);
		fwrite($myfile, "\n");
		fwrite($myfile, $mnum);
		fwrite($myfile, "\n");
		fwrite($myfile, $email);
		fwrite($myfile, "\n");
		fclose($myfile);
		?>

	</body>
</html>