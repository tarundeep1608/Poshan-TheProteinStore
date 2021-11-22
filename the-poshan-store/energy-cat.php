<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Bootstrap, font-awesome kits, google fonts   -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6706302c7d.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--  Custom CSS  -->
    <link rel="stylesheet" href="energy-cat-style.css">
    <meta charset="UTF-8">
    <title>The Poshan Store</title>
    <link rel="shortcut icon" type="image/png" href="https://drive.google.com/uc?export=view&id=1qXyYTD1ak7ifPbdxKtV0EgTqjuZJhZ2J"/>

</head>
<!-- main body starts here -->
<body onload="loadfun()">
<div id="loading"></div>

<!-- nav bar -->
<navbar>
    <nav class=" nav navbar navbar-expand-lg navbar-light py-3 sticky-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="https://drive.google.com/uc?export=view&id=1garJPrb4KttpqlSeCTLbB07iqu6s4PXj" style="width:160px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#al-center-nav" aria-controls="al-center-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="al-center-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pMenuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Shop <span class="sr-only">(current)</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="pMenuDropdown">
                            <a class="dropdown-item" href="protein-cat.php">Protein Sachet's </a>
                            <a class="dropdown-item" href="energy-cat.php">Energy Drinks</a>
                            <a class="dropdown-item" href="index.php#featurette-title">Our best range</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="sMenuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Community</a>
                        <div class="dropdown-menu" aria-labelledby="sMenuDropdown">
                            <a class="dropdown-item" href="blog.php">Poshan Blog</a>
                            <a class="dropdown-item" href="protein.php">Protein Calculator </a>
                            <a class="dropdown-item" href="contact.php">Contact Us </a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="philosophy.php">#poshtikbharat </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-search"></i>    Search </a>
                        <div class="dropdown">
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                <form class="px-1 py-1">
                                    <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="Search Here">
                                </form>

                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                    <?php

                    if(isset($_SESSION['logged_in']))
                    {
                     echo '<a class="nav-link" href="user.php"><i class="fas fa-user"></i>
                                           '.$_SESSION['username'].'</a>';
                    }
                    else
                    {
                    echo '<a class="nav-link" href="login.php"><i class="fas fa-user"></i>
                                                               Account </a>';
                    }
                        ?>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i>    Cart </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</navbar>
<!--bread crump-->
<ol class="breadcrumb" style="color: black">
    <li class="breadcrumb-item"><a href="index.php" style="color: black">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Energy Drinks</li>
</ol>

<!--Site title entered-->
<section id="site-title" class="site-title">
    <div class="title-text" > ALL PRODUCTS</div>
    <div class="bottom-text" > The complete range of energy drinks offered by Poshan! </div>
</section>

