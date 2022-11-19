<?php 

    $bg_tintuc = $func->OneDataPhoto(null,'bg_tintuc','limit 0,1',"object");                                    // Background tin tức

    $bg_banner = $func->OneDataPhoto("mota_$lang as mota,",'bg-slider','limit 0,1',"object");                                    // Background tin tức

    $bg_boloc = $func->OneDataPhoto(null,'bg-boloc','limit 0,1',"object");                                    // Background tin tức

    $bg_motadangky = $func->OneDataPhoto("mota_$lang as mota,",'bg-motadangky','limit 0,1',"object");                                    // Background tin tức

    $bg_dangky = $func->OneDataPhoto(null,'bg-dangky','limit 0,1',"object");                        // Background tin tức và video

    $bg_gioithieu = $func->OneDataPhoto(null,'bg_gioithieu','limit 0,1',"object");                              // Background giới thiệu

    $ha_gioithieu = $func->OneDataPhoto(null,'ha-gioithieu','limit 0,1',"object");                              // Hình ảnh giới thiệu
   
   

    $anhgiaodich = $func->AllData('id,id_list,luotxem,','anh-giao-dich','','','array');              // Lấy toàn bộ dịch vụ
    

?>




<section class="wrapper-introduces wow fadeInRight" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">

    <div class="grid wide">

        <div class="row">

            <div class="col-12 item grid-intro">
                <div class="col l-12 m-12 c-12 mb-m-20 mt30mobile">

                    <div class="wrapper-introduces__title mb25">

                        <a href="gioi-thieu" rel="dofollow" title="<?=$about["ten"]?>"
                            class="d-flex align-items-center">

                            <div class="scrolltext_Introduces">
                                <div class="scrolltext"><?=$about["ten"]?></div>
                            </div>

                        </a>

                    </div>

                    <div class="wrapper-introduces__title-des line-4"><?= htmlspecialchars_decode($about["mota"])?>
                    </div>

                    <div class="wrapper-introduces__parameter pt10">

                        <div class="row">



                            <div class="button_introduces mt30">
                                <a href="gioi-thieu" class="link_intro" rel="nofollow">XEM THÊM</a>
                            </div>

                            <div class="wrapper-introduces__img-big d-none-m col-12">

                                <span class="d-block ratio-img" img-width="566" img-height="326">

                                    <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                        data-src="<?=_upload_hinhanh_l.$ha_gioithieu->photo?>" alt="<?=$about["ten"]?>"
                                        <?=$func->errorImg()?>>

                                </span>

                            </div>



                        </div>

                    </div>

                </div>

                <div class="col l-12 m-12 c-12">

                    <div class="wrapper-introduces__img p-relative">

                        <a href="gioi-thieu" class="d-block" rel="dofollow" title="Giới thiệu">



                            <div class="wrapper-introduces__img-small">

                                <span class="hover-left d-block ratio-img" img-width="573" img-height="347">

                                    <img class="ratio-img__content hover-left img-scale"
                                        src="./assets/images/loading_image.svg"
                                        data-src="<?=_upload_hinhanh_l.$about["photo"]?>" alt="<?=$about["ten"]?>"
                                        <?=$func->errorImg()?>>

                                </span>

                            </div>

                        </a>
                        <div class="box_intro_icon">
                            <?php for($i=0;$i<count($introTop);$i++){ ?>

                            <div class="col l-4 m-2-4 c-4 mb20 col-intro__check intro-col<?=$i?> d-flex flex-column">

                                <div class="wrapper-introduces__boxbottom flex-cl-1 d-flex flex-column">

                                    <div class="wrapper-introduces__boxbottom-img">

                                        <span class="d-block ratio-img" img-width="63" img-height="63">

                                            <img class="ratio-img__content img-scale"
                                                src="./assets/images/loading_image.svg"
                                                data-src="<?=_upload_hinhanh_l.$introTop[$i]["photo"]?>"
                                                alt="<?=$introTop[$i]["ten"]?>" <?=$func->errorImg()?>>

                                        </span>

                                    </div>

                                    <div class="wrapper-introduces__boxbottom-detail flex-cl-1 d-flex flex-column">

                                        <span class="wrapper-introduces__boxbottom-detail-numb flex-cl-1">+<span
                                                id="count<?=$i?>">0</span> <?=$introTop[$i]["ten"]?></span>

                                        <span class="wrap-work__box-detail-line mt15"></span>

                                        <script>
                                        var mydiv<?=$i?> = document.getElementById("count<?=$i?>");

                                        var timeCurrent<?=$i?> = <?=$introTop[$i]["number"]?>;

                                        var checkTime<?=$i?> = 0;

                                        if (timeCurrent<?=$i?> < 50) {

                                            checkTime<?=$i?> = 100;

                                        } else {

                                            checkTime<?=$i?> = 20;

                                        }
                                        var time<?=$i?> = setInterval(getcounter, checkTime<?=$i?>);

                                        function getcounter() {

                                            if (mydiv<?=$i?>.textContent >= timeCurrent<?=$i?>) {
                                                clearInterval(time<?=$i?>);
                                            } else {
                                                mydiv<?=$i?>.textContent++;
                                            }

                                        }
                                        </script>

                                    </div>


                                </div>


                            </div>

                            <?php }?>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>

