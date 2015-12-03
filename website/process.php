<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PHP demo</title>
        <meta name="description" content="This is php demo">
        <link rel="stylesheet" href="xyz" media="screen">
        <style type="text/css">
        	*{
        		font-family: sans-serif;
        		margin: 0px;
        		padding: 5px auto;
        	}
        	#container {
        		margin: 0 auto;
        		width: 330px;
        		height: 200px;
        	}
        	a {
        		text-decoration: none;
        	}
        	div {
				height:30px;
				line-height: 30px;
				text-align: center;
				width: 100px; 
				background-color:#c6c6c6; 
				border: 1px solid black;
				}	
			div li{
				list-style: none;
			}
			a div p{
				color: white;
			}
        </style>
    </head>

<body>
	<div id="container">
		<p>You entered the following</p>
		<ul>
			<li><?php echo $_POST['name']; ?> </li>
			<li><?php echo $_POST['quest']; ?> </li>
			<li><?php echo $_POST['color']; ?></li>
		</ul>
		<br>
		<a href="index.html">
			<div><p>go back<p></div>
		</a>
	</div>
</body>
</html>