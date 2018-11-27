<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
<style>
*{
	margin:0;
	padding:0;
}
.bgc{
  background-color:	#FF8C00;
}
.imgicon{
  margin:-30px;
  color:black;
}
.image{
	position:absolute;
margin-left:300px;
margin-top:-350px;
}
p{
	font-family:Georgia, serif;
	font-size:25px;
	color:BCB7BB;
}
a:hover{
    text-decoration: none;
}

.border{
	border-style: solid;
    border-width: 500px;
	margin:10px;
}
.foot{
	background-color:#E8E5E3;
	font-size:15px;
	color:#BDB7B3;
	position:bottom
}
.active{
	text-decoration: underline;
}
.format{
	font-family:Georgia;
	margin-left:300px;
	margin-right:300px;
}
h1{
	font-family:serif;
	color:#BDB7B3;
}
.price{
	font-size:40;
	font:family:Impact;
	color:E75C0D;
}	
select{
	font-size:18;
	font:family:Impact;
	width:150;
	background-color:DFE4E3;
}	
.b{
	font-size:18;
	font:family:Impact;
	width:150;
	height:50;
}
.error{
	color:red;
}
#search{
	margin-left:140;
}
#search_input{
	font-size:30;
	background-color:0AF4F7;
	color:F70ABE;
}
.pagination {
    display: inline-block;
	position: absolute;
    right: 200px;
    
}
#page{
	color:red;
}
.pagination a {
    color: black;
    padding: 8px 16px;
	border: 1px solid #ddd;
}
.pagination a:hover:not(.active) 
{
	width:50px;
	background-color: #ddd;
}
#drop ul{
	width:150px;
	background-color:#FF8C00;
	border:1px solid white;
	border-color:#FF8C00;
	height:50px;
	line-height:50px;
	text-align:center;
	list-style:none;
	display:relative;
	margin-top:40px;
	margin-left:50px;
	font-size:20px;
	font-family:Times New Roman;
}
#drop ul li{
	display:none;
	background-color:#FF8C00;
	border:1px solid white;
	border-radius:20px;
}
#drop ul:hover > li{
	display:block;
}
#drop ul a{
	text-decoration:none;
	color:white;
	display:block;
}
#drop ul li a:hover{
	background-color:green;
	border-radius:20px;
}
#about{
	display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
	color:#581845;
	font-family:Courier New;
	font-size:20;
}
/* Bordered form */
form {
    border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #FF8C00;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
    opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
    width: 15%;
    border-radius: 50%;
}

/* Add padding to containers */
.container {
    padding: 16px;
}

/* The "Forgot password" text */
span.psw {
    float: right;
    
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }
    .cancelbtn {
        width: 100%;
    }
}
</style>