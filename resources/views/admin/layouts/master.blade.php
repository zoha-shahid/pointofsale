
       <div class="wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
        @yield("content")
        @include('admin.layouts.footer')
      </div>
{{-- jqurey for the select all work for add role page --}}
<script>
    $("#check_all").change(function(){
        $(".checkitem").prop("checked", $(this).prop("checked"))
    })
    $(".checkitem").change(function(){
        if($(this).prop("checked")==false){
            $("#check_all").prop("checked",false)
        }
        if($(".checkitem:checked").length == $(".checkitem").length){
            $("#check_all").prop("checked",true)
        }
    })
</script>
{{-- for user  --}}
<script>
    $("#check_it").change(function(){
        $(".check").prop("checked", $(this).prop("checked"))
    })
    $(".check").change(function(){
        if($(this).prop("checked")==false){
            $("#check_it").prop("checked",false)
        }
        if($(".check:checked").length == $(".check").length){
            $("#check_it").prop("checked",true)
        }
    })
</script>

{{-- for product --}}
<script>
    $("#check_product").change(function(){
        $(".checkpro").prop("checked", $(this).prop("checked"))
    })
    $(".checkpro").change(function(){
        if($(this).prop("checked")==false){
            $("#check_product").prop("checked",false)
        }
        if($(".checkpro:checked").length == $(".check").length){
            $("#check_product").prop("checked",true)
        }
    })
</script>
{{-- for pos --}}

<script>
    $("#check_pos").change(function(){
        $(".checkposnow").prop("checked", $(this).prop("checked"))
    })
    $(".checkposnow").change(function(){
        if($(this).prop("checked")==false){
            $("#check_pos").prop("checked",false)
        }
        if($(".checkposnow:checked").length == $(".checkposnow").length){
            $("#check_pos").prop("checked",true)
        }
    })
</script>
{{-- for cashregister --}}

<script>
    $("#check_Cash").change(function(){
        $(".checkcash").prop("checked", $(this).prop("checked"))
    })
    $(".checkcash").change(function(){
        if($(this).prop("checked")==false){
            $("#check_Cash").prop("checked",false)
        }
        if($(".checkcash:checked").length == $(".checkcash").length){
            $("#check_Cash").prop("checked",true)
        }
    })
</script>

{{-- for brand --}}
<script>
    $("#check_brand").change(function(){
        $(".checkbrand").prop("checked", $(this).prop("checked"))
    })
    $(".checkbrand").change(function(){
        if($(this).prop("checked")==false){
            $("#check_brand").prop("checked",false)
        }
        if($(".checkbrand:checked").length == $(".checkcash").length){
            $("#check_brand").prop("checked",true)
        }
    })
</script>
{{-- for taxRate --}}
<script>
    $("#check_Rate").change(function(){
        $(".checkRate").prop("checked", $(this).prop("checked"))
    })
    $(".checkRate").change(function(){
        if($(this).prop("checked")==false){
            $("#check_Rate").prop("checked",false)
        }
        if($(".checkRate:checked").length == $(".checkRate").length){
            $("#check_Rate").prop("checked",true)
        }
    })
</script>
{{-- for unit --}}
<script>
    $("#check_unit").change(function(){
        $(".checkunit").prop("checked", $(this).prop("checked"))
    })
    $(".checkunit").change(function(){
        if($(this).prop("checked")==false){
            $("#check_unit").prop("checked",false)
        }
        if($(".checkunit:checked").length == $(".checkunit").length){
            $("#check_unit").prop("checked",true)
        }
    })
</script>
{{-- end for the roll part --}}