</section>


<section class="service pt50">
    <div class="container">
        <div class="row">
            <div class="col-10 box_title_service item pb70 wow slideInLeft" data-wow-delay="0.2s">
                <div class="title1_service">
                    DỊCH VỤ CỦA
                </div>
                <div class="titleSEO_project mb30">
                    CẢNH QUAN THIÊN KIM
                </div>
                <div class="descriptionSEO_project">
                    <?= htmlspecialchars_decode($danhmucnoibat['mota'])?>
                </div>
            </div>
        </div>
        <?php if($deviceType == 'phone'){?>

        <div class="col-12">
            <?php foreach($service_c1 as $k=>$v){ $seoDB = $seo->getSeoDB($v['id'],'baiviet','man_list',$v["type"]); ?>
            <div class="col-12 p-relative">
                <div class="col-12 img_projects_phone">
                    <a href="<?=_upload_baiviet_l.$v["photo"]?>" data-fancybox="img-<?=$k?>" rel="dofollow"
                        title="<?=$v["ten"]?>" class="d-block z-index1 hover-left ratio-img" img-width="515"
                        img-height="402">
                        <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                            data-src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten"]?>" <?=$func->errorImg()?>>
                    </a>
                </div>
                <div class="col-12 title_desc_phone info_project1">
                    <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" class="">
                        <div class="project_title pb20">
                            <?=$v["ten"]?>
                        </div>
                        <div class="project_description line-4">
                            <?=$seoDB["description_$lang"]?>
                        </div>
                    </a>
                </div>
            </div>
            <?php }?>
        </div>

        <?php }else{?>
        <div class="col-12">
            <?php foreach($service_c1 as $ky=>$val){ $seoDB = $seo->getSeoDB($val['id'],'baiviet','man_list',$val["type"]); ?>
            <?php if ( $ky % 2 == 1 ) { ?>
            <div class="col-12 display-flex mb100 gap10">
                <div class="img_project wow slideInLeft" data-wow-delay="0.2s">
                    <a href="<?=_upload_baiviet_l.$val["photo"]?>" data-fancybox="img-<?=$k?>" rel="dofollow"
                        title="<?=$val["ten"]?>" class="d-block z-index-1 hover-left ratio-img" img-width="857"
                        img-height="496">
                        <img class="ratio-img__content hover-left img-scale" src="./assets/images/loading_image.svg"
                            data-src="<?=_upload_baiviet_l.$val["photo"]?>" alt="<?=$val["ten"]?>"
                            <?=$func->errorImg()?>>
                    </a>
                </div>
                <div class="title_desc_Project wow slideInRight" data-wow-delay="0.2s">
                    <a href="<?=$val["type"]?>/<?=$val["tenkhongdau"]?>"
                        class="mr45 info_project flex-column-center mt90">
                        <div class="project_title mb25">
                            <?=$val["ten"]?>
                        </div>
                        <div class="project_description line-4">
                            <?=$seoDB["description_$lang"]?>
                        </div>
                    </a>
                </div>
            </div>
            <?php } if ( $ky % 2 == 0 ) { ?>
            <div class="col-12 display-flex mb100 gap30 ">
                <div class="title_desc_Project wow slideInLeft" data-wow-delay="0.2s">
                    <a href="<?=$val["type"]?>/<?=$val["tenkhongdau"]?>"
                        class="ml45 info_project flex-column-center mt90">
                        <div class="project_title mb25">
                            <?=$val["ten"]?>
                        </div>
                        <div class="project_description line-4">
                            <?=$seoDB["description_$lang"]?>
                        </div>
                    </a>
                </div>
                <div class="img_project wow slideInRight" data-wow-delay="0.2s">
                    <a href="<?=_upload_baiviet_l.$val["photo"]?>" data-fancybox="img-<?=$k?>" rel="dofollow"
                        title="<?=$val["ten"]?>" class="d-block z-index-1 hover-left ratio-img" img-width="857"
                        img-height="496">
                        <img class="ratio-img__content hover-left img-scale" src="./assets/images/loading_image.svg"
                            data-src="<?=_upload_baiviet_l.$val["photo"]?>" alt="<?=$val["ten"]?>"
                            <?=$func->errorImg()?>>
                    </a>
                </div>
            </div>
            <?php }?>
            <?php }?>
        </div>
        <?php } ?>
    </div>
