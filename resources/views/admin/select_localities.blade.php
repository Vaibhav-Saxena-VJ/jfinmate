<form action="{{ route('admin.localities.store') }}" method="POST">
    @csrf

    <label>Select up to 3 Localities:</label>
    <select name="localities[]" multiple class="form-control">
        @foreach($localities as $locality)
            <option value="{{ $locality->id }}" 
                @if(in_array($locality->id, $selectedLocalities)) selected @endif>
                {{ $locality->name }}
            </option>
        @endforeach
    </select>

    <button type="submit" class="btn btn-primary mt-2">Save</button>
</form>
