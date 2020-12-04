<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Vẽ tam giác</title>
		<style type="text/css">
	       .content{
	           margin: 15px auto;
	       	   text-align: center;
	       }
	       
	       .content h1{
	           color:red;
	       }
	       
	       .content ul{
	           text-align: center;
	       	   padding-left: 120px;
	       }
	      
	       .content ul li{
	       	   float: left;
	           text-decoration: none;
	       	   list-style: none;
	       	   padding-left:50px;
	       	   text-align: center;
	       }
	       
	       .content div.result{
	           margin-left: 30px;
	       	padding-top:150px;
	       }
	       
	    </style>
	</head>
	<body>
        <div class="content">
        	<h1>Vẽ tam giác</h1>
        	<ul>
        		<li><a href="06-loop-vetamgiac.php?type=1">1</a></li>
        		<li><a href="06-loop-vetamgiac.php?type=2">2</a></li>
        		<li><a href="06-loop-vetamgiac.php?type=3">3</a></li>
        	</ul>
        	
        	<div class="result">
                <?php 
                    $type="";
                    $result="";
                    if(isset($_GET["type"])){
                        $type=$_GET["type"];
                        switch($type){
                            case 1:
                                for($i=1;$i<=6;$i++)
                                    $result .= str_repeat("*", $i). "<br/>";
                                break;
                            case 2:
                                $i=6;
                                while($i>=1){
                                    $result .= str_repeat("*", $i). "<br/>";
                                    $i--;
                                }
                                break;
                            case 3:
                                //$i=6;
                                //$n=6;
                                // space = n-i
                                $i = 1;
                                $n=6;
                                while($i<=$n){
                                    $space = str_repeat(" ", $n - $i);
                                    $character = str_repeat("*", 2*$i-1);
                                    $result .= $space . $character . "<br/>";
                                    $i++;
                                }
                                break;
                        }
                    }
                    echo $result;
                ?>
        	</div>
        </div>
        
	</body>
</html>

