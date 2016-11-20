<?php
	$this->load->helper('url');
?>

<!DOCTYPE html>
<html>
<head>

<title> TRIVIAS </title>

<style>

.p_relative {
	position: relative;
}

.p_absolute{
	position:absolute;
}


.box{
	background-color: #EEE7DA;
	box-shadow: 1px 2px 10px #272532;
	border-radius: 5px;
	color: #EFF8F9;
}

.title2_white{
	position:absolute;
	font-family: corbel;
	font-size: 18px;
	color: #EEE7DA;
	margin-top: 7px; 
	cursor: pointer;
}

.title_red{
	position: absolute;
	font-family: sans-serif;
	font-size: 35px;
	color: #926D66;
}

.para_red{
	position: absolute;
	font-family: calibri;
	font-size: 16px;
	color: #A26B61;
	text-align: center;
	margin-left: 53px;
	margin-top: 28px;
}

.para2_white{
	position: absolute;
	font-family: calibri;
	font-size: 14px;
	color: #EEE7DA;
	line-height: 0.5em;
}

.para_yellow{
	position: absolute;
	font-family: georgia;
	font-size: 14px;
	color: #bbab9b;
	margin-top: 12px;
	margin-left: 260px;
}

#Profile_box{
	position: absolute;
	margin-top: 50px; 
	margin-left: 80px;
	width: 1165px;
	height: 205px;
}
		#bar{
			background-color:#5B5552; 
			width: 15px; 
			height: 205px
		}

		#Name{
			margin-top: 65px;
			margin-left: 85px;
		}

		#Nickname{
			margin-top: 90px;
			margin-left: 85px;
		}



#mini_box{
	position: absolute;

}	
	#Profile, #Trivia, #Form, #Blank2, #Blank3{
		margin-top: 15px; 
		margin-left: 80px;
		width: 160px;
		height: 45px;
	}

	#Profile{
		background-color: #6F5F5C;
		margin-top: 295px; 
	}

	#Profile:hover{
		background-color: #7D6F6C;
	}

	#Trivia{
		background-color: #825D5B;
	}

	#Form{
		background-color: #A26B61;
	}

	#Form:hover{
		background-color: #b48880;
	}

	#Blank2{
		background-color: #E38F71;
	}

	#Blank2:hover{
		background-color: #e8a58d;
	}

	#Blank3{
		background-color: #F0B270;
	}

	#Blank3:hover{
		background-color: #f3c18c;
	}


/* BUTTONS ON HEADER */
#dropbtn, #dropbtn2, #dropbtn3, #dropbtn4, #dropbtn5{
	position: absolute; 
	background-color: #5B5552; 
	border-radius: 5px; 
	width: 180px; 
	height: 35px;
	margin-top: 20px; 
	cursor: pointer;
}

/* HOVER EFFECTS */
#dropbtn:hover, #dropbtn2:hover, #dropbtn3:hover, #dropbtn4:hover, #dropbtn5:hover {
    background-color: #76716f;
}

.showAnswer_button:hover{
	background-color: #f3c18c;
}

/*  HIDDEN TRIVIAS */
#Trivia1, #Trivia2{
	display: none;
	position: absolute;
	margin-top: 295px; 
	width: 225px;
	height: 285px;
}

#Trivia3, #Trivia4, #Trivia5{
	display: none;
	position: absolute;
	margin-left: 800px;
	width: 445px;
	height: 80px;
}


/* SHOW ANSWER BOX */
.showAnswer_button{
	/* SHOW ANSWER SHADOW */
	position: absolute;
	box-shadow: 0px 0px 8px #272532;
	border-radius: 2px;
	background-color: #F0B270;
	line-height: 3em;
	
	/* SHOW ANSWER TEXT */
	position: absolute;
	font-family: calibri;
	font-size: 14px;
	text-align: center;
	color: #EEE7DA;
	width: 120px;
	height: 40px;
	margin-top: 90px;
	margin-left: 50px;
}

/* SHOW ANSWER BOX 2 */
#show_answer2{
	position: absolute;
	line-height: 2em;
	width: 80px;
	height: 30px;
	margin-top: 38px;
	margin-left: 70px;
}

/* DISPLAY HIDDEN */
.answers{
	display: none;
	margin-left: 50px; 
	width: 120px; 
}

#answer2, .answer2, #answer_quote{
	display:none;
}

audio {
	width: 200px; 
	margin-top: 37px; 
	margin-left: 230px;
}

</style>
<script>

/* TRIVIA 1 */
function div1() {
   	Trivia1 = document.getElementById('Trivia1');
   	dropbtn = document.getElementById('dropbtn');
   	answer = document.getElementById('answer_food');
   	if (Trivia1.style.display == "block") {
        Trivia1.style.display = "none";
        document.getElementById("dropbtn").style.boxShadow = "1px 1px 5px #272532";
		document.getElementById("dropbtn").style.borderRadius = "5px";
    }
    else {
    	answer.style.display = "none";
        Trivia1.style.display = "block";
 		document.getElementById("dropbtn").style.boxShadow = "0px 0px 0px #272532";
 		document.getElementById("dropbtn").style.borderRadius = "1px"; 
 	}
}

