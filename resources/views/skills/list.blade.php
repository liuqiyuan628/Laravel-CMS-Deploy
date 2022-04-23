@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Skills</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th></th>
            <th>skill_name</th>
            <th>skill_url</th>
            <th>image</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($skills as $skill)
            <tr>
                <td>
                    @if ($skill->image)
                        <img src="{{asset('laravel/storage/app/public/'.$skill->image)}}" width="200">
                    @endif
                </td>
                <td>{{$skill->skill_name}}</td>
                <td>{{$skill->skill_url}}</td>
                <td><a href="{{url('')}}/console/skills/image/{{$skill->id}}">Image</a></td>
                <td><a href="{{url('')}}/console/skills/edit/{{$skill->id}}">Edit</a></td>
                <td><a href="{{url('')}}/console/skills/delete/{{$skill->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="{{url('')}}/console/skills/add" class="w3-button w3-green">New Skill</a>

</section>

@endsection
