<style>
.form-horizontal { padding:0 15px;}
.text-right { text-align:right;}
</style>

<form action="<?=base_url()?>user/address" method="post" class="std form-horizontal" id="add_address">

    <div class="required form-group">
        <label class="control-label col-lg-3" for="firstname">First name <sup>*</sup></label>
        <div class="col-lg-9 form-ok">
            <input class="is_required validate form-control" data-validate="isName" type="text" name="firstname" id="firstname" value="<?= $cus->firstname ?>">
        </div>
    </div>
    <div class="required form-group">
        <label class="control-label col-lg-3" for="lastname">Last name <sup>*</sup></label>
        <div class="col-lg-9">
            <input class="is_required validate form-control" data-validate="isName" type="text" id="lastname" name="lastname" value="<?= $cus->lastname ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-lg-3" for="company">Company</label>
        <div class="col-lg-9">
            <input class="form-control validate" data-validate="isGenericName" type="text" id="company" name="company" value="<?= $cus->company ?>">
        </div>
    </div>
    <div class="required form-group">
        <label class="control-label col-lg-3" for="address1">Address <sup>*</sup></label>
        <div class="col-lg-9">
            <input class="is_required validate form-control" data-validate="isAddress" type="text" id="address1" name="address1" value="<?= $cus->address1 ?>">
        </div>
    </div>
    <div class="required form-group">
        <label class="control-label col-lg-3" for="address2">Address (Line 2)</label>
        <div class="col-lg-9">
            <input class="validate form-control" data-validate="isAddress" type="text" id="address2" name="address2" value="<?= $cus->address2 ?>">
        </div>
    </div>
    <div class="required id_state form-group" style="">
        <label class="control-label col-lg-3" for="id_state">Municipality/Zone <sup>*</sup></label>
        <div class="col-lg-9">
            <select name="ZoneId" id="ZoneId" class="form-control">
                <option value="" > --------------- </option>
                <?php foreach($state as $s ): ?>
                    <option value="<?= $s->ZoneId ?>" <?= $customer->ZoneId == $s->ZoneId ? "selected" :"" ?>  > <?= $s->Zone ?> </option>
                <?php endforeach ?>
            </select>
        </div>
    </div>

    <div class="required id_state form-group" style="">
        <label class="control-label col-lg-3" for="id_state"> City <sup>*</sup></label>
        <div class="col-lg-9">
            <select name="CityId" id="CityId" class="form-control">
                <option value="" > --------------- </option>
            </select>
        </div>
    </div>
    <!-- <div class="required form-group">
        <label class="control-label col-sm-4" for="city">City <sup>*</sup></label>
        <div class="col-sm-6">
            <input class="is_required validate form-control" data-validate="isCityName" type="text" name="city" id="city" value="<?= $cus->city ?>" maxlength="64">
        </div>
    </div>

    <div class="required id_state form-group" style="">
        <label class="control-label col-sm-4" for="id_state">State <sup>*</sup></label>
        <div class="col-sm-6">
            <select name="state" id="id_state" class="form-control">
                <?php foreach($state as $s ): ?>
                    <option id="<?= $s->name ?>" > <?= $s->name ?> </option>
                <?php endforeach ?>
            </select>
        </div>
    </div>
    <div class="required postcode form-group unvisible" style="display: block;">
        <label class="control-label col-sm-4" for="postcode">Zip/Postal Code <sup>*</sup></label>
        <div class="col-sm-6">
            <input class="is_required validate form-control" data-validate="isPostCode" type="text" id="postcode" name="postcode" value="<?= $cus->postcode ?>">
        </div>
    </div> -->
    <div class="required form-group">
        <label class="control-label col-lg-3" for="id_country">Country <sup>*</sup></label>
        <div class="col-lg-9">
            <select id="id_country" class="form-control" name="id_country"><option value="173" selected="selected">Qatar</option></select>
        </div>
    </div>
    <div class="form-group phone-number">
        <label class="control-label col-lg-3" for="phone">Home phone  </label>
        <div class="col-lg-9">
            <input class="is_required validate form-control" data-validate="isPhoneNumber" type="tel" id="phone" name="phone" value="<?= $cus->phone ?>">
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="required form-group">
        <label class="control-label col-lg-3" for="phone_mobile">Mobile phone </label>
        <div class="col-lg-9">
            <input class="validate form-control" data-validate="isPhoneNumber" type="tel" id="phone_mobile" name="phone_mobile" value="<?= $cus->phone_mobile ?>">
        </div>
    </div>
    <div class="inline-infos required"><label class="col-sm-offset-4 col-sm-6">** You must register at least one phone number.</label></div>

    
    <div class="clearfix"></div>
    <p class="submit2 text-right">

        <input type="hidden" name="step" value="<?= base_url() ?>cart/order/?step=3">
        <input type="hidden" name="back" value="<?= base_url() ?>cart/order/?step=4">
        <button type="submit"  id="submitAddress" class="btn btn-outline button button-medium">
				<span>
					Save
				</span>
        </button>
    </p>
</form>