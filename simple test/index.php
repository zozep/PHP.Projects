<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Survey Form PHP</title>
        <meta name="description" content="This is a survey Form">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <style>
    	 #container{
    		width: 350px;
    		height: 350px;
    		border: 1px solid black;
    		padding: 15px;
    		margin: 15px auto;
    	}
    	#breakbox{
    		height: 35px;
    	}
    	#submitbox{
    		background-color: blue;
    		color: white;
    		font-family: sans-serif;
    		border-radius: 5px
    	}
	</style>
<body>
	<div id="container">
		<form action='result.php' method='post'>
		    Your Name:<input type='text' name='name' placeholder='Your name'>	    
		    <h3>Dojo Location</h3>
		    <select>
		    	<option value="seattle">Seattle</option>
		    	<option value="la">LA</option>
		    	<option value="dallas">Dallas</option>
		    </select>

		    <h3>Favorite Language</h3>
		    <select>
		    	<option value="php">PHP</option>
		    	<option value="javascript">Javascript</option>
		    	<option value="python">Python</option>
		    </select>

		    <h3>Your Comment</h3>
		    <textarea></textarea>

		    <div id="breakbox"></div>

		    <input id="submitbox" type='submit' value='submit!'>
		</form>
	<div>
</body>
</html>