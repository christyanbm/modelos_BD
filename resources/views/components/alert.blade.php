@if ($message = session('success'))
    <div class="alert alert-success" >
        {{ $message }}
    </div>
@elseif ($message = session('error'))
    <div class="alert alert-danger">
        {{ $message }}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
