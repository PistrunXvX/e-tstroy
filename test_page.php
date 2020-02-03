<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>test-page</title>
	</head>
	<body>
	
		<div style="border: solid 12px blue; width: 500px; height: 500px;">
			<img src="../img/project_img/IMG_0159.jpg" alt="" height="500" width="500" class="img-template" id="image"> 
		</div>

		<input type="button" value="PREVIOUS" id="prev" name="prev" onclick="goback();" >
	
		<input type="button" value="NEXT" id="next" name="next" onclick="gofwd();" >	



		<script>
	    	
	    	let images = new Array(3);  
	    
	    	images[0] = "../img/project_img/IMG_0159.jpg"
	    	images[1] = "../img/2_chertez-min.jpg";
	    	images[2] = "../img/Poekt_2.png"
	    	images[3] = "../img/Proekt_1.png"
	     

	    	let numimg = 3;
	    	let curimg = 0;

	  		function  goback() {
	    		let im=document.getElementById("image");
	    		if(curimg > 0)
	   			{
	    			im.src = images[curimg-1];
	    			curimg = curimg - 1;
	   			}else{
	    				return;
	   				}
			}


			function gofwd(){
				let im=document.getElementById("image");
	    		if(curimg < numimg){
	    			im.src = images[curimg+1];
	    			curimg = curimg + 1;
	   			}else{
	     				return;
	       			}
			}

		</script>
	</body>
</html>