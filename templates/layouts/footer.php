<footer class="footer pb70 fadeInRight wow" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s"
    style="background:url('<?=_upload_hinhanh_l.$bg_footer["photo_".$lang]?>') center center/cover">

    <div class="box-footer">

        <div class="grid wide">

            <div class="row p-relative">

                <div class="col l-4 m-6 c-12 pb40mobile p-relative">

                    <div class="info_footer">
                        <div class="box_logo_footer">
                            <a href="" class="p-relative ratio-img" img-width="109" img-height="106">

                                <img src="./assets/images/loading_image.svg"
                                    data-src="<?= _upload_hinhanh_l.$logo_footer['photo']?>" alt="CẢNH QUAN THIÊN KIM"
                                    class="ratio-img__content img-scale">


                            </a>
                        </div>



                        <div class="mt20">

                            <div class="wrapper-form__footer">

                                <div class="mt20 mb20">

                                    <?=$func->getSocial($socical)?>

                                </div>
                                <div class="view_map_button">

                                    <a href="<?=$row_setting['iframe_map']?>"><i
                                            class="fa-light fa-map-location-dot mr15"></i> Xem chỉ đường</a>

                                </div>

                            </div>

                        </div>


                    </div>

                </div>
                <div class="col l-5 m-6 c-12 p-relative">

                    <div class="box-mg info_footer">

                        <div class="title-footer p-relative mt15">

                            <span>DỊCH VỤ CẢNH QUAN THIÊN KIM</span>

                        </div>

                        <div class="desc-footer mt20">

                            <?=htmlspecialchars_decode($footer["mota"])?>

                        </div>



                    </div>

                </div>

                <div class="col l-3 m-6 c-12 p-relative">

                    <div class="box-mg ml20 box-mg--lastchild">

                        <div class="title-footer p-relative mt15">

                            <span>QUY ĐỊNH & CHÍNH SÁCH</span>

                        </div>

                        <div class="desc-footer mt20">

                            <ul class="ul-list-none">

                                <?php foreach($chinhsach as $key => $value){?>

                                <li>
                                    <a href="<?=$value["type"]?>/<?= $value['tenkhongdau']?>"
                                        title="<?= $value['ten']?>">
                                        <img src="./assets/images/tienIMG/muiten.png" alt="<?= $value['ten']?>"
                                            class="mr5">
                                        <?= $value['ten']?>
                                    </a>
                                </li>
                                <?php }?>


                            </ul>

                        </div>


                    </div>

                </div>

            </div>

        </div>

    </div>

</footer>

<div class="menu-bottom d-none">
    <ul class="clearfix">
        <li>
            <a href="" title="HomePage">
                <i class="fal fa-home"></i>
                <span class="sub">Trang chủ</span>
            </a>
        </li>
        <li>
            <a href="tel:<?=str_replace('.','',str_replace(' ','',$row_setting['hotline']))?>" title="clickToCall">
                <i class="fa-light fa-circle-phone-flip"></i>
                <span class="sub">Hotline</span>
            </a>
        </li>
        <li>
            <a href="" class="p-relative d-block" title="Trang chủ">

                <img class="scaleimg" width="70" height="70" src="<?=_upload_hinhanh_l.$logo_mobile["photo"]?>"
                    alt="Trang chủ" onerror="this.src='images/no-image.jpg'" />

            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-target="#options" id="tool-1" title="Tiện ích" class="js-mobi-tool">
                <i class="fas fa-ellipsis-h mobi-tool-act"></i>
                <span class="sub">Tiện ích</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-target="#menuSide" id="tool-2" class="js-mobi-tool">
                <span class="bars-menu mobi-tool-act"></span>
                <span class="sub">Menu</span>
            </a>
        </li>
    </ul>
</div>