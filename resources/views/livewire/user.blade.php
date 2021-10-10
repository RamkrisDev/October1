<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <h1>users</h1>
    @foreach ($users as $user)
        <li>{{$user->name}}</li>
    @endforeach

    {{$users->links()}}
</div>
<style>
    nav svg{
       height: 20px;
    }
</style>