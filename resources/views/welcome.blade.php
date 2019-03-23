<!DOCTYPE html>

<html>
<head>
    <title>Esquire Electronics Ltd</title>
    <link rel="icon" type="image/ico" href="picture/icon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>


    <style>

    * {box-sizing: border-box;}

    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }


    .dropdown {
        float: left;
        overflow: hidden;
    }

    .dropdown .dropbtn {
        font-size: 16px;  
        border: none;
        outline: none;
        color: black;
        padding: 14px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
    }

    .navbar a:hover, .dropdown:hover .dropbtn {
        background-color: red;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .topnav {
        overflow: hidden;
        background-color: #e9e9e9;
        size: 7px;
    }

    .topnav a {
        float: left;
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: red;
        opacity: 0.4
    }

    .topnav a.active {
        background-color: #2196F3;
        color: white;
    }

    .topnav .search-container {
        float: right;
    }

    .topnav input[type=text] {
        padding: 6px;
        margin-top: 8px;
        font-size: 17px;
        border: none;
    }

    .topnav .search-container button {
        float: right;
        padding: 6px 10px;
        margin-top: 8px;
        margin-right: 16px;
        background: #ddd;
        font-size: 17px;
        border: none;
        cursor: pointer;
    }

    .topnav .search-container button:hover {
        background: #ccc;
    }

    @media screen and (max-width: 600px) {
        .topnav .search-container {
            float: none;
        }
        .topnav a, .topnav input[type=text], .topnav .search-container button {
            float: none;
            display: block;
            text-align: left;
            width: 100px;
            margin: 0;
            padding: 14px;
        }
        .topnav input[type=text] {
            border: 1px solid #ccc;  
        }
    }

    #slideshow {
        margin-bottom: 5px;
        width: 740px;
        height: 300px;
        overflow: hidden;
        white-space: nowrap;
    }

    #slideshow img {
        display: inline-block;
        width: 100px;
        height: 100px;
    }

    .circle {
        margin-right: 15px;
        display: inline-block;
        background-color: lightgrey;
        width: 12px;
        height: 12px;
        border-radius: 100px;
    }


