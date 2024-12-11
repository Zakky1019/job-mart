@extends('layouts.app')
@section('content')
    @include('includes.header')
    @include('includes.inner_page_title', ['page_title' => __('All Categories')])
    @include('flash::message')

    <div class="section">
        <div class="container">
            <div class="topsearchwrap">
                <div class="srchint">
                    <ul class="row categorylisting">
                        @if (isset($functionalAreas) && count($functionalAreas))
                            @foreach ($functionalAreas as $functionalArea)
                                @if (null !== $functionalArea)
                                    <li class="col-lg-3 col-6">
                                        <a class="catecard"
                                            href="{{ route('job.list', ['functional_area_id[]' => $functionalArea->functional_area_id]) }}"
                                            title="{{ $functionalArea->functional_area }}">
                                            <div class="iconcircle">
                                                @if ($functionalArea->image && file_exists(public_path('uploads/functional_area/' . $functionalArea->image)))
                                                    <img src="{{ asset('uploads/functional_area/' . $functionalArea->image) }}"
                                                        alt="">
                                                @else
                                                    <img src="{{ asset('images/no-image.png') }}" alt="Dummy Image">
                                                @endif
                                            </div>
                                            <div class="catedata">
                                                <h3>{!! \Illuminate\Support\Str::limit($functionalArea->functional_area, $limit = 20, $end = '...') !!}</h3>
                                                <div class="badge"><i class="fas fa-briefcase"></i>
                                                    ({{ $functionalArea->jobs_count }}) {{ __('Jobs') }}
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')
@endsection
