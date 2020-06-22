<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">	
	<!-- BEGIN: Aside Menu -->
	<div 
	id="m_ver_menu" 
	class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark m-aside-menu--dropdown " 
	data-menu-vertical="true"
	m-menu-dropdown="1" m-menu-scrollable="0" m-menu-dropdown-timeout="500"  
	>		
	<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
		<li class="m-menu__item {{ isActiveTap('dashboard') }}" aria-haspopup="true" >
			<a  href="{{url('admin/dashboard')}}" class="m-menu__link ">
				<span class="m-menu__item-here"></span>
				<i class="m-menu__link-icon flaticon-line-graph"></i>
				<span class="m-menu__link-text">{{ __('admin.dashboard') }}</span>
			</a>
		</li>

		
		<li class="m-menu__item {{ isActiveTap('cities') }}" aria-haspopup="true" >
			<a  href="{{url('admin/cities')}}" class="m-menu__link ">
				<span class="m-menu__item-here"></span>
				<i class="m-menu__link-icon flaticon-clipboard"></i>
				<span class="m-menu__link-text"> Cities </span>
			</a>
		</li>

		<li class="m-menu__item {{ isActiveTap('trips') }}" aria-haspopup="true" >
			<a  href="{{url('admin/trips')}}" class="m-menu__link ">
				<span class="m-menu__item-here"></span>
				<i class="m-menu__link-icon flaticon-clipboard"></i>
				<span class="m-menu__link-text"> Trips </span>
			</a>
		</li>


		<li class="m-menu__item {{ isActiveTap('user_trips') }}" aria-haspopup="true" >
			<a  href="{{url('admin/user_trips')}}" class="m-menu__link ">
				<span class="m-menu__item-here"></span>
				<i class="m-menu__link-icon flaticon-clipboard"></i>
				<span class="m-menu__link-text"> User Trips </span>
			</a>
		</li>

		<li class="m-menu__item {{ isActiveTap('users') }}" aria-haspopup="true" >
			<a  href="{{url('admin/users')}}" class="m-menu__link ">
				<span class="m-menu__item-here"></span>
				<i class="m-menu__link-icon flaticon-clipboard"></i>
				<span class="m-menu__link-text"> Users  </span>
			</a>
		</li>

		

		

	



	</ul>
	</div>
	<!-- END: Aside Menu -->
</div>

