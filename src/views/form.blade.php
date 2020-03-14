
<h3>Contact Us</h3>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
@if (isset($contactus))
    <form method="POST" action="/contactus/{{ $contactus->id }}">
        @method('PUT')
@else
    <form method="POST" action="/contactus">
@endif 

    @csrf
    Name: <input type='text' name='name' value='{{ isset($contactus) ? $contactus->name : "" }}' /><br />
    Email: <input type='text' name='email' value='{{ isset($contactus) ? $contactus->email : "" }}' /><br />
    Message: <textarea name='message'>{{ isset($contactus) ? $contactus->message : "" }}</textarea><br />
    <input type='submit' value="Submit" name='submit' />

    <br /><br />
    <a href="/contactus">Show all</a>
</form>