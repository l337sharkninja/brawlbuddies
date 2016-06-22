<h2><u>Create Tournament</u></h2>
<form id="frmMain" class="text-center">
	<h3>Tournament Name:</h3>
	<input style="width:450px;text-align:center;" type="text" name="title1" id="title1" class="required" minlength="18" maxlength="62" />
	<h3>Maximum Participants:</h3>
	<select class="btn" style="margin: 5px 10px;color:black" name="participants" id="participants">
		<option value="8">8</option>
		<option value="16">16</option>
		<option value="32">32</option>
		<option value="64">64</option>
		<option value="128">128</option>
	</select>
	<h3>Time and Date (EST):</h3>
	Month:
	<select class="btn" style="margin: 5px 10px;color:black" name="timedate" id="timedate">
		<option value="1">January</option>
		<option value="2">February</option>
		<option value="3">March</option>
		<option value="4">April</option>
		<option value="5">May</option>
		<option value="6">June</option>
		<option value="7">July</option>
		<option value="8">August</option>
		<option value="9">September</option>
		<option value="10">October</option>
		<option value="11">November</option>
		<option value="12">December</option>
	</select>
	Day:
	<select class="btn" style="margin: 5px 10px;color:black" name="timedate" id="timedate">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
	</select>
	Hour:
	<select class="btn" style="margin: 5px 10px;color:black" name="timedate" id="timedate">
		<option value="0">00</option>
		<option value="1">01</option>
		<option value="2">02</option>
		<option value="3">03</option>
		<option value="4">04</option>
		<option value="5">05</option>
		<option value="6">06</option>
		<option value="7">07</option>
		<option value="8">08</option>
		<option value="9">09</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
	</select>
	Minute:
	<select class="btn" style="margin: 5px 10px;color:black" name="timedate" id="timedate">
		<option value="0">00</option>
		<option value="15">15</option>
		<option value="30">30</option>
		<option value="45">45</option>
	</select>
	<h3>Prize Pool:</h3>
	<small><i>Minimum Total Pool: $40/€40</small></i><br>
	Currency Type: 
	<select class="btn" style="margin: 5px 10px;color:black" name="timedate" id="timedate">
		<option value="0">$</option>
		<option value="1">€</option>
	</select><br>
	1st: 
	<input style="width:100px;text-align:center;" type="number" name="title1" id="title1" class="required" min="1"/><br>
	2nd: 
	<input style="width:100px;text-align:center;" type="number" name="title1" id="title1" class="required" min="1"/><br>
	3rd: 
	<input style="width:100px;text-align:center;" type="number" name="title1" id="title1" class="required" min="1"/><br>
	<h3>Location:</h3>
	<select class="btn" style="margin: 5px 10px;color:black" name="timedate" id="timedate">
		<option value="0">US-E</option>
		<option value="1">EU</option>
	</select>
	<h3>Twitch Streams:</h3>
	<small><i>First required. Recommended at least two.</i></small><br>
	twitch.tv/<input style="width:100px;text-align:center;" type="text" name="title1" id="title1" class="required"/><br>
	twitch.tv/<input style="width:100px;text-align:center;" type="text" name="title1" id="title1"/><br>
	twitch.tv/<input style="width:100px;text-align:center;" type="text" name="title1" id="title1"/><br>
	witch.tv/<input style="width:100px;text-align:center;" type="text" name="title1" id="title1"/>
	<h3>Other Resources:</h3>
	<small><i>Up to 3, including host website, discord, reddit links.</i></small><br>
	Resource Name: <input style="width:200px;text-align:center;" type="text" name="title1" id="title1"/> Link: <input style="width:200px;text-align:center;" type="text" name="title1" id="title1"/><br>
	Resource Name: <input style="width:200px;text-align:center;" type="text" name="title1" id="title1"/> Link: <input style="width:200px;text-align:center;" type="text" name="title1" id="title1"/><br>
	Resource Name: <input style="width:200px;text-align:center;" type="text" name="title1" id="title1"/> Link: <input style="width:200px;text-align:center;" type="text" name="title1" id="title1"/><br>
	<br><input type="button" value="Submit" id="btnSubmit"><br><br>
</form>