<form method='POST' action='/threads/{{ $thread->id }}/comment'>
    {{ csrf_field() }}
    <fieldset>
        <label for='text'>
            New Comment:(191 character limit)
            <textarea autocomplete='off' name='text' id='text' rows='3', cols='45'>{{ old('text') }}</textarea>
        </label>
    </fieldset>
    <button type='submit' class='btn btn-primary'>Submit</button>
</form>