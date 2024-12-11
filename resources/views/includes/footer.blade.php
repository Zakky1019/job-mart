<div class="footerWrap">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-6">
                <h5>{{ __('Quick Links') }}</h5>
                <ul class="quicklinks">
                    <li><a href="{{ route('index') }}">{{ __('Home') }}</a></li>
                    <li><a href="{{ route('contact.us') }}">{{ __('Contact Us') }}</a></li>
                    <li class="postad"><a href="{{ route('post.job') }}">{{ __('Post a Job') }}</a></li>
                    <li><a href="{{ route('faq') }}">{{ __('FAQs') }}</a></li>
                    @foreach ($show_in_footer_menu as $footer_menu)
                        @php
                            $cmsContent = App\CmsContent::getContentBySlug($footer_menu->page_slug);
                        @endphp

                        <li class="{{ Request::url() == route('cms', $footer_menu->page_slug) ? 'active' : '' }}"><a
                                href="{{ route('cms', $footer_menu->page_slug) }}">{{ $cmsContent->page_title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="col-md-3 col-sm-6">
                <h5>{{ __('Jobs By Functional Area') }}</h5>

                <ul class="quicklinks">
                    @php
                        $functionalAreas = App\FunctionalArea::getUsingFunctionalAreas(10);
                    @endphp
                    @foreach ($functionalAreas as $functionalArea)
                        <li><a
                                href="{{ route('job.list', ['functional_area_id[]' => $functionalArea->functional_area_id]) }}">{{ $functionalArea->functional_area }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="col-md-3 col-sm-6">
                <h5>{{ __('Jobs By Industry') }}</h5>
                <ul class="quicklinks">
                    @php
                        $industries = App\Industry::getUsingIndustries(10);
                    @endphp
                    @foreach ($industries as $industry)
                        <li><a
                                href="{{ route('job.list', ['industry_id[]' => $industry->industry_id]) }}">{{ $industry->industry }}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="clear"></div>
            </div>


            <div class="col-md-3 col-sm-12">
                <h5>{{ __('Contact Us') }}</h5>
                <div class="address">66/C Hizbullah Street, Kankeyanodai - 13, Arayampathy 30150, Sri Lanka</div>
                <div class="email"> <a href="mailto:hello@witsberry.com">hello@witsberry.com</a>
                </div>
                <div class="phone"> <a href="tel:">+94 652059927</a>
                </div>


            </div>



        </div>
    </div>
</div>

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="bttxt">{{ __('Copyright') }} &copy; {{ date('Y') }} JobMart.
                    {{ __('All Rights Reserved') }}. {{ __('Design by') }}: <a
                        href="{{ url('/') }}http://graphicriver.net/user/ecreativesol" target="_blank">JobMart</a>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>

    </div>
</div>
