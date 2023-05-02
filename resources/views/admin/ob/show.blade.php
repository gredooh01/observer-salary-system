@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.ob.title_singular') }}:
                    {{ trans('cruds.ob.fields.id') }}
                    {{ $ob->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.ob.fields.id') }}
                            </th>
                            <td>
                                {{ $ob->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ob.fields.payment_date') }}
                            </th>
                            <td>
                                {{ $ob->payment_date }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ob.fields.company') }}
                            </th>
                            <td>
                                {{ $ob->company }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ob.fields.remitter') }}
                            </th>
                            <td>
                                {{ $ob->remitter }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ob.fields.obs_name') }}
                            </th>
                            <td>
                                {{ $ob->obs_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ob.fields.vessel') }}
                            </th>
                            <td>
                                {{ $ob->vessel }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ob.fields.purpose') }}
                            </th>
                            <td>
                                {{ $ob->purpose }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ob.fields.inv_num') }}
                            </th>
                            <td>
                                {{ $ob->inv_num }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ob.fields.memo_num') }}
                            </th>
                            <td>
                                {{ $ob->memo_num }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ob.fields.inv_amount') }}
                            </th>
                            <td>
                                {{ $ob->inv_amount }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ob.fields.comp_ref') }}
                            </th>
                            <td>
                                {{ $ob->comp_ref }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ob.fields.bank_ref') }}
                            </th>
                            <td>
                                {{ $ob->bank_ref }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ob.fields.amount_rec') }}
                            </th>
                            <td>
                                {{ $ob->amount_rec }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ob.fields.b_charge') }}
                            </th>
                            <td>
                                {{ $ob->b_charge }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ob.fields.l_amount') }}
                            </th>
                            <td>
                                {{ $ob->l_amount }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ob.fields.accumulated') }}
                            </th>
                            <td>
                                {{ $ob->accumulated }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ob.fields.remarks') }}
                            </th>
                            <td>
                                {{ $ob->remarks }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('ob_edit')
                    <a href="{{ route('admin.obs.edit', $ob) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.obs.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection