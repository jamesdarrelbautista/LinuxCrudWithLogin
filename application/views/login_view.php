    <!DOCTYPE html>  
    <html lang="en">  
    <head>  
        <meta charset="utf-8">  
        <title>Login Page</title>  
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/style.css">
    
    </head>  
    <body>  
    <div class="sidenav">
         <div class="login-main-text">
            <h2>Application<br> Login Page</h2>
            <p>Login or register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form method="post" action='Main/login_action'>
               <?php  echo validation_errors(); ?>
                  <div class="form-group">
                     <label>User Name</label>
                     <!-- <input type="text" name="username" class="form-control" placeholder="User Name"> -->
                     <?php $data = array(
                            'name'          => 'username',
                            'id'            => 'username',
                            'class'         => 'form-control',
                            'placeholder'   => 'User Name'
                     );
                     echo form_input($data);
                     ?>
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <!-- <input type="password" name="password" class="form-control" placeholder="Password"> -->
                    <?php $data = array(
                            'name'          => 'password',
                            'id'            => 'password',
                            'class'         => 'form-control',
                            'placeholder'   => 'Password'
                     );
                    
                    
                    echo form_password($data);?>
                  </div>
                  <!-- <button type="submit" name="insert" class="btn btn-black">Login</button> -->
                  <?php $data = array(
                            'name'          => 'submit',
                            'id'            => 'submit',
                            'value'         => 'Login',
                            'class'         => 'btn btn-black',
                            'placeholder'   => 'Password'
                     );
                  
                  
                  echo form_submit($data);?>
                  <button type="submit" class="btn btn-secondary">Register</button>
               </form>
            </div>
         </div>
      </div>
        <?php  
      
        echo form_open('Main/login_action');  
      
        echo validation_errors();  
        
        echo "<p>Username: ";  
        echo form_input('username', $this->input->post('username'));
        echo "</p>";  
      
        echo "<p>Password: ";  
        echo form_password('password');  
        echo "</p>";  
      
        echo "</p>";  
        echo form_submit('login_submit', 'Login');  
        echo "</p>";  
      
        echo form_close();  
      
        ?>  
      
        <a href='<?php echo base_url()."index.php/Main/signin"; ?>'>Sign In</a>  



       
    </body>  
    </html>  
