<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('ob.payment_date') ? 'invalid' : '' }}">
        <label class="form-label" for="payment_date">{{ trans('cruds.ob.fields.payment_date') }}</label>
        <x-date-picker class="form-control" wire:model="ob.payment_date" id="payment_date" name="payment_date" picker="date" />
        <div class="validation-message">
            {{ $errors->first('ob.payment_date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.ob.fields.payment_date_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('ob.company') ? 'invalid' : '' }}">
        <label class="form-label required" for="company">{{ trans('cruds.ob.fields.company') }}</label>
        <input class="form-control" type="text" name="company" id="company" required wire:model.defer="ob.company">
        <div class="validation-message">
            {{ $errors->first('ob.company') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.ob.fields.company_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('ob.remitter') ? 'invalid' : '' }}">
        <label class="form-label required" for="remitter">{{ trans('cruds.ob.fields.remitter') }}</label>
        <input class="form-control" type="text" name="remitter" id="remitter" required wire:model.defer="ob.remitter">
        <div class="validation-message">
            {{ $errors->first('ob.remitter') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.ob.fields.remitter_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('ob.obs_name') ? 'invalid' : '' }}">
        <label class="form-label required" for="obs_name">{{ trans('cruds.ob.fields.obs_name') }}</label>
        <input class="form-control" type="text" name="obs_name" id="obs_name" required wire:model.defer="ob.obs_name">
        <div class="validation-message">
            {{ $errors->first('ob.obs_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.ob.fields.obs_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('ob.vessel') ? 'invalid' : '' }}">
        <label class="form-label required" for="vessel">{{ trans('cruds.ob.fields.vessel') }}</label>
        <input class="form-control" type="text" name="vessel" id="vessel" required wire:model.defer="ob.vessel">
        <div class="validation-message">
            {{ $errors->first('ob.vessel') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.ob.fields.vessel_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('ob.purpose') ? 'invalid' : '' }}">
        <label class="form-label required" for="purpose">{{ trans('cruds.ob.fields.purpose') }}</label>
        <input class="form-control" type="text" name="purpose" id="purpose" required wire:model.defer="ob.purpose">
        <div class="validation-message">
            {{ $errors->first('ob.purpose') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.ob.fields.purpose_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('ob.inv_num') ? 'invalid' : '' }}">
        <label class="form-label required" for="inv_num">{{ trans('cruds.ob.fields.inv_num') }}</label>
        <input class="form-control" type="number" name="inv_num" id="inv_num" required wire:model.defer="ob.inv_num" step="1">
        <div class="validation-message">
            {{ $errors->first('ob.inv_num') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.ob.fields.inv_num_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('ob.memo_num') ? 'invalid' : '' }}">
        <label class="form-label required" for="memo_num">{{ trans('cruds.ob.fields.memo_num') }}</label>
        <input class="form-control" type="text" name="memo_num" id="memo_num" required wire:model.defer="ob.memo_num">
        <div class="validation-message">
            {{ $errors->first('ob.memo_num') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.ob.fields.memo_num_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('ob.inv_amount') ? 'invalid' : '' }}">
        <label class="form-label required" for="inv_amount">{{ trans('cruds.ob.fields.inv_amount') }}</label>
        <input class="form-control" type="number" name="inv_amount" id="inv_amount" required wire:model.defer="ob.inv_amount" step="0.01">
        <div class="validation-message">
            {{ $errors->first('ob.inv_amount') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.ob.fields.inv_amount_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('ob.comp_ref') ? 'invalid' : '' }}">
        <label class="form-label required" for="comp_ref">{{ trans('cruds.ob.fields.comp_ref') }}</label>
        <input class="form-control" type="text" name="comp_ref" id="comp_ref" required wire:model.defer="ob.comp_ref">
        <div class="validation-message">
            {{ $errors->first('ob.comp_ref') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.ob.fields.comp_ref_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('ob.bank_ref') ? 'invalid' : '' }}">
        <label class="form-label required" for="bank_ref">{{ trans('cruds.ob.fields.bank_ref') }}</label>
        <input class="form-control" type="text" name="bank_ref" id="bank_ref" required wire:model.defer="ob.bank_ref">
        <div class="validation-message">
            {{ $errors->first('ob.bank_ref') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.ob.fields.bank_ref_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('ob.amount_rec') ? 'invalid' : '' }}">
        <label class="form-label required" for="amount_rec">{{ trans('cruds.ob.fields.amount_rec') }}</label>
        <input class="form-control" type="number" name="amount_rec" id="amount_rec" required wire:model.defer="ob.amount_rec" step="0.01">
        <div class="validation-message">
            {{ $errors->first('ob.amount_rec') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.ob.fields.amount_rec_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('ob.b_charge') ? 'invalid' : '' }}">
        <label class="form-label required" for="b_charge">{{ trans('cruds.ob.fields.b_charge') }}</label>
        <input class="form-control" type="number" name="b_charge" id="b_charge" required wire:model.defer="ob.b_charge" step="0.01">
        <div class="validation-message">
            {{ $errors->first('ob.b_charge') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.ob.fields.b_charge_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('ob.l_amount') ? 'invalid' : '' }}">
        <label class="form-label required" for="l_amount">{{ trans('cruds.ob.fields.l_amount') }}</label>
        <input class="form-control" type="number" name="l_amount" id="l_amount" required wire:model.defer="ob.l_amount" step="0.01">
        <div class="validation-message">
            {{ $errors->first('ob.l_amount') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.ob.fields.l_amount_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('ob.accumulated') ? 'invalid' : '' }}">
        <label class="form-label required" for="accumulated">{{ trans('cruds.ob.fields.accumulated') }}</label>
        <input class="form-control" type="number" name="accumulated" id="accumulated" required wire:model.defer="ob.accumulated" step="0.01">
        <div class="validation-message">
            {{ $errors->first('ob.accumulated') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.ob.fields.accumulated_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('ob.remarks') ? 'invalid' : '' }}">
        <label class="form-label required" for="remarks">{{ trans('cruds.ob.fields.remarks') }}</label>
        <textarea class="form-control" name="remarks" id="remarks" required wire:model.defer="ob.remarks" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('ob.remarks') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.ob.fields.remarks_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.obs.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>