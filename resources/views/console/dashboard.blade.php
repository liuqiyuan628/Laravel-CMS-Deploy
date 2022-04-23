@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <ul id="dashboard">
        <li><a href="{{url('')}}/console/projects/list">Manage Projects</a></li>
        <li><a href="{{url('')}}/console/types/list">Manage Types</a></li>
        <li><a href="{{url('')}}/console/users/list">Manage Users</a></li>
        <li><a href="{{url('')}}/console/educations/list">Manage Educations</a></li>
        <li><a href="{{url('')}}/console/skills/list">Manage Skills</a></li>

        <li><a href="{{url('')}}/console/logout">Log Out</a></li>
    </ul>

</section>

@endsection
