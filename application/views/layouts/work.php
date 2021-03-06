<!DOCTYPE html>
<html>
	<head>
    <meta charset='utf8' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title><?php echo $template['title']; ?></title>
		<?php echo $template['metadata']; ?>
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="/assets/css/bootstrap.min.css"> 
    <script type="text/javascript" src="/assets/js/jquery-1.10.2.min.js"></script> 
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>      

    <style>
        body{
            font-family: Lato, sans-serif, 微軟正黑體;
        }      
      
      
        a, a:hover{
            color: black;
        }
      
        img{
            max-width: 100%;
            max-height: 600px;
        }
        
        .work-box{
            margin-bottom: 10px;
            height: 180px;
            overflow: hidden;
        }
        
        .layout-sidebar{
            line-height: 1.5;
        }
      
    </style>

	</head>
	<body>
    
    <div class='container'>
        <div class='row'>
            <div class='col-sm-12'>
                <h2><a href='/'><?php echo $site->name ?></a></h2>
                <hr/>
            </div>
        </div>
        <div class='row'>
            <div class='col-sm-3'>
                    <a href='/contact'>Contact</a>
                    <br/><br/>
                <?php foreach($works as $work):?>
                    <a href='/<?php echo $work->url; ?>' class='layout-sidebar'><?php echo $work->name; ?></a>
                    <br/>
                <?php endforeach; ?>
            </div>
            <div class='col-sm-9 '>
                <?php echo $template['body']; ?>            
            </div>            
        </div>
        
        
        
    </div>


	</body>
</html>
