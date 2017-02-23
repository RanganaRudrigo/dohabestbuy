<div style="100%">

    <div style="width: 100%;  " >
        <ul style="    background-color: #fff;
    border: 1px solid #f6f6f6;
    padding: 15px;
    line-height: 25px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.05);
    box-shadow: 0 1px 1px rgba(0,0,0,0.05);">
            <li style="padding: 2px 15px; list-style:none;">
                <h3 style="background: #F5F5F5;
    padding: 10px 15px;     font-size: 24px;
    font-weight: 700;
    text-transform: uppercase; font-family:Arial, Helvetica, sans-serif; font-size:18px; " > Order Details  </h3>
            </li>
            <li style="padding: 2px 15px; list-style:none; font-family:Arial, Helvetica, sans-serif; font-size:12px; "><strong>Reference No : </strong> <?= $order->receipt_no ?>  </li>
            <li style="padding: 2px 15px; list-style:none; font-family:Arial, Helvetica, sans-serif; font-size:12px; "><strong>Order ID : </strong> <?= $order->id ?>  </li>
            <li style="padding: 2px 15px; list-style:none; font-family:Arial, Helvetica, sans-serif; font-size:12px; "><strong>Date : </strong><?= date("d/m/Y", strtotime($order->date) ) ?></li>
            <li style="padding: 2px 15px; list-style:none; font-family:Arial, Helvetica, sans-serif; font-size:12px; "><strong>Phone No : </strong><?= $customer->phone ?> / <?= $customer->phone_mobile ?></li>
            <li style="padding: 2px 15px; list-style:none; font-family:Arial, Helvetica, sans-serif; font-size:12px; "><strong>Email</strong><?= $customer->email ?></li>
        </ul>
    </div>

    <div style="width: 48%; float:left;" >
        <ul style="    background-color: #fff;
    border: 1px solid #f6f6f6;
    padding: 15px;
    line-height: 25px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.05);
    box-shadow: 0 1px 1px rgba(0,0,0,0.05);">
            <li style="padding: 2px 15px; list-style:none;">
                <h3 style="background: #F5F5F5;
    padding: 10px 15px;     font-size: 24px;
    font-weight: 700;
    text-transform: uppercase; font-family:Arial, Helvetica, sans-serif; font-size:18px; " > Primary Address  </h3>
            </li>
            <li style="padding: 2px 15px; list-style:none; font-family:Arial, Helvetica, sans-serif; font-size:12px; "><?= $customer->firstname ?> <?= $customer->lastname ?></li>
            <li style="padding: 2px 15px; list-style:none; font-family:Arial, Helvetica, sans-serif; font-size:12px; "><?= $customer->company ?></li>
            <li style="padding: 2px 15px; list-style:none; font-family:Arial, Helvetica, sans-serif; font-size:12px; "><?= $customer->address1 ?> <?= $customer->address2 ?></li>
            <li style="padding: 2px 15px; list-style:none; font-family:Arial, Helvetica, sans-serif; font-size:12px; "><?= $customer->city ?>, <?= $customer->state ?></li>
            <li style="padding: 2px 15px; list-style:none; font-family:Arial, Helvetica, sans-serif; font-size:12px; ">Qatar</li>
        </ul>
    </div>
    <div style="width: 48%; float:right;" >
        <ul style="    background-color: #fff;
    border: 1px solid #f6f6f6;
    padding: 15px;
    line-height: 25px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.05);
    box-shadow: 0 1px 1px rgba(0,0,0,0.05);">
            <li style="padding: 2px 15px; list-style:none;">
                <h3 style="background: #F5F5F5;
    padding: 10px 15px;     font-size: 24px;
    font-weight: 700;
    text-transform: uppercase; font-family:Arial, Helvetica, sans-serif; font-size:18px; " > Shipping Address  </h3>
            </li>
            <li style="padding: 2px 15px; list-style:none; font-family:Arial, Helvetica, sans-serif; font-size:12px; "><?= $customer->firstname ?> <?= $customer->lastname ?></li>
            <li style="padding: 2px 15px; list-style:none; font-family:Arial, Helvetica, sans-serif; font-size:12px; "><?= $customer->company ?></li>
            <li style="padding: 2px 15px; list-style:none; font-family:Arial, Helvetica, sans-serif; font-size:12px; "><?php $cus = json_decode($order->customer_detail); echo $cus->shipping ; ?></li>
            <li style="padding: 2px 15px; list-style:none; font-family:Arial, Helvetica, sans-serif; font-size:12px; "><?= $cus->city ?>, <?= $cus->state ?></li>
            <li style="padding: 2px 15px; list-style:none; font-family:Arial, Helvetica, sans-serif; font-size:12px; ">Qatar</li>
        </ul>
    </div>
    <?php $carts = json_decode($order->cart_details , true);  ?>
    <table style="border: 1px solid #dddddd; border-collapse: collapse;width: 100%">
        <thead>
        <tr>
            <th style="border: 1px solid #dddddd; font-family:Arial, Helvetica, sans-serif; padding: 8px; font-size:12px;"  >Reference</th>
            <th style="border: 1px solid #dddddd; font-family:Arial, Helvetica, sans-serif; padding: 8px; font-size:12px;" >Product</th>
            <th style="border: 1px solid #dddddd; font-family:Arial, Helvetica, sans-serif; padding: 8px; font-size:12px;" >Quantity</th>
            <th style="border: 1px solid #dddddd; font-family:Arial, Helvetica, sans-serif; padding: 8px; font-size:12px;" >Unit price</th>
            <th style="border: 1px solid #dddddd; font-family:Arial, Helvetica, sans-serif; padding: 8px; font-size:12px;" >Total price</th>
        </tr>
        </thead>
        <tfoot>
        <!--<tr class="item">
            <td style="border: 1px solid #dddddd; font-family:Arial, Helvetica, sans-serif; padding: 8px; font-size:12px;" colspan="1"><strong>Items (tax excl.)</strong></td>
            <td style="border: 1px solid #dddddd; font-family:Arial, Helvetica, sans-serif; padding: 8px; font-size:12px;" colspan="4"><span class="price">$83.45</span></td>
        </tr>
        <tr class="item">
            <td style="border: 1px solid #dddddd; font-family:Arial, Helvetica, sans-serif; padding: 8px; font-size:12px;" colspan="1"><strong>Items (tax incl.) </strong></td>
            <td style="border: 1px solid #dddddd; font-family:Arial, Helvetica, sans-serif; padding: 8px; font-size:12px;" colspan="4"><span class="price">$86.79</span></td>
        </tr>
        <tr class="item">
            <td style="border: 1px solid #dddddd; font-family:Arial, Helvetica, sans-serif; padding: 8px; font-size:12px;" colspan="1"><strong>Shipping &amp; handling (tax incl.) </strong></td>
            <td style="border: 1px solid #dddddd; font-family:Arial, Helvetica, sans-serif; padding: 8px; font-size:12px;" colspan="4"><span class="price-shipping">$2.08</span></td>
        </tr>-->
        <tr class="totalprice item">
            <td style="border: 1px solid #dddddd; font-family:Arial, Helvetica, sans-serif; padding: 8px; font-size:12px;" colspan="1"><strong>Total</strong></td>
            <td style="border: 1px solid #dddddd; font-family:Arial, Helvetica, sans-serif; padding: 8px; font-size:12px; text-align: right" colspan="4"><span class="price"><?= number_format($order->total,2) ?></span></td>
        </tr>
        </tfoot>
        <tbody>
        <!-- Customized products -->
        <!-- Classic products -->
        <?php foreach($carts as $cart ): ?>
        <tr class="item">
            <td style="border: 1px solid #dddddd; font-family:Arial, Helvetica, sans-serif; padding: 8px; font-size:12px;" ><label for="cb_24"><?= $cart['options']['code'] ?></label></td>
            <td style="border: 1px solid #dddddd; font-family:Arial, Helvetica, sans-serif; padding: 8px; font-size:12px;" ><label for="cb_24"> <?= $cart['name'] ?> </label></td>
            <td style="border: 1px solid #dddddd; font-family:Arial, Helvetica, sans-serif; padding: 8px; font-size:12px;" ><label for="cb_24"><span class="order_qte_span editable"><?= $cart['qty'] ?></span></label></td>
            <td style="border: 1px solid #dddddd; font-family:Arial, Helvetica, sans-serif; padding: 8px; font-size:12px;text-align: right" ><label for="cb_24"> <?= number_format($cart['price'],2) ?> </label></td>
            <td style="border: 1px solid #dddddd; font-family:Arial, Helvetica, sans-serif; padding: 8px; font-size:12px;text-align: right" ><label for="cb_24"> <?= number_format($cart['subtotal'],2) ?> </label></td>
        </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>