</section>

<section class="procedure pt70 pb110"
    style="background:url('<?=_upload_hinhanh_l.$bg_quytrinh["photo"]?>') no-repeat center center/cover;">
    <div class="container">
        <div class="row">
            <div class="col-12 item">
                <div class="box_title_proce">
                    <div class="box_title">
                        QUY TRÌNH THI CÔNG
                    </div>
                    <div class="box_title_company">
                        CẢNH QUAN THIÊN KIM
                    </div>
                </div>
                <?php if($deviceType == 'phone'){ ?>

                <div class="col-12 grid-quytrinh">
                    <?php foreach ($quytrinh as $key => $value){ ?>
                    <?php if($key % 2 == 0){ ?>
                    <div class="box_proce_t col-12">
                        <div class="img_proce_t">
                            <span class="d-block icon_proces ratio-img" img-width="93.18" img-height="93.18">
                                <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                    data-src="<?=_upload_baiviet_l.$value["photo"]?>" alt="<?= $value["ten"]?>"
                                    <?=$func->errorImg()?>>

                            </span>
                        </div>
                        <div class="title_proce_t">
                            <?= $value["ten"]?>
                        </div>
                    </div>
                    <?php }else{?>
                    <div class="box_proce_b col-12">
                        <div class="title_proce_b">
                            <?= $value["ten"]?>
                        </div>
                        <div class="img_proce_b">
                            <span class="d-block icon_proces ratio-img" img-width="93.18" img-height="93.18">
                                <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                    data-src="<?=_upload_baiviet_l.$value["photo"]?>" alt="<?= $value["ten"]?>"
                                    <?=$func->errorImg()?>>
                            </span>
                        </div>


                    </div>

                    <?php } ?>
                    <?php } ?>
                </div>

                <?php }else{ ?>

                <div class="col-12 grid-quytrinh">
                    <?php foreach ($quytrinh as $key => $value){ ?>
                    <?php if($key % 2 == 0){ ?>
                    <div class="box_proce_t col-12">
                        <div class="img_proce_t">
                            <img src="<?=_upload_baiviet_l.$value["photo"]?>" alt="">
                        </div>
                        <div class="title_proce_t">
                            <?= $value["ten"]?>
                        </div>
                    </div>
                    <?php }else{?>
                    <div class="box_proce_b col-12">
                        <div class="title_proce_b">
                            <?= $value["ten"]?>
                        </div>
                        <div class="img_proce_b">
                            <img src="<?=_upload_baiviet_l.$value["photo"]?>" alt="">
                        </div>


                    </div>

                    <?php } ?>
                    <?php } ?>
                </div>

                <?php } ?>

            </div>
        </div>
    </div>
</section>


