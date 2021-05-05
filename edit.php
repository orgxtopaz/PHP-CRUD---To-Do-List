<!doctype html>
<html lang="en">

<head>
    <title>Update</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        
    </script>

    <style id="" media="all">
    /* devanagari */


    
    /* SEARCH */

 
    
    main {
        position: absolute;
        top: 50%;
        left: 50%;
       
        z-index: 1;
    }

    main:before {
      
        content: 'Estopaz ka';
        font-family: 'Playball', cursive;
        position: absolute;
        bottom: -90px;
        left: 50%;
        color: rgba(0, 0, 0, 0.02);
        font-size: 150px;
        line-height: 140px;
        white-space: nowrap;
        text-transform: lowercase;
       
        pointer-events: none;
        z-index: -1;
      
    }

  
    .srch_wrpr {
        width: 400px;
        max-width: 400px;
        height: 70px;
        position: relative;
     
    }

    .srch_sb_cnt {
        width: 70px;
        height: 70px;
        background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
 
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
   
        transition: all 0.4s ease-in-out 0s;
        z-index: 0;
        border-radius: 5px;
    }

    .sech_txt_inpt {
        opacity: 0;
        height: 50px;
        left: 10px;
        border-radius: 30px;
        border: 0;
        width: 94%;
        padding: 0 60px 0 15px;
        background-color: transparent;
        color: #333;
        font-size: 15px;
        transition: all 0.4s ease-in-out 0s;
    }

    .sech_txt_inpt:focus {
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .sech_txt_inpt:focus,
    .srch_btn:focus {
        outline: none;
    }

    .sech_txt_inpt,
    .srch_btn {
        position: absolute;
        z-index: 1;
        top: 50%;
        transform: translateY(-50%);
    }

    .srch_btn {
        width: 70px;
        height: 70px;
        right: 0;
        background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
    
        border: 0;
        transition: all 0.4s ease-in-out 0s;
        font-size: 26px;
        cursor: pointer;
        color: #545454;
    }

    .srch_btn:after {
        position: absolute;
        content: '\f00d';
        font-family: fontAwesome;
        top: 50%;
        transform: translateY(-50%) rotate(0deg);
        right: 10px;
        height: 30px;
        width: 30px;
        font-size: 28px;
        z-index: -1;
        visibility: hidden;
    }

    input.checkbox {
        position: absolute;
        z-index: 1;
        width: 70px;
        height: 70px;
        opacity: 0.0;
        right: 30%;
        top: 50%;
        transform: translate(-50%, -50%);
        transition: all 0.4s ease-in-out 0s;
        cursor: pointer;
    }

    input.checkbox:checked {
        width: 30px;
        height: 30px;
        right: -14%;
        transform: translate(-50%, -60%);
    }

    input.checkbox:checked~.srch_sb_cnt {
        width: 100%;
        border-radius: 40px;
        background-color: #333;
        overflow: visible;
    }

    input.checkbox:checked~.srch_sb_cnt .srch_btn {
        width: 50px;
        height: 50px;
        right: 10px;
        border-radius: 100%;
        font-size: 20px;
        background-image: linear-gradient(to top, #ff0844 0%, #ffb199 100%);
        color: #fff;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    }

    input.checkbox:checked~.srch_sb_cnt .sech_txt_inpt {
        opacity: 1;
    }

    input.checkbox:checked~.srch_sb_cnt .srch_btn:after {
        transform: translateY(-50%) rotate(90deg);
        right: -50px;
        visibility: visible;
        transition: all .6s cubic-bezier(0.000, 0.105, 0.035, 1.570);
        transition-delay: 0.5s;
        color: white;
    }

    .wew{
        background-color: #ffffff;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1600 900'%3E%3Cdefs%3E%3ClinearGradient id='a' x1='0' x2='0' y1='1' y2='0'%3E%3Cstop offset='0' stop-color='%230FF'/%3E%3Cstop offset='1' stop-color='%23CF6'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' x1='0' x2='0' y1='0' y2='1'%3E%3Cstop offset='0' stop-color='%23F00'/%3E%3Cstop offset='1' stop-color='%23FC0'/%3E%3C/linearGradient%3E%3C/defs%3E%3Cg fill='%23FFF' fill-opacity='0' stroke-miterlimit='10'%3E%3Cg stroke='url(%23a)' stroke-width='2'%3E%3Cpath transform='translate(0 0)' d='M1409 581 1450.35 511 1490 581z'/%3E%3Ccircle stroke-width='4' transform='rotate(0 800 450)' cx='500' cy='100' r='40'/%3E%3Cpath transform='translate(0 0)' d='M400.86 735.5h-83.73c0-23.12 18.74-41.87 41.87-41.87S400.86 712.38 400.86 735.5z'/%3E%3C/g%3E%3Cg stroke='url(%23b)' stroke-width='4'%3E%3Cpath transform='translate(0 0)' d='M149.8 345.2 118.4 389.8 149.8 434.4 181.2 389.8z'/%3E%3Crect stroke-width='8' transform='rotate(0 1089 759)' x='1039' y='709' width='100' height='100'/%3E%3Cpath transform='rotate(0 1400 132)' d='M1426.8 132.4 1405.7 168.8 1363.7 168.8 1342.7 132.4 1363.7 96 1405.7 96z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;
font-family: 'Trebuchet MS', Helvetica, sans-serif;

    }



   

 

    /* END SEARCH */
    </style>
    <link rel="stylesheet" href="css/style.css">
    <meta name="robots" content="noindex, follow">
</head>

<body class="wew">

    <!-- HEADER -->


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <!-- END HEADER -->
    <div class="wrapper d-flex align-items-stretch " >
        <nav id="sidebar" style="   background-color: #ffffff;">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary"  style="color:white">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only"  >Toggle Menu</span>
                </button>
            </div>
            <div class="p-4">
            <br><br><br>
                <h1><a href="index.php"  style="color:black;"class="logo "> <span class="text-muted">Zigm</span></a></h1>
                <center>
                <a href="index.php"><img src="https://i.ibb.co/k4m5TfX/her-2.png" alt="her-1" border="0" style="position: absolute; z-index:-1 ; width:200%" ></a>
</center>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="index.php" style="color:black;" class="text-muted"><span class="fa fa-home mr-3 text-muted" aria-hidden="true" style="color:black;"></span> HOME</a>
                    </li>
                    <li>
                        <a href="trash.php" style="color:black;" class="text-muted"><span class="fa fa-trash mr-3 text-muted" aria-hidden="true" style="color:black;"></span> TRASH</a>
                    </li>
                  
                 
                    <li>
                        <a href="#" style="color:black;" class="text-muted"><span class="fa fa-paper-plane mr-3 text-muted" style="color:black;"></span> SEND</a>
                    </li>
                </ul>
                <div class="mb-5">
                    <h3 class="h6 mb-3">Subscribe for newsletter</h3>
                    
                </div>
                <div class="footer">

                </div>
            </div>
        </nav>

        <div id="content" class="p-4 p-md-5 pt-5">
           
            <br><br><br>


      
    <?php include_once('connection.php')?>


<button type="button" class="btn btn-outline-light"><a href="index.php">Go back</button></a>

<div class="container mt-5" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;border-radius:10px; width:30%;">
<form action="connection.php" method="POST">

<br>


<div class="mb-3">
  
    <input type="text"  required  name="Title" class="form-control" id="Title" placeholder="" value="<?php echo $Title;?>" >

  
</div>
<div class="mb-3">
    <label for="Note" class="form-label text-muted">Update Note:</label>
    <input type="text"  required  name="Note" class="form-control" id="Note" placeholder="" value="<?php echo $Note;?>" >

 

   
</div>


<?php 
    if ($update == true):
?>
<input type="hidden" name="id" value="<?php echo $_GET['edit'];?>">
<button type="submit" name="update"  style="background:white;"class="btn btn-info"><i class="fa fa-refresh text-muted"  aria-hidden="true"></i></button>
<?php endif;?>
</form>
</div>





            <div class="container">

            <style>
    #searchbox {
    width: 280px;
    background: url(http://1.bp.blogspot.com/-dwLNyhnHlTg/VEQZwf9drLI/AAAAAAAAAlg/rbd0HN4EZrY/s1600/search-box.png) no-repeat;
    }

    #searchbox input {
        outline: none;
    }

    input:focus::-webkit-input-placeholder {
        color: transparent;
    }

    input:focus:-moz-placeholder {
        color: transparent;
    }

    input:focus::-moz-placeholder {
        color: transparent;
    }
    #searchbox input[type="text"] {
    background: transparent;
    border: 0px;
    font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
    font-size: 14px;
        color: #f2f2f2 !important;
        padding: 10px 35px 10px 20px;
        width: 220px;
    }
    #searchbox input[type="text"]:focus {
    color: #fff;
    }

    #button-submit{
    background: url(http://4.bp.blogspot.com/-4MYBYE0i0Xk/VEQYlljvriI/AAAAAAAAAlQ/_TRkRG5EX1c/s1600/search-icon.png) no-repeat;
 margin-left: 8px;
    border-width: 0px;
    width: 40px;
    height: 50px;
    }

    #button-submit:hover {
    background: url(http://4.bp.blogspot.com/-6S4K8eHPM-c/VEQdf7l84GI/AAAAAAAAAls/j7_kGSpkIfg/s1600/search-icon-hover.png);
    }

    .modal{
      margin-top:100px;
    }

    .card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #202124;
    opacity: 0.5;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
}

