<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class ="bg-warning text-dark">
    <h1 class="text-center ">Hello!</h1>
    	<div class="container">
    	<table class="table table-dark table-hover">
	  		
	  		<tr>
	  		
	  		<th scope="col">#</th>
	  		<th scope="col">Username</th>
	  		<th scope="col">First Name</th>
	  		<th scope="col">Last Name</th>
	  		<th scope="col">Action</th>	  		
	  		</tr>
	
	  		
	  		<tbody> 
		  		<?php foreach($result as $row) {?>
		  		<tr>
		  		<td scope="row"><?php echo $row->id?></td>
		  		<td scope="row"><?php echo $row->username?></td>
		  		<td scope="row"><?php echo $row->firstName?></td>
		  		<td scope="row"><?php echo $row->lastName?></td>
		  		<td scope="row"><a class="btn btn-outline-warning"href="<?php echo site_url('Main/edit');?>/<?php echo $row->id;?>">Edit</a> | <a class ="btn btn-danger " href="<?php echo site_url('Main/delete');?>/<?php echo $row->id;?>">Delete </a></td>
		  		</tr>	
	  			<?php }?>
	  		
	  		</tbody>
	  		
		</table>
	<!-- Button trigger modal -->
		<div class=" container d-grid gap-2 d-md-flex justify-content-md-end">
		<button type="button" class="btn btn-primary me-md-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
		  Add User
		</button>
  	
	</div>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
			<h4 class="modal-title" id="exampleModalLabel">New User</h4>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">
			<form method="POST" action="<?php echo site_url('Main/createData')?>">
  <div class="mb-3">
    <label for="exampleInputUsername1" class="form-label">Username</label>
    <input type="text" name ="username" class="form-control" id="exampleInputUsername1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name ="password" class="form-control" id="exampleInputPassword1">
  </div>
<div class="mb-3">
    <label for="exampleInputFirstName1" class="form-label">First Name</label>
    <input type="text" name ="firstName" class="form-control" id="exampleInputFirstName1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputLastName1" class="form-label">Last Name</label>
    <input type="text" name ="lastName" class="form-control" id="exampleInputLastName1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
		      </div>
		      <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>
    	
    	
    	</div>
    	
    
    
     <?php  
        //echo "<pre>";  
        //echo print_r($this->session->all_userdata());  
        //echo "</pre>";  
        ?>  
     <div class="container">  
     <br>
     <br>
     <br>
     <br>
     <a class="btn btn-dark"href='<?php echo base_url()."index.php/Main/logout"; ?>'>Logout</a> 
     </div>
     
    
    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>

        
 