<section class="project pt80 ">
    <div class="container">
        <div class="row">
            <?php if($deviceType == 'phone'){ ?>
            <div class="col-12 item">
                <div class="col-12 box_project_left">
                    <div class="title1_service">
                        CẢNH QUAN THIÊN KIM
                    </div>
                    <div class="box_title_new mb20">
                        DỰ ÁN THỰC HIỆN
                    </div>
                    <div class="box_desc_seo_project">
                        <?= htmlspecialchars_decode($desc_seo_project['mota'])?>
                    </div>
                    <div class="pt10 pb20 flex_center">
                        <a href="du-an" class="link_intro" rel="nofollow">XEM THÊM</a>
                    </div>
                </div>
                <div class="col-12 box_project_right">
                    
                    <div class="box_project_mobile">
                        <div class="owl-carousel owl-theme" id="owl-duan">
                            <?php foreach ($projects as $k => $v) {?>
                            <div class="box_img_project">
                                <span rel="dofollow" title="<?=$v["ten"]?>"
                                    class="d-block z-index-1 hover-left ratio-img" img-width="360" img-height="345">
                                    <img class="ratio-img__content hover-left img-scale"
                                        src="./assets/images/loading_image.svg"
                                        data-src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten"]?>"
                                        <?=$func->errorImg()?>>
                                </span>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
            <?php }else{ ?>
            <div class="col-12 item grid-project">
                <div class="col-6 box_project_left pt80">
                    <div class="title1_service">
                        CẢNH QUAN THIÊN KIM
                    </div>
                    <div class="box_title_new mb20">
                        DỰ ÁN THỰC HIỆN
                    </div>
                    <div class="box_desc_seo_project">
                        <?= htmlspecialchars_decode($desc_seo_project['mota'])?>
                    </div>
                    <div class="pt30 flex_center">
                        <a href="du-an" class="link_intro" rel="nofollow">XEM THÊM</a>
                    </div>
                </div>
                <div class="col-6 box_project_right">
                    <div class="box_bg_project col-8">
                        <span rel="dofollow" title="<?= htmlspecialchars_decode($desc_seo_project['title'])?>"
                            class="d-block z-index-1 hover-left ratio-img" img-width="375" img-height="425">
                            <img class="ratio-img__content hover-left img-scale" src="./assets/images/loading_image.svg"
                                data-src="<?=_upload_hinhanh_l.$bg_duan["photo"]?>"
                                alt="<?= htmlspecialchars_decode($desc_seo_project['title'])?>" <?=$func->errorImg()?>>
                        </span>
                    </div>
                    <div class="box_project">
                        <div class="owl-carousel owl-theme" id="owl-duan">
                            <?php foreach ($projects as $k => $v) {?>
                            <div class="box_img_project">
                                <span rel="dofollow" title="<?=$v["ten"]?>"
                                    class="d-block z-index-1 hover-left ratio-img" img-width="360" img-height="345">
                                    <img class="ratio-img__content hover-left img-scale"
                                        src="./assets/images/loading_image.svg"
                                        data-src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten"]?>"
                                        <?=$func->errorImg()?>>
                                </span>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="news_index pb55 pt40mobile">
    <div class="container">
        <div class="row">
            <div class="col-12 item">
                <div class="box_title_icon_new pb45">
                    <div class="title1_service">
                        CẢNH QUAN THIÊN KIM
                    </div>
                    <div class="box_title_new mb20">
                        TIN TỨC SỰ KIỆN
                    </div>
                </div>
                <div class="owl-carousel owl-theme" id="owl-tintuc">
                    <?php foreach ($news as $k => $v) { $seoDB = $seo->getSeoDB($v['id'],'baiviet','man',$v["type"]);?>
                    <div class="pt10 pb10 wow fadeInUp" data-wow-delay="<?= $key*0.2 + 0.2?>s">
                        <a href="<?= $v['type']?>/<?= $v['tenkhongdau']?>">
                            <div class="box_news">
                                <div class="box_img_news p-relative">
                                    <span rel="dofollow" title="<?=$v["ten"]?>"
                                        class="d-block z-index-1 hover-left ratio-img" img-width="433.36"
                                        img-height="357.41">
                                        <img class="ratio-img__content hover-left img-scale"
                                            src="./assets/images/loading_image.svg"
                                            data-src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten"]?>"
                                            <?=$func->errorImg()?>>
                                    </span>
                                </div>
                                <div class="box_name_desc_news">
                                    <div class="title_company mb15">CẢNH QUAN THIÊN KIM</div>
                                    <div class="box_name_news line-2 mb15"><?= $v['ten']?></div>
                                    <div class="box_desc_news line-4 mb25">
                                        <?=$seoDB["description_$lang"]?>
                                    </div>
                                    <div class="link_news">
                                        Tìm hiểu thêm <i class="far fa-long-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php if($deviceType == 'phone'){?>

<section class="wrapper-register mb70 mt75 p-relative wow fadeInDown" data-wow-offset="50" data-wow-duration="3"
    data-wow-delay="0.2s"
    style="background:url('<?=_upload_hinhanh_l.$bg_dangkymobile["photo"]?>') no-repeat center center/cover;">



    <div class="grid wide">

        <div class="row">

            <div class="col l-5 m-5 c-12 d-flex flex-column mb-m-20 mt-m-20">

                <div class="wrapper-register__boxleft">

                <div class="wrapper-register__title-default mb40">
                        CẢNH QUAN THIÊN KIM
                        <div class="title_rigister">
                            ĐĂNG KÝ NHẬN TIN
                        </div>
                    </div>



                    <div class="wrapper-register__boxleft-form-row">

                        <div class="row">

                            <div class="col l-6 m-12 c-12 mb-m-18">

                                <input type="text" name="regis-index-fullname" placeholder="Nhập họ và tên">

                            </div>

                            <div class="col l-6 m-12 c-12">

                                <input type="text" name="regis-index-phone" placeholder="Nhập số điện thoại">
                            </div>

                        </div>

                    </div>

                    <div class="wrapper-register__boxleft-form-row">

                        <div class="row">

                            <div class="col l-12 m-12 c-12">

                                <input type="text" name="regis-index-email" placeholder="Nhập email">


                            </div>

                        </div>

                    </div>

                    <div class="wrapper-register__boxleft-form-row wrapper-register__boxleft-form-row-mb30 mb-m-18">

                        <div class="row">

                            <div class="col l-12 m-12 c-12">

                                <textarea name="regis-index-content" cols="30" rows="5"
                                    placeholder="Nhập nội dung"></textarea>

                            </div>

                        </div>

                    </div>

                    <div class="wrapper-register__boxleft-form-row">
                        <button class="p-relative link_register wrapper-regis-btn">ĐĂNG KÍ</button>

                    </div>


                </div>

            </div>

        </div>

    </div>

</section>
<?php }else{?>
<section class="wrapper-register p-relative wow fadeInDown" data-wow-offset="50" data-wow-duration="3"
    data-wow-delay="0.2s"
    style="background:url('<?=_upload_hinhanh_l.$bg_dangkymobile["photo"]?>') no-repeat center center/cover;">



    <div class="grid wide">

        <div class="row">

            <div class="col-12 item">

                <div class="wrapper-register__boxleft">

                    <div class="wrapper-register__title-default mb40">
                        CẢNH QUAN THIÊN KIM
                        <div class="title_rigister">
                            ĐĂNG KÝ NHẬN TIN
                        </div>
                    </div>
                    <div class="col-8 grid-register">
                        <div class="col-12 box_regis_left">
                            <div class="wrapper-register__boxleft-form-row">

                                <div class="row">

                                    <div class="col l-12 m-12 c-12 mb-m-18">

                                        <input type="text" name="regis-index-fullname" placeholder="Nhập họ và tên">

                                    </div>

                                    <div class="col l-12 m-12 c-12">

                                        <input type="text" name="regis-index-phone" placeholder="Nhập số điện thoại">
                                    </div>

                                    <div class="col l-12 m-12 c-12">

                                        <input type="text" name="regis-index-email" placeholder="Nhập email">

                                    </div>

                                </div>

                            </div>


                        </div>
                        <div class="col-12 box_regis_right">
                            <div
                                class="wrapper-register__boxleft-form-row wrapper-register__boxleft-form-row-mb30 mb-m-18">

                                <div class="row">

                                    <div class="col l-12 m-12 c-12">

                                        <textarea name="regis-index-content" cols="30" rows="5"
                                            placeholder="Nhập nội dung"></textarea>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="wrapper-register__boxbutton">
                        <button class="p-relative link_register wrapper-regis-btn">ĐĂNG KÍ</button>

                    </div>


                </div>

            </div>

        </div>

    </div>

</section>
<?php } ?>