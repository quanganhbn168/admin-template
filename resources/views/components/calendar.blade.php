{{-- FullCalendar month/week/list view.
     events: [['title' => '', 'start' => '2026-11-12', 'end' => '2026-11-13', 'allDay' => true, 'color' => 'var(--tblr-green)'], ...]
     view: dayGridMonth | timeGridWeek | listWeek --}}
@props(['events' => [], 'view' => 'dayGridMonth'])
@php
    $buttons = ['today' => __('Today'), 'month' => __('Month'), 'week' => __('Week'), 'list' => __('List')];
@endphp

<x-lib name="fullcalendar" />
<div {{ $attributes->class(['position-relative']) }} data-calendar data-view="{{ $view }}"
    data-buttons='@json($buttons, JSON_HEX_APOS | JSON_HEX_AMP)' data-events='@json($events, JSON_HEX_APOS | JSON_HEX_AMP)'></div>
