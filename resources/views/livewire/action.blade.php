<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <button wire:click="addTwoNumbers(2,4)">Sum</button>
    <h1>Total Sum:{{$sum}}</h1>

    <textarea wire:keyup="display($event.target.value)">

    </textarea>
    <textarea wire:keyup.enter="display($event.target.value)">

    </textarea>
    <h1>{{$message}}</h1>
</div>
