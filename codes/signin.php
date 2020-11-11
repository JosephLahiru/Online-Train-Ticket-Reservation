<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../res/main.css">
		<script type="text/javascript" src="../res/signin.js"></script>
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
			<form name="signin" action="signin.php" method="post" id="signin" >
				First name : <input type="text" name="fname"><br>
				Surname : <input type="text" name="sname"><br>
				Mobile number : <input type="text" name="mnum"><br>
				Email : <input type="text" name="email"><br>
				Date of birth:
				<select name="Bdate">
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
				<select name="Bmonth">
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
				<select name="Byear">
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
				<select name="gender">
					<option>Gender</option>
					<option>Male</option>
					<option>Female</option>
				</select>
				<input type="button" value="Submit" id="sub" onclick="check_val()">
			</form>		
		</div>

		<?php
		if(isset($_POST["fname"]))
		{
			$counter = simplexml_load_file("../res/counter.xml") or die("Failed to load");
			$count = $counter->counter[0]->count;
			$count = $count+1;

			$fname = $_POST["fname"];
			$sname = $_POST["sname"];
			$mnum = $_POST["mnum"];
			$email = $_POST["email"];
			$Bdate = $_POST["Bdate"];
			$Bmonth = $_POST["Bmonth"];
			$Byear = $_POST["Byear"];
			$gender = $_POST["gender"];

			$dom = new DOMDocument();

			$dom->encoding = 'utf-8';
			$dom->xmlVersion = '1.0';
			$dom->formatOutput = true;

			$xml_file_name = "../res/coustomer-".$count.".xml";

			$root = $dom->createElement('Station');

			$user_node = $dom->createElement('user');

			$child_node_id = $dom->createElement('id', $count);
			$user_node->appendChild($child_node_id);

			$child_node_fname = $dom->createElement('First_Name', $fname);
			$user_node->appendChild($child_node_fname);

			$child_node_sname = $dom->createElement('Second_Name', $sname);
			$user_node->appendChild($child_node_sname);

			$child_node_phoneNum = $dom->createElement('Phone_Number', $mnum);
			$user_node->appendChild($child_node_phoneNum);

			$child_node_email = $dom->createElement('Email', $email);
			$user_node->appendChild($child_node_email);

			$child_node_bdate = $dom->createElement('Birth_Date', $Bdate);
			$user_node->appendChild($child_node_bdate);

			$child_node_bmonth = $dom->createElement('Birth_Month', $Bmonth);
			$user_node->appendChild($child_node_bmonth);

			$child_node_byear = $dom->createElement('Birth_Year', $Byear);
			$user_node->appendChild($child_node_byear);

			$child_node_gender = $dom->createElement('Gender', $gender);
			$user_node->appendChild($child_node_gender);

			$root->appendChild($user_node);
			$dom->appendChild($root);

			$dom->save($xml_file_name);

			//------------------------------------------------------------------

			$cdom = new DOMDocument();

			$cdom->encoding = 'utf-8';
			$cdom->xmlVersion = '1.0';
			$cdom->formatOutput = true;

			$xml_file_name = "../res/counter.xml";

			$root = $cdom->createElement('data');

			$count_node = $cdom->createElement('counter');

			$child_node_count = $cdom->createElement('count', $count);
			$count_node->appendChild($child_node_count);

			$root->appendChild($count_node);
			$cdom->appendChild($root);

			$cdom->save($xml_file_name);
		}
		?>

	</body>
</html>