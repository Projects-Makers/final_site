<style>
    .container{
        position: relative;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 8px;
        padding: 10px;
    }

    .grid{
        display: relative;
        background-color: white;
        width: 200px;
        height:300px;
        border-radius: 20px;
        border: black 2px solid;
    }

    .grid img{
        background-size: cover; 
        background-repeat: no-repeat;
        border-top-left-radius: 19px;
        border-top-right-radius: 19px;

        
    }


</style>

<section>
<?php
include("php/sidebar.php");
?>

<div class="container">
    <div class="grid">
        <img src="test/1.jpg" alt="test">
    </div>
    <div class="grid">
a
    </div>
    <div class="grid">
a
    </div>
    <div class="grid">
a
    </div>
    <div class="grid">
a
    </div>
    <div class="grid">
a
    </div>
    <div class="grid">
a
    </div>
    <div class="grid">
a
    </div>
    <div class="grid">
a
    </div>

    
</div>


<div class="trzymacz">
    
   
    
 
    <div id="map" style="width: 100%; height: 600px;"><img src="pic/mapa.png" width="auto" height="auto" id="clickable-image"></div>
    
</div>
</section>
