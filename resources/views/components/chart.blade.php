{{-- ApexCharts, styled like Tabler's own charts.
     type: line | area | bar | donut | radialBar
     series: line/area/bar => [['name' => 'A', 'data' => [..]], ...]; donut => [10, 20, 30]; radialBar => [58]
     categories: x axis labels (or donut slice labels). sparkline: no axes/grid, for use inside widgets.
     colors: CSS colors or Tabler variables, e.g. 'var(--tblr-primary)'. options: raw ApexCharts options merged on top. --}}
@props(['type' => 'line', 'series' => [], 'categories' => [], 'height' => 240, 'sparkline' => false, 'colors' => ['var(--tblr-primary)', 'var(--tblr-gray-400)'], 'stacked' => false, 'legend' => null, 'options' => [], 'label' => null])
{{-- gauge = radialBar drawn as a 270° dial with the series name inside; legend: top | bottom | top-right | ... --}}
@php
    $circular = in_array($type, ['donut', 'radialBar', 'gauge']);

    $config = [
        'chart' => array_filter([
            'type' => $type === 'gauge' ? 'radialBar' : $type,
            'height' => $height,
            'sparkline' => $sparkline ? ['enabled' => true] : null,
            'stacked' => $stacked ?: null,
        ]),
        'series' => $series,
        'colors' => $colors,
    ];

    if ($circular) {
        $config['labels'] = $categories;
    } else {
        $config['stroke'] = $type === 'bar'
            ? ['width' => 0]
            : ['width' => $type === 'area' ? 2 : [2, 1], 'curve' => 'smooth', 'lineCap' => 'round', 'dashArray' => $type === 'area' ? 0 : [0, 3]];
        $config['xaxis'] = ['categories' => $categories, 'labels' => ['padding' => 0], 'tooltip' => ['enabled' => false], 'axisBorder' => ['show' => false]];
        $config['yaxis'] = ['labels' => ['padding' => 4]];
        $config['fill'] = $type === 'area' ? ['opacity' => 0.16, 'type' => 'solid'] : ['opacity' => 1];
        if ($type === 'bar') {
            $config['plotOptions'] = ['bar' => ['columnWidth' => '50%', 'borderRadius' => 2]];
        }
    }

    if ($type === 'donut') {
        $config['legend'] = ['show' => true, 'position' => 'bottom', 'offsetY' => 12, 'markers' => ['width' => 10, 'height' => 10, 'radius' => 100], 'itemMargin' => ['horizontal' => 8, 'vertical' => 8]];
        $config['stroke'] = ['width' => 0];
        $config['tooltip'] = ['fillSeriesColor' => false];
    }

    if ($type === 'radialBar') {
        $config['plotOptions'] = ['radialBar' => ['hollow' => ['size' => '62%'], 'dataLabels' => ['name' => ['show' => false], 'value' => ['fontSize' => '28px', 'fontWeight' => 600, 'offsetY' => 10]]]];
        $config['stroke'] = ['lineCap' => 'round'];
    }

    if ($type === 'gauge') {
        $config['plotOptions'] = ['radialBar' => [
            'startAngle' => -135,
            'endAngle' => 135,
            'hollow' => ['size' => '66%'],
            'dataLabels' => [
                'name' => ['show' => true, 'fontSize' => '14px', 'color' => 'var(--tblr-secondary)', 'offsetY' => -8],
                'value' => ['fontSize' => '28px', 'fontWeight' => 600, 'offsetY' => 4],
            ],
        ]];
        $config['stroke'] = ['lineCap' => 'round'];
    }

    if ($legend) {
        [$position, $align] = array_pad(explode('-', $legend), 2, 'center');
        $config['legend'] = ['show' => true, 'position' => $position, 'horizontalAlign' => $align, 'markers' => ['shape' => 'circle', 'size' => 5, 'width' => 10, 'height' => 10, 'radius' => 100], 'itemMargin' => ['horizontal' => 8, 'vertical' => 4]];
    }

    $config = array_replace_recursive($config, $options);
@endphp

<div {{ $attributes->class(['position-relative']) }} data-chart='@json($config, JSON_HEX_APOS | JSON_HEX_AMP)' role="img" aria-label="{{ $label ?? __('Chart') }}"></div>
