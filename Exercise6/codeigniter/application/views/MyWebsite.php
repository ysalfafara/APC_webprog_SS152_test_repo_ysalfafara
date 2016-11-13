<!DOCTYPE html>
<html>
<head>

<title> PROFILE </title>

<style>

.p_relative {
	position: relative;
}

.p_absolute{
	position:absolute;
}


.box{
	background-color: #EEE7DA;
	box-shadow: 1px 2px 20px #272532;
	border-radius: 5px;
	color: #EFF8F9;
}

.title_red{
	position:absolute;
	font-family: corbel;
	font-size: 21px;
	color: #926D66;
}

.title2_white{
	position:absolute;
	font-family: corbel;
	font-size: 20px;
	color: #EEE7DA;
}

.para_orange{
	position: absolute;
	font-family: calibri;
	font-size: 15px;
	color: #CC9673;
}

.para2_white{
	position: absolute;
	font-family: calibri;
	font-size: 14px;
	color: #EEE7DA;
	line-height: 0.5em;
}

.para3_red{
	position: absolute;
	font-family: calibri;
	font-size: 14px;
	color: #926D66;
}

#Profile_box{
	position: absolute;
	margin-top: 50px; 
	margin-left: 80px;
	width: 425px;
	height: 205px;
}

		#bar{
			background-color:#5B5552; 
			width: 15px; 
			height: 205px
		}

		#Picture{
			margin-top: 20px;
			margin-left: 30px;
			width: 160px;
		}

		#Name{
			margin-top: 50px;
			margin-left: 205px;
		}

		#Nickname{
			margin-top: 80px;
			margin-left: 205px;
		}


#Interest_Box{
	position: absolute;
	margin-top: 50px; 
	margin-left: 550px;
	width: 230px;
	height: 530px;
}

		#Interest{
			margin-top: 170px; 
			margin-left: 70px; 
		}

		table{
			margin-top: 210px; 
			margin-left: 20px; 
			width: 200px; 
		}

		.td1{
			text-align: left;
		}

		th, td {
			padding: 9px;
		}

#Hobbies_Box{
	position: absolute;
	margin-top: 50px; 
	margin-left: 825px;
	width: 420px;
	height: 245px;
}

		#Hobbies_Personality{
			margin-top: 8px; 
			margin-left: 55px; 
		}

		.bubble_height{
			position: absolute;
			height: 30px;
		}

		#bubble1, #bubble2, #bubble3{
			margin-top: 60px; 
		}

		#p1, #p2, #p3{
			margin-top: 71px; 
		}

		#bubble4, #bubble5, #bubble6{
			margin-top: 105px;
		}

		#p4, #p5, #p6{
			margin-top: 116px; 
		}

		#bubble7{
			margin-top: 150px;
		}

		#p7{
			margin-top: 161px; 
		}

#Personality_Box{
	position: absolute;
	margin-top: 335px; 
	margin-left: 825px;
	width: 420px;
	height: 245px;
}

		.personality_line{
			position: absolute;
			margin-left: 100px;  
			background-color: #CC9673; 
			color: #CC9673;
			height: 5px; 
		}

		.personality_line2{
			position: absolute;
			margin-left: 230px;  
			background-color: #D0BFAD; 
			color: #D0BFAD;
			width: 150px; 
			height: 5px; 
		}

#AboutMe_Box{
	position: absolute;
	margin-top: 295px; 
	margin-left: 280px;
	width: 225px;
	height: 285px;
}

		#about{
			margin-left: 20px;
		}

		#about_me{
			margin-left: 80px;
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

	#Trivia:hover{
		background-color: #8E6D6B;
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

body{
	background-image: url("Background3.jpg");
}

a:active{
	background-color:  #A26B61;
}

a:hover{
	background-color:;
}

</style>
</head>

<body>

