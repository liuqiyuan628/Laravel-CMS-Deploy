@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Educations</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>college_name</th>
            <th>major</th>
            <th>GPA</th>
            <th>start_year</th>
            <th>end_year</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($educations as $education)
            <tr>

                <td>{{$education->college_name}}</td>
                <td>{{$education->major}}</td>
                <td>{{$education->GPA}}</td>
                <td>{{$education->start_year}}</td>
                <td>{{$education->end_year}}</td>

                <td><a href="{{url('')}}/console/educations/edit/{{$education->id}}">Edit</a></td>
                <td><a href="{{url('')}}/console/educations/delete/{{$education->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="{{url('')}}/console/educations/add" class="w3-button w3-green">New Education</a>

</section>

@endsection
