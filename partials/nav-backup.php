<!--Start header section -->
<section class="headerSectionMain">
		<div class="headerSection uppercase">
			<div class="wrapper">
				<div class="LogoMenuMain">
					<div class="headerlogo ib">
						<a href="<?php echo get_home_url(); ?>"><img src=" <?php the_field("gen_site_logo", "option"); ?>" alt="">
						</a>
					</div>
					<div class="MenuMain text-right ib">

						<div class="menubar custom-menu-primary">

							<?php if (have_rows('gen_menu', 'option')) { ?>
								<div class="menuParent">
									<div class="navbar noListStyle">
										<ul>
											<?php
											while (have_rows('gen_menu', 'option')) {
												the_row();
												$gen_menu_page = get_sub_field('gen_menu_page');
												$row_index = get_row_index();
												$is_mega_menu = get_sub_field('is_mega_menu');

												if (have_rows('gen_menu_page_submenu') && $is_mega_menu == 'No') {
											?>
													<li class="childmenu Megachildmenu"><a href="<?php echo $gen_menu_page['url'] ?>" class="<?php echo ($row_index == 0) ? 'active' : ''; ?>">
															<?php echo $gen_menu_page['title']; ?>
															<span class="downAngle"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="12" viewBox="0 0 22 12" fill="none">
																	<path d="M20.9702 1.05039L11.3702 10.6504L1.77021 1.05039" stroke="#64D855" stroke-width="1.6" stroke-linecap="round" />
																</svg></span></a>

														<ul class="dropdown-menu dropdown-menu-icon dropdown-mob">
															<?php
															while (have_rows('gen_menu_page_submenu')) {
																the_row();
																$gen_menu_page_submenu_page = get_sub_field('gen_menu_page_submenu_page');
															?>
																<li class=" ">
																	<a href="<?php echo $gen_menu_page_submenu_page['url']; ?>"><?php echo $gen_menu_page_submenu_page['title']; ?></a>
																</li>
															<?php
															}
															?>
														</ul>
													<?php
												} else if (have_rows('gen_menu_page_submenu') && $is_mega_menu == 'Yes') {
													?>
													<li class="childmenu Megachildmenu childmenu-Mob">
														<a href="javascript:void(0);"><?php echo $gen_menu_page['title']; ?></a>
														<span class="childExpand"><i></i><i></i></span>
														<ul class="Mega-dropdown-menu dropdown-menu-icon dropdown-mob">
															<li>
																<div class="wrapper">
																	<div class="MegaMenuInner">
																		<span class="CloseIcon"><img src="<?php echo get_template_directory_uri(); ?>/images/cress-icon.png"></span>
																		<ul class="sublevel sublevelTop">
																			<?php
																			while (have_rows('gen_menu_page_submenu')) {
																				the_row();
																				$gen_menu_page_submenu_page = get_sub_field('gen_menu_page_submenu_page');
																			?>
																				<li class="item-has-children childmenu-Mob">
																					<a href="<?php echo $gen_menu_page_submenu_page['url']; ?>"><?php echo $gen_menu_page_submenu_page['title']; ?> </a>
																					<?php if (have_rows('gen_menu_page_submenu_inner')) {  ?>
																						<ul class="dropdown-menu-Inner dropdown-menu-icon-Inner sublevel sublevelInner dropdown-menu-icon-Inner dropdown-mob">
																							<?php
																							while (have_rows('gen_menu_page_submenu_inner')) {
																								the_row();
																								$inner_submenu_page = get_sub_field('inner_submenu_page');
																								if (!empty($inner_submenu_page)) {
																									$featured_image = wp_get_attachment_image_src(get_post_thumbnail_id($inner_submenu_page->ID), 'medium');

																							?>
																									<li class="<?php echo (!empty($featured_image)) ?'child-item-has-children childmenu-Mob' :'' ;?>">
																										<a href="<?php echo get_permalink($inner_submenu_page->ID); ?>"><?php echo get_the_title($inner_submenu_page->ID); ?></a>
																										
																										<?php if(!empty($featured_image)) { 
																										?>
																											<ul class="HeadPostBoxMain child-dropdown-menu-icon-Inner dropdown-mob">
																												<li>
																													<?php if (!empty($featured_image)) { ?>
																														<div class="HeadPostBox bg" style="background-image: url(<?php echo $featured_image[0]; ?>);">
																															<div class="HeadPostContentTop">
																																<div class="HeadPostContent fontWhite">
																																	<p><?php echo get_the_excerpt($inner_submenu_page->ID); ?></p>
																																</div>
																																<div class="HeadPostBtn opacity5"><a href="<?php echo get_permalink($inner_submenu_page->ID); ?>">read more</a></div>
																															</div>
																														</div>
																													<?php } ?>
																												</li>
																											</ul>
																										<?php 
																										}?>
																										
																									</li>
																							<?php
																								}
																							}
																							?>
																						</ul>
																					<?php } ?>
																				</li>


																			<?php
																			}
																			?>
																		</ul>
																	</div>
																</div>
															</li>
														</ul>
													</li>
												<?php
												} else {
												?>
													<li><a href="<?php echo $gen_menu_page['url']; ?>"><?php echo $gen_menu_page['title']; ?> </a></li>
												<?php
												}
												?>
											<?php } ?>
										</ul>
									</div>
								</div>
							<?php
							} ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Header Section  -->
	<?php
	if (is_page_template('templates/offsetting-template.php')||is_page_template('templates/article.php')) {
	?>
		<!-- Header Version 2 -->

		<div class="V2headerSection">
			<div class="wrapper">
				<div class="V2MenuParent">
					<div class="V2navbar noListStyle">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'header-menu',
								'menu_class'        => '',
								'container'       => '',
							)
						);
						?>
						<!-- <ul>
							<li><a href="javascript:">mission</a></li>
							<li><a href="javascript:">fia environmental strategy</a></li>
							<li class="V2childmenu"><a href="javascript:" class="active">key acheivements</a>
								<ul class="V2-dropdown-menu">
									<li class="V2-item-has-children">
										<a href="#">FIA Becomes Carbon Neutral</a>
									</li>
									<li class="V2-item-has-children">
										<a href="#">reduction</a>
									</li>
									<li class="V2-item-has-children">
										<a href="#">offsetting</a>
									</li>
									<li class="V2-item-has-children">
										<a href="#">measurement</a>
									</li>
								</ul>
							</li>
							<li><a href="javascript:">flagship projects</a></li>
							<li><a href="javascript:">contents</a></li>
							<li><a href="javascript:">sustainability report</a></li>
						</ul> -->
					</div>
				</div>
			</div>
		</div>

		<!-- End of Header Version 2 -->

    <?php
	}
	?>