.form-check .form-check-input {
    float: left;
    margin-left: -1.5em;
    margin-top: 10px;
}

.modal-content{
    


background-color: #ffffff;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1600 900'%3E%3Cdefs%3E%3ClinearGradient id='a' x1='0' x2='0' y1='1' y2='0'%3E%3Cstop offset='0' stop-color='%230FF'/%3E%3Cstop offset='1' stop-color='%23CF6'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' x1='0' x2='0' y1='0' y2='1'%3E%3Cstop offset='0' stop-color='%23F00'/%3E%3Cstop offset='1' stop-color='%23FC0'/%3E%3C/linearGradient%3E%3C/defs%3E%3Cg fill='%23FFF' fill-opacity='0' stroke-miterlimit='10'%3E%3Cg stroke='url(%23a)' stroke-width='2'%3E%3Cpath transform='translate(0 0)' d='M1409 581 1450.35 511 1490 581z'/%3E%3Ccircle stroke-width='4' transform='rotate(0 800 450)' cx='500' cy='100' r='40'/%3E%3Cpath transform='translate(0 0)' d='M400.86 735.5h-83.73c0-23.12 18.74-41.87 41.87-41.87S400.86 712.38 400.86 735.5z'/%3E%3C/g%3E%3Cg stroke='url(%23b)' stroke-width='4'%3E%3Cpath transform='translate(0 0)' d='M149.8 345.2 118.4 389.8 149.8 434.4 181.2 389.8z'/%3E%3Crect stroke-width='8' transform='rotate(0 1089 759)' x='1039' y='709' width='100' height='100'/%3E%3Cpath transform='rotate(0 1400 132)' d='M1426.8 132.4 1405.7 168.8 1363.7 168.8 1342.7 132.4 1363.7 96 1405.7 96z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");

background-size: cover;


    

}

