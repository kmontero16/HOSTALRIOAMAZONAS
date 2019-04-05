<div class="list-group">
<a id="pagHome" class="list-group-item" ><i class="fas fa-hotel"></i> HOME</a>
<a id="pagAboutChile" class="list-group-item" ><i class="fas fa-globe-americas"></i> ABOUT CHILE</a>
<a id="pagReservation" class="list-group-item"><i class="fas fa-concierge-bell"></i> RESERVATION</a>
</div>
<script type="text/javascript"> 
    $(document).ready(function() { 
        $("#pagHome").click(function(event) { 
            $("#Contenido").load('<?=URLBASE;?>contenido/HOME.PHP');
        }); 
    }); 
    $(document).ready(function() { 
        $("#pagAboutChile").click(function(event) { 
            $("#Contenido").load('<?=URLBASE;?>contenido/ABOUTCHILE.PHP');
        }); 
    }); 
    $(document).ready(function() { 
        $("#pagReservation").click(function(event) { 
            $("#Contenido").load('<?=URLBASE;?>contenido/RESERVATION.PHP');
        }); 
    }); 
</script>