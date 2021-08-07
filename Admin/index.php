
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include '../Shared/config/connection.php'; //. including the connection 
   if(!isset($_SESSION['userId']) || $_SESSION['userId']==''){ // sessions  is not initilaized!!
    redirect('../index.php');
    message("Access denied, PLease login to continue!","error");
    die();

   }
    //// lets bget som,e user informations right?
    $sql=mysqli_query($con,"SELECT * FROM users  WHERE user_id = '".trim($_SESSION['userId'])."'");
    if (mysqli_num_rows($sql)== 1) {

      $row = mysqli_fetch_array($sql);
$usertype=$row['user_type'];
$names=$row['fname']. "&nbsp;".$row['lname'];
$useremail=$row['email'];
$image = (!empty($row['image'])) ? '../upload/user/'.$row['image']: '../upload/no_image.jpg';
     }else{
      message("Oops..! It seems that something wentwrong, Please try again later!", "error");
      redirect('../index.php');
      die();
    }
    // 
    
    include './Includes/Head.php' ?>
    <title>Admin panel- TraverIS</title>
</head>
<body>
    <!--*************___THE BODY STRUCTURE ONE-BY-ONE___**************-->
        <!--*************___Side-Bars Settings___**************-->
        <?php include '../Shared/Aside.php' ?>
        
        <!--*************___HeadTop & Main Pannel Settings___**************-->
        <!--Head-Top Settings-->
        <?php include '../Shared/TopHead.php' ?>

        <!--MAIN - SETTINGS-->
        <main class="h-full pb-16 overflow-y-auto">
            <!-- Remove everything INSIDE this div to a really blank page -->
            <div class="container px-6 mx-auto grid">
            <h2
                class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
                The Main Content Goes Here!...
            </h2>
            </div>
        </main>
        </div>
    </div>
</body>
</html>
