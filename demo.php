<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    	.php-demo {
 			margin: auto;
    		width: 444px;
    		border: 1px solid #ccc;
    		box-shadow: 1px 1px 12px #ccc;
    		padding: 0px 20px;
    		text-align: justify;

    	}
    </style>
</head>
<body>
    
    <div class="php-demo">
    	<h3>
    	    <?php 
    			for($i = 1; $i < 101; $i++) {
    				echo $i."   ";
    			}
    		?>
    	</h3>
    </div>


</body>
</html>