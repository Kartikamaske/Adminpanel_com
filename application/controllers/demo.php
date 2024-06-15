<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class demo extends CI_controller()


function insertRecipe(){

		$recipeName= $this->input->post('recipeName'); 
		 $fkRecipeType= $this->input->post('fkRecipeType');
		 $ingredients= $this->input->post('ingredients');
		 $methods= $this->input->post('methods'); 
		 $time= $this->input->post('time');
		 $cooktime= $this->input->post('cooktime');

		 $makes= $this->input->post('makes'); 
		 $photo= $this->input->post('photo');
		 $active= $this->input->post('active');

		//  $deactive= $this->input->post('deactive'); 
		 $developperson= $this->input->post('developperson');
		 $helth_benefits= $this->input->post('helth_benefits');
		 $fkVenusId= $this->input->post('fkVenusId');
		 $fkproteinsId= $this->input->post('fkproteinsId');
		 $fkalgId= $this->input->post('fkalgId');


		 
	   //   image code start
   
	   $photo = '';  
	   if($_FILES["photo"]["name"] != '')  
		 {  
			$photo = $this->upload_image();  
		 }  
	  else  
		 {  
			 $photo = $this->input->post("hidden_photo");  
		 } 
	   //   image code end
 
		 
		
		  $fields=array(
			             'recipeName'=>$recipeName,
						 'fkRecipeType'=>$fkRecipeType,
						 'ingredients'=>$ingredients,
						 'methods'=>$methods,
						 'time'=>$time,
						 'cooktime'=>$cooktime,
						 'makes'=>$makes,
						 'photo'=>$photo,
						 'active'=>$active,
						
                    	 'developperson'=>$developperson,
						 'helth_benefits'=>$helth_benefits,
						


						 
				'created_date'=>date('Y-m-d H:i:s'),
				'created_by'=>1);
			     echo json_encode($fields);
		    $getId =   $this->Commonmodel->insertRecord("recipe_master",$fields);

			if(!empty($fkVenusId))
			{ 

			  for($i=0;$i<count($fkVenusId);$i++)
			  { 
				  $insertkeys=array(
				  'fkrecipeId'=>$getId,
				  'fkVenusId'=>$fkVenusId[$i],
					'created_by'=>1
	
						   );
				 
				  

			  $this->Commonmodel->insertRecord("venus_keys",$insertkeys);
			  
			   }
			 }
             

			 if(!empty($fkproteinsId))
			{ 

			  for($i=0;$i<count($fkproteinsId);$i++)
			  { 
				  $insertkeys=array(
				  'fkrecipeId'=>$getId,
				  'fkproteinsId'=>$fkproteinsId[$i],
					'created_by'=>1
	
						   );
				 
				  

			  $this->Commonmodel->insertRecord("proteins_keys",$insertkeys);
			  
			   }
			 }

			 if(!empty($fkalgId))
			{ 

			  for($i=0;$i<count($fkalgId);$i++)
			  { 
				  $insertkeys=array(
				  'fkrecipeId'=>$getId,
				  'fkalgId'=>$fkalgId[$i],
					'created_by'=>1
	
						   );
				 
				  

			  $this->Commonmodel->insertRecord("alg_keys",$insertkeys);
			  
			   }
			 }


	       } 