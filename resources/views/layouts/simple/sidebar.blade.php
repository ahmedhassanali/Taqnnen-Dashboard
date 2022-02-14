

<div class="sidebar-wrapper bg-white" >
	<div>
		<div class="bg-white  logo-wrapper" style="height:130px ">
			<a href="{{route('/')}}"><img class="img-fluid for-light " src="{{asset('assets/images/logo/logo.png')}}" alt=""><img class="img-fluid for-dark" src="{{asset('assets/images/logo/logo_dark.png')}}" alt=""></a>
			<div class="back-btn"><i class="fa fa-angle-left"></i></div>
			<div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
		</div>
		<div class="logo-icon-wrapper"><a href="{{route('/')}}"><img class="img-fluid" src="{{asset('assets/images/logo/logo-icon.png')}}" alt=""></a></div>
		<nav class="sidebar-main">
			<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
			<div id="sidebar-menu">
				<ul class="sidebar-links" id="simple-bar">
					<li class="back-btn">
						<a href="{{route('/')}}"><img class="img-fluid" src="{{asset('assets/images/logo/logo-icon.png')}}" alt=""></a>
						<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
					</li>

					<li class="sidebar-list"><a class="sidebar-link   mt-5  sidebar-title link-nav {{ Route::currentRouteName()=='index' ? 'active' : '' }} " href="{{route('index')}}"><i data-feather="home"> </i><span style="font-family:  'Tajawal', sans-serif;">{{ trans('lang.dashboard') }}</span></a></li>


                    {{------------------------ services button -----------------------------}}
					<li   class=" sidebar-list">
                        <a class="sidebar-link    sidebar-title {{request()->route()->getPrefix() == '/services' ? 'active' : '' }}" href="#">
                            <i data-feather="server"></i><span style="font-family:  'Tajawal', sans-serif;" >{{ trans('lang.services') }}</span>
                            <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/services' ? 'down' : 'right' }}"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: {{request()->route()->getPrefix() == '/services' ? 'block' : 'none;' }};">
                            <li><a style="font-family:  'Tajawal', sans-serif;" href="{{route('viewservices')}}" class="{{ Route::currentRouteName()=='viewservices' ? 'active' : '' }} ">@lang('lang.viewservices')</a></li>
                            <li><a style="font-family:  'Tajawal', sans-serif;" href="{{route('addservices')}}" class="{{ Route::currentRouteName()=='addservices' ? 'active' : '' }}">@lang('lang.addservices') </a></li>
                        </ul>
                    </li>



                    {{------------------------ Email button -----------------------------}}
					<li class="sidebar-list">
						<a class="sidebar-link    sidebar-title {{request()->route()->getPrefix() == '/email' ? 'active' : '' }}" href="#">
							<i data-feather="mail"></i><span style="font-family:  'Tajawal', sans-serif;">{{ trans('lang.Email') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/email' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{request()->route()->getPrefix() == '/email' ? 'block' : 'none;' }};">
		                    <li><a style="font-family:  'Tajawal', sans-serif;" href="{{route('email-application')}}" class="{{ Route::currentRouteName()=='email-application' ? 'active' : '' }}">@lang('lang.Emailinbox')</a></li>
		                    {{-- <li><a style="font-family:  'Tajawal', sans-serif;" href="{{route('email-compose')}}" class="{{ Route::currentRouteName()=='email-compose' ? 'active' : '' }}">@lang('lang.EmailCompose')</a></li> --}}
		                </ul>
					</li>

                     {{------------------------ marketing button -----------------------------}}
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/users' ? 'active' : '' }}" href="#">
							<i data-feather="mail"></i><span style="font-family:  'Tajawal', sans-serif;">التسويق</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/users' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{request()->route()->getPrefix() == '/users' ? 'block' : 'none;' }};">
		                    <li><a style="font-family:  'Tajawal', sans-serif;" href="{{route('marketingsms')}}" class="{{ Route::currentRouteName()=='marketingsms' ? 'active' : '' }}">رسالة هاتف</a></li>
		                    <li><a style="font-family:  'Tajawal', sans-serif;" href="{{route('marketingwatsapp')}}" class="{{ Route::currentRouteName()=='marketingwatsapp' ? 'active' : '' }}">واتس اب</a></li>
                            
                        </ul>
					</li>


                    {{------------------------ chat button -----------------------------}}

					<li class="sidebar-list">
						<a class="sidebar-link    sidebar-title {{request()->route()->getPrefix() == '/chat' ? 'active' : '' }}" href="#">
							<i data-feather="message-circle"></i><span style="font-family:  'Tajawal', sans-serif;">الدعم الفنى</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/chat' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{request()->route()->getPrefix() == '/chat' ? 'block' : 'none;' }};">
                            <li><a style="font-family:  'Tajawal', sans-serif;" href="{{route('chat-link')}}" class="{{ Route::currentRouteName()=='chat-link' ? 'active' : '' }}">@lang('lang.Chat')</a></li>
							{{------------------------ support button -----------------------------}}
                            <li class="sidebar-list"><a class="sidebar-link   sidebar-title link-nav {{ Route::currentRouteName()=='support-ticket' ? 'active' : '' }}" href="{{route('support-ticket')}}"><span style="font-family:  'Tajawal', sans-serif;">{{ trans('lang.Support Ticket') }}</span></a></li>
                            <li><a href="{{route('supportdashboard')}}" class="{{ Route::currentRouteName()=='supportdashboard' ? 'active' : '' }}">@lang('lang.Dashboard')</a></li>
						</ul>
					</li>


                    {{------------------------ customers button -----------------------------}}
                    <li class="sidebar-list">
                        <a class="sidebar-link    sidebar-title {{request()->route()->getPrefix() == '/users' ? 'active' : '' }}" href="#">
                            <i data-feather="users"></i><span style="font-family:  'Tajawal', sans-serif;">{{ trans('lang.Customers') }}</span>
                            <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/users' ? 'down' : 'right' }}"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: {{request()->route()->getPrefix() == '/users' ? 'block' : 'none;' }};">
                            <li><a style="font-family:  'Tajawal', sans-serif; "href="{{route('viewcustomers')}}" class="{{ Route::currentRouteName()=='viewcustomers' ? 'active' : '' }}">@lang('lang.viewcustomers')</a></li>
                            <li><a style="font-family:  'Tajawal', sans-serif; "href="{{route('addcustomers')}}" class="{{ Route::currentRouteName()=='addcustomers' ? 'active' : '' }}">اضافة عميل</a></li>
                            <li><a style="font-family:  'Tajawal', sans-serif; "href="{{route('viewcustomers')}}" class="{{ Route::currentRouteName()=='viewcustomers' ? 'active' : '' }}">عملاء محتملين</a></li>
                        </ul>
                    </li>

                    {{------------------------ users button -----------------------------}}
                    <li class="sidebar-list">
                        <a class="sidebar-link    sidebar-title {{request()->route()->getPrefix() == '/users' ? 'active' : '' }}" href="#">
                            <i data-feather="users"></i><span style="font-family:  'Tajawal', sans-serif;">{{ trans('lang.users') }}</span>
                            <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/users' ? 'down' : 'right' }}"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: {{request()->route()->getPrefix() == '/users' ? 'block' : 'none;' }};">
                            <li><a style="font-family:  'Tajawal', sans-serif;" href="{{route('viewusers')}}" class="{{ Route::currentRouteName()=='viewusers' ? 'active' : '' }}">@lang('lang.viewusers')</a></li>
                            <li><a style="font-family:  'Tajawal', sans-serif;" href="{{route('addusers')}}" class="{{ Route::currentRouteName()=='addusers' ? 'active' : '' }}">@lang('lang.addusers') </a></li>
                        </ul>
                    </li>

                    {{------------------------ Opportunities button -----------------------------}}
                    <li class="sidebar-list">
						<a class="sidebar-link    sidebar-title {{request()->route()->getPrefix() == '/users' ? 'active' : '' }}" href="#">
							<i data-feather="star"></i><span style="font-family:  'Tajawal', sans-serif;">{{ trans('lang.Opportunities') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/users' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{request()->route()->getPrefix() == '/users' ? 'block' : 'none;' }};">
		                    <li><a style="font-family:  'Tajawal', sans-serif;" href="{{route('viewOpportunities')}}" class="{{ Route::currentRouteName()=='viewOpportunities' ? 'active' : '' }}">@lang('lang.ViewOpportunities')</a></li>
		                    {{-- <li><a style="font-family:  'Tajawal', sans-serif;" href="{{route('addOpportunities')}}" class="{{ Route::currentRouteName()=='addOpportunities' ? 'active' : '' }}">@lang('lang.AddOpportunities') </a></li> --}}
		                </ul>
					</li>

                    {{------------------------ subscription button -----------------------------}}
                    <li class="sidebar-list">
						<a class="sidebar-link    sidebar-title {{request()->route()->getPrefix() == '/users' ? 'active' : '' }}" href="#">
							<i data-feather="list"></i><span style="font-family:  'Tajawal', sans-serif;">{{ trans('lang.subscription') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/users' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{request()->route()->getPrefix() == '/users' ? 'block' : 'none;' }};">
		                    <li><a style="font-family:  'Tajawal', sans-serif;" href="{{route('viewsubscription')}}" class="{{ Route::currentRouteName()=='viewsubscription' ? 'active' : '' }}">@lang('lang.Viewsubscription')</a></li>
		                    <li><a style="font-family:  'Tajawal', sans-serif;"href="{{route('addsubscription')}}" class="{{ Route::currentRouteName()=='addsubscription' ? 'active' : '' }}">اضافة اشتراك</a></li>
		                </ul>
					</li>

                    {{------------------------ reporting button -----------------------------}}
                    <li class="sidebar-list">
						<a class="sidebar-link   sidebar-title {{request()->route()->getPrefix() == '/users' ? 'active' : '' }}" href="#">
							<i data-feather="file-text"></i><span style="font-family:  'Tajawal', sans-serif;">{{ trans('lang.reporting') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/users' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{request()->route()->getPrefix() == '/users' ? 'block' : 'none;' }};">
		                    {{-- <li><a style="font-family:  'Tajawal', sans-serif;" href="{{route('mainreport')}}" class="{{ Route::currentRouteName()=='mainreport' ? 'active' : '' }}">تقرير</a></li> --}}
		                    <li><a style="font-family:  'Tajawal', sans-serif;" href="{{route('averagereport')}}" class="{{ Route::currentRouteName()=='averagereport' ? 'active' : '' }}">تقرير المعدل</a></li>
                            <li><a style="font-family:  'Tajawal', sans-serif;" href="{{route('financialreport')}}" class="{{ Route::currentRouteName()=='financialreport' ? 'active' : '' }}">تقرير المبيعات</a></li>
                            <li><a style="font-family:  'Tajawal', sans-serif;" href="{{route('billreport')}}" class="{{ Route::currentRouteName()=='billreport' ? 'active' : '' }}">الفواتير</a></li>
		                </ul>
					</li>
                   
                    {{------------------------ permissions button -----------------------------}}
					<li class="sidebar-list"><a class="sidebar-link   sidebar-title link-nav {{ Route::currentRouteName()=='permissions' ? 'active' : '' }} " href="{{route('permissions')}}"><i data-feather="calendar"> </i><span style="font-family:  'Tajawal', sans-serif;">{{ trans('lang.permissions') }}</span></a></li>
					{{------------------------ settings button -----------------------------}}
					<li class="sidebar-list">
                        <a class="sidebar-link   sidebar-title link-nav {{ Route::currentRouteName()=='settings' ? 'active' : '' }} " href="{{route('settings')}}">
                        <i data-feather="settings"></i>
                        <span style="font-family:  'Tajawal', sans-serif;">الاعدادات</span>
                        </a>
                    </li>
                    {{------------------------ calendar button -----------------------------}}
					<li class="sidebar-list"><a class="sidebar-link   sidebar-title link-nav {{ Route::currentRouteName()=='calendar-basic' ? 'active' : '' }} " href="{{route('calendar-basic')}}"><i data-feather="calendar"> </i><span style="font-family:  'Tajawal', sans-serif;">{{ trans('lang.Calendar') }}</span></a></li>
                    {{------------------------ network button -----------------------------}}
					<li class="sidebar-list"><a class="sidebar-link   sidebar-title link-nav {{ Route::currentRouteName()=='network' ? 'active' : '' }} " href="{{route('network')}}"><i data-feather="calendar"> </i><span style="font-family:  'Tajawal', sans-serif;">ادارة علاقات عامة</span></a></li>
                    

			<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
		</nav>
	</div>
</div>
