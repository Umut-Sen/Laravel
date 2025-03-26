<h1>Vakken en hun docenten</h1>
@foreach($subjects as $subject)
    <h2>{{ $subject->name }}</h2>
    <p>{{ $subject->description }}</p>
    <p>Docent: {{ $subject->teacher->name }}</p>
@endforeach