.modal{
   
    background-image: url("https://i.ibb.co/k4m5TfX/her-2.png");
    background-repeat: no-repeat;
   
   

   
}

  
    </style>

   
               
               
                
            </div>

        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


<style> 


.line-through{
    text-decoration: line-through;
}

</style>
    

<!-- FOOTER -->




<footer class="new_footer_area bg_color">
            <div class="new_footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
                                <p>Don’t miss any updates !</p>
                                <!-- <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                                    <input type="text" name="EMAIL" class="form-control memail" placeholder="Email">
                                    <button class="btn btn_get btn_get_two" type="submit">Subscribe</button>
                                    <p class="mchimp-errmessage" style="display: none;"></p>
                                    <p class="mchimp-sucmessage" style="display: none;"></p> -->
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Download</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="#">Company</a></li>
                                    <li><a href="#">Android App</a></li>
                                    <li><a href="#">ios App</a></li>
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Help</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Term &amp; conditions</a></li>
                                    <li><a href="#">Reporting</a></li>
                                 
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Team Borotoy</h3>
                                <div class="f_social_icon">
                                    <a href="#" class="fab fa-facebook"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-linkedin"></a>
                                    <a href="#" class="fab fa-pinterest"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bg">
                    <div class="footer_bg_one"></div>
                    <div class="footer_bg_two"></div>
                    <div class="footer_bg_three"></div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-7">
                            <p class="mb-0 f_400">© Borotoy Inc.. 2021 All rights reserved.</p>
                        </div>
                        <div class="col-lg-6 col-sm-5 text-right">
                            <p>Made with <i class="icon_heart"></i> in <a href="#">Borotoy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>




<!-- FOOTER END -->


<!-- FOOTER CSS -->

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style>



    

.new_footer_area {
    background: #fbfbfd;
}


.new_footer_top {
    padding: 120px 0px 270px;
    position: relative;
      overflow-x: hidden;
}
.new_footer_area .footer_bottom {
    padding-top: 5px;
    padding-bottom: 50px;
}
.footer_bottom {
    font-size: 14px;
    font-weight: 300;
    line-height: 20px;
    color: #7f88a6;
    padding: 27px 0px;
}
.new_footer_top .company_widget p {
    font-size: 16px;
    font-weight: 300;
    line-height: 28px;
    color: #6a7695;
    margin-bottom: 20px;
}
.new_footer_top .company_widget .f_subscribe_two .btn_get {
    border-width: 1px;
    margin-top: 20px;
}
.btn_get_two:hover {
    background: transparent;
    color: #5e2ced;
}
.btn_get:hover {
    color: #fff;
    background: #6754e2;
    border-color: #6754e2;
    -webkit-box-shadow: none;
    box-shadow: none;
}
a:hover, a:focus, .btn:hover, .btn:focus, button:hover, button:focus {
    text-decoration: none;
    outline: none;
}



