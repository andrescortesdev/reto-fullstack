@if(session('success'))
    <div class="card text-white bg-success text-xs-center mt-2">
        <p class="p-2 m-0">
            {{ session('success') }}
        </p>
    </div>
@elseif(session('danger'))
    <div class="card text-white bg-danger text-xs-center mt-2">
        <p class="p-2 m-0">
            {{ session('danger') }}
        </p>
    </div>
@endif
