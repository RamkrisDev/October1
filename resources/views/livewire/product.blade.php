<div>
    
    Title <input type="text" name="" wire:model='title' id="">
    <br>
    Name: <input type="text" wire:model='name' name="" id="">

    <hr>
    <h1>Title:{{$title}}</h1>
    <h2>Name:{{$name}}</h2>

    <h3>Lifecycle:</h3>
    @foreach ($infos as $info)
        <h1>{{$info}}</h1>
    @endforeach
</div>
