@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Education</h2>

    <form method="post" action="{{url('')}}/console/educations/edit/{{$education->id}}" novalidate class="w3-margin-bottom">

    @csrf

<div class="w3-margin-bottom">
    <label for="college_name">college_name:</label>
    <input type="title" name="college_name" id="college_name" value="{{old('college_name', $education->college_name)}}" required>
    
    @if ($errors->first('college_name'))
        <br>
        <span class="w3-text-red">{{$errors->first('college_name')}}</span>
    @endif
</div>

<div class="w3-margin-bottom">
    <label for="major">Major:</label>
    <input type="url" name="major" id="major" value="{{old('major',$education->major)}}">

    @if ($errors->first('major'))
        <br>
        <span class="w3-text-red">{{$errors->first('major')}}</span>
    @endif
</div>

<div class="w3-margin-bottom">
    <label for="GPA">GPA:</label>
    <input type="number" name="GPA" id="GPA" step=".01" value="{{old('GPA',$education->GPA)}}" required>

    @if ($errors->first('GPA'))
        <br>
        <span class="w3-text-red">{{$errors->first('GPA')}}</span>
    @endif
</div>


<div class="w3-margin-bottom">
    <label for="start_year">start_year:</label>
    <input type="date" name="start_year" id="start_year" value="{{old('start_year',$education->start_year)}}" required>

    @if ($errors->first('start_year'))
        <br>
        <span class="w3-text-red">{{$errors->first('start_year')}}</span>
    @endif
</div>

<div class="w3-margin-bottom">
    <label for="end_year">end_year:</label>
    <input type="date" name="end_year" id="end_year" value="{{old('end_year',$education->end_year)}}" required>

    @if ($errors->first('end_year'))
        <br>
        <span class="w3-text-red">{{$errors->first('end_year')}}</span>
    @endif
</div>

        <button type="submit" class="w3-button w3-green">Edit Education</button>

    </form>

    <a href="{{url('')}}/console/educations/list">Back to Education List</a>

</section>

@endsection
