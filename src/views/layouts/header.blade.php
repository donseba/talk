<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/{{ $talkRoute }}">{{ $talkTitle }}</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="/{{ $talkRoute }}/list">List</a></li>
                <li><a href="/{{ $talkRoute }}/tags">Tags</a></li>
                <li><a href="/{{ $talkRoute }}/categories">Categories</a></li>
                <li><a href="/{{ $talkRoute }}/users">Users</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if( Auth::guest() )
                    <li><a href="/{{ $talkRoute }}/auth/login">login</a></li>
                    <li><a href="/{{ $talkRoute }}/auth/register">register</a></li>
                @else
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Hi, {{ Auth::user()->username }} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/{{ $talkRoute }}/auth/profile">profile</a></li>
                            <li><a href="/{{ $talkRoute }}/auth/logout">logout</a></li>
                        </ul>
                    </li>

                    @if( Auth::user()->role == 10 )
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Administration <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/{{ $talkRoute }}/admin/posts">Posts</a></li>
                            <li><a href="/{{ $talkRoute }}/admin/tags">Tags</a></li>
                            <li><a href="/{{ $talkRoute }}/admin/categories">Categories</a></li>
                            <li><a href="/{{ $talkRoute }}/admin/users">Users</a></li>
                        </ul>
                    </li>
                    @endif
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>