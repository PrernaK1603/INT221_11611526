<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>
body{
	margin:0px;
	padding:0px;
}
/*#background{
background-color:#F0F0F0;
width:100%;
height:100%;
}
#start{
	width:100%;
	height:40px;
	background-color:#E0E0E0;
}*/
</style>
<script>

</script>
	</head>
	<body>
    <!--<div id="background">

     <div id="start">

     </div>


    </div>-->
   <div class="row">
  <div class="col-md-6" style="background-color:#E0E0E0; height:40px;">
  	&nbsp &nbsp &nbsp &nbsp 
  	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  	&nbsp &nbsp &nbsp &nbsp
    &nbsp &nbsp &nbsp &nbsp
    &nbsp &nbsp &nbsp &nbsp
    &nbsp &nbsp &nbsp &nbsp
  	  	<input type="text" name="name" placeholder="Enter Your Email-Id" style=" margin:5px;width:300px;">
  	<button type="button" class="btn btn-success" style="height:30px; font-style:italic;">Subscribe</button>
     </div>
  	 <div class="col-md-6" style="background-color:#E0E0E0; height:40px;">
  	 	&nbsp &nbsp &nbsp &nbsp 
  	 	&nbsp &nbsp &nbsp &nbsp 
        &nbsp &nbsp &nbsp &nbsp 
        &nbsp &nbsp &nbsp &nbsp 
        &nbsp &nbsp &nbsp &nbsp 
  	 	&nbsp &nbsp &nbsp &nbsp 
  	 	<i class="fa fa-facebook-official" style="font-size:28px; margin:5px;"></i>
  	 	<i class="fa fa-twitter-square" style="font-size:28px"></i>
        <i class="fa fa-youtube-square" style="font-size:28px"></i>
        <i class="fa fa-linkedin-square" style="font-size:28px"></i>
        <i class="fa fa-google-plus-square" style="font-size:28px"></i>
        &nbsp &nbsp &nbsp &nbsp 
  	 	&nbsp &nbsp &nbsp &nbsp 
        <button type="button" class="btn btn-success" style="height:50px width:60px; font-style:italic; margin:5px; 
        background-color:yellow; color:black;"><b>Donate Now</b></button></div>
    </div>

    <div class="row">
    <div class="col-md-3" style="background-color:white; height:100px;">
    &nbsp &nbsp &nbsp &nbsp
    &nbsp &nbsp &nbsp &nbsp
    &nbsp &nbsp <img src="smiley.jpg" width='130px' height='100px'></div>

    <div class="col-md-9" style="background-color:white; height:100px;">
    <nav class="navbar navbar-default" style="margin:49px; width:100%;">
  <div class="container-fluid" style="background-color:white;">
    <!--<div class="navbar-header" >
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>-->
    <ul class="nav navbar-nav" style="background-color:white;">
      <li class="active" style="width:150px;"><a href="#">Home</a></li>
      <li style="width:150px;"><a href="#">About us</a></li>
      <li style="width:150px;"><a href="form">Contact us</a></li>
      <li style="width:150px;"><a href="#">Compaign</a></li>
      <li style="width:150px;"><a href="#">Our Work</a></li>
    </ul>
  </div>
</nav></div>
    </div>

<div class="row">
  <div class="col-md-1" style="background-color:#f0f0f0; height:700px;"></div>
  <div class="col-md-10" style="background-color:#f0f0f0; height:700px;"><br><br>
    <form action="/shows/formdata" method="post">
      {{csrf_field()}}
<label for="id">Id:</label>
<input type="text" placeholder="Enter the Id" name="id"style="width:100%; height:40px; border-radius:2px;"><br><br>

<label for="name">Name:</label>
<input type="text" placeholder="Enter the Name" name="name"style="width:100%; height:40px; border-radius:2px;"><br><br>
<label for="email">Email:</label>
<input type="email" placeholder="Enter the Email" name="email" style="width:100%; height:40px; border-radius:2px;"><br><br>
<label for="password">Password:</label>
<input type="password" placeholder="Enter the password" name="password" style="width:100%; height:40px; border-radius:2px;" ><br><br>
<label for="phone">Phone:</label>
<input type="inputPhone" placeholder="Enter the phone number" name="phone" style="width:100%; height:40px; border-radius:2px;"><br><br>
<label for="comment">Comment:</label>
<textarea placeholder="Enter the Comment" name="comment" style="width:100%; height:150px; border-radius:2px;">
</textarea><br><br>
<input type="submit" name="s1" style="background-color:#424242; color:white; height:30px; width:80px;">
</form>
</div>
<div class="col-md-1" style="background-color:#f0f0f0; height:700px;"></div>
</div>

