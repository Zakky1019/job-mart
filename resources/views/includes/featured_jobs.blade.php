<div class="section featuredjobwrap">
    <div class="container">  
        <div class="titleTop">
            <h3>{{__('Featured')}} <span>{{__('Jobs')}}</span></h3>
        </div>
        
        <ul class="featuredlist row">
            @if(isset($featuredJobs) && count($featuredJobs))
            @foreach($featuredJobs as $featuredJob)
            <?php $company = $featuredJob->getCompany(); ?>
            @if(null !== $company)
           
            <li class="col-lg-3 col-md-6">
                <div class="jobint">
                    <div class="d-flex">
                        <div class="fticon"><i class="fas fa-briefcase"></i> {{$featuredJob->getJobType('job_type')}}</div>                        
                    </div>
                    <h4><a href="{{route('job.detail', [$featuredJob->slug])}}" title="{{$featuredJob->title}}">{{$featuredJob->title}}</a></h4>            
                    <div class="jobcompany">
                     <div class="ftjobcomp">
                        <span>{{$featuredJob->created_at->format('M d, Y')}}</span>
                     <a href="{{route('company.detail', $company->slug)}}" title="{{$company->name}}">{{$company->name}}</a>
                     </div>
                    <a href="{{route('company.detail', $company->slug)}}" class="company-logo" title="{{$company->name}}">{{$company->printCompanyImage()}} </a>
                    </div>
                </div>
            </li>
            
            @endif
            @endforeach
            @endif

        </ul>
       
        <div class="viewallbtn"><a href="{{route('job.list', ['is_featured'=>1])}}">{{__('View All Featured Jobs')}}</a></div>
        
    </div>
</div>