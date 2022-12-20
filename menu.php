<?php

$menu = array();
$menu["Dashboard"] = "index.php";

$menu["Cadastro"]["Cliente"] = "#";
$menu["Cadastro"]["Fornecedor"] = "#";
$menu["Cadastro"]["Usuário"] = "#";
$menu["Cadastro"]["Produtos"] = "#";

$menu["Relatório"]["Perfil de Acesso"] = "#";
$menu["Relatório"]["Cliente"] = "#";
$menu["Relatório"]["Faturamento"] = "#";
$menu["Relatório"]["Produtos"] = "#";

ksort($menu);

foreach($menu AS $submenu => $link) {
    if (is_array($menu[$submenu])) {
        ksort($menu[$submenu]);
    }
}

?>

    <!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search" action="extra_search.html" method="POST">
						<div class="form-container">
							<div class="input-box">
								<a href="javascript:;" class="remove"></a>
								<input type="text" placeholder="Search..."/>
								<input type="button" class="submit" value=" "/>
							</div>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>

                <?php

                foreach($menu AS $submenu => $link) {

                    if (is_array($link)) {

                        $folder = $submenu;
                        $submenu = $link;
                        ?>
                        <li class="">
                            <a href="javascript:;">
                            <i class="fa fa-file-text"></i>
                            <span class="title">
                                <?=htmlentities($folder)?>
                            </span>
                            <span class="arrow ">
                            </span>
                            </a>

                            <ul class="sub-menu">
                            <?php
                            foreach($submenu AS $menu => $link) {
                                ?>

                                <li>
                                    <a href="<?=htmlentities($link)?>"><?=htmlentities($menu)?></a>
                                </li>

                                <?php
                            }
                            ?>
                            </ul>
                        </li>
                        <?php

                    } else {

                        $menu = $submenu;

                        ?>

                        <li class="start active ">
                        <a href="<?=htmlentities($link)?>">
                        <i class="fa fa-home"></i>
                        <span class="title">
                            <?=htmlentities($menu)?>
                        </span>
                        <span class="selected">
                        </span>
                        </a>
                        </li>
                        
                        <?php

                    }

                }

                ?>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->