    <!--*************___Including-Head parts___**************-->
    <?php 
   
    include 'Shared/Head.php';
     // login session
    
     if(isset($_POST['login'])){

      if(isset($_POST['email']) && $_POST['email'] != '' && isset($_POST['password']) && $_POST['password'] != ''){ // no null values allowed
    
        $sql=mysqli_query($con,"SELECT * FROM users  WHERE email = '".trim($_POST['email'])."' AND password='".trim($_POST['password'])."'");
        if (mysqli_num_rows($sql)== 1) {
    
          $row = mysqli_fetch_array($sql);
    $_SESSION['userType']=$row['user_type'];
    $_SESSION['userId']=$row['user_id'];
    redirect('Admin');
    message("Dear ".$row['fname']." ".$row['lname'].", Your are welcome, ");
    die();
         }else{
          message("Username or password is incorect!", "error");
          redirect('index.php');
          die();
        }
    
      }else{
        message("Oops..! It seems that something went wrong, Please try again later!", "error");
        redirect('index.php');
        die();
      }
    
    }
    
    //
        
        
        
        
        
        
        
        
        
        
        
        
        // end of loggin session
    
    
    ?>
    <title>SignIN - TraverIS</title>
  </head>
  <body>
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
      <div
        class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800"
      >
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img
              aria-hidden="true"
              class="object-cover w-full h-full dark:hidden"
              src="./assets/img/create-account-office.jpeg"
              alt="Office"
            />
            <img
              aria-hidden="true"
              class="hidden object-cover w-full h-full dark:block"
              src="./assets/img/create-account-office-dark.jpeg"
              alt="Office"
            />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <h1
                class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
              >
                Login
              </h1>
              <?php check_message();?>
              <form method="POST" action="">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Email or Username:</span>
                <input type="email"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="me@mail.com"  required name="email"
                />
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Password:</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="***************"
                  type="password" name="password"
                />
              </label>
              <button type="submit"
                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white 
                transition-colors duration-150 bg-purple-600 border 
                border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 
                focus:outline-none focus:shadow-outline-purple"
                name="login"
              >
                SignIN
              </button>
  </form>
              <hr class="my-8" />
              <p class="mt-4">
                <a
                  class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                  href="../Register.php"
                >
                  Don't you have an account? SignUP
                </a>
              </p>
              <p class="mt-4">
                <a
                  class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                  href="../Shared/Forgot.php"
                >
                  Don't you remember password? Forgot
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