</style>
</head>
<body>



    <div style="margin: auto">

        <div style="margin: auto">


            <a href="esq.html">
                <img style="margin: 15px 15px 15px 25px"; src="picture/esq.png" class ="png" alt="" href="esq.php">
            </a>
            <div class="topnav">

                <a href="esq.html">HOME</a>
                <div class="dropdown">
                    <button class="dropbtn">PRODUCT 
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a align="center" href="general.html">GENERAL</a><br>
                        <a href="philips.html">PHILIPS</a><br>
                        <a href="sharp.html">SHARP</a><br>
                    </div>
                </div> 

                <div class="dropdown">
                    <button class="dropbtn">ABOUT US
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="profile.html">Company Profile</a><br>
                        <a href="history.html">History of Esquare Electronics</a><br>
                        <a href="msg.html">Message from Chairman</a><br>
                    </div>
                </div> 
                <a href="offers.html">PROMOTIONAL OFFERS</a>

                <div class="dropdown">
                    <button class="dropbtn">STORE & DEALAR LOCATOR
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="store.html">STORE</a><br>
                        <a href="locator.html">DEALAR LOCATOR</a><br>
                    </div>
                </div> 
                <a href="contact.html">CONTACT US</a>
                <div class="search-container">
                    <form action="action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>

            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <body>

                <div class="w3-content w3-section" style="max-width:1350px;margin: auto;" >

                    <a href="sharp.html"><img class="mySlides w3-animate-fading" src="picture/1.jpg" style="width:100%;"></a>
                    <a href="sharp.html"><img class="mySlides w3-animate-fading" src="picture/2.jpg" style="width:100%;"></a>
                    <a href="general.html"><img class="mySlides w3-animate-fading" src="picture/3.jpg" style="width:100%;"></a>
                </div>

                <script>
                    var myIndex = 0;
                    carousel();

                    function carousel() {
                        var i;
                        var x = document.getElementsByClassName("mySlides");
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";  
                        }
                        myIndex++;
                        if (myIndex > x.length) {myIndex = 1}    
                            x[myIndex-1].style.display = "block";  
                        setTimeout(carousel, 5000);    
                    }
                </script>


                <div style="text-align: center;">
                    <div style=" margin: 10px; text-align: center; float: left;width: 33%">
                        <table>
                            <tr>
                                <th style="text-align: left">
                                    <i class='fas fa-cart-arrow-down' style='font-size:40px'></i>

                                </th>
                                <th style="text-align: right"><h2 style="color: red"><strong>Shope online </strong> </h2>
                                    Buy your fevorite product online

                                </th>
                            </tr>
                        </table>



                    </div>

                    <div style=" margin: 10px; text-align: center; float: left;width: 31%">
                        <table>
                            <tr>
                                <th style="text-align: left">
                                    <i class='fab fa-amazon-pay' style='font-size:40px'></i>

                                </th>
                                <th style="text-align: right"><h2 style="color: red"><strong>Secure Payment </strong> </h2>
                                    100% secure payment options

                                </th>
                            </tr>
                        </table>



                    </div>
                    <div style=" margin: 10px; text-align: right; float: right;width: 31%">
                        <table>
                            <tr>
                                <th style="text-align: left">
                                    <i class='fas fa-cart-arrow-down' style='font-size:40px'></i>

                                </th>
                                <th style="text-align: right"><h2 style="color: red"><strong>Free Delivery </strong> </h2>
                                    Free home delivery across Bangladesh

                                </th>
                            </tr>
                        </table>



                    </div>


                    <div>
                        <div style=" margin: 10px; text-align: center; float: left;width: 31%">
                            <img src="picture/sp.jpg" width="320" height="275">


                        </div>

                        <div style=" margin: 10px; text-align: center; float: left;width: 31%">

                            <iframe width="320" height="275" src="picture/general.mp4">
                            </iframe>
                        </div>
                        <div style=" margin: 10px; text-align: center; float: right;width: 31%">


                            <img src="picture/oven.jpg" width="320" height="275">


                        </div>

                    </div>

                </div>

                <div style="clear:both;"></div>

                <div style=" margin-top: 200px; background-color: black;height: 400px;width: 100%;padding: 10px;">
                    <div style="color: gray;text-align: left; float: left;width: 25%">

                        <ul><strong>Shoopping with us</strong>
                            <li>
                                <a href="shoponline.html">Why Shop Online at Esquire Electronics</a>
                            </li>
                            <li>
                                <a href="onlinepurchase.html">Online Purchase Procedure</a>
                            </li>
                            <li>
                                <a href="onlinepayment.html">Online Payment Methosd</a>
                            </li>
                            <li>
                                <a href="onlinepaymentsecurity.html">Online Payment Security</a>
                            </li>
                        </ul>

                    </div>
                    <div style=" color: gray;text-align: left;float: left;width: 25%">
                        <ul><strong>Customer Service</strong>
                            <li>
                                <a href="contact.html">Contact Us</a>
                            </li>
                            <li>
                                <a href="servicecenter.html">Contact Service Center</a>
                            </li>
                            <li>
                                <a href="complain.html">Submit Complaint</a>
                            </li>
                            <li>
                                <a href="warrantypolicy.html">Warranty Policy</a>
                            </li>
                        </ul>
                        
                    </div>
                    <div style="color: gray;text-align: left;float: left;width: 25%">
                        <ul><strong>Useful link</strong>
                            <li>
                                <a href="store.html">Store Locator</a>
                            </li>
                            <li>
                                <a href="locator.html">Dealer Locator</a>
                            </li>
                            <li>
                                <a href="sharp.html">Sharp Brand Product</a>
                            </li>
                            <li>
                                <a href="general.html">General Brand Product</a>
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
                <strong>Copyright &copy; 2014-2016 <a href="esq.html">Esquire Electronics Ltd</a>.</strong> All rights
                reserved.
            </footer>


        </body>
        </html>
