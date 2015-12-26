<?php
//die('Ainstainer_Homepage module upgrade');
$slides = array(
				array(
						'url' 			=> 'ainstainer/1.jpg',
						'title' 		=> 'Cat',
						'description' 	=> '',
						'position' 		=>  '1',
				),
				array(
						'url' 			=> 'ainstainer/2.jpg',
						'title' 		=> 'Tiger',
						'description' 	=> '',
						'position' 		=>  '2',
				),
				array(
						'url' 			=> 'ainstainer/3.jpg',
						'title' 		=> 'Puma',
						'description' 	=> '',
						'position' 		=>  '3',
				),
);

foreach ($slides as $slide) {
	Mage::getModel('homepage/slider')
	->setData($slide)
	->save();
}

$homepage = array(
		'title' 		  			=> 'Коты кардинала',
		'root_template'   			=> 'one_column',
		'identifier'	  			=> 'homepage',
		'content_heading' 			=> 'ГРУСТНО? ВОЗЬМИ С СОБОЙ КОТИКА!',
		'content'		  			=> '<p><a href="{{store url=\'predators/lion.html\'}}"><img alt="lion" src="{{media url=\'wysiwyg/lion.jpg\'}}" /></a></p>
				<p>{{block type="core/template" name="homepage.view" template="homepage.phtml"}}</p>',
		'custom_theme'				=> 'rwd/homepage',
		'creation_time'				=> NOW(),
		'update_time'				=> NOW(),
		'custom_layout_update_xml'  => '<reference name="head">
											<action method="addItem"><type>skin_js</type><name>js/jquery-1.11.3.js</name></action>
											<action method="addItem"><type>skin_js</type><name>js/easySlider1.7.js</name></action>
											<action method="addItem"><type>skin_js</type><name>js/main.js</name></action>
											<action method="addItem"><type>skin_css</type><name>css/slider.css</name></action>
										</reference>'	
);
Mage::getModel('cms/page')
	->setData($homepage)
	->save();