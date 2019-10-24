<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">

@include('header')
<div class="d-flex">
    @include('main.sideBar')
    <div class="container">


<div class="w3-bar w3-black">
  <button class="btn btn-outline-primary" onclick="openCity('Alumnos')">Alumnos</button>
  <button class="btn btn-outline-primary" onclick="openCity('Paris')">Paris</button>
  <button class="btn btn-outline-primary" onclick="openCity('Tokyo')">Tokyo</button>
</div>

<div id="Alumnos" class="w3-container view">
  <iframe class="frameview" src="{{ url('/Alumnos') }}" frameborder="0"></iframe>
</div>

<div id="Paris" class="w3-container view" style="display:none">
  <h2>Paris</h2>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="w3-container view" style="display:none">
  <h2>Tokyo</h2>
  <p>Tokyo is the capital of Japan.</p>
</div>


    </div>
</div>
<script>
function openCity(viewName) {
  var i;
  var x = document.getElementsByClassName("view");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(viewName).style.display = "block";  
}
</script>