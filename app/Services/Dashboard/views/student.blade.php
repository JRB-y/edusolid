<div class="row ">
    <div class="col-lg-12 mt-25">
        <div class="tab-content">
            <!--single-tab-->
            <div id="grid-products" class="tab-pane active fade in show mt-25">
                {{-- <span>Vous n'avez aucune question en cours. Vous pouvez posez une <a href="#">nouvelle question</a></span> --}}
                @foreach($dashboard->data['questions'] as $question)
                    <div class="row mb-30" >
                        <div class="col-lg-12 col-sm-12">
                            <div class="course-single">
                                <div class="course-info">
                                    <div class="author-info mb-30">
                                        <div class="author-name">
                                            <img src="https://via.placeholder.com/15" alt="" />
                                            <a href="course-grid.html#">{{ $question->title }}</a>
                                            <small></small>
                                        </div>
                                        <div class="course-price text-right">
                                            <h5><i class="fa fa-dot-circle-o {{ $question->status }}"></i></h5>
                                        </div>
                                    </div>
                                    <div class="course-text mt-10 text-left">
                                        <h3><a href="course-details.html">{{$question->title}}</a></h3>
                                        <small>

                                            {!! Str::limit( $question->body, $limit = 150, $end = '<br> <a href="">Lire la suite</a>') !!}

                                        </small>
                                    </div>
                                </div>
                                <div class="course-meta">
                                    <a href="#"><i class="fa fa-calendar"></i>{{$question->created_at}}</a>
                                    <a href="{{ url('/') }}"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>
            <!--single-tab-->
            
        </div>

    </div>
</div>