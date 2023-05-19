
<?php
include("head.php");
?>


<?php
include("marco-right.php");
?>
   
 <div style="float:left; width:60%; margin:60px auto; padding:1vw">
   <div  style="width: 100%;">     
    <div style="width: 100%; height:100%; margin: auto ; display:inline-block;" >
       <div style=" width:100%; height: 100%; top:0; font-size:20px; text-align:center; float:left;">
        	<h1>¿Quién es Kevin Aguilar?</h1>
       		 <hr>
             
          <div id="posteo" style="text-align: left; font-size:0.5vw;">
                Posteado por:  Kevin Aguilar<br>
                Fecha: 2021-08-16 <br>
          </div>
        </div>
    </div>
  </div>
  <div style="width: 100%; height:100%;" >
           <div  style="text-align:justify; font-size: 20px;">
                   <p class="eys-parrafo">Soy Kevin Aguilar, tengo 22 años de edad, nací en la ciudad de Esmeraldas, actualmente soy estudiante de la Universidad Técnica Luis Vargas Torres, estudio la carrera de Ingenieria en Tecnologias de la Información. </p>
                   <p class="eys-parrafo">Siempre me llamo la atención los temas que traten sobre informatica, pese a que la tecnologia va avanzando, cada dia hay algo nuevo que aprender.</p>

   <div id="blog-seccion2"  style="height: 50px;"></div>

    <h2 style="border-bottom: 1px solid green;"> Mis estudios</h2> 
    


                   <p class="eys-parrafo">Mis estudios secundarios los realice en el colegio Maria Auxiliadora, donde seguí la carrera de informatica, se podría decir que fue en esta etapa donde me intereso aprender más sobre el diseño y creación de páginas web.</p>
                   <p class="eys-parrafo">Aprendi a manejar lenguaje de etiquetas en 6to curso y aprendí algunas bases sobre creación de paginas web, para la creación de aplicaciones de escritorio utilizaba el lenguaje de programacion java.</p>
   <div id="blog-seccion3"  style="height: 50px;"></div>

    <h2 style="border-bottom: 1px solid green;"> Mi perfil informático</h2> 
    


                   <p  class="eys-parrafo">Durante mi carrera universitaria he logrado manejar herramientas como c++, VisualStudio, Netbeans y he trabajado con diferentes entornos como Atom, VisualStudio Code, sublime text y otros.</p>
                   <p  class="eys-parrafo">Me gusta mucho aprender sobre temas informaticos, crear paginas web y aprender cada dia algo nuevo sobre la programación, me gustaria aprender a manejar herramientas como phyton y php.</p>
   <div id="blog-seccion4"  style="height: 50px;"></div>

    <h2 style="border-bottom: 1px solid green;"> Mis Hooby</h2> 
    

                   <p   class="eys-parrafo">En mis ratos libres me gusta practicar muchas cosas productivas, como entonar la guitarra, hacer deporte, y siempre trato de aprender cosas nuevas viendo videos tutoriales.</p>
       

                   

               <hr>
               <div style=" bottom: 0; margin-bottom: 0;   width:100%; display: inline-block;" >
                  <div style="width: 40%;  float: left;">
                   <a href="#">&#171;   Previo</a>
                  </div>

                  <div style="width: 40%; float: right; text-align: right;">
                   <a href="apendiendo-cpp">Programa para aprender C++ &#187;</a>
                  </div>

                </div>
           </div>
  </div> 

  </div>




<?php
include("marco-left.php")
?>
 
<script >  

 document.title="Softskill"; 
document.getElementById("foto").src="./images/kevin.jpg";

 document.getElementById("blog-indice").innerHTML="<p><b>Contenido</b></p><hr> <p><a href='#'>inicio</a></p><p><a href='#blog-seccion2'>Estudios</a></p><p><a href='#blog-seccion3'>Conocimiento informático</a></p><p><a href='#blog-seccion4'>Hooby</a></p>";



 document.getElementById("blog-relacionados").innerHTML="<p><b>Temas relacionados:</b></p><hr> <p><a href='eys-stalin.php'>¿Quién es Stalin Francis?</a></p><p><a href='eys-damaris.php'>¿Quién es Damaris Miranda?</a></p> ";
 </script>
 
<?php
include("foot.php")
?>
