
    <?php
    include '../config/connection.php'; //. including thr connection 
   if(!isset($_SESSION['userId']) || $_SESSION['userId']==''){ // sessions  is not initilaized!!
    redirect('../index.ph');
    message("Access denied, PLease login to continue!","error");
    die();

   }
    //// lets bget som,e user informations right?

    // 
    
    include './Includes/Head.php' ?>
    <title>Admin Dashboard - TraverIS</title>
</head>
<body>
    <!--*************___THE BODY STRUCTURE ONE-BY-ONE___**************-->
        <!--*************___Side-Bars Settings___**************-->
        <?php include './../Shared/Aside.php' ?>
        
        <!--*************___HeadTop & Main Pannel Settings___**************-->
        <!--Head-Top Settings-->
        <?php include './../Shared/TopHead.php' ?>

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
