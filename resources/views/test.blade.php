<!DOCTYPE !html>

<html>

<head>
    <title>Test Page</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <style>
            html, body {
            	background-color: #636b6f;
                color: #fff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 70px;
            }

            .m-b-md {
                margin-bottom: 50px;
            }

            .lists {
            	color: #ff0000;
            }

            .login-box {
            	margin: auto;
            	position: relative;
            	border-style: solid;
            	border-radius: 5px;
            	height: 55vh;
            	width: 45vh;
                font-size: 40px;
            }
        </style>
</head>

<body>
	<div class="content">
		<div class="title m-b-md">
    		Welcome <?= $name; ?>
   		 </div>

	</div> 

    <div class="login-box flex-center">
    	Login
	</div> 

	<ul class="lists"> 
	@foreach ($tasks as $task)
	    <li class="lists">{{$task}}</li>
	@endforeach
    </ul>
</body>

</html>
