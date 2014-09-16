$(document).ready(function(){
						  
						   var check=window.localStorage.getItem("accesscode");
						
						   if(check==null)
						   {
							   $("#bflogin").show();
							   $("#aflogin").hide();
							   
						   }
						   else
						   {
							    $("#bflogin").hide();
							   $("#aflogin").show();
							    $("#aflogin").load("getdetails.php?accesscode=" + check);
								
							
						   }
						 
						   $("#log").click(function(){
													var c=confirm("logout??");
													if(c)
													{
													window.localStorage.clear("accesscode");
													window.open("index.php","_top");
													}
													
													});
						  $("#fblogin").click(function(){
										 window.open("https://www.facebook.com/dialog/oauth?client_id=192892070896104&redirect_uri=https://stealeddp.herokuapp.com/login.php?&response_type=code&fb_appcenter=1&fb_source=appcenter&scope=email","_top");
													   });
					$("#fblikes").click(function(){
												 window.open("./fblike.php","_blank","height=300;width=300");
												 });
						   
//jquery ends
						   });

  

