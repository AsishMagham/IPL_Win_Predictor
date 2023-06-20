<html>
<head>
    <link rel="stylesheet" href="https://pyscript.net/alpha/pyscript.css"/>
    <script defer src="https://pyscript.net/alpha/pyscript.js"></script>
    <style>
        body
		{
			
			background-color:black;
		}
		.container
		{
			margin :100px 00px 100px 400px;
            border-color:aqua;
			padding:0px 100px 100px 0px;
			background-color:black;
			border-style:groove;
			border-radius:15px;
			text-align:center;
            width:1000px;
            height:700px;
            color:aqua;
		}
		.container input[type="text"] , .container input[type="password"] 
		{
			height:45px;
			width:300px;
			font-size:15px;
		}
        
		.container input[type="submit"]:hover 
		{
			cursor:pointer;
            color:black;
		}
		.container input[type="submit"]
		{
			height:45px;
			width:150px;
			font-size:15px;
            color:black;
		}
		.container .result
		{
			color:red;
			padding-bottom:10px;
			padding-top:50px;
		}
		.container .title
		{
			color:black;
			padding-bottom:10px;
			background-color:aqua;
			text-align:left;
			padding-left:50px;
			font-size:40px;
			font-family:Georgia;
            width:1000px;
		}
		</style>
</head>
<body background="black">
		<div class="container">
			<div class="title">
				IPL Win Predictor
			</div>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="result">
				<?php
				if(array_key_exists('error',$_GET))
				{
					echo $_GET['error']."<br>";
				}
				?>
			</div>
            <label for="bat">Choose Batting team : </label>
            <font color="black">
            <select name="bat" id="bat">
                <option value="0">SRH</option>
                <option value="1">MI</option>
                <option value="2">RCB</option>
                <option value="3">KKR</option>
                <option value="4">KXIP</option>
                <option value="5">CSK</option>
                <option value="6">RR</option>
                <option value="7">DC</option>
            </select>
            </font>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="bowl">Choose Bowling team : </label>
            <font color="black">
            <select name="bowl" id="bowl">
                <option value="0">SRH</option>
                <option value="1">MI</option>
                <option value="2">RCB</option>
                <option value="3">KKR</option>
                <option value="4">KXIP</option>
                <option value="5">CSK</option>
                <option value="6">RR</option>
                <option value="7">DC</option>
            </select>
            </font>
            <br><br><br>
            <label for="city">Choose City : </label>
            <font color="black">
            <select name="city" id="city">
                <option value="0">Hyderabad</option>
                <option value="1">Bangalore</option>
                <option value="2">Mumbai</option>
                <option value="3">Indore</option>
                <option value="4">Kolkata</option>
                <option value="5">Delhi</option>
                <option value="6">Chandigarh</option>
                <option value="7">Jaipur</option>
                <option value="8">Chennai</option>
                <option value="9">Cape Town</option>
                <option value="10">Port Elizabeth</option>
                <option value="11">Durban</option>
                <option value="12">Centurion</option>
                <option value="13">East London</option>
                <option value="14">Johannesburg</option>
                <option value="15">Kimberley</option>
                <option value="16">Bloemfontein</option>
                <option value="17">Ahmedabad</option>
                <option value="18">Cuttack</option>
                <option value="19">Nagpur</option>
                <option value="20">Dharamsala</option>
                <option value="21">Visakhapatnam</option>
                <option value="22">Pune</option>
                <option value="23">Raipur</option>
                <option value="24">Ranchi</option>
                <option value="25">Abu Dhabi</option>
                <option value="26">Sharjah</option>
                <option value="27">Mohali</option>
                <option value="28">Bengaluru</option>
            </select>
            </font>
            <br><br><br>
            <font color="black">
            <input type="text" placeholder="Target" name="target">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" placeholder="Score" name="score">
            <br><br><br>
            <input type="text" placeholder="Over" name="over">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" placeholder="Ball" name="ball">
            <br><br><br>
            <input type="text" placeholder="Wicket" name="wicket">
            <br><br><br><br>
            </font>
            <input type="submit" value="Submit">
            <br><br>
            </form>
            <?php
                if(array_key_exists('bat',$_POST))
                {
                    if($_POST['target']>0)
                    {
                        if($_POST['score']>0 and $_POST['score']<=$_POST['target'])
                        {

                        }
                    }
                    $temp=$temp="python C:/xampp/htdocs/p2.py ".$_POST['bat']." ".$_POST['bowl']." ".$_POST['city']." ".$_POST['target']." ".$_POST['score']." ".$_POST['over']." ".$_POST['ball']." ".$_POST['wicket'];
                    echo shell_exec($temp);
                }
            ?>
		</div>
		
	</body>

</html>