/* TRIVIA 2 */
function div2(){
 	
 	Trivia2 = document.getElementById('Trivia2');
   	dropbtn2 = document.getElementById('dropbtn2');
   	answer = document.getElementById('answer_hobby');
 	 if (Trivia2.style.display == "block") {
        Trivia2.style.display = "none";
        document.getElementById("dropbtn2").style.boxShadow = "1px 1px 5px #272532";
		document.getElementById("dropbtn2").style.borderRadius = "5px";
    }
    else {
    	answer.style.display = "none";
        Trivia2.style.display = "block";
 		document.getElementById("dropbtn2").style.boxShadow = "0px 0px 0px #272532";
 		document.getElementById("dropbtn2").style.borderRadius = "1px"; 
 	}
 }

/* TRIVIA 3 */
 function div3(){
 	Trivia3 = document.getElementById('Trivia3');
   	dropbtn3 = document.getElementById('dropbtn3');
   	answer = document.getElementById('answer_music');
   	answer2 = document.getElementById('answer2');

 	 if (Trivia3.style.display == "block") {
        Trivia3.style.display = "none";
        document.getElementById("dropbtn3").style.boxShadow = "1px 1px 5px #272532";
		document.getElementById("dropbtn3").style.borderRadius = "5px";
    }
    else {
    	answer.style.display = "none";
    	answer2.style.display = "none";
        Trivia3.style.display = "block";
 		document.getElementById("dropbtn3").style.boxShadow = "0px 0px 0px #272532";
 		document.getElementById("dropbtn3").style.borderRadius = "1px"; 
 	}
 }

/* TRIVIA 4 */
function div4(){ 	
 	Trivia4 = document.getElementById('Trivia4');
   	dropbtn4 = document.getElementById('dropbtn4');
    answer = document.getElementById('answer_quote');	
 	if (Trivia4.style.display == "block") {
        Trivia4.style.display = "none";
        document.getElementById("dropbtn4").style.boxShadow = "1px 1px 5px #272532";
		document.getElementById("dropbtn4").style.borderRadius = "5px";
    }
    else {
    	answer.style.display = "none";
        Trivia4.style.display = "block";
 		document.getElementById("dropbtn4").style.boxShadow = "0px 0px 0px #272532";
 		document.getElementById("dropbtn4").style.borderRadius = "1px"; 
 	}
 }

/* TRIVIA 5 */
function div5(){ 	
 	Trivia5 = document.getElementById('Trivia5');
   	dropbtn5 = document.getElementById('dropbtn5');
   	answer = document.getElementById('answer_tvShow');
 	 if (Trivia5.style.display == "block") {
        Trivia5.style.display = "none";
        document.getElementById("dropbtn5").style.boxShadow = "1px 1px 5px #272532";
		document.getElementById("dropbtn5").style.borderRadius = "5px";
    }
    else {
    	answer.style.display = "none";
        Trivia5.style.display = "block";
 		document.getElementById("dropbtn5").style.boxShadow = "0px 0px 0px #272532";
 		document.getElementById("dropbtn5").style.borderRadius = "1px"; 
 	}
 }	

/* SHOW ANSWER 1 */
function showAnswer(){
	answer = document.getElementById('answer_food');
	if(answer.style.display == "block"){
		answer.style.display = "none";
	}
	else{
		answer.style.display = "block";
	}
}

/* SHOW ANSWER 2 */
function showAnswer2(){
	answer = document.getElementById('answer_hobby');
	if(answer.style.display == "block"){
		answer.style.display = "none";
	}
	else{
		answer.style.display = "block";
	}
}

/* SHOW ANSWER 3 */
function showAnswer3(){
	answer = document.getElementById('answer2');
	answer2 = document.getElementById('answer_music');
	if(answer.style.display == "block"){
		answer.style.display = "none";
		answer2.style.display = "none";
	}
	else{
		answer.style.display = "block";
		answer2.style.display = "block";
	}
}

/* SHOW ANSWER 4 */
function showAnswer4(){
	answer = document.getElementById('answer_quote');
	if(answer.style.display == "block"){
		answer.style.display = "none";
	}
	else{
		answer.style.display = "block";
	}
}

/* SHOW ANSWER 5 */
function showAnswer5(){
	answer = document.getElementById('answer_tvShow');
	if(answer.style.display == "block"){
		answer.style.display = "none";
	}
	else{
		answer.style.display = "block";
	}
}


</script>
</head>

<body background="<?php echo base_url();?>/images/Background3.jpg">

