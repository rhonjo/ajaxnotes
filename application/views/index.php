<html>
<head>
    <title>Notes</title>
    <style>
    h3, h4{
    	display: inline-block;
    	margin: 0px;
    }
    textarea{
    	display: block;
    	width: 200px ;
    }
    .box{
    	border: 1px solid black;
    	display: block;
    	width: 200px;
    	height: 300px;
    	margin: 10px;
    	padding: 10px;
    	display: inline-block;
    }
    body{
    	width: 900px;
    }
    #post{
    	width: 150px;
    	height: 100px;
    }
    .button{
    	width: 50px;
    	height: 80px;
    }
    #title{
    	font-weight: bold;
    	font-size: 16px;
    }
    
    </style>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script>
       $(document).ready(function() {
        	$.get('/notes/index_html', function(res) {
          		$('#box').html(res);
          	});
		      	$(document).on('submit', 'form', function(){
  			        $.post(
  			        	$(this).attr('action'), 
  			        	$(this).serialize(), 
  			        	function(res) 
	  			        {
	  			            $('#box').html(res);
	  		            }
	  		        );
  		          return false;

		      	})
		      	$(document).on('focusout', 'textarea', function(){
  			        $(this).submit();
		      	})

       });

    </script>
</head>
<body>
    <h1>Notes:<h1>
    <div id="box">
    </div>
    <h3> Add a Note: </h3>
     <form action='/notes/add' method='post'>
   		<input type='textarea' name='title' id="title" placeholder='title...'><br>
	   <input type='textarea' name='description' id="post" placeholder='description...' ><br>
	   <input id='addnote' type='submit' value='Post it!' class="button">
   </form>
</body>
</html>