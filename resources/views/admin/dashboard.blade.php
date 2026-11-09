<x-layouts.app :title="__('Dashboard')">
    <div class="row row-deck row-cards">
        <div class="col-sm-6 col-lg-3"><x-stat-card :label="__('Users')" value="1,234" icon="ti-users" /></div>
        <div class="col-sm-6 col-lg-3"><x-stat-card :label="__('Orders')" value="342" icon="ti-shopping-cart" color="green" /></div>
        <div class="col-sm-6 col-lg-3"><x-stat-card :label="__('Revenue')" value="12.480.000đ" icon="ti-currency-dong" color="orange" /></div>
        <div class="col-sm-6 col-lg-3"><x-stat-card :label="__('Visits')" value="48.210" icon="ti-eye" color="azure" /></div>
        <div class="col-12">
            <x-card>
                <div class="card-body">
                    <h3 class="card-title">Laravel + Tabler</h3>
                    <p class="text-secondary mb-0">{{ __('Your Tabler setup is working.') }}</p>
                </div>
            </x-card>
        </div>
    </div>
</x-layouts.app>
