<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Bootstrap, font-awesome kits, google fonts   -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/6706302c7d.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
  <link rel= "preconnect" href="https://fonts.gstatic.com/">
  <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--  Custom CSS  -->
  <link rel="stylesheet" href="protein-style.css">
  <meta charset="UTF-8">
  <title>The Poshan Store</title>
  <link rel="shortcut icon" type="image/png" href="https://drive.google.com/uc?export=view&id=1qXyYTD1ak7ifPbdxKtV0EgTqjuZJhZ2J"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>


<body onload="loadfun()" style="background-image: url('https://drive.google.com/uc?export=view&id=1yPTlTFo6b3SFRftNivoJSVO5SbDRuSPE');">
<div id="loading"></div>
<!--NAVBAR-->
<navbar>
  <nav class=" nav navbar navbar-expand-lg navbar-light py-3 sticky-top" id="navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src=" https://drive.google.com/uc?export=view&id=1garJPrb4KttpqlSeCTLbB07iqu6s4PXj" style="width:160px;"></a>
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
              <a class="dropdown-item" href="protein-cat.php" >Protein Sachet's </a>
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

<ol class="breadcrumb bgr" style="color: black; z-index: 1 ;position:relative;background-color: white">

  <li class="breadcrumb-item"><a href="index.php" style="color: black">Home</a></li>
  <li class="breadcrumb-item active" aria-current="page">Protein Calculator</li>
</ol>



<div class="bg-image"></div>

<div class="bg-text">

  <!-- PROTIEN CALCULATOR-->
  <div style="padding-left: 120px; padding-top: 150px;">
    <br><br><br><br><br><br><br><br><br><br>
    <div >
      <div >
        <div>
          <div style="margin-top: 500px">

            <p class="bgblur-title">HOW MUCH PROTEIN DO YOU NEED?</p>
          </div>
        </div>
        <div  style="visibility: visible; animation-name: fadeInUp;color: lightslategrey">
          <div >
            <div style="font-size: 1.2em; font-weight: 800">
              <br>
              <br>

              <div>

                <p class="bgblur-title" style="font-size: 20px">YOUR PREFERENCE </p>
              </div>
              <section class="section" style="margin-left:-93px;margin-top: -90px" >
                <div class="container">
                  <input type="radio" name="food" id="radio-1" style="margin-left: 2px">
                  <label for="radio-1"><span class="radio" style="color: white">VEG</span></label>
                </div>
                <div class="container">
                  <input type="radio" name="food" id="radio-2">
                  <label  for="radio-2"><span class="radio" style="color: white">NON-VEG</span></label>
                </div>
                <div class="container">
                  <input type="radio" name="food" id="radio-3">
                  <label for="radio-3"><span class="radio" style="color: white">VEGAN</span></label>
                </div>
              </section>
              <div >
                <p class="bgblur-title" style="font-size: 20px;margin-top: -50PX">YOUR AGE </p>
                <select class="box">
                  <option value="19" selected>19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                  <option value="32">32</option>
                  <option value="33">33</option>
                  <option value="34">34</option>
                  <option value="35">35</option>
                  <option value="36">36</option>
                  <option value="37">37</option>
                  <option value="38">38</option>
                  <option value="39">39</option>
                  <option value="40">40</option>
                  <option value="41">41</option>
                  <option value="42">42</option>
                  <option value="43">43</option>
                  <option value="44">44</option>
                  <option value="45">45</option>
                  <option value="46">46</option>
                  <option value="47">47</option>
                  <option value="48">48</option>
                  <option value="49">49</option>
                  <option value="50">50</option>
                  <option value="51">51</option>
                  <option value="52">52</option>
                  <option value="53">53</option>
                  <option value="54">54</option>
                  <option value="55">55</option>
                  <option value="56">56</option>
                  <option value="57">57</option>
                  <option value="58">58</option>
                  <option value="59">59</option>
                  <option value="60">60</option>
                  <option value="61">61</option>
                  <option value="62">62</option>
                  <option value="63">63</option>
                  <option value="64">64</option>
                  <option value="65">65</option>
                  <option value="66">66</option>
                  <option value="67">67</option>
                  <option value="68">68</option>
                  <option value="69">69</option>
                  <option value="70">70</option>
                  <option value="71">71</option>
                  <option value="72">72</option>
                  <option value="73">73</option>
                  <option value="74">74</option>
                  <option value="75">75</option>
                  <option value="76">76</option>
                  <option value="77">77</option>
                </select><br><br><br>
                </form>

              </div>
              <!--GENDER RADIO BUTTON-->
              <div ><br>
                <p class="bgblur-title" style="font-size: 20px;margin-top: -30px">GENDER<span class="required">*</span> </p>
              </div>
              <section class="section" style="margin-left:-93px;margin-top: -90px">
                <div class="container">
                  <input type="radio" name="aa" id="r1" required />
                  <label for="r1"><span class="radio" style="color: white">MALE</span></label>
                </div>
                <div class="container">
                  <input type="radio" name="aa" id="r2" />
                  <label  for="r2"><span class="radio" style="color: white">FEMALE</span></label>
                </div>
                <div class="container">
                  <input type="radio" name="aa" id="r3" />
                  <label for="r3"><span class="radio" style="color: white">OTHER</span></label>
                </div>
              </section>
              <!--ACTIVITY LEVELS DROPDOWN-->
              <div>
                <p class="bgblur-title" style="font-size: 20px;margin-top: -50px">ACTIVITY LEVELS</p>
              </div>
              <select class="box" style="width: 380px">
                <option selected>LOW[Can run/jog/do yoga]</option>
                <option>MODERATE[Can do beginner level workout]</option>
                <option>HIGH[Comfortable in all sorts of workouts]</option>

              </select><br><br>
              <br>
              <!--SUBMIT BUTTON-->
              <div id="submit-button">
                <button type="submit" class="btn btn-dark" style="cursor: pointer;margin-left: 5px"><b>Submit</b></button>
                </form>
              </div>
            </div></div></div></div></div></div></div></div>


<br><br><br>
</div>
<!--FOOTER-->
<div class="footer" style="margin-top: 1200px;">
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
            <li><a href="#">Terms and Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Cancellation Policy</a></li>
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
      <p class="copyright">Poshan ©2021</p>
    </div>
  </footer>
</div>

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


</body>
</html>