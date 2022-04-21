<script src="assets/js/jquery-1.12.4.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/custom.js" type="text/javascript"></script>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
});

$('.popover-dismiss').popover({
  trigger: 'focus'
})
</script>