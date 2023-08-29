<div class="container my-5">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @csrf



    <div class="row row-cols-2 mb-3">
        {{-- title --}}
        <div class="col">
            <label for="title" class="form-label">Title</label>
            <input x-model="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                id="title" value="{{ old('title', $comic->title) }}" required>
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- thumbnail --}}
        <div class="col">
            <label for="thumb" class="form-label">Thumbnail</label>
            <input x-model="thumbnail" type="text" class="form-control @error('thumb') is-invalid @enderror"
                name="thumb" id="thumb" required value="{{ old('thumb', $comic->thumb) }}">
            @error('thumb')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        {{-- description --}}
        <div class="col">
            <label for="description">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                cols="30" rows="5" required>{{ old('description', $comic->description) }}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="row row-cols-4 mb-3">
        {{-- price --}}
        <div class="col">
            <label for="price" class="form-label ">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                id="price" max="7" value="{{ old('price', $comic->price) }}">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- series --}}
        <div class="col">
            <label for="series" class="form-label ">Series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                id="series" value="{{ old('series', $comic->series) }}">
            @error('series')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- type --}}
        <div class="col">
            <label for="type" class="form-label ">Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type"
                value="{{ old('type', $comic->type) }}">
        </div>
        {{-- sale_date --}}
        <div class="col">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
                id="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
            @error('sale_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        {{-- artists --}}
        <div class="col">
            <label for="artists">Artists, separated by a comma</label>
            <input type="text" class="form-control" name="artists" id="artists"
                value="{{ old('artists', $comic->artists) }}">
        </div>
    </div>
    {{-- writers --}}
    <div class="row mb-3">
        <div class="col">
            <label for="writers">Writers, separated by a comma</label>
            <input type="text" class="form-control" name="writers" id="writers"
                value="{{ old('writers', $comic->writers) }}">
        </div>
    </div>

    <div class="d-flex justify-content-end mt-5">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>