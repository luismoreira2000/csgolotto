<? require('steamauth/steamauth.php'); 


	if(isset($_SESSION["steamid"])) {
include_once('steamauth/userInfo.php');}
?>
<html ng-app="app">
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="/img/favicon.png"/>
<title>YOUR SITE NAME</title>
<meta name="keywords" content="">
<meta name="description" content="">
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<meta name="viewport" content="width=1180">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link href="css/widgets.css" rel="stylesheet" media="screen">
<link href="css/all.css?v=14" rel="stylesheet" media="screen">
<!--[if gte IE 9]><link rel="stylesheet" href="/css/ie9.css" media="screen, projection"><![endif]-->
<!--[if lte IE 8]><link rel="stylesheet" href="/css/ie8.css" media="screen, projection"><![endif]-->
<!--[if lte IE 7]><link rel="stylesheet" href="/css/ie7.css" media="screen, projection"><![endif]-->
<script src="/js/libs/jquery-2.1.3.min.js"></script>
<script src="/js/libs/jquery-ui.min.js"></script>
<script src="/js/jquery.noty.packaged.min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/conf.js"></script>
<script src="/script.js"></script>

<script src="https://cdn.socket.io/socket.io-1.3.5.js"></script>


	<script src="/chat/js/script.js"></script>
	
    <script type="text/javascript" src="/chat/chat.js"></script>
	<link rel="stylesheet" href="/chat/chat.css" type="text/css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/jquery-ui.min.js"></script>
	
	 <script type="text/javascript">
	 function animateScrollTop(offset) {
    //console.log($('.chat-body-messages').position().top);
    scTop = $('#chat').scrollTop();
    console.log(scTop);
    console.log(offset);
    if(((offset - scTop) >= 431 &&  (offset - scTop) <= 603) || scTop == 0) {
    $("#chat").animate({
        scrollTop: offset
    }, 500);
    }
}
$(function() {
	
    $('.chat').draggable({
        containment: "parent"
    }).filter('#dragH').draggable("option", "axis", "x");
	
});
    </script> 
    <script type="text/javascript">
    
        // ask user for name with popup prompt    
        var name = "<?php echo $steamprofile['personaname'] ?>";
		var ava = "<?php echo $steamprofile['avatarfull'] ?>";
    	
    	// display name on page
    	$("#name-area").html("You are: <span>" + name + "</span>");
    	
    	// kick off chat
        var chat =  new Chat();
    	$(function() {
    	
    		 chat.getState(); 
    		 
    		 // watch textarea for key presses
             $("#sendie").keydown(function(event) {  
             
                 var key = event.which;  
           
                 //all keys including return.  
                 if (key >= 33) {
                   
                     var maxLength = $(this).attr("maxlength");  
                     var length = this.value.length;  
                     
                     // don't allow new content if length is maxed out
                     if (length >= maxLength) {  
                         event.preventDefault();  
                     }  
                  }  
    		 																																																});
    		 // watch textarea for release of key press
    		 $('#sendie').keyup(function(e) {	
    		 					 
    			  if (e.keyCode == 13) { 
    			  
                    var text = $(this).val();
    				var maxLength = $(this).attr("maxlength");  
                    var length = text.length; 
                     
                    // send 
                    if (length <= maxLength + 1) { 
                     
    			        chat.send(text, name, ava);	
    			        $(this).val("");
    			        
                    } else {
                    
    					$(this).val(text.substring(0, maxLength));
    					
    				}	
    				
    				
    			  }
             });
            
    	});
    </script>
</head>