.new_footer_top .f_widget.about-widget .f_list li a:hover {
    color: #5e2ced;
}
.new_footer_top .f_widget.about-widget .f_list li {
    margin-bottom: 11px;
}
.f_widget.about-widget .f_list li:last-child {
    margin-bottom: 0px;
}
.f_widget.about-widget .f_list li {
    margin-bottom: 15px;
}
.f_widget.about-widget .f_list {
    margin-bottom: 0px;
}
.new_footer_top .f_social_icon a {
    width: 44px;
    height: 44px;
    line-height: 43px;
    background: transparent;
    border: 1px solid #e2e2eb;
    font-size: 24px;
}
.f_social_icon a {
    width: 46px;
    height: 46px;
    border-radius: 50%;
    font-size: 14px;
    line-height: 45px;
    color: #858da8;
    display: inline-block;
    background: #ebeef5;
    text-align: center;
    -webkit-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
    transition: all 0.2s linear;
}
.ti-facebook:before {
    content: "\e741";
}
.ti-twitter-alt:before {
    content: "\e74b";
}
.ti-vimeo-alt:before {
    content: "\e74a";
}
.ti-pinterest:before {
    content: "\e731";
}

.btn_get_two {
    -webkit-box-shadow: none;
    box-shadow: none;
    background: #5e2ced;
    border-color: #5e2ced;
    color: #fff;
}

.btn_get_two:hover {
    background: transparent;
    color: #5e2ced;
}

.new_footer_top .f_social_icon a:hover {
    background: #5e2ced;
    border-color: #5e2ced;
  color:white;
}
.new_footer_top .f_social_icon a + a {
    margin-left: 4px;
}
.new_footer_top .f-title {
    margin-bottom: 30px;
    color: #263b5e;
}
.f_600 {
    font-weight: 600;
}
.f_size_18 {
    font-size: 18px;
}
h1, h2, h3, h4, h5, h6 {
    color: #4b505e;
}
.new_footer_top .f_widget.about-widget .f_list li a {
    color: #6a7695;
}


.new_footer_top .footer_bg {
    position: absolute;
    bottom: 0;
    background: url("http://droitthemes.com/html/saasland/img/seo/footer_bg.png") no-repeat scroll center 0;
    width: 100%;
    height: 266px;
}

.new_footer_top .footer_bg .footer_bg_one {
    background: url("https://1.bp.blogspot.com/-mvKUJFGEc-k/XclCOUSvCnI/AAAAAAAAUAE/jnBSf6Fe5_8tjjlKrunLBXwceSNvPcp3wCLcBGAsYHQ/s1600/volks.gif") no-repeat center center;
    width: 330px;
    height: 105px;
    background-size:100%;
    position: absolute;
    bottom: 0;
    left: 30%;
    -webkit-animation: myfirst 18s linear infinite;
    animation: myfirst 18s linear infinite;
}

.new_footer_top .footer_bg .footer_bg_two {
    background: url("https://1.bp.blogspot.com/-hjgfxUW1o1g/Xck--XOdlxI/AAAAAAAAT_4/JWYFJl83usgRFMvRfoKkSDGd--_Sv04UQCLcBGAsYHQ/s1600/cyclist.gif") no-repeat center center;
    width: 88px;
    height: 100px;
   background-size:100%;
    bottom: 0;
    left: 38%;
    position: absolute;
    -webkit-animation: myfirst 18s linear infinite;
    animation: myfirst 18s linear infinite;
  
}



.new_footer_top .footer_bg .footer_bg_three {
    background: url("https://media4.giphy.com/media/2ALKobRlYU378JLlLy/source.gif") ;
    width: 88px;
    height: 100px;
    background-size:100%;
    bottom: 0;
    right: 38%;
    position: absolute;
    -webkit-animation: manwalking 15s linear infinite;
    animation: manwalking 15s linear infinite;
    
}



@-moz-keyframes myfirst {
  0% {
    left: -25%;
  }
  100% {
    left: 100%;
  }
}

@-webkit-keyframes myfirst {
  0% {
    left: -25%;
  }
  100% {
    left: 100%;
  }
}

@keyframes myfirst {
  0% {
    left: -25%;
  }
  100% {
    left: 100%;
  }
}


@keyframes manwalking {
  0% {
    right: -25%;
  }
  100% {
    right: 100%;
  }
}

/*************footer End*****************/


</style>


<!-- END FOOTER CSS -->
</body>

</html>