<div class="p_relative">

	<!-- GET TO KNOW ME -->
	<div class="box" id="Profile_box">
		<p class="title_red" id="Nickname" style="margin-top: 65px; margin-left: 113px"> Facts 
		<p class="title_red" id="Nickname" style="margin-left: 195px; font-size: 80px; margin-top: 55px"> About 
		<p class="title_red" id="Nickname" style="margin-left: 410px; margin-top: 95px;"> Yesha </p>

		<div class="p_absolute" id="bar"></div>

		<div style="margin-top: 5px; margin-left: 40px;">
			<div class="box" id="dropbtn" onclick="div1()" style="margin-left: 620px">
				<p class="title2_white" style="margin-left: 52px"> First Trivia </p>
			</div>

			<div class="box" id="dropbtn2" onclick="div2()" style="margin-left: 850px">
				<p class="title2_white" style="margin-left: 38px"> Second Trivia </p>
			</div>

			<div class="box" id="dropbtn3" onclick="div3()" style="margin-top: 80px; margin-left: 730px">
				<p class="title2_white" style="margin-left: 46px"> Third Trivia </p>
			</div>

			<div class="box" id="dropbtn4" onclick="div4()" style="margin-top: 140px; margin-left: 620px">
				<p class="title2_white" style="margin-left: 45px"> Fourth Trivia </p>
			</div>

			<div class="box" id="dropbtn5" onclick="div5()" style="margin-top: 140px; margin-left: 850px">
				<p class="title2_white" style="margin-left: 49px"> Fifth Trivia </p>
			</div>
		</div>

	</div>

	
	<!-- TRIVIAS -->
	<div class="Trivia">
		<!-- FAVORITE FOOD -->
		<div class="box" id="Trivia1" style="margin-left: 280px">
			<h5 class="para_red"> What is my <br> FAVORITE FOOD? </h5>
			
			<!-- ANSWER CHICKEN -->
			<div onclick="showAnswer()" class="showAnswer_button" style="cursor: pointer"> Answer </div>
			<img class="answers" id="answer_food" src="<?php echo base_url();?>/images/ChickenJoy.png" style="margin-top: 130px"></img>
		
		</div>

		<!-- FAVORITE HOBBY -->
		<div class="box" id="Trivia2" style="margin-left: 540px">
			<h5 class="para_red"> What is my <br> FAVORITE HOBBY? </h5>
			
			<!-- ANSWER TABLET TENNIS -->
			<div onclick="showAnswer2()" class="showAnswer_button" style="cursor: pointer"> Answer </div>
			<img class="answers" id="answer_hobby" src="<?php echo base_url();?>/images/TableTennis.png" style="margin-top: 160px"></img>
		
		</div>

		<!-- FAVORITE SONG -->
		<div class="box" id="Trivia3" style="margin-top: 295px">
			<h5 class="para_red" style="margin-left: 20px; margin-top: 10px;"> What is my FAVORITE SONG? </h5>
			
			<!-- ANSWER SUNDAY MORNING -->
			<div onclick="showAnswer3()" class="showAnswer_button" id="show_answer2" style="cursor: pointer"> Answer </div>
			<p class="para_yellow" id="answer2"> SUNDAY MORNING </p>
			<audio controls class="answer2" id="answer_music">
 				<source src="<?php echo base_url();?>/images/Sunday Morning.mp3" type="audio/mpeg"> 
			</audio>
		
		</div>

		<div class="box" id="Trivia4" style="margin-top: 397px">
			<h5 class="para_red" style="margin-left: 20px; margin-top: 10px;"> What is my FAVORITE QUOTE? </h5>
		
			<!-- ANSWER UNEXPECTED THINGS -->
			<div onclick="showAnswer4()" class="showAnswer_button" id="show_answer2" style="cursor: pointer"> Answer </div>
			<p class="para_yellow" id="answer_quote"> It's The Things That You Least Expect That Hit You The Hardest </p>		
		
		</div>

		<div class="box" id="Trivia5" style="margin-top: 500px">
			<h5 class="para_red" style="margin-left: 20px; margin-top: 10px;"> What is my FAVORITE TV SHOW? </h5>
		
			<!-- ANSWER FRIENDS -->
			<div onclick="showAnswer5()" class="showAnswer_button" id="show_answer2" style="cursor: pointer"> Answer </div>
			<img src="<?php echo base_url();?>/images/Friends.png" id="answer_tvShow" style="width: 150px; margin-top: 25px; margin-left: 260px"></img>		
		
		</div>

	</div>


	<!-- MINI BOX -->
	<div id="mini_box">

		<a href="<?php echo base_url('index.php/Home/index')?>">
			<div class="box" id="Profile" style="cursor: pointer">
				<p class="para2_white" style="margin-left: 51px; font-size: 18px"> PROFILE </p>
			</div>
		</a>

		<div class="box" id="Trivia">
			<p class="para2_white" style="margin-left: 51px; font-size: 18px"> TRIVIAS </p>
		</div>
		
		<a href="<?php echo base_url('index.php/Users/index')?>">
			<div class="box" id="Form" style="cursor: pointer">
				<p class="para2_white" style="margin-left: 45px; font-size: 18px"> RECORDS </p>
			</div>	
		</a>

		<div class="box" id="Blank2">
			<p class="para2_white" style="margin-left: 48px; font-size: 18px"> </p>
		</div>

		<div class="box" id="Blank3">
			<p class="para2_white" style="margin-left: 48px; font-size: 18px"> </p>
		</div>
	</div>
</div>

</body>
</html>