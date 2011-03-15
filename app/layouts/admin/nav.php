<?
	$nav = array();
	$nav[]= array(
		'Dashboard' => 'index.php'
		);	
	$nav[]= array(
		'Backend' => '',
		'sub' => array(
			'Groups' => 'admin/groups/list.php',
			'Users' => 'admin/users/list.php'
			)
		);
	$nav[]= array(
		'Localuri' => '',
		'sub' => array(
			'Lista'		=> 'places/list.php',
			'Groups'	=> 'places/groups/list.php',
			'Categorii' => 'places/categories/list.php',
			'Etichete' 	=> 'places/tags/list.php',
			'Contact'	=> 'places/contact/list.php'
			)
		);
	$nav[]= array(
		'Geo' => '',
		'sub' => array(
			'Strazi' 	=> 'geo/streets/list.php',
			'Cartiere' 	=> 'geo/zones/list.php',
			'Adrese' 	=> 'geo/addresses/list.php'
			)
		);

// Parse menu agains CURRENT_PAGE
$nav_tmp = array();
$nav_current_class = 'current';
foreach($nav as $n){
	$name = key($n);
	$href  = $n[$name];
	$has_submenu = (isset($n['sub']) && count($n['sub']));
	
	// Classes, pas 1:
	$classes = array('nav-top-item');
	$sub_tmp = array();
	$has_current_subpage = false;
	if(!$has_submenu){
		$classes[]= 'no-submenu';
	}else{
		foreach($n['sub'] as $subpage_name => $subpage_href){
			$subpage_classes = array();
			$c1 = (CURRENT_PAGE == $subpage_href);
			$c2 = (dirname(CURRENT_PAGE) == dirname($subpage_href));

			if($c1 || $c2){
				$subpage_classes[]= $nav_current_class;
				$has_current_subpage = true;
				}
			$sub_tmp []= array(
				'name' 		=> $subpage_name,
				'href'		=> $subpage_href,
				'classes' 	=> $subpage_classes
				);
			}
		}
	
	// Is current if: 
	 // 1. href is index.php and page = ''
	 // 2. href='' && href == page
	 // 3. any subpage got current status	 
	
	$condition1 = ($href == 'index.php' && !CURRENT_PAGE);
	$condition2 = ($href && $href == CURRENT_PAGE);
	$condition3 = $has_current_subpage;
	
	if($condition1 || $condition2 || $condition3){
		$classes[]= $nav_current_class;
		}
	
	$nav_item = array(
		'name' 		=> $name,
		'href' 		=> ($href?$href:jsv0),
		'classes' 	=> $classes,
		'has_submenu'=> $has_submenu,
		'submenu' => $sub_tmp
		);
	
	$nav_tmp[] = $nav_item;
	}
	
$nav = $nav_tmp;
define('NAV_ROOT', WWW_PAGE);
?>
<ul id="main-nav">
	<? foreach($nav as $link):?>
		<li>
			<a  href ="<?=NAV_ROOT.$link['href']?>" 
				class="<?=implode(' ', $link['classes'])?>"
				>
				<?=$link['name']?>	
			</a>
			<? if($link['has_submenu']):?>
				<ul>
				<? foreach($link['submenu'] as $sub_link):?>
					<li>
						<a  href ="<?=NAV_ROOT.$sub_link['href']?>" 
							class="<?=implode(' ', $sub_link['classes'])?>"
							>
							<?=$sub_link['name']?>
						</a>
					</li>
				<? endforeach;?>
			</ul>
			<? endif;?>
		</li>
	<? endforeach;?>
</ul>