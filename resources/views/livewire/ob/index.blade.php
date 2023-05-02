<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('ob_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="Ob" format="csv" />
                <livewire:excel-export model="Ob" format="xlsx" />
                <livewire:excel-export model="Ob" format="pdf" />
            @endif




        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.debounce.300ms="search" class="w-full sm:w-1/3 inline-block" />
        </div>
    </div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            {{ trans('cruds.ob.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.ob.fields.payment_date') }}
                            @include('components.table.sort', ['field' => 'payment_date'])
                        </th>
                        <th>
                            {{ trans('cruds.ob.fields.company') }}
                            @include('components.table.sort', ['field' => 'company'])
                        </th>
                        <th>
                            {{ trans('cruds.ob.fields.remitter') }}
                            @include('components.table.sort', ['field' => 'remitter'])
                        </th>
                        <th>
                            {{ trans('cruds.ob.fields.obs_name') }}
                            @include('components.table.sort', ['field' => 'obs_name'])
                        </th>
                        <th>
                            {{ trans('cruds.ob.fields.vessel') }}
                            @include('components.table.sort', ['field' => 'vessel'])
                        </th>
                        <th>
                            {{ trans('cruds.ob.fields.purpose') }}
                            @include('components.table.sort', ['field' => 'purpose'])
                        </th>
                        <th>
                            {{ trans('cruds.ob.fields.inv_num') }}
                            @include('components.table.sort', ['field' => 'inv_num'])
                        </th>
                        <th>
                            {{ trans('cruds.ob.fields.memo_num') }}
                            @include('components.table.sort', ['field' => 'memo_num'])
                        </th>
                        <th>
                            {{ trans('cruds.ob.fields.inv_amount') }}
                            @include('components.table.sort', ['field' => 'inv_amount'])
                        </th>
                        <th>
                            {{ trans('cruds.ob.fields.comp_ref') }}
                            @include('components.table.sort', ['field' => 'comp_ref'])
                        </th>
                        <th>
                            {{ trans('cruds.ob.fields.bank_ref') }}
                            @include('components.table.sort', ['field' => 'bank_ref'])
                        </th>
                        <th>
                            {{ trans('cruds.ob.fields.amount_rec') }}
                            @include('components.table.sort', ['field' => 'amount_rec'])
                        </th>
                        <th>
                            {{ trans('cruds.ob.fields.b_charge') }}
                            @include('components.table.sort', ['field' => 'b_charge'])
                        </th>
                        <th>
                            {{ trans('cruds.ob.fields.l_amount') }}
                            @include('components.table.sort', ['field' => 'l_amount'])
                        </th>
                        <th>
                            {{ trans('cruds.ob.fields.accumulated') }}
                            @include('components.table.sort', ['field' => 'accumulated'])
                        </th>
                        <th>
                            {{ trans('cruds.ob.fields.remarks') }}
                            @include('components.table.sort', ['field' => 'remarks'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($obs as $ob)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $ob->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $ob->id }}
                            </td>
                            <td>
                                {{ $ob->payment_date }}
                            </td>
                            <td>
                                {{ $ob->company }}
                            </td>
                            <td>
                                {{ $ob->remitter }}
                            </td>
                            <td>
                                {{ $ob->obs_name }}
                            </td>
                            <td>
                                {{ $ob->vessel }}
                            </td>
                            <td>
                                {{ $ob->purpose }}
                            </td>
                            <td>
                                {{ $ob->inv_num }}
                            </td>
                            <td>
                                {{ $ob->memo_num }}
                            </td>
                            <td>
                                {{ $ob->inv_amount }}
                            </td>
                            <td>
                                {{ $ob->comp_ref }}
                            </td>
                            <td>
                                {{ $ob->bank_ref }}
                            </td>
                            <td>
                                {{ $ob->amount_rec }}
                            </td>
                            <td>
                                {{ $ob->b_charge }}
                            </td>
                            <td>
                                {{ $ob->l_amount }}
                            </td>
                            <td>
                                {{ $ob->accumulated }}
                            </td>
                            <td>
                                {{ $ob->remarks }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('ob_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.obs.show', $ob) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('ob_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.obs.edit', $ob) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('ob_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $ob->id }})" wire:loading.attr="disabled">
                                            {{ trans('global.delete') }}
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            @if($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    {{ __('Entries selected') }}
                </p>
            @endif
            {{ $obs->links() }}
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
    if (!confirm("{{ trans('global.areYouSure') }}")) {
        return
    }
@this[e.callback](...e.argv)
})
    </script>
@endpush