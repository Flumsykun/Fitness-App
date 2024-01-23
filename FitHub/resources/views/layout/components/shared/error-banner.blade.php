@if($errors->any())
    <div class="bg-red-500 text-white p-4">
        <ul class="list-disc">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

@elseif(session()->has('success'))
    <div class="bg-green-500 text-white p-4">
        {{session()->get('success')}}
    </div>

@endif
