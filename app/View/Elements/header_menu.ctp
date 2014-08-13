<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <?php echo $this->Html->link("Techno Tool", '/', array('class'=>"navbar-brand")); ?>
               
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   
                   
				<?php 
				
				$header_menus = $this->requestAction('/menus/header_menu');

				foreach ($header_menus as $key => $header_menu)
				{					
					$par = (isset($this->request->params['pass'][0]))?$this->request->params['pass'][0]:'';
					
					echo '<li class="'.(($this->request->params['controller'] == $header_menu['Menu']['parent_type'] && $this->request->params['action'] == 'name')?'active':'').'">';
					
					echo $this->Html->link($header_menu['Menu']['name'], '/'.$header_menu['Menu']['parent_type'].'/name/'.$header_menu['Menu']['id'].'/'.$header_menu['Menu']['slug']);
					
					echo '</li>';
				}
				?>
                                   
               </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