<div class="row">
  <div class="col-md-1" style="background-color:#f0f0f0; height:50px;"></div>
  <div class="col-md-10" style="background-color:#f0f0f0; height:50px;">
  <h4><b>OUR INVOLVED</b></h4></div>
  <div class="col-md-1" style="background-color:#f0f0f0;height:50px;"></div>
</div>

<div class="row">
  <div class="col-md-12" style="background-color:green; height:3px;"></div>
</div>

<div class="row">
  <div class="col-md-3" style="background-color:#ffe600;height:80px;"></div>
  <div class="col-md-6" style="height:80px; background-color:#ffe600;">
  <i class="material-icons" style="font-size:36px; margin:25px;">email</i>Sign up
    &nbsp &nbsp &nbsp &nbsp
    &nbsp &nbsp &nbsp &nbsp
<i class="material-icons" style="font-size:36px">call</i>Contact Us
    &nbsp &nbsp &nbsp &nbsp
    &nbsp &nbsp &nbsp &nbsp
<i class="material-icons" style="font-size:36px">chat</i>chat
    &nbsp &nbsp &nbsp &nbsp
    &nbsp &nbsp &nbsp &nbsp
<i class="material-icons" style="font-size:36px">message</i>Message</div>
  <div class="col-md-3" style="background-color:#ffe600;height:80px;"></div>
</div>


<div class="row">
  <div class="col-md-12" style="background-color:black; height:3px;"></div>
</div>

<div class="row">
  <div class="col-md-1" style="background-color:#2e2e2e; height:400px;"></div>
  <div class="col-md-4" style="background-color:#2e2e2e; height:400px;">
  <h5 style="color:white;"><b>ABOUT US</b></h5>
<p style="color:white;">Smile Foundation is an NGO in
India directly benefitting
over 750,000 children
and families through more than
350 welfare projects in education,
health, livelihood and woman 
empowerment spread across 
over 1000 remote villages and slums in 25 
states in India.</p><br><br>
<p style="color:white;">Our Impact
Reach & Presence
Civic Driven Change
Smilestones
</p></div>
    <div class="col-md-3" style="background-color:#2e2e2e; height:400px;">
      <h5 style="color:white;"><b>OUR WORK</b></h5>
<p style="color:white;">Education<br>
Health<br>
Livelihood<br>
Women Empowerment<br>
Disaster Response<br>
Empowering Grassroots<br>
Child for Child<br><br>

<p style="color:white;"><b>COMPAIGN</b><br>
Every Child in School <br>
Plate Half-Full<br>
She Can Fly<br>
Health Cannot Wait</p>
</div>
    <div class="col-md-2" style="background-color:#2e2e2e; height:400px;">
        <h5 style="color:white"><b>GET INVOLVED</b></h5>
        <p style="color:white;">Individual Support<br>
            Corporate Partnerships<br>
            Volunteer<br>
           Careers<br>
        </p>
        <h5 style="color:white;"><b>FAQS</b></h5>
        <h5 style="color:white;"><b>MEDIA CENTRE</b></h5><br>
        <h5 style="color:white;"><b>RESOURCE CENTRE</b></h5>
        <p style="color:white;">Annual Report
Newsletter<br>
Photo Journey<br>
Stories of Change</p></div>
  <div class="col-md-2" style="background-color:#2e2e2e; height:400px;">
    <!--<img src="pic12.jpg">--></div>
</div>


<div class="row">
  <div class="col-md-1" style="background-color:#424242; height:50px;"></div>
  <div class="col-md-10" style="background-color:#424242; height:50px;">
    <p style="color:white; line-height:50px;">
      &nbsp &nbsp &nbsp &nbsp &nbsp
      &nbsp &nbsp &nbsp &nbsp &nbsp
      &nbsp &nbsp &nbsp &nbsp &nbsp
            &nbsp &nbsp &nbsp &nbsp &nbsp
            &nbsp &nbsp &nbsp 
            &nbsp &nbsp &nbsp &nbsp &nbsp
            &nbsp &nbsp &nbsp &nbsp &nbsp
            &nbsp &nbsp &nbsp 
    © 2019 Smile Foundation. All Rights Reserved. | Staff Login  | Partners Login | Privacy Policy</p>
  </div>
  <div class="col-md-1" style="background-color:#424242; height:50px;"></div>
</div>


</body>
</html>