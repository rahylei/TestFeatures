<div>
    @switch($seccion)
    @case("home")

        @switch($type)
            @case("carousel")
                Aqui van las opciones del carousel...
                @break
            @case("difusion_universitaria")
                Aqui irian los blogs...
                @break
            $@default
                
        @endswitch

        @break
    @case("module")
        
        @switch($type)
            @case("create")
                Vamos a probar...
                @break
            @case("edit")

                @break
            $@default
                
        @endswitch

        @break
    $@default            
@endswitch
</div>
