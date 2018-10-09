<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript"> 
$(document).ready(function() {
    var strNewString = $('body').html().replace(/\On hold/g,'Processing');
    $('body').html(strNewString);
});

</script>
