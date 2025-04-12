@extends('layouts.frontend')

@section('content')
<div class="events_section layout_padding">
    <div class="container">
       <div class="row">
          <div class="col-sm-12">
             <h1 class="news_taital">FEATURED CAUSE</h1>
             <p class="news_text">going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
          </div>
       </div>
       @foreach($projects as $project)
       <div class="events_section_2">
          <div class="row">
             <div class="col-md-5">
                <div class="img_7">
                    @if($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" class="img_7">
                    @else
                        <img src="{{ asset('frontend/images/img-7.png') }}" class="img_7">
                    @endif
                </div>
                <div class="date_bt">
                   <div class="date_text active"><a href="#">{{ \Carbon\Carbon::parse($project->start_date)->format('d') }}</a></div>
                   <div class="date_text"><a href="#">{{ \Carbon\Carbon::parse($project->start_date)->format('M') }}</a></div>
                </div>
             </div>
             <div class="col-md-7">
                <h1 class="give_taital_1">{{ $project->name }}</h1>
                <p class="ipsum_text_1">{{ Str::limit($project->description, 200) }}</p>
                <h5 class="raised_text_1">Raised: RS.{{ number_format($project->current_amount, 2) }} <span class="goal_text">Goal: RS.{{ number_format($project->target_amount, 2) }}</span></h5>
                <div class="donate_btn_main">
                   <div class="readmore_btn"><a href="#">Read More</a></div>
                   <div class="readmore_btn_1">
                    <a href="{{ route('frontend.donate', $project->project_id) }}">Donate Now</a>

                   </div>
                </div>
             </div>
          </div>
       </div>
       @endforeach
       {{-- <div class="events_section_2">
          <div class="row">
             <div class="col-md-5">
                <div class="img_7"><img src="{{ asset('frontend/images/img-8.png') }}" class="img_7"></div>
                <div class="date_bt">
                   <div class="date_text active"><a href="#">10</a></div>
                   <div class="date_text"><a href="#">FEB</a></div>
                </div>
             </div>
             <div class="col-md-7">
                <h1 class="give_taital_1">The Internet tend to repeat</h1>
                <p class="ipsum_text_1">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literatureContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                <h5 class="raised_text_1">Raised: $60,010     <span class="goal_text">Goal: $70,000</span></h5>
                <div class="donate_btn_main">
                   <div class="readmore_btn"><a href="#">Read More</a></div>
                   <div class="readmore_btn_1"><a href="donate.html">Donate Now</a></div>
                </div>
             </div>
          </div>
       </div> --}}
    </div>
 </div>
@endsection
