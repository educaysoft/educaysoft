
<?php
include("head.php");
?>


<?php
include("marco-right.php");
?>
   
 <div style="float:left; width:60%; margin:80px auto; padding:2vw">
   <div  style="width: 100%;">     
    <div style="width: 100%; height:100%; margin: auto ; display:inline-block;" >
       <div style=" width:40vw; height: 100%; top:0; font-size:20px; text-align:center; float:left;">
        	<h1 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">¿Porque y como aprender a programar computadoras?</h1>
        	<img style="width: 10%;" src="./images/cpp.png" alt="cpp"> como primer lenguaje de programación a aprender
       		 <hr>
                <p  style="font-family: 'Alex Brush', arial;font-size: 20px;  text-align:left;"  > Por: Stalin Francis</p>

        </div>
    </div>
  </div>
  <div style="width: 100%; height:100%;" >
    <div >
        <div  style="text-align:justify; font-size: 20px;">
<div id="blog-seccion1"  style="height: 50px;"></div>

 <h2 style="b	order-bottom: 1px solid green;"> ¿El porque aprender a programar?</h2> 
                <p class="eys-parrafo">Hoy en día ya no cabe la menor duda de que muchos de los problemas de la humanidad están siendo resueltos por las principales  empresas TI del mundo como Microsoft &nbsp;<a href="https://www.microsoft.com"><img style="width: 3%;"  src="./images/windows.png" alt="window"></a>, Apple<a href="https://www.apple.com/la/"><img style="width:3%;" src="./images/apple.png" alt="apple"></a>,IBM <a href= "https://www.ibm.com/ec-es"> <img style="width: 5%;" src="./images/ibm.png" alt="ibm"> </a> y otras más, y esto se debe a que cada vez más se hace necesario que las computadoras controlen muchos de los procesos que hasta hace poco eran escasamente  controlados por el hombre.
                <p class="eys-parrafo">Estas máquinas (me refiero a las computadoras), que nacieron primero de un montón de fierros, a los que se bautizó como hardware y cuyo funcionamiento era controlado manualmente por el hombre, han ido ganando autonomía gracias a un conjunto de instrucciones  bautizados como software, donde hasta un tiempo atrás no hacían más que simplemente multiplicar la motricidad humana, por que su tamaño estaba limitado a la capacidad de memoria,  su velocidad a la el hardware que controlaban y su funcionalidad a la imaginación de unos pocos profesionales que eran capaz de plasmaban en un lenguaje máquina de bajo nivel  los pocos movimientos o acciones que el hardware de ese entonces podía realizar como parte de un rutinario trabajo.</p>
		
                <p  class="eys-parrafo"> Hoy en día el desarrollo que se ha logrado en cuanto a hardware, principalmente en lo que se refiere a la capacidad de almacenamiento, transmisión y procesamiento de la información ha creado  una gran brecha entre el hardware y el software  que se hace necesario igualar desarrollando de forma acelerada software básicos y avanzados que puedan aprovechar estos recursos.</p>
		
                <p   class="eys-parrafo"> Ya con esta necesidad los lenguajes de programación han tenido un sustancial desarrollo con miras a lograr que  la programación de las computadoras sea una tarea cada vez más sencilla, natural e intuitiva, a tal punto que se pueda pensar en un futuro donde las computadores puedan auto programarse como lo hace el ser humano, incrementando por si solas sus conocimientos y habilidades para hacer cada vez mejor su trabajo.</p>



<div id="blog-seccion2"  style="height: 50px;"></div>

 <h2 style="border-bottom: 1px solid green;"> ¿Cómo comienzo mi aprendizaje en la  programación?</h2> 
 

                <p  class="eys-parrafo">Si bien es cierto actualmente existen varios lenguajes de programación (C++, C#, PHP, JAVA, JAVASCRIP, CLOSURE, PYTHON, RUBY, etc), lo que hace algunas veces difícil para el que recién inicia, decidir con cual empezar a aprender a programar, ya que de alguna manera  todos permiten hacer casi lo mismo, claro que  con pequeñas ventajas y desventajas.</p>
                <p  class="eys-parrafo">Una estrategia importante a tener en cuenta al momento de elegir un lenguaje para comenzar a aprender a programar un computador es la evolución  que han tenido desde su creación en el intento de adaptarse a las necesidades cambiantes de la sociedad, donde alguno de ellos ya han desaparecido por completo (<a href="https://es.wikipedia.org/wiki/Historia_de_los_lenguajes_de_programaci%C3%B3n">Historia de los lenguajes de programación</a> );  y otros se mantienen con la misma filosofía con la que nacieron; uno de estos lenguajes que aun mantiene su filosofía con la que fue creado es el  lenguajes  C++.  </p>

                <div style="margin:auto; ">
                      <pre class="prettyprint">
                      #include &lt;iostream &gt;
                      using namespace std;
                      int main(int argc, char** argv)
                      {

                          cout &lt; &lt; "Hola mundo. " &lt; &lt; endl;
                          return 0;

                      }
                      </pre>
                </div>

                <p  class="eys-parrafo">Para dar una referencia de porque este lenguaje es tan importante, debemos referirnos a un Sistemas Operativos que cada vez esta tomando más fuerza; Lixux es uno de los sistemas operativos que después de Windows se esta convirtiendo en el más utilizado a nivel mundial  y para quien no lo sabe, este sistema ha sido creado en C++, esta es una razón poderosa por la que considero que este lenguaje es el primer que debe aprenderse a utilizar, al menos si se quiere programar de una forma muy profesional.</p> 
                <div style="   margin:auto; width: 50%;">
                      <img  style="width: 50%;"  src="images/LinuxCPP.png" alt="linux">
                </div>
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

  </div>




<?php
include("marco-left.php")
?>
 
<script >  

 document.title="Stalin Francis"; 
 
 document.getElementById("blog-indice").innerHTML="<p>Contenido</p> <p><a href='#'>inicio</a></p> <p><a href='#blog-seccion1'>Porqué aprender a programar</a></p> <p style='background-color:red;'><a href='#blog-seccion2'>Como empezar a apender a programar</a></p>";

 document.getElementById("blog-relacionados").innerHTML="<p>Temas Relacionados</p> <p><a href='eys-softskill.php'>Softskill</a></p> <p><a href='eys-capacitacion.php'>Capacitación</a></p> <p><a href='eys-kevin.php'>Kevin Aguilar</a></p><p><a href='eys-damaris.php'>Damaris Miranda </a></p>";
 </script>
 
<?php
include("foot.php")
?>
