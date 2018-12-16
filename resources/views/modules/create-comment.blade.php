<form method='POST' action='/threads/{{ $thread->id }}/comment'>
    {{ csrf_field() }}
    <fieldset>
        <label for='text'>
            Text:*
            <textarea autocomplete='off' name='text' id='text'>
                {{ old('text') }}
            </textarea>
        </label>
    </fieldset>
    <button type='submit'>Submit</button>
</form>