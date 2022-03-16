<?php
	header("content-type: text/css")?>


body{
	font-family:cursive;
	background-color:royalblue;
	position:fixed;

	
}	
.in, .in1 {
	color:#161F6D;
	font-weight:700;
	font-size:20px;
	position:fixed;left:420px;
}

.in {
	font-size:25px;
}

.in1{
	font-weight:500;
	top:300px;
}


.box1 {
	height: 300px;
	width: 400px;
	border: solid;
	border-radius: 25px; 
	border-color: #00000000;
	padding: 10px;
	box-shadow: 10px 10px 20px #000000;
	background-color: rgba(255, 255, 255, 0.7);
	margin:auto;
	text-align: center;
	margin-top:50px;
	position:fixed; left:400px; top:50px;
}


.add, .display, .delete, .update{
	border-radius: 10px;
	font-family: cursive;
	margin:18px;
	font-weight: 500;
	height: 35px;
	
}

.iname, .imail, .imobile, .ibranch, .ipackage, .iid, .iid1, .xmail, .xpass1, .xpass,  .uid, .uname, .umail, .umobile, .ubranch, .upackage, .isearch, .xuser{
	border-radius: 10px;
	color: #101820ff;
	font-weight: 500;
	margin:10px;
	padding: 5px;
	border-color:#00000000;
	position: fixed; left:500px;
}

.xmail{
	top:100px;
}

.xpass1{
	top:250px;
}

.xuser{
	top:150px;
}

.xpass{
	top:200px;
}

.uname{
	top:150px;
}

.umail{
	top:190px;
}

.umobile{
	top:230px;
}

.upackage{
	top:270px;
}

.ubranch{
	top: 310px;
}

.imobile{
	top: 210px;
}

.imail{
	top: 160px; 
}

.ibranch{
	position:fixed; top: 305px; 
}

.ipackage{
	position:fixed; top: 260px; 
}


.search{
	position: fixed; top:23px;
	text-align:center;
}

.submit, .submit5, .viewdata, .delete1, .home, .fid, .home1, .yes, .no, .id, .submit1, .home2, .home3, .submit2, .submit3, .submit4, .update1, .logout{
	
	border-color: #00000000;
	border-radius: 10px;
	position:fixed;
}

.submit3{
	top:340px; left:590px; height:30px
}

.submit5{
	position:fixed;top:260px;
}

.update1{
	top:350px; left: 690px;
}

.submit4{
	left:730px;  top:350px;
}

.iid1{
	top: 200px;
}

.delete1{
	left:720px; top:147px;
}

.viewdata{
	left:720px; top:213px;
}

.fid{
	position:fixed;right: 120px; top:120px;
}

.submit2{
	top:310px;
}

.submit1{
	left:720px; top: 37px;
}

.submit{
	top: 350px;
}

.home, .home1, .home3{
	position:fixed;right: 120px; top: 70px;
}

.yes, .no{
	width:50px;
	height:30px;
	top:270px; left:330px;
}

.no{
	left:400px;
}

.content-table{
	
	border-collapse: collapse;
	margin:25px 0;
	font-size: 0.9em;
	min-width:1100px;
	border-radius: 5px 5px 0 0;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,15);
	position: relative; top: 100px; left: 50px;
	margin-bottom:100px;

}
.content-table thead tr {
	background-color:#009879;
	color: white;
	text-align: left;
	font-weight: bold;
}
.content-table th,
.content-table td{
	padding: 15px 35px;
}
.content-table tbody tr {
	border-bottom:1px solid #dddddd;
}
.content-table tbody tr:nth-of-type(even){
	background-color: #f3f3f3;
	border:0;
	padding-left:20px;
}
.content-table tbody tr:nth-of-type(odd){
	background-color: #ffffff;
	border:0;
	padding-left:20px;
}
.content-table tbody tr:last-of-type {
	border-bottom: 2px solid #009879;
	border-right:0;
	padding-left:20px;
}
