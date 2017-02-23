<div style="background-color:#fff;width:650px;font-family:Open-sans,sans-serif;color:#555454;font-size:13px;line-height:18px;margin:auto">
    <table style="width:100%;margin-top:10px">
        <tbody><tr>
            <td style="width:20px;padding:7px 0">&nbsp;</td>
            <td align="center" style="padding:7px 0">
                <table bgcolor="#ffffff" style="width:100%">
                    <tbody>
                    <tr>
                        <td align="center" style="border-bottom:4px solid #333333;padding:7px 0">
                            <a  href="<?=base_url()?>" style="color:#337ff1" target="_blank">
                                <img src="<?=base_url()?>images/logo.png"  class="CToWUd">
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td align="center" style="padding:7px 0">
                            <font size="2" face="Open-sans, sans-serif" color="#555454">
                                <span style="font-weight:500;font-size:28px;text-transform:uppercase;line-height:33px">Hi <?= $this->input->get_post('name') ?>,</span><br>
                                <span style="font-weight:500;font-size:16px;text-transform:uppercase;line-height:25px">Iam <?= $customer->firstname ?> <?= $customer->lastname ?> </span>
                            </font>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:0!important">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #d6d4d4;background-color:#f8f8f8;padding:7px 0">
                            <table style="width:50%;float: left">

                                <thead>
                                <tr>
                                    <td width="10" style="padding:7px 0">&nbsp;</td>
                                    <td style="padding:7px 0">
                                      <a href="<?= base_url()."product_detail"?>/<?= url_title($pro->title)  ?>/<?= $pro->id ?>" >  <?=$pro->title ?> </a>
                                    </td>
                                    <td width="10" style="padding:7px 0">&nbsp;</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td width="10" style="padding:7px 0">&nbsp;</td>
                                    <td style="padding:7px 0">
                                       <a href="<?= base_url()."product_detail" ?>/<?= url_title($pro->title)  ?>/<?= $pro->id ?>" >
                                           <img src="<?=base_url()?>uploads/thumbs/<?=$pro->image?>" >
                                           </a>
                                    </td>
                                    <td width="10" style="padding:7px 0">&nbsp;</td>
                                </tr>
                                </tbody>
                            </table>
                            <table style="width:50%">
                                <thead>
                                <tr>
                                    <td width="10" style="padding:7px 0">&nbsp;</td>
                                    <td style="padding:7px 0"> &nbsp; </td>
                                    <td width="10" style="padding:7px 0">&nbsp;</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td width="10" style="padding:7px 0">&nbsp;</td>
                                    <td style="padding:7px 0">
                                        <font size="2" face="Open-sans, sans-serif" color="#555454">
                                         <?= $pro->description ?> <br/>
                                            <div class="price">

                                                <?php if($pro->discount > 0  ): ?>
                                                    <p id="reduction_percent" ><span id="reduction_percent_display">-<?= $pro->discount ?>%</span></p>
                                                    <p id="reduction_amount"  style="display:none"><span id="reduction_amount_display"></span></p>
                                                    <p style="text-decoration: line-through;" id="old_price"><span id="old_price_display"><span class="price"><?= number_format($pro->price ,2) ?> QAR </span></span></p>
                                                <?php endif; ?>
                                                <p class="our_price_display" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                                                    <link itemprop="availability" href="https://schema.org/InStock"/>
                                                    <?php $price =   ( (100-$pro->discount)/100 * $pro->price )   ?>
                                                    <span style="font-size: 24px; font-weight: 700;font-family: Poppins,sans-serif;" id="our_price_display" class="price" itemprop="price" content="<?= number_format( $price, 2 ) ?>"><?= number_format( $price, 2 ) ?> QAR</span>
                                                    <meta itemprop="priceCurrency" content="USD" />
                                                </p>
                                            </div>
                                            </font>
                                    </td>
                                    <td width="10" style="padding:7px 0">&nbsp;</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:0!important">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="padding:0!important">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border-top:4px solid #333333;padding:7px 0">
                            <span><a href="<?= base_url() ?>" style="color:#337ff1" target="_blank"><?= PROJECT_TITLE ?></a> powered by <a href="http://itmart.lk/" style="color:#337ff1" target="_blank">ITMARTX</a></span>
                        </td>
                    </tr>
                    </tbody></table>
            </td>
            <td style="width:20px;padding:7px 0">&nbsp;</td>
        </tr>
        </tbody></table><div class="yj6qo"></div><div class="adL">
    </div></div>