<div id="topbar" class="clear">
    <div class="center">
        <div class="profile">
            <div class="photo">
                {{HTML::image(Auth::user()->photo, Auth::user()->username, ['class' => 'img'])}}
            </div><!-- /photo -->
            <nav class="nav">
                <ul class="pages">
                    <li class="option">
                        <a href="{{URL::to('admin/articles')}}" class="link">Articles</a>
                    </li>
                    <li class="option">
                        <a href="{{URL::to('admin/settings')}}" class="link">Settings</a>
                    </li>
                    <li class="option">
                        <a href="{{URL::to('admin/twitterLogout')}}" class="link">Logout</a>
                    </li>
                </ul><!-- /pages -->
            </nav>
            <i class="fa fa-caret-down"></i>
        </div><!-- /profile -->
        <a href="{{URL::to('admin/article')}}" class="btn green-btn">New article</a>
    </div>
</div><!-- /topbar -->