<div class="p_relative">

	<!-- PROFILE BOX -->
	<div class="box" id="Profile_box">
		<img class="p_absolute" id="Picture" src="ProfilePic.PNG"></img>
		<h4  class="title_red" id="Name"> Yesha Ann Alfafara </h4> 
		<p class="para_orange" id="Nickname"> Yesha | Chicha | Ann </p>

		<div class="p_absolute" id="bar"></div>
	</div>

	<!-- INTEREST BOX -->
	<div class="box" id="Interest_Box">
		<img class="p_absolute"src="Interests.png" width="230px" height="150px" style="border-top-left-radius: 5px; border-top-right-radius: 5px;">
		<h4 class="title_red" id="Interest"> Interests </h4>
		<table class="para_orange">
			<tr>
				<td class="td1"> Photography </td>
				<td class="td1"> Traveling </td>
			</tr>
			<tr>	
				<td class="td1"> Stargazing </td>
				<td class="td1"> Camping </td>
			</tr>
			<tr>
				<td class="td1"> Calligraphy </td>
				<td class="td1"> Trivias </td>
			</tr>

			<tr>
				<td class="td1"> Cooking </td>
				<td class="td1"> History </td
			</tr>

			<tr>
				<td class="td1"> DIY Crafts </td>
				<td class="td1"> Games </td
			</tr>

			<tr>
				<td class="td1"> TV Shows </td>
				<td class="td1"> Comedy </td
			</tr>


		</table>
	</div>

	<!-- ABOUT ME BOX -->
	<div class="box" id="AboutMe_Box">
		<div style="position: absolute; background-color: #5B5552; border-top-left-radius: 4px; border-top-right-radius: 4px; width: 225px; height: 45px">
			<p class="title2_white" id="Hobbies_Personality" style="margin-top: 10px; margin-left: 65px"> About Me </p>
		</div>
		<div style="margin-top: 20px">
		<p class="para3_red" id="about" style="margin-top: 50px;"> Age: </p>
		<p class="para_orange" id="about_me" style="margin-top: 50px;"> 18 </p>

		<p class="para3_red" id="about" style="margin-top: 80px;"> Address: </p>
		<p class="para_orange" id="about_me" style="margin-top: 80px;"> Lucena City </p>

		<p class="para3_red" id="about" style="margin-top: 110px;"> Course: </p>
		<p class="para_orange" id="about_me" style="margin-top: 110px;"> BSCS-SS </p>

		<p class="para3_red" id="about" style="margin-top: 140px;"> Phone: </p>
		<p class="para_orange" id="about_me" style="margin-top: 140px;"> 09255153348 </p>

		<p class="para3_red" id="about" style="margin-top: 170px;"> Email: </p>
		<p class="para_orange" id="about_me" style="margin-top: 170px;"> ysalfafara@gmail.com </p>
		</div>
	</div>

	<!-- HOBBIES BOX -->	
	<div class="box" id="Hobbies_Box">
		<div style="position: absolute; background-color: #5B5552; border-top-left-radius: 5px; border-bottom-right-radius: 5px;width: 200px; height: 40px">
			<p class="title2_white" id="Hobbies_Personality"> Hobbies </p>
		</div>

		<div style="margin-top: 10px;">
		<img class="bubble_height" id="bubble1" src="Bubble.png" style="margin-left: 30px; width: 120px"> </img>
		<p class="para2_white" id="p1" style="margin-left: 42px"> Play Table Tennis </p>
			
		<img class="bubble_height" id="bubble2" src="Bubble.png" style="margin-left: 160px; width: 105px"> </img>
		<p class="para2_white" id="p2" style="margin-left: 172px"> Watch Movies </p>
		
		<img class="bubble_height" id="bubble3" src="Bubble.png" style="margin-left: 275px; width: 110px"> </img>
		<p class="para2_white" id="p3" style="margin-left: 287px; "> Listen to Music </p>
			
		<img class="bubble_height" id="bubble4" src="Bubble.png" style="margin-left: 30px; width: 155px"> </img>
		<p class="para2_white" id="p4" style="margin-left: 40px; "> Make DIY Pop Up Cards </p>
			
		<img class="bubble_height" id="bubble5" src="Bubble.png" style="margin-left: 195px; width: 95px"> </img>
		<p class="para2_white" id="p5" style="margin-left: 208px; "> Read Books </p>

		<img class="bubble_height" id="bubble6" src="Bubble.png" style="margin-left: 300px; width: 85px"> </img>
		<p class="para2_white" id="p6" style="margin-left: 312px"> Go Fishing </p>

		<img class="bubble_height" id="bubble7" src="Bubble.png" style="margin-left: 30px; width: 130px"> </img>
		<p class="para2_white" id="p7" style="margin-left: 40px; "> Do Volunteer Work </p>
		</div>

	</div>


	<!-- PERSONALITY BOX -->
	<div class="box" id="Personality_Box">
		<div style="position: absolute; background-color: #5B5552; border-top-left-radius: 4px; border-bottom-right-radius: 5px; width: 200px; height: 40px">
			<p class="title2_white" id="Hobbies_Personality"> Personality </p>
		</div>

		<div style="margin-top: 15px;">
		<p class="para3_red" style="margin-top: 60px; margin-left: 30px"> Focused </p>
		<hr class="personality_line2" style="margin-top: 65px">
		<hr class="personality_line" style="margin-top: 65px; width: 200px">

		<p class="para3_red" style="margin-top: 90px; margin-left: 30px"> Organized </p>
		<hr class="personality_line2" style="margin-top: 95px">
		<hr class="personality_line" style="margin-top: 95px; width: 250px">
		
		<p class="para3_red" style="margin-top: 120px; margin-left: 30px"> Optimist </p>
		<hr class="personality_line2" style="margin-top: 125px">
		<hr class="personality_line" style="margin-top: 125px; width: 230px">
		
		<p class="para3_red" style="margin-top: 150px; margin-left: 30px"> Modest </p>
		<hr class="personality_line2" style="margin-top: 155px">
		<hr class="personality_line" style="margin-top: 155px; width: 230px">

		<p class="para3_red" style="margin-top: 180px; margin-left: 30px"> Mature </p>
		<hr class="personality_line2" style="margin-top: 185px">
		<hr class="personality_line" style="margin-top: 185px; width: 230px">
		</div>
	</div>

	<!-- MINI BOX -->
	<div id="mini_box">
		<div class="box" id="Profile">
			<p class="para2_white" style="margin-left: 49px; font-size: 18px"> PROFILE </p>
		</div>

		<div class="box" id="Trivia" style="cursor: pointer"  onclick="<?php echo base_url()?>controller/admin">
			<p class="para2_white" style="margin-left: 49px; font-size: 18px"> TRIVIAS </p>
		</div>
		
		<div class="box" id="Form" style="cursor: pointer" onclick="window.location='Form.php'">
			<p class="para2_white" style="margin-left: 55px; font-size: 18px"> FORM </p>
		</div>	
		
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
