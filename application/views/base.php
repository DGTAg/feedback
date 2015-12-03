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


<<<<<<< HEAD
      $('#btnSubmit').prop('disabled', true);

      //var v1 = $('#v1').val();
      //var v2 = $('#v2').val();
      //var v3 = $('#v3').val();




=======
>>>>>>> 1d23411c4c1e3a07ae57bff65d0b8fd8de173318
      $('#input-q1').on('rating.change', function(event, value, caption) {
          console.log(value);
          $('#v1').val(value);
          //alert(value);
          //console.log(caption);
<<<<<<< HEAD
          // if ($('#v1').val() < 1 && $('#v2').val() < 1 && $('#v3').val() < 1) {
          //   $('#btnSubmit').prop('disabled', true);  
          // } 
          // else {
          //   $('#btnSubmit').prop('disabled', false);
          // }
=======
>>>>>>> 1d23411c4c1e3a07ae57bff65d0b8fd8de173318
      });
      $('#input-q2').on('rating.change', function(event, value, caption) {
          console.log(value);
          $('#v2').val(value);
          //console.log(caption);
<<<<<<< HEAD
          // if ($('#v1').val() < 1    &&      $('#v2').val() < 1    &&     $('#v3').val() < 1) {
          //   $('#btnSubmit').prop('disabled', true);  
          // } 
          // else {
          //   $('#btnSubmit').prop('disabled', false);
          // }
=======
>>>>>>> 1d23411c4c1e3a07ae57bff65d0b8fd8de173318
      });
      $('#input-q3').on('rating.change', function(event, value, caption) {
          console.log(value);
          $('#v3').val(value);
          //console.log(caption);
<<<<<<< HEAD
          // if ($('#v1').val() < 1 && $('#v2').val() < 1 && $('#v3').val() < 1) {
          //   $('#btnSubmit').prop('disabled', true);  
          // } 
          // else {
          //   $('#btnSubmit').prop('disabled', false);
          // }
      });


      $('#input-q1, #input-q2, #input-q3').on('rating.change', function(){

        $('#btnSubmit').prop('disabled', true);

          //alert($('#v1').val());

          if ($('#v1').val() > 0 && $('#v2').val() > 0 && $('#v3').val() > 0) {
            $('#btnSubmit').prop('disabled', false);  
          }         

      });

=======
      });


>>>>>>> 1d23411c4c1e3a07ae57bff65d0b8fd8de173318

    });
    </script>


    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/freelancer.css" rel="stylesheet">

</head>

<body id="page-top" class="index">

    <section>
            <div class="container">
                <?php $this->load->view($body); ?>
            </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-below">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; Immersion Programme 2015 @ MDeC
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
    <!--script src="<?php echo base_url();?>feedback/js/contact_me.js"></script-->

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/js/freelancer.js"></script>


    <script src="<?php echo base_url();?>assets/js/star-rating.js"></script>

</body>

</html>
