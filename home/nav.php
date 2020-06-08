<?php
function menu_route($menuname){
    $menu_items = wp_get_nav_menu_items($menuname); 
    $menu = array();
   foreach ($menu_items as $item ){
 
     $menuItem = array(
         "id"=>$item->ID,
         "menu_order"=>$item->menu_order,
         "title"=>$item->title,
         "dom_id"=>preg_replace('/[^a-z]+/i',"_",$item->title),
         "menu_item_parent" => $item->menu_item_parent,
         "url"=>$item->url
     );
     array_push($menu,$menuItem);
   }
   return $menu; 
}
$menu = menu_route('menu-top');	
//var_dump($menu);
?>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand page-scroll" href="#page-top"><img src="<?php echo TNV_CSS;?>/img/logo.png" alt="logodayana"></a>
	</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">
			<?php  
				foreach($menu as $key => $value){
					echo "
					<li>
					<a class='page-scroll' href='{$value['url']}'>{$value['title']}</a>
					</li>
					";
				}
			?>
			
			
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>