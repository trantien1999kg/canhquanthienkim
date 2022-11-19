<nav class="wrapper-nav__menu d-none-m d-none-tablet">



    <div class="col l-12 m-12 c-12">

        <ul class="nav-menu d-flex justify-content-between">

            <li class="<?php if($com=='gioi-thieu') echo ' active';?>">
                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                <h2>
                    <?php }?>
                    <a href="gioi-thieu" title="Giới thiệu" rel="dofollow">GIỚI THIỆU</a>
                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                </h2>
                <?php }?>
            </li>

            <?php foreach($service_c1 as $k => $v){
                $service_c2 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_cat where hienthi=1 and id_list=? order by stt asc,id desc",array($v['id']));
                           
                ?>
            <li class="<?php if($com== 'san-pham' && $act==$v['tenkhongdau']) echo ' active';?>">
                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                <h2>
                    <?php }?>

                    <a href="<?= $v['type']?>/<?= $v['tenkhongdau']?>" title="Về chúng tôi "
                        class="menuheader"><?= $v['ten']?> </a>

                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                </h2>
                <?php if(count($service_c2)>0){?>
                <ul>
                    <?php
                                    foreach($service_c2 as $key =>$vc2){ ?>
                    <li class="p-relative">

                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                        <h4>

                            <?php }?>

                            <a href="<?= $v['type']?>/<?= $v['tenkhongdau']?>/<?= $vc2['tenkhongdau']?>" rel="dofollow"
                                title="<?= $vc2['ten']?>"><?= $vc2['ten']?></a>

                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                        </h4>

                        <?php }?>

                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
                <?php }?>
            </li>
            <?php }?>

            <!---->


            <!---->

            

            <li class="<?php if($com=='tin-tuc') echo ' active';?>">

                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                <h2>

                    <?php }?>

                    <a href="tin-tuc" title="GÓC CHIA SẺ" rel="dofollow">GÓC CHIA SẺ</a>

                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                </h2>

                <?php }?>

            </li>

            <li class="<?php if($com=='lien-he') echo ' active';?> p-relative">

                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                <h2>

                    <?php }?>

                    <a href="lien-he" title="Liên hệ" rel="dofollow">LIÊN HỆ</a>

                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                </h2>

                <?php }?>

            </li>

            <li class="search">
                <span class="search-Click">

                    <img src="./assets/images/tienIMG/search.png" class="search-icon-yellow">

                </span>

                <div class="nav-menu__formsearchheader d-flex align-items-center">

                    <input role="search-input" type="text" name="keywords" id="keywordspc" placeholder="Tìm kiếm">

                    <button class="nav-menu__formsearchheader-button" data-btn-search-pc="" type="submit"><i
                            class="fa-solid fa-magnifying-glass"></i></button>

                </div>
            </li>



        </ul>

    </div>



</nav>