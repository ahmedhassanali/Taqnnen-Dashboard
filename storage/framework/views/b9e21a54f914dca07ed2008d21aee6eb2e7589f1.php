

<div class="sidebar-wrapper bg-white" >
	<div>
		<div class="bg-white  logo-wrapper" style="height:130px ">
			<a href="<?php echo e(route('/')); ?>"><img class="img-fluid for-light " src="<?php echo e(asset('assets/images/logo/logo.png')); ?>" alt=""><img class="img-fluid for-dark" src="<?php echo e(asset('assets/images/logo/logo_dark.png')); ?>" alt=""></a>
			<div class="back-btn"><i class="fa fa-angle-left"></i></div>
			<div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
		</div>
		<div class="logo-icon-wrapper"><a href="<?php echo e(route('/')); ?>"><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a></div>
		<nav class="sidebar-main">
			<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
			<div id="sidebar-menu">
				<ul class="sidebar-links" id="simple-bar">
					<li class="back-btn">
						<a href="<?php echo e(route('/')); ?>"><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a>
						<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
					</li>

					<li class="sidebar-list"><a class="sidebar-link   mt-5  sidebar-title link-nav <?php echo e(Route::currentRouteName()=='index' ? 'active' : ''); ?> " href="<?php echo e(route('index')); ?>"><i data-feather="home"> </i><span style="font-family:  'Tajawal', sans-serif;"><?php echo e(trans('lang.dashboard')); ?></span></a></li>


                    
					<li   class=" sidebar-list">
                        <a class="sidebar-link    sidebar-title <?php echo e(request()->route()->getPrefix() == '/services' ? 'active' : ''); ?>" href="#">
                            <i data-feather="server"></i><span style="font-family:  'Tajawal', sans-serif;" ><?php echo e(trans('lang.services')); ?></span>
                            <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/services' ? 'down' : 'right'); ?>"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/services' ? 'block' : 'none;'); ?>;">
                            <li><a style="font-family:  'Tajawal', sans-serif;" href="<?php echo e(route('viewservices')); ?>" class="<?php echo e(Route::currentRouteName()=='viewservices' ? 'active' : ''); ?> "><?php echo app('translator')->get('lang.viewservices'); ?></a></li>
                            <li><a style="font-family:  'Tajawal', sans-serif;" href="<?php echo e(route('addservices')); ?>" class="<?php echo e(Route::currentRouteName()=='addservices' ? 'active' : ''); ?>"><?php echo app('translator')->get('lang.addservices'); ?> </a></li>
                        </ul>
                    </li>



                    
					<li class="sidebar-list">
						<a class="sidebar-link    sidebar-title <?php echo e(request()->route()->getPrefix() == '/email' ? 'active' : ''); ?>" href="#">
							<i data-feather="mail"></i><span style="font-family:  'Tajawal', sans-serif;"><?php echo e(trans('lang.Email')); ?></span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/email' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/email' ? 'block' : 'none;'); ?>;">
		                    <li><a style="font-family:  'Tajawal', sans-serif;" href="<?php echo e(route('email-application')); ?>" class="<?php echo e(Route::currentRouteName()=='email-application' ? 'active' : ''); ?>"><?php echo app('translator')->get('lang.Emailinbox'); ?></a></li>
		                    
		                </ul>
					</li>

                     
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/users' ? 'active' : ''); ?>" href="#">
							<i data-feather="mail"></i><span style="font-family:  'Tajawal', sans-serif;">التسويق</span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/users' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/users' ? 'block' : 'none;'); ?>;">
		                    <li><a style="font-family:  'Tajawal', sans-serif;" href="<?php echo e(route('marketingsms')); ?>" class="<?php echo e(Route::currentRouteName()=='marketingsms' ? 'active' : ''); ?>">رسالة هاتف</a></li>
		                    <li><a style="font-family:  'Tajawal', sans-serif;" href="<?php echo e(route('marketingwatsapp')); ?>" class="<?php echo e(Route::currentRouteName()=='marketingwatsapp' ? 'active' : ''); ?>">واتس اب</a></li>
                            
                        </ul>
					</li>


                    

					<li class="sidebar-list">
						<a class="sidebar-link    sidebar-title <?php echo e(request()->route()->getPrefix() == '/chat' ? 'active' : ''); ?>" href="#">
							<i data-feather="message-circle"></i><span style="font-family:  'Tajawal', sans-serif;">الدعم الفنى</span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/chat' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/chat' ? 'block' : 'none;'); ?>;">
                            <li><a style="font-family:  'Tajawal', sans-serif;" href="<?php echo e(route('chat-link')); ?>" class="<?php echo e(Route::currentRouteName()=='chat-link' ? 'active' : ''); ?>"><?php echo app('translator')->get('lang.Chat'); ?></a></li>
							
                            <li class="sidebar-list"><a class="sidebar-link   sidebar-title link-nav <?php echo e(Route::currentRouteName()=='support-ticket' ? 'active' : ''); ?>" href="<?php echo e(route('support-ticket')); ?>"><span style="font-family:  'Tajawal', sans-serif;"><?php echo e(trans('lang.Support Ticket')); ?></span></a></li>
                            <li><a href="<?php echo e(route('supportdashboard')); ?>" class="<?php echo e(Route::currentRouteName()=='supportdashboard' ? 'active' : ''); ?>"><?php echo app('translator')->get('lang.Dashboard'); ?></a></li>
						</ul>
					</li>


                    
                    <li class="sidebar-list">
                        <a class="sidebar-link    sidebar-title <?php echo e(request()->route()->getPrefix() == '/users' ? 'active' : ''); ?>" href="#">
                            <i data-feather="users"></i><span style="font-family:  'Tajawal', sans-serif;"><?php echo e(trans('lang.Customers')); ?></span>
                            <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/users' ? 'down' : 'right'); ?>"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/users' ? 'block' : 'none;'); ?>;">
                            <li><a style="font-family:  'Tajawal', sans-serif; "href="<?php echo e(route('viewcustomers')); ?>" class="<?php echo e(Route::currentRouteName()=='viewcustomers' ? 'active' : ''); ?>"><?php echo app('translator')->get('lang.viewcustomers'); ?></a></li>
                            <li><a style="font-family:  'Tajawal', sans-serif; "href="<?php echo e(route('addcustomers')); ?>" class="<?php echo e(Route::currentRouteName()=='addcustomers' ? 'active' : ''); ?>">اضافة عميل</a></li>
                            <li><a style="font-family:  'Tajawal', sans-serif; "href="<?php echo e(route('viewcustomers')); ?>" class="<?php echo e(Route::currentRouteName()=='viewcustomers' ? 'active' : ''); ?>">عملاء محتملين</a></li>
                        </ul>
                    </li>

                    
                    <li class="sidebar-list">
                        <a class="sidebar-link    sidebar-title <?php echo e(request()->route()->getPrefix() == '/users' ? 'active' : ''); ?>" href="#">
                            <i data-feather="users"></i><span style="font-family:  'Tajawal', sans-serif;"><?php echo e(trans('lang.users')); ?></span>
                            <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/users' ? 'down' : 'right'); ?>"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/users' ? 'block' : 'none;'); ?>;">
                            <li><a style="font-family:  'Tajawal', sans-serif;" href="<?php echo e(route('viewusers')); ?>" class="<?php echo e(Route::currentRouteName()=='viewusers' ? 'active' : ''); ?>"><?php echo app('translator')->get('lang.viewusers'); ?></a></li>
                            <li><a style="font-family:  'Tajawal', sans-serif;" href="<?php echo e(route('addusers')); ?>" class="<?php echo e(Route::currentRouteName()=='addusers' ? 'active' : ''); ?>"><?php echo app('translator')->get('lang.addusers'); ?> </a></li>
                        </ul>
                    </li>

                    
                    <li class="sidebar-list">
						<a class="sidebar-link    sidebar-title <?php echo e(request()->route()->getPrefix() == '/users' ? 'active' : ''); ?>" href="#">
							<i data-feather="star"></i><span style="font-family:  'Tajawal', sans-serif;"><?php echo e(trans('lang.Opportunities')); ?></span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/users' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/users' ? 'block' : 'none;'); ?>;">
		                    <li><a style="font-family:  'Tajawal', sans-serif;" href="<?php echo e(route('viewOpportunities')); ?>" class="<?php echo e(Route::currentRouteName()=='viewOpportunities' ? 'active' : ''); ?>"><?php echo app('translator')->get('lang.ViewOpportunities'); ?></a></li>
		                    
		                </ul>
					</li>

                    
                    <li class="sidebar-list">
						<a class="sidebar-link    sidebar-title <?php echo e(request()->route()->getPrefix() == '/users' ? 'active' : ''); ?>" href="#">
							<i data-feather="list"></i><span style="font-family:  'Tajawal', sans-serif;"><?php echo e(trans('lang.subscription')); ?></span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/users' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/users' ? 'block' : 'none;'); ?>;">
		                    <li><a style="font-family:  'Tajawal', sans-serif;" href="<?php echo e(route('viewsubscription')); ?>" class="<?php echo e(Route::currentRouteName()=='viewsubscription' ? 'active' : ''); ?>"><?php echo app('translator')->get('lang.Viewsubscription'); ?></a></li>
		                    <li><a style="font-family:  'Tajawal', sans-serif;"href="<?php echo e(route('addsubscription')); ?>" class="<?php echo e(Route::currentRouteName()=='addsubscription' ? 'active' : ''); ?>">اضافة اشتراك</a></li>
		                </ul>
					</li>

                    
                    <li class="sidebar-list">
						<a class="sidebar-link   sidebar-title <?php echo e(request()->route()->getPrefix() == '/users' ? 'active' : ''); ?>" href="#">
							<i data-feather="file-text"></i><span style="font-family:  'Tajawal', sans-serif;"><?php echo e(trans('lang.reporting')); ?></span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/users' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/users' ? 'block' : 'none;'); ?>;">
		                    
		                    <li><a style="font-family:  'Tajawal', sans-serif;" href="<?php echo e(route('averagereport')); ?>" class="<?php echo e(Route::currentRouteName()=='averagereport' ? 'active' : ''); ?>">تقرير المعدل</a></li>
                            <li><a style="font-family:  'Tajawal', sans-serif;" href="<?php echo e(route('financialreport')); ?>" class="<?php echo e(Route::currentRouteName()=='financialreport' ? 'active' : ''); ?>">تقرير المبيعات</a></li>
                            <li><a style="font-family:  'Tajawal', sans-serif;" href="<?php echo e(route('billreport')); ?>" class="<?php echo e(Route::currentRouteName()=='billreport' ? 'active' : ''); ?>">الفواتير</a></li>
		                </ul>
					</li>
                   
                    
					<li class="sidebar-list"><a class="sidebar-link   sidebar-title link-nav <?php echo e(Route::currentRouteName()=='permissions' ? 'active' : ''); ?> " href="<?php echo e(route('permissions')); ?>"><i data-feather="calendar"> </i><span style="font-family:  'Tajawal', sans-serif;"><?php echo e(trans('lang.permissions')); ?></span></a></li>
					
					<li class="sidebar-list">
                        <a class="sidebar-link   sidebar-title link-nav <?php echo e(Route::currentRouteName()=='settings' ? 'active' : ''); ?> " href="<?php echo e(route('settings')); ?>">
                        <i data-feather="settings"></i>
                        <span style="font-family:  'Tajawal', sans-serif;">الاعدادات</span>
                        </a>
                    </li>
                    
					<li class="sidebar-list"><a class="sidebar-link   sidebar-title link-nav <?php echo e(Route::currentRouteName()=='calendar-basic' ? 'active' : ''); ?> " href="<?php echo e(route('calendar-basic')); ?>"><i data-feather="calendar"> </i><span style="font-family:  'Tajawal', sans-serif;"><?php echo e(trans('lang.Calendar')); ?></span></a></li>
                    
					<li class="sidebar-list"><a class="sidebar-link   sidebar-title link-nav <?php echo e(Route::currentRouteName()=='network' ? 'active' : ''); ?> " href="<?php echo e(route('network')); ?>"><i data-feather="calendar"> </i><span style="font-family:  'Tajawal', sans-serif;">ادارة علاقات عامة</span></a></li>
                    

			<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
		</nav>
	</div>
</div>
<?php /**PATH C:\xampp\htdocs\Cuba\resources\views/layouts/simple/sidebar.blade.php ENDPATH**/ ?>