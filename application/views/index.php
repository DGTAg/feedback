<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Feedback Apps</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

      <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/star-rating.css"  media="screen,projection"/>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
      $('#input-q1').on('rating.change', function(event, value, caption) {
          console.log(value);
          $('#v1').val(value);
          //alert(value);
          //console.log(caption);
      });
      $('#input-q2').on('rating.change', function(event, value, caption) {
          console.log(value);
          $('#v2').val(value);
          //console.log(caption);
      });
      $('#input-q3').on('rating.change', function(event, value, caption) {
          console.log(value);
          $('#v3').val(value);
          //console.log(caption);
      });

    });
    </script>


    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/freelancer.css" rel="stylesheet">

</head>

<body id="page-top" class="index">

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="col-lg-12">
                      <!-- Profile pic-->
                      <div class="vcard-profile-pic">
                        <img src="<?php echo base_url(); ?>assets/img/peepoo.png" id="profile1" class="profileActive" alt=""/>
                      </div>
                      <!-- /Profile pic -->
                        <!--img class="img-responsive" src="img/profile.png" alt=""-->
                    </div>

                    <div class="intro-text">
                        <span class="name">Pee@Poo</span>
                    </div>
                </div>
            </div>
        </div>
    </header>



<section>
        <div class="container">
            <div class="row">

                    <div class="col-md-12">
                      <div>
                        <form method="post" action="<?php base_url(); ?>proses/submit">
                          <div class="cc-selector">
                            <div class="row" style="text-align:left;">
                              <div class="col-xs-5">
                                <h4>1:
                                  <span>How do you rate the overall Pee@Poo apps?</span>
                                </h4>
                              </div>
                              <div class="col-xs-7">
                                <input id="input-q1" class="rating" data-size="md" data-min="0" data-max="5" data-step="1" data-default-caption="{rating} stars" data-star-captions="{}" name="">
                                <input type="hidden" name="v1" id="v1" />
                              </div>
                            </div>
<hr />

                            <div class="row" style="text-align:left;">
                              <div class="col-xs-5">
                                <h4>2:
                                  <span>Do you think the apps can benefit the citizen?</span>
                                </h4>
                              </div>
                              <div class="col-xs-7">
                                <input id="input-q2" class="rating" data-size="md" data-min="0" data-max="5" data-step="1" data-stars="5"
  data-symbol="&#xe005;" data-default-caption="{rating} hearts" data-star-captions="{}">
                                <input type="hidden" name="v2" id="v2" />
                              </div>
                            </div>
<hr />

                            <div class="row" style="text-align:left;">
                              <div class="col-xs-5">
                                <h4>3:
                                  <span>How would you like to recommend this apps to others?</span>
                                </h4>
                              </div>
                              <div class="col-xs-7">
                                <input id="input-q3" class="rating"  data-size="md" data-symbol="&#xf164;" data-glyphicon="false"
  data-rating-class="rating-fa" data-default-caption="{rating} likes" data-star-captions="{}" data-min="0" data-max="5" data-step="1">
                                <input type="hidden" name="v3" id="v3" />
                              </div>
                            </div>

<hr />


                            <div class="row control-group" style="text-align:left;">
                              <div class="col-xs-12">
                                <h4>4:
                                  <span>How would you improve the apps? <span style="color:grey;">[optional]</span></span>
                                </h4>
                              </div>
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Comment</label>
                                <textarea rows="2" class="form-control" placeholder="Comment" id="q4" name="v4"></textarea>
                                <p class="help-block text-danger"></p>
                              </div>
                            </div>





                            <div class="row control-group" style="text-align:left;">
                              <div class="col-xs-12">
                                <h4>5:
                                  <span>I would like to collaborate. Here's my email: <span style="color:grey;">[optional]</span></span>
                                </h4>
                              </div>
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="q5" name="v5">
                                <p class="help-block text-danger"></p>
                            </div>
                            </div>



                          </div>


                        <div id="success"></div>
                        <div class="row">
                            <div class="col-xs-12" style="text-align:center;">
                                <input type="submit" class="btn btn-success btn-xl" value="Respons" />
&nbsp;&nbsp;&nbsp;
                                <input type="reset" class="btn btn-cancel btn-xl" value="Cancel" />
                            </div>
                        </div>









                        </form>

                      </div>
                    </div>
          </div>
        </div>







</section>


    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-below">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; Immersion Program 2015 @ MDeC
                </div>
            </div>
        </div>
    </footer>





    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/classie.js"></script>
    <script src="<?php echo base_url();?>assets/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url();?>assets/js/jqBootstrapValidation.js"></script>
    <!--script src="<?php echo base_url();?>assets/js/contact_me.js"></script-->

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/js/freelancer.js"></script>


    <script src="<?php echo base_url();?>assets/js/star-rating.js"></script>

</body>

</html>
Status API Training Shop Blog About Pricing
© 2015 GitHub, Inc. Terms Privacy Security Contact Help
