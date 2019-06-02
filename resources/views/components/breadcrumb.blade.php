<!--breadcrumb-area start-->
<div class="breadcrumb-area mt-25">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="site-breadcrumb">
                    <ul class="list-none">
                        @foreach($pages as $page)
                            <li><a href="{{url(str_slug($page))}}">{{ $page }}</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>