<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<style type="text/css">
            *{
	           margin:0px;
            	padding:0px;
            }
            
            .content{
	           margin: 10px auto;
            	width: 500px;
            	padding: 10px;
            	height: auto;
            	border: 2px solid #ddd;
            }
        </style>
	</head>
	<body>
		<div class="content">
		<?php 
		$group = array("1"=>"Admin", "2"=>"Manager","3"=>"Member","4"=>"Guest" );
		$city = array("ct"=>"Cần Thơ", "dl"=>"Đà Lạt", "tg"=>"Tiền Giang");
		function createSelectBox($name, $attributes, $array, $keySelect){
		    if(!empty($array)){
		        $xhtml = '<select name="'.$name.'" id="'.$name.'" style="width: '.$attributes.'">';
		        foreach ($array as $key => $value){
		            if($key == $keySelect){
		                $xhtml .= '<option value="'.$key.'" selected="selected">'.$value.'</option>';
		            }else {
		                $xhtml .= '<option value="'.$key.'">'.$value.'</option>';
		            }
		            
		        }
		        $xhtml .= '</select>';
		    }
		    echo $xhtml;
		}
		
		echo createSelectBox("group", "200px", $group, 3) . "<br/>";
		echo createSelectBox("city", "200px", $city, "dl");
		
		?>
			
		</div>
	</body>
</html>