<x-layouts.app :title="__('Card patterns')">
    <x-slot:actions>
        <x-breadcrumb :items="[__('Components') => route('admin.components'), __('Card patterns') => null]" />
    </x-slot:actions>

    <div class="row row-cards">
        <div class="col-lg-4">
            <div class="row row-cards">
                <div class="col-12">
                    <x-widget.notice gradient="danger" :title="__('Are you sure to delete this card?')" :text="__('If you delete this card, you will not be able to recover it.')">
                        <x-button variant="danger">{{ __('Yes, delete it') }}</x-button>
                        <x-button variant="white">{{ __('Cancel') }}</x-button>
                    </x-widget.notice>
                </div>
                <div class="col-12">
                    <x-widget.notice gradient="success" icon="ti-circle-check" :title="__('Success!')" :text="__('Your changes have been saved successfully.')">
                        <x-button variant="success">{{ __('Continue') }}</x-button>
                    </x-widget.notice>
                </div>
                <div class="col-12">
                    <x-widget.weather city="Hà Nội" :summary="__('Cloudy morning')" :temp="24" icon="ti-cloud" gradient="ocean" />
                </div>
                <div class="col-12">
                    <x-widget.weather city="Đà Lạt" :summary="__('Sunny day')" :temp="19" icon="ti-sun" gradient="sun" />
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="row row-cards">
                <div class="col-12">
                    <x-widget.pricing :plan="__('Professional')" price="199.000đ" :period="__('month')" ribbon="Featured"
                        :features="[
                            ['text' => '<strong>Không giới hạn</strong> người xem'],
                            ['text' => '<strong>1</strong> tài khoản'],
                            ['text' => '<strong>100+</strong> video hướng dẫn'],
                            ['text' => __('Public displays'), 'included' => false],
                        ]"
                        :note="__('This plan is perfect for small businesses and startups.')" :button="__('Purchase now')" />
                </div>
                <div class="col-12"><x-widget.kpi :label="__('Earned')" value="2.847.000đ" icon="ti-credit-card" color="success" :percent="75" /></div>
                <div class="col-12"><x-widget.kpi :label="__('Pending orders')" value="47" icon="ti-clock" color="yellow" :percent="38" /></div>
                <div class="col-12"><x-widget.kpi :label="__('Cancelled orders')" value="12" icon="ti-shopping-cart-x" color="red" :percent="8" /></div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="row row-cards">
                <div class="col-12">
                    <x-widget.promo emoji="🍾 🎉" :title="__('Happy birthday, :name!', ['name' => 'Andrew'])" :button="__('Grab my special deal')">
                        {{ __('We truly hope your day is brimming with joy and laughter.') }}
                    </x-widget.promo>
                </div>
                <div class="col-12">
                    <x-widget.promo emoji="🏆" gradient="gold" :title="__('You are winner!')" :button="__('Claim your prize')" button-icon="ti-trophy">
                        {{ __('You have been selected as our lucky winner for completing 100 orders this month!') }}
                    </x-widget.promo>
                </div>
                <div class="col-12">
                    <x-widget.profile name="Egan Poetz" :role="__('Research nurse')" starred>
                        <x-button variant="white" size="sm" icon="ti-message" />
                        <x-button variant="white" size="sm" icon="ti-phone" />
                        <x-button variant="white" size="sm" icon="ti-mail" />
                    </x-widget.profile>
                </div>
                <div class="col-12"><x-widget.delta amount="5.256.990đ" :caption="__('Revenue last 30 days')" :delta="4" /></div>
                <div class="col-12"><x-widget.delta amount="342" :caption="__('Sales last 30 days')" :delta="-4.3" /></div>
            </div>
        </div>
    </div>
</x-layouts.app>
