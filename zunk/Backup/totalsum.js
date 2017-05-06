
<script>
    $(document).ready(function(){
 
        //iterate through each textboxes and add keyup
        //handler to trigger sum event
        $(".Tested").each(function() {
            $(this).keyup(function(){
                calculatetested();
            });
        });
 
    });
 
    function calculatetested() {
 
        var tested = 0;
        //iterate through each textboxes and add the values
        $(".Tested").each(function() {
 
            //add only if the value is number
            if(!isNaN(this.value) && this.value.length!=0) {
                tested += parseFloat(this.value);
            }
 
        });
 
    $("#id_first_baseline_endline1_tested").html(tested.toFixed(0));
    }
    
</script>