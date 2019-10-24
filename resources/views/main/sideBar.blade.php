<link href="{{ asset('css/sideBar.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="{{ asset('js/Bootsrap.js') }}"></script> 
<div class="bg-withe border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">ServEscol 2.0</div>
      <!--Usuario e imagen -->
        <div >
            <img class="rounded-circle" src="http://www.jdevoto.cl/web/wp-content/uploads/2018/04/default-user-img.jpg" alt="">
            <label for="">Nombre de usuario</label>
        </div>
        <!-- Busqueda -->
        <hr>
        <div class="sidebar-heading collapsible"> <i class="material-icons">find_in_page</i>Buscar Opcion</div>
        <div class="content">
        <i class="material-icons">search</i><input type="text">
        <li class="text-secondary">buscado</li>
        </div>
        <!-- Favoritos -->
        <div>
            <hr>
            <div class="sidebar-heading collapsible"> <i class="material-icons">star</i>Favoritos</div>
            
            <div class="content">
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action bg-withe collapsible" ><i class="material-icons">expand_more</i> Alumnos</a>
                <div class="content" >
                    <a class="list-group-item list-group-item-action">Activos</a>
                    <a class="list-group-item list-group-item-action">Inscritos</a>
                    <a class="list-group-item list-group-item-action">Inactivos</a>
                </div>
            </div>
            </div>
        </div>

      <!--Menu general-->
      <hr>
      <div class="sidebar-heading collapsible"> <i class="material-icons">apps</i>Opciones</div>
      <div class="content">
      <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action bg-withe collapsible" ><i class="material-icons">expand_more</i> Alumnos</a>
            <div class="content" >
                <a class="list-group-item list-group-item-action">Activos</a>
                <a class="list-group-item list-group-item-action">Inscritos</a>
                <a class="list-group-item list-group-item-action">Inactivos</a>
            </div>
            <a class="list-group-item list-group-item-action bg-withe collapsible" ><i class="material-icons">expand_more</i> Profesores  </a>
            <div class="content" >
                <a class="list-group-item list-group-item-action">Activos</a>
                <a class="list-group-item list-group-item-action">Inscritos</a>
                <a class="list-group-item list-group-item-action">Inactivos</a>
            </div>
            <a class="list-group-item list-group-item-action bg-withe collapsible" ><i class="material-icons">expand_more</i>Cursos  </a>
            <div class="content" >
                <a class="list-group-item list-group-item-action">Activos</a>
                <a class="list-group-item list-group-item-action">Inscritos</a>
                <a class="list-group-item list-group-item-action">Inactivos</a>
            </div>
            <a class="list-group-item list-group-item-action bg-withe collapsible" ><i class="material-icons">expand_more</i>Calificaciones  </a>
            <div class="content" >
                <a class="list-group-item list-group-item-action">Activos</a>
                <a class="list-group-item list-group-item-action">Inscritos</a>
                <a class="list-group-item list-group-item-action">Inactivos</a>
            </div>
            <a class="list-group-item list-group-item-action bg-withe collapsible" ><i class="material-icons">expand_more</i>Salones  </a>
            <div class="content" >
                <a class="list-group-item list-group-item-action">Activos</a>
                <a class="list-group-item list-group-item-action">Inscritos</a>
                <a class="list-group-item list-group-item-action">Inactivos</a>
            </div>
        
        <a class="list-group-item list-group-item-action bg-withe collapsible" ><i class="material-icons">expand_more</i>Periodos  </a>
            <div class="content" >
                <a class="list-group-item list-group-item-action">Activos</a>
                <a class="list-group-item list-group-item-action">Inscritos</a>
                <a class="list-group-item list-group-item-action">Inactivos</a>
            </div>
            <a class="list-group-item list-group-item-action bg-withe collapsible" ><i class="material-icons">expand_more</i>Inscripciones  </a>
            <div class="content" >
                <a class="list-group-item list-group-item-action">Activos</a>
                <a class="list-group-item list-group-item-action">Inscritos</a>
                <a class="list-group-item list-group-item-action">Inactivos</a>
            </div>
        </div>
      </div>
</div>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>