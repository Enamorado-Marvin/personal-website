<!-- Navigation -->
    <?php include "navigation.php"; ?>

    <!-- Header -->
    <div class="container pt-lg-5">    	
	    <section id="page-top">
	        <header class="d-flex">
	            <h1>Sacrament Meeting History</h1>	            
	        </header>
	    </section>
	    <section>
	    	<p>Welcome <?php echo $_SESSION["display_name"]; ?></p>
	    	<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Date</th>
			      <th scope="col">Presiding Leader</th>
			      <th scope="col">Directing Leader</th>
			      <th scope="col">Created by</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php

		          foreach ($agendas as $key => $value) {
		           
		            echo ' <tr>

		                    <td>'.($key+1).'</td>                

		                    <td class="text-uppercase"><a href="?action=details&id='.$value["id"].'">'.$value["agenda_date"].'</td>
		                    <td class="text-uppercase">'.$value["presiding_leader"].'</td>
		                    <td class="text-uppercase">'.$value["directing_leader"].'</td>';


		                    $itemUser = "id";
		                  	$valueUser = $value["user_id"];
		                  	$thisTable = "public.user";
		                  	$responseUser = get_users($thisTable, $itemUser, $valueUser);

		                  	echo '<td>'.$responseUser["display_name"].'</td>
				                    

				                  </tr>';
		          }

		        ?>		    
			  </tbody>
			</table>
	    </section>
	</div>