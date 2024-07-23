<div class="container">
    <h3>counter</h3>
    <h5>{{$count}}</h5>
    <button class="btn btn-primary" wire:click="increment">+</button>
    <button class="btn btn-secondary" wire:click="decrement">-</button>
    <button class="btn btn-danger" wire:click="zero">X</button>
    <br>
    <br> 

    <form wire:submit.prevent="add">

        <input type="number" wire:model="somma">
        <button class="btn btn-primary" type="submit">Somma</button>

    </form>

<br>

    <form wire:submit.prevent="subtract">

        <input type="number" wire:model="sottrai">
        <button class="btn btn-primary" type="submit">Sottrai</button>

    </form>
    
</div>
    



