<div class="modal-body">

    <div class="row" >
        <div class="col-xs-12 col-sm-12">
        <table class="table-responsive table table-bordered" >
            <tr> <th>Date</th> <td><?= date("d/m/Y", strtotime($order->date) ) ?> </td>  <th>Receipt No</th> <td><?= $order->receipt_no ?></td> </tr>
            <tr> <th>OrderNo</th> <td><?= $order->id ?></td>  <th>Transaction NO</th> <td><?= $order->transaction_no ?></td> </tr>

        </table>
            </div>
    </div>


    <div class="row">
        <div class="col-xs-6 col-sm-6">
            <div class="panel "   >
                <div class="panel-heading" >
                    Primary Address
                </div>
                <div class="panel-body" style="margin: 0;padding: 0">
                    <table class="table-responsive table table-bordered" >
                        <tr> <th> Name </th> <td><?= $customer->firstname ?> <?= $customer->lastname ?></td>   </tr>
                        <tr> <th> Address </th> <td><?= $customer->address1 ?> <?= $customer->address2 ?></td>   </tr>
                        <tr> <th>  </th> <td><?= $customer->city ?>, <?= $customer->state ?> Qatar</td>   </tr>
                        <tr> <th> Phone </th> <td><?= $customer->phone ?>, <?= $customer->phone_mobile ?> </td>   </tr>
                        <tr> <th> Email </th> <td><?= $customer->email ?>  </td>   </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6">
            <div class="panel "  >
                <div class="panel-heading" >
                    Shipping Address
                </div>
                <div class="panel-body" style="margin: 0;padding: 0" >
                    <table class="table-responsive table table-bordered" >
                        <tr> <th> Name </th> <td><?= $customer->firstname ?> <?= $customer->lastname ?></td>   </tr>
                        <tr> <th> Address </th> <td> <?php $cus = json_decode($order->customer_detail); echo $cus->shipping ; ?> </td>   </tr>
                        <tr> <th>  </th> <td><?= $cus->city ?>, <?= $cus->state ?> Qatar</td>   </tr>
                        <tr> <th> Phone </th> <td><?= $cus->phone ?>  </td>   </tr>
                        <tr> <th> Email </th> <td><?= $cus->email ?>  </td>   </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xs-12"> 
            <table class="table table-bordered" >
                <tr>
                    <th>Additional Information</th> 
                </tr>
                <tr> <td> <?= $cus->other ?></td>  </tr>
            </table> 
        </div>

    </div>

    <div  class="row" >

        <?php $carts = json_decode($order->cart_details , true);  ?>

        <div class="col-lg-12" >
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th class="first_item">Reference</th>
                    <th class="item">Product</th>
                    <th class="item">Quantity</th>
                    <th class="item">Unit price</th>
                    <th class="last_item">Total price</th>
                </tr>
                </thead>
                <tfoot>
                <!-- <tr class="item">
                   <td colspan="1"><strong>Items (tax excl.)</strong></td>
                   <td colspan="4"><span class="price">$83.45</span></td>
                 </tr>
                 <tr class="item">
                   <td colspan="1"><strong>Items (tax incl.) </strong></td>
                   <td colspan="4"><span class="price">$86.79</span></td>
                 </tr>
                 <tr class="item">
                   <td colspan="1"><strong>Shipping &amp; handling (tax incl.) </strong></td>
                   <td colspan="4"><span class="price-shipping">$2.08</span></td>
                 </tr>-->
                <tr class="totalprice item">
                    <td colspan="1"><strong>Shipping Cost</strong></td>
                    <td colspan="4" class="text-right" > <strong><span class="price"><?= number_format($order->shipping,2) ?></span></strong> </td>
                </tr>
                <tr class="totalprice item">
                    <td colspan="1"><strong>Total</strong></td>
                    <td colspan="4" class="text-right" > <strong><span class="price"><?= number_format($order->total+$order->shipping,2) ?></span></strong> </td>
                </tr>
                </tfoot>
                <tbody>
                <!-- Customized products -->
                <!-- Classic products -->
                <?php foreach($carts as $cart ): ?>
                    <tr class="item">
                        <td><label for="cb_24"><?= $cart['options']['code'] ?></label></td>
                        <td class="bold"><label for="cb_24"> <?= $cart['name'] ?> <small class="cart_ref"> SKU : <?= $cart['options']['code'] ?>
                                    <?= strlen( $cart['options']['color']) ? ",Color :" .$cart['options']['color'] :"" ?>
                                    <?= strlen( $cart['options']['size']) ? ",Size :" .$cart['options']['size'] :"" ?>
                                </small> </label></td>
                        <td class="return_quantity"><label for="cb_24"><span class="order_qte_span editable"><?= $cart['qty'] ?></span></label></td>
                        <td class="price text-right"><label for="cb_24"> <?= number_format($cart['price'],2) ?> </label></td>
                        <td class="price text-right"><label for="cb_24"> <?= number_format($cart['subtotal'],2) ?>  </label></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

</div>