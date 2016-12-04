<div class="wrapper style2">
	<section class="container">
		<div class="row">
			<div id="content" class="8u skel-cell-important">
				<h2>Program to Choose conjuction, Disjunction and negation</h2>
				<h3>Statements in term of True and False</h3>
				<div class="col-md-12">
					<form action="" method="post">
						<div class="col-md-4">							
							<label for="side-a">Enter first Statement</label>
						
							<div class="btn-group">
								<!--selection for first statement start here  -->
							  <select name="taskOption" id="sel1">
							    <option>Statement</option>
							    <option value=true >true</option>
							    <option value=false>false</option>
							  </select><!--selection for first statement end here  -->
							</div>			
						</div>
						<div class="col-md-4">	
							<label for="side-b">Enter second Statement</label>
							<div class="btn-group">
								<!--selection for second statement start here  -->
							  <select name="taskOption1" class="dropdown" id="sel1">
							    <option>Statement</option>
							    <option value=true>true</option>
							    <option value=false>false</option>
							  </select><!--selection for second statement end here  -->
							</div>	
						</div>
						<div class="col-md-8">					
							<input type="submit" name="negation" value="Negation ">
							<input type="submit" name="conjuction" value="Conjuction ">
							<button name="disjunction" type="submit">Disjuction</button>
						</div>						
					</form>
				</div>
				<!--php code start here  -->
				<?php
					if(isset($_POST['negation'])){
						$selectOption = $_POST['taskOption'];
						print_r($selectOption);die;
					}
						// $t1 = $_POST['true1'];
						// $t2 = $_POST['true2'];
						// $f1 = $_POST['false1'];
						// $f2 = $_POST['false2'];
            			
            			// if ($selectOption==true||$statement==$t2) {
            			// 	echo 'negation of this statement is false';
            			// 	# code...
            			// }
            			

						# code...
					
					
					if(isset($_POST['conjuction'])){
						$selectOption1 = $_POST['taskOption'];
						$selectOption2 = $_POST['taskOption1'];
						
						if ($selectOption1==='true' && $selectOption2==='true') {

        					echo "true";	
        				# code...
        				}
        				else if($selectOption1==='true' && $selectOption2==='false')
        				{
							echo "true";
						}
						else if($selectOption1==='false' && $selectOption2==='true')
						{
							echo "true";
						}
						else if($selectOption1 === 'false' && $selectOption2 === 'false'){
							echo "false";
						}
						else{
							echo "No result to display";
						}
					}
						
            		if(@$_POST['disjunction']){
						$t1 = $_POST['true1'];
						$t2 = $_POST['true2'];
						$f1 = $_POST['false1'];
						$f2 = $_POST['false2'];
						if ($statement1==$t1 || $statement2==$t2) {

        					echo "<label>result</label> : <input type='text' value='true' class='area-result'/> <br> <br>";	
        				# code...
        				}
        				else
        				{
							echo "false";
						}
            		}
					
				?>
				<!-- <div class="col-md-12">
					<label>Result</label>
					<input type="text" readonly value="">
				</div> -->
			</div>
		</div>
	</section>
</div>