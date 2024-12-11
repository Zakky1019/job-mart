@if(!Auth::user() && !Auth::guard('company')->user())
<div class="emploginbox">
		<div class="usrintxt">
		<div class="titleTop">			
           <h3>{{__('Are You Looking For Candidates!')}}</h3>
			<h4>{{__('Post a Job Today')}}</h4>
        </div>
		<div class="viewallbtn"><a href="{{route('register')}}">{{__('Post a Job')}}</a></div>
		</div>		
</div>
@endif