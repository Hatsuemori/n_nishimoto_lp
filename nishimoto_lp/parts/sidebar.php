                <div id="sidebar">
                     <aside>
                          <div class="sidebarBox">
                               <p class="sidebarTitle">Latest</p>
                               <ul class="sidebarNewsUl">
                                    <?php
                                $args = array('posts_per_page' => 5,);
                                $postslist = get_posts($args);
                                foreach ($postslist as $post) :
                                    setup_postdata($post); ?>
                                    <li class="cat-item">
                                         <a href="<?php the_permalink(); ?>">
                                              <p class="date"><?php echo get_the_date('Y/m/d'); ?></p>
                                              <p class="title"><?php the_title(); ?></p>
                                         </a>
                                    </li>
                                    <?php
                                endforeach;
                                wp_reset_postdata();
                                ?>
                               </ul>
                          </div>
                     </aside>
                     <aside>
                          <div class="sidebarBox">
                               <p class="sidebarTitle">Category</p>
                               <div class="sidebarCategoryBlock">
                                    <?php wp_list_categories('title_li='); ?>
                               </div>
                          </div>
                     </aside>
                     <!--
                    <aside>
                        <div class="sidebarBox">
                            <p class="sidebarTitle"><span class="fontEn">Tag</span>タグ</p>
                            <div class="sidebarTagWrap">
                                <?php wp_tag_cloud(); ?>
                            </div>
                        </div>
                    </aside>
                    -->
                     <aside>
                          <div class="sidebarBox">
                               <p class="sidebarTitle">Archive</p>

                               <select name="archive-dropdown"
                                    onChange='document.location.href=this.options[this.selectedIndex].value;'>
                                    <option value=""><?php echo attribute_escape(__('Select Month')); ?></option>
                                    <?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?>
                               </select>

                          </div>
                     </aside>
                </div>