<!--Cards for products-->
<section id="producthighlight">
    <div id="product-card">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top " src="https://drive.google.com/uc?export=view&id=1li3P_7OkP0d-xqfjQSoSMz8biyw3z5h8" alt="e1">
            <div class="card-body ">
                <p class="card-text"> Real Mango Energy drink</p>
                <div id="buy-buttons">
                     <input type="text" value="1" name="pid">
                     <a href="#" class="btn cartbutton" onclick="atc(this)">Add to Cart</a>
                    <a href="#" class="btn cartbutton">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top " src="https://drive.google.com/uc?export=view&id=182Q43WkzsRv8e2dbxisWt1EufsXWdv7V" alt="e2">
            <div class="card-body ">
                <p class="card-text"> Cold Coffee Energy Lite Drink</p>
                <div id="buy-buttons">
                     <input type="text" value="1" name="pid">
                     <a href="#" class="btn cartbutton" onclick="atc(this)">Add to Cart</a>
                    <a href="#" class="btn cartbutton">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top " src="https://drive.google.com/uc?export=view&id=1xzCu5aSvfLo5lhf-GxxlxYCHc_0SkPLR" alt="e3">
            <div class="card-body ">
                <p class="card-text"> Real Apple Energy Drink</p>
                <div id="buy-buttons">
                    <input type="text" value="1" name="pid">
                    <a href="#" class="btn cartbutton" onclick="atc(this)">Add to Cart</a>
                    <a href="#" class="btn cartbutton">Buy Now</a>
                </div>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://drive.google.com/uc?export=view&id=1SAwxtG7Db7GoPxUy9ttjvDLuUxBZlvMB" alt="e4">
            <div class="card-body ">
                <p class="card-text"> Strawberry Smoothie Energy Drink</p>
                <div id="buy-buttons">
                     <input type="text" value="1" name="pid">
                     <a href="#" class="btn cartbutton" onclick="atc(this)">Add to Cart</a>
                    <a href="#" class="btn cartbutton">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top " src="https://drive.google.com/uc?export=view&id=1pUB58Fxklo5vpC_WVK8lS9pMyqC3JgHh" alt="e5">
            <div class="card-body ">
                <p class="card-text"> Real Blueberry Energy Drink</p>
                <div id="buy-buttons">
                     <input type="text" value="3" name="pid">
                     <a href="#" class="btn cartbutton" onclick="atc(this)">Add to Cart</a>
                    <a href="#" class="btn cartbutton">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://drive.google.com/uc?export=view&id=18JmzFRCwzPBPZb8YiOipfyKxYDuR2oGv" alt="e6">
            <div class="card-body ">
                <p class="card-text"> Lemon Soda flavor drink</p>
                <div id="buy-buttons">
                     <input type="text" value="1" name="pid">
                     <a href="#" class="btn cartbutton" onclick="atc(this)">Add to Cart</a>
                    <a href="#" class="btn cartbutton">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top " src="https://drive.google.com/uc?export=view&id=1looDoA6GMdFjGfzv5lu2ELwxy1tBFzdr" alt="e7">
            <div class="card-body ">
                <p class="card-text"> Yummy Tangy Orange Drink</p>
                <div id="buy-buttons">
                     <input type="text" value="1" name="pid">
                     <a href="#" class="btn cartbutton" onclick="atc(this)">Add to Cart</a>
                    <a href="#" class="btn cartbutton">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top " src="https://drive.google.com/uc?export=view&id=1FWca4TRfdQ1oMCpjfAesTI28PuBD6u7S" alt="e8">
            <div class="card-body ">
                <p class="card-text">  Zesty Watermelon Energy Drink</p>
                <div id="buy-buttons">
                    <input type="text" value="1" name="pid">
                    <a href="#" class="btn cartbutton" onclick="atc(this)">Add to Cart</a>
                    <a href="#" class="btn cartbutton">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top " src="https://drive.google.com/uc?export=view&id=1nXnOnvdqawdKPsVJq1Mfdo236hac2-lz" alt="e9">
            <div class="card-body ">
                <p class="card-text"> Real BCAA Energy Drink</p>
                <div id="buy-buttons">
                     <input type="text" value="2" name="pid">
                     <a href="#" class="btn cartbutton" onclick="atc(this)">Add to Cart</a>
                    <a href="#" class="btn cartbutton">Buy Now</a>
                </div>
            </div>
        </div>

    </div>
</section>
<!--about app-->
<section class="container-fluid " id="about-app">
    <div class="content title-text">
        <h3> <span>Poshan</span> App is now available on both Google Playstore and Apple Store</h3>
        <p>Download the App and Order your favorite protein flavor now!</p>

        <div id="app-buttons">
            <a href="#" class="app-button"> <i class="fab fa-apple"></i> App Store </a>
            <a href="#" class="app-button"> <i class="fab fa-google-play"></i> Google Play </a>
        </div>
    </div>
</section>


<!--footer-->
<div class="footer">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Verify</h3>
                    <ul>
                        <li><a href="verify.php">Verify your Product</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>Contact</h3>
                    <ul>
                        <li><a href="#">talktous@poshan.co</a></li>
                        <li><a href="#">+91-8076471152</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Poshan</h3>
                    <p>We believe in the power of nature, not chemicals - clean food, not supplements! In our quest to power you, we brought together some of nature's finest offerings with a delightful taste!</p>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>Legal</h3>
                    <ul>
                        <li><a href="#tncmodal" data-toggle="modal" data-target="#tncmodal">Terms and Conditions</a></li>
                        <li><a href="#privacymodal" data-toggle="modal" data-target="#privacymodal">Privacy Policy</a></li>
                        <li><a href="#cancellationmodal" data-toggle="modal" data-target="#cancellationmodal">Cancellation Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col item social">
                <h3>GET CONNECTED</h3>
                <a href="#"><i class="fab fa-facebook-square" style="color:black;"></i></a>
                <a href="#"><i class="fab fa-twitter" style="color:black;"></i></a>
                <a href="#"><i class="fab fa-snapchat-square" style="color:black;"></i></a>
                <a href="#"><i class="fab fa-instagram-square" style="color:black;"></i></a>
            </div>
            <p class="copyright">Poshan © 2021</p>
        </div>
    </footer>
