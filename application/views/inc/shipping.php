<style>
.form-horizontal { padding:0 15px;}
.text-right { text-align:right;}
</style>


<form action="<?=base_url()?>cart/order?step=5" method="post" class="std form-horizontal" id="add_address">

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-8">
            <div class="checkbox">
                <input type="checkbox" id="shipping_address" value="1">
                <label for="shipping_address"> Shipping Address Same as primary Address  </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-lg-3" for="other">Shipping Address  <sup>*</sup> </label>
        <div class="col-lg-9">
            <input type="hidden" name="id" value="<?= $cus->id ?>" >
            <textarea class="validate form-control" data-validate="isMessage" required id="shipping" name="shipping" cols="26" rows="3"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-lg-3" for="other"> Mobile No <sup>*</sup></label>
        <div class="col-lg-9"> 
           <input class="is_required validate form-control" required="" data-validate="isMobileNo" type="text" name="phone" id="phone" value="" maxlength="64">
        </div>
    </div>
    <div class="required id_state form-group" style="">
        <label class="control-label col-lg-3" for="id_state">Municipality/Zone <sup>*</sup></label>
        <div class="col-lg-9">
            <select name="ZoneId" id="ZoneId" class="form-control">
                <option value="0" > --------------- </option>
                <?php foreach($state as $s ): ?>
                    <option value="<?= $s->ZoneId ?>" <?= $customer->ZoneId == $s->ZoneId ? "selected" :"" ?>  > <?= $s->Zone ?> </option>
                <?php endforeach ?>
            </select>
        </div>
    </div>

    <div class="required id_state form-group" style="">
        <label class="control-label col-lg-3"  for="id_state"> City <sup>*</sup></label>
        <div class="col-lg-9">
            <select required name="CityId" id="CityId" class="form-control">
                <option value="" > --------------- </option>
            </select>
        </div>
    </div>
    <!-- <div class="required form-group">
        <label class="control-label col-sm-4" for="city">City <sup>*</sup></label>
        <div class="col-sm-6">
            <input class="is_required validate form-control" required  data-validate="isCityName" type="text" name="city" id="city" value="" maxlength="64">
        </div>
    </div>
    <div class="required id_state form-group" style="">
        <label class="control-label col-sm-4" for="id_state">State <sup>*</sup></label>
        <div class="col-sm-6">
            <select name="state" id="id_state" required class="form-control">
                <?php foreach($state as $s ): ?>
                    <option value="<?= $s->name ?>" > <?= $s->name ?> </option>
                <?php endforeach ?>
            </select>
        </div>
    </div>
    <div class="required postcode form-group unvisible" style="display: block;">
        <label class="control-label col-sm-4" for="postcode">Zip/Postal Code <sup>*</sup></label>
        <div class="col-sm-6">
            <input class="is_required validate form-control" required data-validate="isPostCode" type="text" id="postcode" name="postcode" value="">
        </div>
    </div> -->
    <div class="form-group">
        <label class="control-label col-lg-3" for="other">Additional information</label>
        <div class="col-lg-9">
            <textarea class="validate form-control" data-validate="isMessage" id="other" name="other" cols="26" rows="3"></textarea>
        </div>
    </div>
    <div class="clearfix"></div>
    <p class="submit2 text-right">

        <button type="submit"  id="submitAddress" class="btn btn-outline button button-medium">
				<span>
					Process
				</span>
        </button>
    </p>
</form>