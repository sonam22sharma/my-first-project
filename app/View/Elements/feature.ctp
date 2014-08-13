<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?php echo $title;?></h1>
		</div>
		           <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i><?php echo $page1['name'];?></h4>
                    </div>
                    <div class="panel-body">
                        <p><?php echo $page1['description']?></p>
                        <?php echo $this->Html->Link('read more', array('controller'=>'pages', 'action' =>'view', $page1['id']), array('class'=>'btn btn-primary'))?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i><?php echo $page2['name'];?></h4>
                    </div>
                    <div class="panel-body">
                        <p><?php echo $page2['description']?></p>
                        <?php echo $this->Html->Link('read more', array('controller'=>'pages', 'action' =>'view', $page2['id']), array('class'=>'btn btn-primary'))?>
                    </div>
                 </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i><?php echo $page3['name'];?></h4>
                    </div>
                    <div class="panel-body">
                        <p><?php echo $page3['description']?></p>
                        <?php echo $this->Html->Link('read more', array('controller'=>'pages', 'action' =>'view', $page3['id']), array('class'=>'btn btn-primary'))?>
                    </div>
            </div>
            </div>
        </div>
		