@if ($message = session('success'))
    <div class="alert" role="alert" style="background-color: #26f160; border: 1px solid #a5e1b5; color: #10391f;">
        {{ $message }}
    </div>
@elseif ($message = session('error'))
    <div class="alert" role="alert" style="background-color: #a92e2e; border: 1px solid #eb5353; color: #f80505;">
        {{ $message }}
    </div>
@endif

@if ($errors->any())
    <div class="alert" role="alert" style="background-color: #896310; border: 1px solid #d2a00c; color: #b4a500;">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
