<x-layouts.app :title="__('Dashboard')">
    <div class="row row-deck row-cards">
        {{-- KPI widgets --}}
        <div class="col-sm-6 col-lg-3">
            <x-widget.stat :label="__('Total users')" value="75.782" :trend="2" :note="__(':count users increased from last month', ['count' => '24.635'])">
                <x-chart type="line" :height="96" sparkline :label="__('Total users')"
                    :series="[['name' => __('Visitors'), 'data' => $visitors], ['name' => __('Last month'), 'data' => $visitorsLastMonth]]"
                    :categories="$days" />
            </x-widget.stat>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="subheader">{{ __('Active users') }}</div>
                    <div class="d-flex align-items-baseline mb-2">
                        <div class="h1 mb-0 me-2">25.782</div>
                        <div class="me-auto"><x-trend :value="-1" /></div>
                    </div>
                    <x-chart type="radialBar" :height="200" :series="[58]" :categories="[__('Active users')]" :colors="['var(--tblr-primary)']" :label="__('Active users')" />
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <x-widget.progress :label="__('Sales')" value="75%" :percent="75" :caption="__('Conversion rate')" :trend="7" />
        </div>

        <div class="col-sm-6 col-lg-3">
            <x-widget.stat :label="__('Revenue')" value="4.300.000đ" :trend="8" :periods="[__('Last 7 days'), __('Last 30 days'), __('Last 3 months')]">
                <x-chart type="area" :height="40" sparkline class="rounded-bottom-3" :label="__('Revenue')"
                    :series="[['name' => __('Revenue'), 'data' => $revenue]]" :colors="['var(--tblr-chart-1, var(--tblr-primary))']" />
            </x-widget.stat>
        </div>

        {{-- Compact cards --}}
        <div class="col-12">
            <div class="row row-cards">
                <div class="col-sm-6 col-lg-3"><x-widget.mini icon="ti-shopping-cart" :title="__(':count sales', ['count' => 132])" :text="__(':count waiting payments', ['count' => 12])" /></div>
                <div class="col-sm-6 col-lg-3"><x-widget.mini icon="ti-package" color="green" :title="__(':count orders', ['count' => 78])" :text="__(':count shipped', ['count' => 32])" /></div>
                <div class="col-sm-6 col-lg-3"><x-widget.mini icon="ti-users" color="azure" :title="__(':count clients', ['count' => 623])" :text="__(':count new this week', ['count' => 16])" /></div>
                <div class="col-sm-6 col-lg-3"><x-widget.mini icon="ti-message-circle" color="red" :title="__(':count messages', ['count' => 132])" :text="__(':count unread', ['count' => 21])" /></div>
            </div>
        </div>

        {{-- Charts --}}
        <div class="col-lg-8">
            <x-widget.chart :title="__('Traffic summary')" :subtitle="__('Last 30 days')">
                <x-chart type="area" :height="288" :label="__('Traffic summary')"
                    :series="[['name' => __('Visitors'), 'data' => $visitors], ['name' => __('Last month'), 'data' => $visitorsLastMonth]]"
                    :categories="$days" :colors="['var(--tblr-primary)', 'var(--tblr-gray-400)']"
                    :options="['stroke' => ['width' => [2, 2], 'dashArray' => [0, 0]], 'fill' => ['opacity' => [0.16, 0]], 'legend' => ['show' => true, 'position' => 'bottom']]" />
            </x-widget.chart>
        </div>
        <div class="col-lg-4">
            <x-widget.chart :title="__('Traffic sources')" :subtitle="__('Share of visits')">
                <x-chart type="donut" :height="288" :label="__('Traffic sources')"
                    :series="array_values($sources)" :categories="array_keys($sources)"
                    :colors="['var(--tblr-primary)', 'var(--tblr-azure)', 'var(--tblr-green)', 'var(--tblr-orange)']" />
            </x-widget.chart>
        </div>

        <div class="col-md-6 col-lg-4">
            <x-widget.stat :label="__('New clients')" value="6.782" :trend="0" :periods="[__('Last 7 days'), __('Last 30 days')]">
                <div class="px-3 pb-3">
                    <x-chart type="line" :height="40" sparkline :series="[['name' => __('Clients'), 'data' => $clients]]" :colors="['var(--tblr-primary)']" :label="__('New clients')" />
                </div>
            </x-widget.stat>
        </div>
        <div class="col-md-6 col-lg-4">
            <x-widget.stat :label="__('Active subscriptions')" value="2.986" :trend="4" :periods="[__('Last 7 days'), __('Last 30 days')]">
                <div class="px-3 pb-3">
                    <x-chart type="bar" :height="40" sparkline :series="[['name' => __('Subscriptions'), 'data' => $subscriptions]]" :colors="['var(--tblr-primary)']" :label="__('Active subscriptions')" />
                </div>
            </x-widget.stat>
        </div>
        <div class="col-lg-4">
            <x-card :title="__('Tasks')">
                <div class="list-group list-group-flush">
                    @foreach ($tasks as [$task, $done])
                        <div class="list-group-item">
                            <label class="form-check mb-0">
                                <input type="checkbox" class="form-check-input" @checked($done)>
                                <span class="form-check-label {{ $done ? 'text-decoration-line-through text-secondary' : '' }}">{{ $task }}</span>
                            </label>
                        </div>
                    @endforeach
                </div>
            </x-card>
        </div>

        {{-- Tables --}}
        <div class="col-lg-7">
            <x-card :title="__('Most visited pages')">
                <x-table>
                    <x-slot:head>
                        <th>{{ __('Page') }}</th>
                        <th class="text-end">{{ __('Visitors') }}</th>
                        <th class="text-end">{{ __('Unique') }}</th>
                        <th class="w-25">{{ __('Bounce rate') }}</th>
                    </x-slot:head>
                    @foreach ($pages as [$path, $visits, $unique, $bounce])
                        <tr>
                            <td><code>{{ $path }}</code></td>
                            <td class="text-end">{{ number_format($visits, 0, ',', '.') }}</td>
                            <td class="text-end text-secondary">{{ number_format($unique, 0, ',', '.') }}</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="text-secondary small w-4">{{ $bounce }}%</span>
                                    <x-progress :value="$bounce" size="sm" class="flex-fill" :color="$bounce > 60 ? 'red' : 'primary'" />
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </x-table>
            </x-card>
        </div>
        <div class="col-lg-5">
            <x-card :title="__('Recent activity')">
                <div class="card-body">
                    <x-timeline :items="[
                        ['title' => __('+1150 followers'), 'text' => __('You are getting more and more followers, keep it up!'), 'time' => __(':count hrs ago', ['count' => 10]), 'icon' => 'ti-brand-x', 'color' => 'x'],
                        ['title' => __('3 new products were added'), 'text' => __('Congratulations!'), 'time' => __(':count hrs ago', ['count' => 2]), 'icon' => 'ti-briefcase'],
                        ['title' => __('Database backup completed'), 'text' => __('Download the latest backup.'), 'time' => __('1 day ago'), 'icon' => 'ti-check', 'color' => 'green'],
                        ['title' => __('+290 page likes'), 'text' => __('This is great, keep it up!'), 'time' => __('1 day ago'), 'icon' => 'ti-brand-facebook', 'color' => 'facebook'],
                    ]" />
                </div>
            </x-card>
        </div>

        <div class="col-12">
            <x-card :title="__('Invoices')">
                <x-table>
                    <x-slot:head>
                        <th>{{ __('Invoice') }}</th>
                        <th>{{ __('Client') }}</th>
                        <th>{{ __('Date') }}</th>
                        <th>{{ __('Status') }}</th>
                        <th class="text-end">{{ __('Amount') }}</th>
                    </x-slot:head>
                    @foreach ($invoices as [$no, $client, $date, $status, $amount])
                        <tr>
                            <td class="text-secondary">{{ $no }}</td>
                            <td>{{ $client }}</td>
                            <td class="text-secondary">{{ $date }}</td>
                            <td>
                                @php $badge = ['paid' => ['green', 'Paid'], 'pending' => ['orange', 'Pending'], 'overdue' => ['red', 'Overdue']][$status]; @endphp
                                <x-badge :color="$badge[0]">{{ __($badge[1]) }}</x-badge>
                            </td>
                            <td class="text-end">{{ $amount }}</td>
                        </tr>
                    @endforeach
                </x-table>
            </x-card>
        </div>
    </div>
</x-layouts.app>
