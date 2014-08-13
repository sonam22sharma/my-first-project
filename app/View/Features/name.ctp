
<?php
$this->start('slide_area');
echo $this->element('slide_bar');
$this->end();
?>


<?php
$this->start('footer_area');
echo $this->element('footer_bar');
$this->end();
?>

<?php
$this->start('feature_area');
$feature_array = array('title' =>$feature['Feature']['name'],
'page1' => '',
'page2' => '',
'page3' => '',
);

if(isset($feature['FeaturePage'][0]['Page'])){
	$feature_array['page1'] = $feature['FeaturePage'][0]['Page'];
}

if(isset($feature['FeaturePage'][1]['Page'])){
	$feature_array['page2'] = $feature['FeaturePage'][1]['Page'];
}

if(isset($feature['FeaturePage'][2]['Page'])){
	$feature_array['page3'] = $feature['FeaturePage'][2]['Page'];
}

echo $this->element('feature', $feature_array);
$this->end();
?>


<?php
$this->start('portfolio_area');

//debug($feature['FeaturePage'][0]['Page']);

$page_array = array('title' =>$feature['FeaturePage'][0]['Page'],
		'page1' => '',
		'page2' => '',
		'page3' => '',
);

if(isset($feature['FeaturePage'][0]['Page'])){
	$page_array['page1'] = $feature['FeaturePage'][0]['Page'];
}

if(isset($feature['FeaturePage'][1]['Page'])){
	$page_array['page2'] = $feature['FeaturePage'][1]['Page'];
}

if(isset($feature['FeaturePage'][2]['Page'])){
	$page_array['page3'] = $feature['FeaturePage'][2]['Page'];
}

echo $this->element('portfolio', $page_array);
$this->end();
?>



<?php 
$this->start('script_bottom');
echo $this->Html->script('holder');
$this->end();
?> 