<!DOCTYPE html>

<html lang="en" data-ng-app="App">
<head>

    <title>Esquire Electronics Ltd</title>

    <link rel="icon" type="image/ico" src="picture/icon.png" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    
    <!-- js -->
    

</style>
</head>
<body ng-controller="AppController">



    <div style="margin: auto">

        <div style="margin: auto">


            <a ui-sref="home">
                <img style="margin: 15px 15px 15px 25px"; src="picture/esq.png" class ="png" alt="" ui-sref="home">
            </a>
            <div class="topnav">

                <a ui-sref="home">HOME</a>
                <div class="dropdown1">
                    <button class="dropbtn">PRODUCT 
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown1-content">
                        <a align="center" ui-sref="general">GENERAL</a><br>
                        <a ui-sref="philips">PHILIPS</a><br>
                        <a ui-sref="sharp">SHARP</a><br>
                    </div>
                </div> 

                <div class="dropdown1">
                    <button class="dropbtn">ABOUT US
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown1-content">
                        <a ui-sref="profile">Company Profile</a><br>
                        <a ui-sref="history">History of Esquare Electronics</a><br>
                        <a ui-sref="msg">Message from Chairman</a><br>
                    </div>
                </div> 
                <a ui-sref="offers">PROMOTIONAL OFFERS</a>

                <div class="dropdown1">
                    <button class="dropbtn">STORE & DEALAR LOCATOR
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown1-content">
                        <a ui-sref="store">STORE</a><br>
                        <a ui-sref="locator">DEALAR LOCATOR</a><br>
                    </div>
                </div> 

                <a ui-sref="registration">REG</a>
                <a ui-sref="studentinfo">Stdinfo</a>
                <a ui-sref="login"><img height="25px" width="25px" src="picture/log.png"></a>
                <div class="search-container">
                    <form action="action_page.php">
                        <input type="text" placeholder="Search..">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>


            


            <div style="padding: 20px">
                <div ui-view> </div>
            </div>

            



            <div style=" margin-top: 200px; background-color: black;height: 400px;width: 100%;padding: 10px;">
                <div style="color: gray;text-align: left; float: left;width: 25%">

                    <ul><strong>Shoopping with us</strong>
                        <li>
                            <a ui-sref="shoponline">Why Shop Online at Esquire Electronics</a>
                        </li>
                        <li>
                            <a ui-sref="onlinepurchase">Online Purchase Procedure</a>
                        </li>
                        <li>
                            <a ui-sref="onlinepayment">Online Payment Methosd</a>
                        </li>
                        <li>
                            <a ui-sref="onlinepaymentsecurity">Online Payment Security</a>
                        </li>
                    </ul>

                </div>
                <div style=" color: gray;text-align: left;float: left;width: 25%">
                    <ul><strong>Customer Service</strong>
                        <li>
                            <a ui-sref="contact">Contact Us</a>
                        </li>
                        <li>
                            <a ui-sref="servicecenter">Contact Service Center</a>
                        </li>
                        <li>
                            <a ui-sref="complain">Submit Complaint</a>
                        </li>
                        <li>
                            <a ui-sref="warrantypolicy">Warranty Policy</a>
                        </li>
                    </ul>

                </div>
                <div style="color: gray;text-align: left;float: left;width: 25%">
                    <ul><strong>Useful link</strong>
                        <li>
                            <a ui-sref="store">Store Locator</a>
                        </li>
                        <li>
                            <a ui-sref="locator">Dealer Locator</a>
                        </li>
                        <li>
                            <a ui-sref="sharp">Sharp Brand Product</a>
                        </li>
                        <li>
                            <a ui-sref="general">General Brand Product</a>
                        </li>

                    </ul>

                </div>
                <div style="color: gray;text-align: left;float: left;width: 25%">
                    <ul><strong>About Us</strong>
                        <p><strong>Esquire Electronics Ltd.</strong>  is a Member Unit of Esquire Group, one of the most well renowned and respected business conglomerate of the nation. They started operations in the year 1977 and almost through 4 decades they have been trying to meet the household needs for consumers with quality electronics appliances.</p>


                    </ul>

                </div>


            </div>



        </div>

        <footer style="margin: auto;" class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.0
            </div>
            <strong>Copyright &copy; (2014-2016)  <a ui-sref="esq.html"> Web Designer Name</a>.</strong> All rights
            reserved.
        </footer>


        <script src="js/angular.min.js"></script>
        <script src="js/ocLazyLoad.min.js"></script>
        <script src="js/angular-ui-router.js"></script>
        <script src="js/main.js" type="text/javascript"></script>
        <script src="js/routes.js" type="text/javascript"></script>


    </body>




    </html>
