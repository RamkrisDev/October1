<div>
  Name: <input type="text" wire:model="name">
  <br>
 Message: <textarea wire:model='detail' id="" cols="30" rows="10"></textarea>
 <br>
 Gender:
 Male: <input type="radio" value="Male" wire:model="gender">
 Female: <input type="radio" value="Female" wire:model="gender">
 <br>
 Colors:
 Red: <input type="checkbox" value='red' wire:model='colors'>
 Green: <input type="checkbox" value='green' wire:model='colors'>
 Blue: <input type="checkbox" value='blue' wire:model='colors'>
 <br>
 course: 
 <select wire:model="course" id="">
     <option value="cse">cse</option>
     <option value="ece">ece</option>
     <option value="eee">eee</option>
     <option value="mech">mech</option>
 </select>
  <hr>
  <h1>Name:{{$name}}</h1>
  <h1>Detail:{{$detail}}</h1>
  <h1>Gender:{{$gender}}</h1>
  <h1>Color</h1>
  <ul>
      @foreach ($colors as $color)
          <li>{{$color}}</li>
      @endforeach
  </ul>
  <h1>Course:{{$course}}</h1>
</div>
