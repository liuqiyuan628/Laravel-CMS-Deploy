@extends ('layout.frontend', ['title' => 'Home'])

@section ('content')

<section class="w3-padding">
        
    <h2 class="w3-text-blue">About Me!</h2>

    <p>
        Quisque felis ex, pellentesque vel elementum eu, bibendum vel massa. Donec id feugiat 
        erat. Aliquam commodo rutrum velit, vitae vestibulum purus ullamcorper vestibulum. Orci 
        varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
    </p>

    <h3>My Skills</h3>

    
    @foreach ($skills as $skill)
    @if ($skill->skill_url)
    <a href="{{$skill->skill_url}}">{{$skill->skill_name}}</a>
    @endif
        @if ($skill->image)
                <div class="w3-container w3-margin-top">
                    <img src="{{asset('laravel/storage/app/public/'.$skill->image)}}" width="200">
                </div>
        @endif
    @endforeach
 
    <h3>My Education History</h3>

    
@foreach ($educations as $education)
<p>College Name: {{$education->college_name}}</p>
<span>Major: {{$education->major}}</span>
<span>GPA: {{$education->GPA}}</span>
<span>Entry Year: {{$education->start_year}}</span>
<span>End Year: {{$education->end_year}}</span>


@endforeach

</section>

<hr>

<section class="w3-padding w3-container">

    <h2 class="w3-text-blue">Projects</h2>

    @foreach ($projects as $project)

        <div class="w3-card w3-margin">

            <div class="w3-container w3-blue">

                <h3>{{$project->title}}</h3>

            </div>
            
            @if ($project->image)
                <div class="w3-container w3-margin-top">
                    <img src="{{asset('laravel/storage/app/public/'.$project->image)}}" width="200">
                </div>
            @endif

            <div class="w3-container w3-padding">

                @if ($project->url)
                    View Project: <a href="{{$project->url}}">{{$project->url}}</a>
                @endif

                <p>
                    Posted: {{$project->created_at->format('M j, Y')}}
                    <br>
                    Type: {{$project->type->title}}
                </p>

                <a href="{{url('')}}/project/{{$project->slug}}" class="w3-button w3-green">View Project Details</a>

            </div>
        

        </div>

    @endforeach

</section>

<hr>

<section class="w3-padding">

    <h2 class="w3-text-blue">Contact Me</h2>

    <p>
        Phone: 111.222.3333
        <br>
        Email: <a href="mailto:email@address.com">email@address.com</a>
    </p>

</section>

@endsection
