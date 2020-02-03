let images = new Array(3);  
	    
	    	images[0] = "../img/project_img/project_1_1-min.jpg"
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
	    			curimg -= 1;
	   			}else{
	    				return;
	   				}
			
			}


			function gofwd(){
				
				let im=document.getElementById("image");
	    		
	    		if(curimg < numimg){
	    			im.src = images[curimg+1];
	    			curimg += 1;
	   			}else{
	     				return;
	       			}
			
			}

		
	