</div>
<!--modal for tnc-->
<div class="modal fade" id="tncmodal" tabindex="-1" role="dialog" aria-labelledby="tncmodaltitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tncmodaltitle">Terms and Conditions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                GENERAL TERMS AND CONDITIONS

                This document is an electronic record in terms of Information Technology Act, 2000 and rules there under as applicable and the amended provisions pertaining to electronic records in various statutes as amended by the Information Technology Act, 2000. This electronic record is generated by a computer system and does not require any physical or digital signatures. This document is published in accordance with the provisions of Rule 3 (1) of the Information Technology (Intermediaries guidelines) Rules, 2011 that require publishing the rules and regulations, privacy policy and Terms of Use for access.
                <br>TERMS AND CONDITIONS

                <br>1.1.1 You agree that you are competent to make the purchase on the website under laws of India. You are responsible for accuracy of the content / information / comments provided by you.

                <br>1.1.2. You shall not use the Website for any unlawful purpose or improper conduct (including use of non-civil language, breaching applicable laws, interrupting operations of Taramis, using any information or logo from the Website elsewhere, infringing copyright or trademark of Taramis, using Website for personal commercial purpose, copying contents, framing or hotlinking or deeplinking any content on the Website, etc).

                <br> 1.1.3 You shall not modify, distribute or re-post anything on this Website for any purpose.

                <br>1.2 User is hereby authorised to use the website for lawful purpose and for the purposes as mentioned under the policies of the Website, any violation to the policy may lead to strict legal action against the User in terms of the policies and applicable laws.

                <br>1.3 We have no liability if you can find our products at lower prices on other platforms or venues.

                <br>1.4 Promotional pricing is valid only for promotion period or till stocks last.

                <br>1.5 A promo code, once used shall not be refunded in case of cancellation of order either by Customer or Taramis.

                <br>1.6 All products sold on the Website are genuine. We guarantee the condition of the item you buy when you purchase on the Website only.

                <br>1.7 In case of Cash back offers extended by banks during the aforesaid period, user will, in addition to this Terms of Use Policy, be governed by the Terms and Conditions of the said bank/card issuer.

                <br> 1.8 We may, at any time due to various reasons, including but not limited to technical errors, unavailability of stocks or for any other reasons whatsoever, cancel the orders placed by Users. Our decision of cancellation of order shall be final and we shall not be liable for such cancellation(s) whatsoever.

                <br>1.9 No liability beyond replacement: Under no circumstances will our liability shall exceed giving the User a replacement of the same product/ alternate product of the same value.

                <br>1.10 The Website is provided without any warranties or guarantees and in an "As Is" condition. You must bear the risks associated with the use of the Website.

                <br>1.11 Taramis Labs, its associates and technology partners make no representations or warranties about the accuracy, reliability, completeness and/or timeliness of any content, information, software, text, graphics, links or communications provided on or through the use of the Website or that the operation of the Website will be error free and/or uninterrupted.
            </div>
        </div>
    </div>
</div>
<!--modal for privacy-->
<div class="modal fade" id="privacymodal" tabindex="-1" role="dialog" aria-labelledby="privacymodaltitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="privacymodaltitle">Privacy Policy</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <br> Privacy Policy

                <br>1. Preamble

                <br>Your usage of the Website confirms that you have read and are agreeable to our privacy policy set here, that shall be governed by the terms set in the General Terms and Conditions

                <br>2. Privacy Policy

                <br>2.1 Personal data

                <br>2.1.1 Data Collected: Taramis Labs Private Limited (“Taramis”) reserves the right to collect personal information from the customer including and not limited to first and last name, telephone & mobile numbers, email address, delivery address and any other information voluntarily provided by the customer.

                <br>2.1.2 Your Comments: When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor’s IP address and browser user agent string to help spam detection.

                <br>2.1.3 Social Profile Data: We collect your public profile data only from your consent that you grant before initiating Social Login, from the social network used to login at our website. This data includes your first name, last name, email address, link to your social media profile, unique identifier, link to social profile avatar. This data is used to create your user profile at our website. You can revoke this consent at any time by sending us an email at talktous@poshan.co

                <br>2.1.4 Voluntary data: All the information provided to us by you, including sensitive personal information, is voluntary. You have the right to withdraw your consent at any time, in accordance with the terms of this User Agreement. You can update and/or eliminate the data about you which has been collected pursuant to your decision to become a user of the Website by emailing us at talktous@poshan.co

                <br>2.1.5 Collected Data: Due to the communications standards on the Internet, when you visit the Website, we automatically receive the URL of the site from which you came and the site to which you are going when you leave. We also receive the Internet Protocol (IP) address of your computer (or the proxy server you used to access the World Wide Web), your computer operating system and type of web browser you are using, email patterns, as well as the name of your internet service provider (ISP). This information is used to analyze overall trends to help us improve our service.

                <br>2.1.6 Your telephone data: We may keep records of telephone calls received and made for making inquiries, orders or other purposes for the purpose of administration of services, research and development, quality management services and for proper administration.

                <br>2.2 Embedded content from other websites

                <br>2.2.1 Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.

                <br>2.2.2 These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.

                <br>2.3 How long we retain your data

                <br>2.3.1 If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.

                <br>2.3.2 For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.

                <br>2.3.3 The linkage between your IP address and your personally identifiable information is not shared with third-parties without your permission or except when required by law. Notwithstanding the above, we may share some of the aggregate findings and details with investors, strategic partners, and others in order to help grow our business without obtaining any approval from you. We do not disclose any personal information to third parties and for other marketing and promotional purposes that could be used to personally identify you, such as your password, credit card number and bank account number.

                <br>2.4 What rights you have over your data You can request that we erase / update any personal data we hold about you by writing to us at talktous@poshan.co. This does not include any data we are obliged to keep for administrative, legal, or security purposes.

                <br>2.5 Where we send your data Visitor comments may be checked through an automated spam detection service.

                <br>2.6 Cookies Policy

                The Website uses temporary cookies to store certain data (that is not sensitive personal data or information) that is used by us and our service providers for the technical administration of the Website, research and development, and for administration. In the course of serving advertisements or optimizing services to you, we may allow authorized third parties to place or recognize a unique cookie on your browser. We do not store personally identifiable information in the cookies.
            </div>
        </div>
    </div>
