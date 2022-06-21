
       <div class="wrapper">
        @include('Admin.layouts.header')
        @include('Admin.layouts.sidebar')
        @yield("content")
        @include('Admin.layouts.footer')
      </div>
      <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
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
{{-- for catrgory --}}
<script>
    $("#check_Category").change(function(){
        $(".checkCategory").prop("checked", $(this).prop("checked"))
    })
    $(".checkCategory").change(function(){
        if($(this).prop("checked")==false){
            $("#check_Category").prop("checked",false)
        }
        if($(".checkCategory:checked").length == $(".checkCategory").length){
            $("#check_Category").prop("checked",true)
        }
    })
</script>
{{-- for report --}}
<script>
    $("#check_Report").change(function(){
        $(".checkreport").prop("checked", $(this).prop("checked"))
    })
    $(".checkreport").change(function(){
        if($(this).prop("checked")==false){
            $("#check_Report").prop("checked",false)
        }
        if($(".checkreport:checked").length == $(".checkreport").length){
            $("#check_Report").prop("checked",true)
        }
    })
</script>
{{-- for Settings --}}
<script>
    $("#check_Settings").change(function(){
        $(".checkSettings").prop("checked", $(this).prop("checked"))
    })
    $(".checkSettings").change(function(){
        if($(this).prop("checked")==false){
            $("#check_Settings").prop("checked",false)
        }
        if($(".checkSettings:checked").length == $(".checkSettings").length){
            $("#check_Settings").prop("checked",true)
        }
    })
</script>
{{-- for other --}}
<script>
    $("#check_Others").change(function(){
        $(".checkOthers").prop("checked", $(this).prop("checked"))
    })
    $(".checkOthers").change(function(){
        if($(this).prop("checked")==false){
            $("#check_Others").prop("checked",false)
        }
        if($(".checkOthers:checked").length == $(".checkOthers").length){
            $("#check_Others").prop("checked",true)
        }
    })
</script>
{{-- end for the roll part --}}
{{-- jqery --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js" integrity="sha512-6ORWJX/LrnSjBzwefdNUyLCMTIsGoNP6NftMy2UAm1JBm6PRZCO1d7OHBStWpVFZLO+RerTvqX/Z9mBFfCJZ4A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js" integrity="sha512-6ORWJX/LrnSjBzwefdNUyLCMTIsGoNP6NftMy2UAm1JBm6PRZCO1d7OHBStWpVFZLO+RerTvqX/Z9mBFfCJZ4A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="494d87f974a463bb9b8c55a6-|49" defer=""></script>
{{-- for filter in contact page --}}
<script>
    $(document).ready(function(){
      $("button").click(function(){
        $("#filter").toggle();
      });
    });
    </script>
    {{-- end --}}

