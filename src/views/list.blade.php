<h3>Submissions</h3>

@foreach ($list as $item)
{{ $item->name }} says {{ $item->message }} <a href="contactus/{{ $item->id }}/edit">edit</a>
    <br />
@endforeach
<br /><br />
<a href="/contactus/create">Contact Us</a>