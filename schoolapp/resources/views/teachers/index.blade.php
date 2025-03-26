<h1>Docenten en hun vakken</h1>
@foreach($teachers as $teacher)
    <h2>{{ $teacher->name }}</h2>
    <p>Hobby's: {{ $teacher->hobbies }}</p>
    <ul>
        @foreach($teacher->subjects as $subject)
            <li>{{ $subject->name }}</li>
        @endforeach
    </ul>
@endforeach
