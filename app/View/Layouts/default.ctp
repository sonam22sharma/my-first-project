<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Techno Tool</title>

    <!-- Bootstrap Core CSS -->
    <?php echo $this->Html->css('bootstrap.min');?>
	
	<?php echo $this->Html->css('modern-business');?>
	<?php echo $this->Html->css('../font-awesome-4.1.0/css/font-awesome.min.css');?>
	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<?php echo $this->element('header_menu');?>   
<?php  echo $this->fetch('slide_area');  ?>

<?php  echo $this->fetch('feature_area');  ?>

<?php  echo $this->fetch('portfolio_area');  ?>



    <div class="container">
			
		<div class="row"><?php  echo $this->fetch('content');  ?></div>
		
		
          
        <footer>
        <?php echo $this->fetch('footer_area');?>   
        </footer>
        <!-- Footer -->

    </div>
    <!-- /.container -->


		<?php echo $this->Html->script('jquery-1.11.0.js'); ?>
		<?php echo $this->Html->script('bootstrap.min.js'); ?>
		<?php echo $this->fetch('script_bottom');?>
		<?php echo $this->Js->writeBuffer();?>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
