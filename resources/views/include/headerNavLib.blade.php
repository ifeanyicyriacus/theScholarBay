{{--Library specific--}}

<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{--{{url('/')}}--}}{{ route('home') }}">
                L<em><span style="color: orange">!</span></em>brary @include('include.doodle'){{--due to destractions--}}
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                {{--<li class="active"><a href="{{url('/')}}">Home</a></li>--}}
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Search & Find <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Catalogs</a></li>
                        <li><a href="#">Browse book shelve</a></li>
                        <li><a href="#">Database & E-Resources</a></li>
                        <li><a href="#">Get Services</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">External links</li>
                        <li><a href="#">URL Collection</a></li>
                        <li><a href="#">Librarian's Choice</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Research Support <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Research Tools</a></li>
                        <li><a href="#">Research Help</a></li>
                        <li><a href="#">Contribute Your Research</a></li>
                    </ul>
                </li>

                <li><a href="#">Archive</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#{{--about/#mission--}}">Mission & Governance</a></li>
                        <li><a href="#{{--news--}}">News & Event</a></li>
                        <li><a href="#{{--donate--}}">Giving to the L<em><span style="color: orange">!</span></em>brary</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Help <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('help')}}">Find Answers</a></li>
                        <li><a href="{{url('faq')}}">FAQ's</a></li>
                        <li><a href="{{url('contact')}}">Contact Us</a></li>
                        <li>
                            <a href="{{url('useoflibrary')}}">Use of L<em><span style="color: orange">!</span></em>brary 101</a>
                        </li>

                    </ul>
                </li>

                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Welcome<em><span style="color: orange">!</span></em></b><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        </ul>
                    </li>
                @else
                    {{--if user exist--}}

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }}<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">History</a></li>
                            <li><a href="{{url('favourite/')}}">Favourite</a></li>
                            <li><a href="{{--{{url('create')}}--}}{{ route('create') }}"><span style="color: orange">&nbsp;<i class="glyphicon glyphicon-upload"></i></span> Upload</a></li>
                            <li><a href="#{{--evernote.com--}}">Notepad <span style="color: orange">&nbsp;<i class="glyphicon glyphicon-new-window"></i></span></a></li>
                            <li><a href="{{url('lookup')}}">Dictionaries <span {{--style="color: orange"--}}>&nbsp;<i class="glyphicon glyphicon-book"></i></span></a></li>

                            <li role="separator" class="divider"></li>
                            {{--<li class="dropdown-header">Account Setup</li>--}}
                            <li ><a href="{{url('admin/profile')}}">Account Settings</a></li>
                            <li ><a href="{{url('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log out</a></li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </ul>
                    </li>

                @endif






























                {{--<li class="dropdown">--}}
                {{--<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> My name --}}{{--{{$user->name}}--}}{{--</a>--}}
                {{--<ul class="dropdown-menu">--}}
                {{--<li><a href="#">History</a></li>--}}
                {{--<li><a href="{{url('favourite/')}}">Favourite</a></li>--}}
                {{--<li><a href="--}}{{--{{url('create')}}--}}{{--{{ route('create') }}"><span style="color: orange">&nbsp;<i class="glyphicon glyphicon-upload"></i></span> Upload</a></li>--}}
                {{--<li><a href="#--}}{{--evernote.com--}}{{--">Notepad <span style="color: orange">&nbsp;<i class="glyphicon glyphicon-new-window"></i></span></a></li>--}}
                {{--<li role="separator" class="divider"></li>--}}
                {{--<li class="dropdown-header">External links</li>--}}
                {{--<li ><a href="{{url('admin/profile')}}">Account Settings</a></li>--}}
                {{--<li ><a href="{{url('signout')}}">Sign out </a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--end User account--}}


            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
