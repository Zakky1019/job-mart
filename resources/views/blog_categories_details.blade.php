@extends('layouts.app')
@section('content')
@include('includes.header')
@include('includes.inner_page_title', ['page_title'=>__('Blog')])


<header id="joblisting-headerwrap" class="d-none d-sm-block">
    <div class="container-fluid">
        <section id="joblisting-header" role="search" class="text-center">

            <h1>{{$category->heading}}</h1>

        </section>
    </div>
</header>

<section id="blog-content">
    <div class="container">

      
        <div class="row">
            <div class="col-lg-9">
              
                <div class="blogwrapper">
                    <ul class="blogList row">
                        @if(null!==($blogs))
                        <?php
                        $count = 1;
                        ?>
                        @foreach($blogs as $blog)
                        <?php
                        $cate_ids = explode(",", $blog->cate_id);
                        $data = DB::table('blog_categories')->whereIn('id', $cate_ids)->get();
                        $cate_array = array();
                        foreach ($data as $cat) {
                            $cate_array[] = "<a href='" . url('/blog/category/') . "/" . $cat->slug . "'>$cat->heading</a>";
                        }
                        ?>
                        
                        <li class="col-lg-6">
                            <div class="bloginner">
                                <div class="postimg">{{$blog->printBlogImage()}}</div>

                                <div class="post-header">
                                    <h4><a href="{{route('blog-detail',$blog->slug)}}">{{$blog->heading}}</a></h4>
                                    <div class="postmeta">Category : {!!implode(', ',$cate_array)!!}
                                    </div>
                                </div>
                                <p>{!! \Illuminate\Support\Str::limit($blog->content, $limit = 150, $end = '...') !!}</p>

                            </div>
                        </li>

                        
                        <?php $count++; ?>
                        @endforeach
                        @endif

                    </ul>
                </div>

             
                <div class="pagiWrap">
                    <nav aria-label="Page navigation example">
                        @if(isset($blogs) && count($blogs))
                        {{ $blogs->appends(request()->query())->links() }} @endif
                    </nav>
                </div>
            </div>
             <div class="col-lg-3">
                 
                 <div class="sidebar"> 
        
          <div class="widget">
            <h5 class="widget-title">Search</h5>
            <div class="search">
              <form action="{{route('blog-search')}}" method="GET">
                <input type="text" class="form-control" placeholder="Search" name="search">
                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
              </form>
            </div>
          </div>
        
          @if(null!==($blogs_categories))
          <div class="widget">
            <h5 class="widget-title">Categories</h5>
            <ul class="categories">
            @foreach($blogs_categories as $category)
              <li><a href="{{url('/blog/category/').'/'.$category->slug}}">{{$category->heading}}</a></li>
            @endforeach
            </ul>
          </div>
          @endif
        </div>
            </div>
        </div>
        <div class="py-5"></div>
    </div>
</section>


@include('includes.footer')
@endsection
@push('styles')
<style>
.plus-minus-input {
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.plus-minus-input .input-group-field {
    text-align: center;
    margin-left: 0.5rem;
    margin-right: 0.5rem;
    padding: 0rem;
}

.plus-minus-input .input-group-field::-webkit-inner-spin-button,
.plus-minus-input .input-group-field ::-webkit-outer-spin-button {
    -webkit-appearance: none;
    appearance: none;
}

.plus-minus-input .input-group-button .circle {
    border-radius: 50%;
    padding: 0.25em 0.8em;
}
</style>
@endpush
@push('scripts')
@include('includes.immediate_available_btn')
<script>
</script>
@endpush