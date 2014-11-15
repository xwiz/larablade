<div class="navbar navbar-default navbar-fixed-top">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-responsive-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="{{url('/')}}">Larablade</a>
	</div>
	<div class="navbar-collapse navbar-responsive-collapse collapse" style="height: 1px;">
        <!-- Perpetual Menu -->
		<ul class="nav navbar-nav">
			<li>{{ HTML::link('/about', 'About US') }}</li>
		</ul>
        <!-- End perpetual menu -->
        
        <!-- Show login or register depending on auth status -->
		<ul class="nav navbar-nav pull-right">
            @if(!Auth::check())
            <li>{{ HTML::link('/register', 'Sign Up') }}</li>
			<li class="divider-vertical"></li>
			<li class="dropdown" id="menu_login">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign In <b class="caret"></b></a>
				<div class="dropdown-menu" style="padding: 15px; padding-bottom: 15px;">
                    {{ Form::open(array('url'=>'/login')) }}
                    <input id="email" placeholder="email" style="margin-bottom: 15px;" type="text" name="email" size="30" maxlength="80" />
                    <input id="password" placeholder="password" style="margin-bottom: 15px;" type="password" name="password" size="30" maxlength="64" />
                    <div id="remember-me">
                    <input id="remember" style="float: left; margin-right: 10px;" type="checkbox" name="remember" value="1" />
                    <label class="string optional" for="remember_me" style="color: white;"> Remember me</label>
                    </div>                    
                    <input class="btn btn-primary btn-sm" style="width:100%; clear:left" type="submit" name="login" value="Sign In" />
                    {{ Form::close() }}
				</div>
			</li>
            @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>{{ HTML::link('/user', 'Profile') }}</li>
                    <li>{{ HTML::link('logout', 'Logout') }}</li>
                </ul>
            </li>               
            @endif
		</ul>
	</div>
	<!-- /.nav-collapse -->
</div>