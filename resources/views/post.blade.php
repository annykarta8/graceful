<div class="box">
    <div class="list">
        <div class="content">
            @foreach($data as $data)
            <div class="img"><img src='/image/{{ $data->image }}'></div>
            @endforeach
        </div>
    </div>
</div>
