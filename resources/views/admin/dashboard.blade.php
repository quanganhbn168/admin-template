<x-layouts.app :title="__('Dashboard')">
    @php $periods = [__('Last 7 days'), __('Last 30 days'), __('Last 3 months')]; @endphp

    <div class="row row-deck row-cards">
        {{-- Welcome + users --}}
        <div class="col-sm-12 col-lg-6">
            <x-widget.welcome :title="__('Welcome back, :name', ['name' => auth()->user()->name])"
                :text="__('You have :messages new messages and :notifications new notifications.', ['messages' => 5, 'notifications' => 2])"
                :kpis="[
                    ['label' => __('Today\'s sales'), 'value' => '6.782', 'trend' => 7, 'percent' => 75, 'color' => 'success'],
                    ['label' => __('Growth rate'), 'value' => '78,4%', 'trend' => -1, 'percent' => 78, 'color' => 'danger'],
                ]">
                <x-illustration.good-info />
            </x-widget.welcome>
        </div>

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
                    <x-chart type="gauge" :height="200" :series="[58]" :categories="[__('Active')]" :label="__('Active users')" />
                </div>
            </div>
        </div>

        {{-- Four KPIs --}}
        <div class="col-sm-6 col-lg-3">
            <x-widget.progress :label="__('Sales')" value="75%" :percent="75" :caption="__('Conversion rate')" :trend="7" :periods="$periods" />
        </div>

        <div class="col-sm-6 col-lg-3">
            <x-widget.stat :label="__('Revenue')" value="4.300.000đ" :trend="8" :periods="$periods">
                <x-chart type="area" :height="96" sparkline class="rounded-bottom-3" :label="__('Revenue')"
                    :series="[['name' => __('Revenue'), 'data' => $revenue]]" :categories="array_slice($days, 0, count($revenue))" />
            </x-widget.stat>
        </div>

        <div class="col-sm-6 col-lg-3">
            <x-widget.stat :label="__('New clients')" value="6.782" :trend="0" :periods="$periods">
                <div class="px-3 pb-3">
                    <x-chart type="line" :height="60" sparkline :series="[['name' => __('Clients'), 'data' => $clients], ['name' => __('Last month'), 'data' => array_reverse($clients)]]" :label="__('New clients')" />
                </div>
            </x-widget.stat>
        </div>

        <div class="col-sm-6 col-lg-3">
            <x-widget.stat :label="__('Active subscriptions')" value="2.986" :trend="4" :periods="$periods">
                <div class="px-3 pb-3">
                    <x-chart type="bar" :height="60" sparkline :series="[['name' => __('Subscriptions'), 'data' => array_merge($subscriptions, $subscriptions, $subscriptions)]]" :label="__('Active subscriptions')" />
                </div>
            </x-widget.stat>
        </div>

        {{-- Compact cards --}}
        <div class="col-12">
            <div class="row row-cards">
                <div class="col-sm-6 col-lg-3"><x-widget.mini icon="ti-currency-dollar" :title="__(':count sales', ['count' => 132])" :text="__(':count waiting payments', ['count' => 12])" /></div>
                <div class="col-sm-6 col-lg-3"><x-widget.mini icon="ti-shopping-cart" color="green" :title="__(':count orders', ['count' => 78])" :text="__(':count shipped', ['count' => 32])" /></div>
                <div class="col-sm-6 col-lg-3"><x-widget.mini icon="ti-brand-x" color="x" :title="__(':count shares', ['count' => 623])" :text="__(':count today', ['count' => 16])" /></div>
                <div class="col-sm-6 col-lg-3"><x-widget.mini icon="ti-brand-facebook" color="facebook" :title="__(':count likes', ['count' => 132])" :text="__(':count today', ['count' => 21])" /></div>
            </div>
        </div>

        {{-- Traffic + map --}}
        <div class="col-lg-6">
            <x-widget.chart :title="__('Traffic summary')">
                <x-chart type="bar" stacked :height="288" legend="top-right" :label="__('Traffic summary')"
                    :series="[['name' => __('Web'), 'data' => $traffic['web']], ['name' => __('Social'), 'data' => $traffic['social']], ['name' => __('Other'), 'data' => $traffic['other']]]"
                    :categories="$days" :colors="['var(--tblr-primary)', 'var(--tblr-azure)', 'var(--tblr-green)']"
                    :options="['xaxis' => ['tickAmount' => 8, 'labels' => ['rotate' => 0]], 'plotOptions' => ['bar' => ['columnWidth' => '55%']]]" />
            </x-widget.chart>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">{{ __('Locations') }}</h2>
                    <x-map :values="$countries" />
                </div>
            </div>
        </div>

        {{-- Storage, sources, activity --}}
        <div class="col-lg-6">
            <div class="row row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="mb-3">{{ __('Using storage') }} <strong>5760 MB</strong> {{ __('of 8 GB') }}</p>
                            <x-progress.stacked :segments="collect($storage)->map(fn ($s) => [...$s, 'label' => __($s['label'])])->all()" />
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <x-widget.chart :title="__('Traffic sources')" :subtitle="__('Share of visits')">
                        <x-chart type="donut" :height="260" :label="__('Traffic sources')"
                            :series="array_values($sources)" :categories="array_keys($sources)"
                            :colors="['var(--tblr-primary)', 'var(--tblr-azure)', 'var(--tblr-green)', 'var(--tblr-orange)']" />
                    </x-widget.chart>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <x-widget.activity :title="__('Development activity')" :percent="35" :headline="__('Today\'s earning: :amount', ['amount' => '4.262.400đ'])" :note="__(':percent more than yesterday', ['percent' => '5%'])" :trend="5">
                <x-chart type="area" :height="220" sparkline class="rounded-bottom-3" :label="__('Development activity')"
                    :series="[['name' => __('Commits'), 'data' => $visitors]]" :categories="$days" />
            </x-widget.activity>
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
        <div class="col-lg-7">
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
