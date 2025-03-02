<button class="btn btn-primary">

    {{$slot}}
</button>

<button {{ $attributes->merge(['class' =>'btn btn-primary']) }}>

</button>