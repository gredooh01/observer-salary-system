<?php

namespace App\Http\Controllers\Admin;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController
{
    public function index()
    {
        $settings1 = [
            'chart_title'           => 'Total accumulated',
            'chart_type'            => 'number_block',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Ob',
            'group_by_field'        => 'payment_date',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_period'         => 'year',
            'group_by_field_format' => 'd-m-Y',
            'column_class'          => 'w-full xl:w-6/12',
            'entries_number'        => '5',
            'translation_key'       => 'ob',
        ];

        $settings1['total_number'] = 0;
        if (class_exists($settings1['model'])) {
            $settings1['total_number'] = $settings1['model']::when(isset($settings1['filter_field']), function ($query) use ($settings1) {
                if (isset($settings1['filter_days'])) {
                    return $query->where($settings1['filter_field'], '>=',
                        now()->subDays($settings1['filter_days'])->format('Y-m-d'));
                } elseif (isset($settings1['filter_period'])) {
                    switch ($settings1['filter_period']) {
                        case 'week': $start = date('Y-m-d', strtotime('last Monday'));
                        break;
                        case 'month': $start = date('Y-m') . '-01';
                        break;
                        case 'year': $start = date('Y') . '-01-01';
                        break;
                    }
                    if (isset($start)) {
                        return $query->where($settings1['filter_field'], '>=', $start);
                    }
                }
            })
                ->{$settings1['aggregate_function'] ?? 'count'}($settings1['aggregate_field'] ?? '*');
        }

        $settings2 = [
            'chart_title'           => 'Total observers recorded',
            'chart_type'            => 'number_block',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Ob',
            'group_by_field'        => 'payment_date',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_period'         => 'year',
            'group_by_field_format' => 'd-m-Y',
            'column_class'          => 'w-full lg:w-6/12 xl:w-3/12',
            'entries_number'        => '5',
            'translation_key'       => 'ob',
        ];

        $settings2['total_number'] = 0;
        if (class_exists($settings2['model'])) {
            $settings2['total_number'] = $settings2['model']::when(isset($settings2['filter_field']), function ($query) use ($settings2) {
                if (isset($settings2['filter_days'])) {
                    return $query->where($settings2['filter_field'], '>=',
                        now()->subDays($settings2['filter_days'])->format('Y-m-d'));
                } elseif (isset($settings2['filter_period'])) {
                    switch ($settings2['filter_period']) {
                        case 'week': $start = date('Y-m-d', strtotime('last Monday'));
                        break;
                        case 'month': $start = date('Y-m') . '-01';
                        break;
                        case 'year': $start = date('Y') . '-01-01';
                        break;
                    }
                    if (isset($start)) {
                        return $query->where($settings2['filter_field'], '>=', $start);
                    }
                }
            })
                ->{$settings2['aggregate_function'] ?? 'count'}($settings2['aggregate_field'] ?? '*');
        }

        $settings3 = [
            'chart_title'           => 'Monthly Average Accumulated Total',
            'chart_type'            => 'line',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Ob',
            'group_by_field'        => 'payment_date',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'avg',
            'aggregate_field'       => 'accumulated',
            'filter_field'          => 'created_at',
            'filter_period'         => 'month',
            'group_by_field_format' => 'd-m-Y',
            'column_class'          => 'w-full xl:w-6/12',
            'entries_number'        => '5',
            'translation_key'       => 'ob',
        ];

        $chart3 = new LaravelChart($settings3);

        return view('admin.home', compact('chart3', 'settings1', 'settings2'));
    }
}