</div>
<!--modal for cancellation-->
<div class="modal fade" id="cancellationmodal" tabindex="-1" role="dialog" aria-labelledby="cancellationmodaltitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cancellationmodaltitle">Cancellation Policy</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                REFUNDS, SHIPPING AND CANCELLATION POLICY

                <br>1. Cancellation, Returns and Refund Policy:

                <br>1.1 Returns and Refunds Purchases made from the online store of poshan.co cannot be returned after purchase. We offer full-replacement of products that might be damaged in transit. Replacement orders are processed immediately after our customer support team validates the damage via communication over e-mail or phone. You can write to us at talktous@poshan.co

                <br>1.2 Cancellation of Order by you - We reserve the right to accept / refuse a cancellation request once an order has been placed. - We reserve the right to cancel any orders that classify as 'Bulk Order' as determined by us as per certain criteria. Any Reward Point or Promo Code used for placing the 'Bulk Order' will not be refunded as per this cancellation policy. An order can be classified as 'Bulk Order' if it meets with the below mentioned criteria, which may not be exhaustive, viz:

                <br>1. Products ordered are not for self-consumption but for commercial resale;

                <br>2. Multiple orders placed for same product at the same address;

                <br>3. Bulk quantity of the same product ordered;

                <br>4. Invalid address given in order details;

                <br>5. Any malpractice used to place the order.

                <br>2. Shipping

                <br>2.1 What locations do you deliver to?

                <br>We primarily ship through our channel partner Delhivery. Our coverage areas are limited to the areas covered by our channel partner. In case, for whatever reason, your delivery address is not covered by our existing partners, on request, we will attempt to ship through alternate channel partners.

                <br>2.2 How can I track the delivery of my order?

                <br>We usually email you the tracking reference number of your shipment. You can request an update at talktous@poshan.co

                <br>2.3 Do you charge additional shipping charges?

                <br> No, we do not currently charge any additional shipping fees for delivery in India

                <br>2.4 What is the standard delivery time?

                <br>Please allow 5-7 days for your order to reach. If you are in Mumbai we’ll probably get your order to you sooner than that. Metro areas usually reach within 3-5 days.

                <br> 2.5 Why is the CoD option not offered in my location?

                <br> The availability of CoD depends on the ability of our courier partner servicing your location to accept cash as payment at the time of delivery. Our courier partners have limits on the cash amount payable on delivery depending on the destination and your order value might have exceeded this limit.

                <br>2.6 Any disputes in relation to this policy will be settled by reference to the terms set in the General Terms and Conditions
            </div>
        </div>
    </div>
</div>
<!--script for cart-->
<script>
//add product to cart script
function atc(e) {
    let proid = e.parentElement.querySelector('input[name=pid]').value;
    console.log(proid);

    $.ajax({
        url: 'addptc.php',
        method: 'POST',
        data: {
            addptc: true,
            pid: proid,
        },
        success: function (data) {
            console.log(data);
        }
    });
}
</script>
<!--script for loading animation-->

<script>
    var load= document.getElementById("loading");
    function loadfun()
    {
        load.style.display= 'none';
    }
</script>

<!--navbar script for scroll action-->
<script>
    window.onscroll = function() {myFunction()};
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;
    function myFunction()
    {
        if (window.pageYOffset >= 40)
        {
            navbar.classList.add("sticky")
        } else
        {
            navbar.classList.remove("sticky");
        }
    }
</script>

<!--bootstrap scripts-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<!--JQUERY CDN script-->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>
</html>