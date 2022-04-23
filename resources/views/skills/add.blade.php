@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Skill</h2>

    <form method="post" action="{{url('')}}/console/skills/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="skill_name">skill_name:</label>
            <input type="title" name="skill_name" id="skill_name" value="{{old('skill_name')}}" required>
            
            @if ($errors->first('skill_name'))
                <br>
                <span class="w3-text-red">{{$errors->first('skill_name')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="url">skill_url:</label>
            <input type="url" name="skill_url" id="skill_url" value="{{old('skill_url')}}">

            @if ($errors->first('skill_url'))
                <br>
                <span class="w3-text-red">{{$errors->first('skill_url')}}</span>
            @endif
        </div>

       
      

     

        <button type="submit" class="w3-button w3-green">Add Skill</button>

    </form>

    <a href="{{url('')}}/console/skills/list">Back to Skill List</a>

</section>

@endsection