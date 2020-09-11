@extends('layouts.app', ['activePage' => 'eva', 'titlePage' => __('Evaluacion -> Realizar evaluacion')])

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
      	 <div class="col-md-12">
			
      		<div class="card card-nav-tabs text-center">
				  <div class="card-header card-header-primary">
				    {{$entidad->name}} - {{$regulacion->name}}
				  </div>
				  <div class="card-body">
				  	<h2 class="card-title">{{$requisito->item}}</h2>
    				<h4 class="card-text">{{$conexion->question}}</h4>
				    
    				<form action="send" method="POST">
			              @csrf

			              	<div class="form-group">
			        		   <input type="hidden" class="form-control" name="evaluacion" value="{{$evaluacion->id}}">
			        		</div>

			        		<div class="form-group">
			        		   <input type="hidden" class="form-control" name="ejecucion" value="{{$ejecucion->id}}">
			        		</div>

			                <div class="form-group col-md-12">
			                  <label for="inputState1">Nivel de madurez</label>
			                  <select id="inputState1" name="madurez" class="form-control">
			                    <option selected>Seleccionar</option>
			                    <option value="1">1</option>
			                    <option value="2">2</option>
			                    <option value="3">3</option>
			                    <option value="4">4</option>
			                    <option value="5">5</option>
			                  </select>
			                </div>

			                <button type="submit" class="btn btn-success">Siguiente</button>
			              </form>

			       <br>
			       <div class="table-responsive">
			              <table class="table">
			                <thead class=" text-primary">
			                  <th>
			                    Nivel de madurez
			                  </th>
			                  <th>
			                    Descripcion
			                  </th>
			                </thead>
			                <tbody>
			                  <tr>
			                    <td>
			                     1 - Incial 
			                    </td>
			                    <td>
			                     En el nivel de madurez 1, los procesos suelen ser ad hoc y caótico. La organización normalmente no proporciona un entorno estable. El éxito de estas organizaciones dependen de la competencia y de la disposición de las personas de la organización y no en el uso de procesos probados.
								 Las organizaciones con un nivel de madurez 1 a menudo se producen los productos y servicios que funcionan; sin embargo, frecuentemente exceden el presupuesto y el calendario de sus proyectos.
								 Las organizaciones con un nivel de madurez 1 se caracterizan por una tendencia a cometer, abandonar los procesos en el momento de la crisis, y no ser capaz de repetir sus éxitos pasados.
			                    </td>
			                   </tr>

			                   <tr>
			                    <td>
			                     2 - Administrado 
			                    </td>
			                    <td>
			                     En el nivel de madurez 2, la organización ha logrado todos los objetivos genéricos y específicos del nivel de madurez 2 áreas de proceso. En otras palabras, los proyectos de la organización han asegurado que los requisitos son gestionados y de que los procesos se planifican, realizan, medido y controlado. La disciplina de los procesos reflejados por nivel de madurez 2 ayuda a garantizar que se conserven las prácticas existentes en los momentos de estrés. Cuando estas prácticas están en su lugar, los proyectos se realizan y administran conforme a sus planes documentados correspondientes. En el nivel de madurez 2, los requisitos, los procesos, los productos de trabajo, y los servicios son administrados. El estado de los productos de trabajo y la prestación de servicios son visibles a la gestión en puntos definidos. Los compromisos establecidos entre las partes interesadas y son revisados en la medida necesaria. Productos de Trabajo son objeto de examen con las partes interesadas y están controlados. Los productos de trabajo y servicios satisfacen sus requisitos especificados, las normas y objetivos.
			                    </td>
			                   </tr>

			                   <tr>
			                    <td>
			                     3 - Definido 
			                    </td>
			                    <td>
			                     En el nivel de madurez 3, la organización ha alcanzado todos los objetivos específicos y de las áreas de proceso asignadas a los niveles de madurez 2 y 3. En el nivel de madurez 3, los procesos están bien caracterizados y entendidos, y se describen en las normas, procedimientos, herramientas y métodos. Una diferencia fundamental entre el nivel de madurez 2 y el nivel de madurez 3 es el ámbito de los estándares, las descripciones de los procesos y procedimientos. En el nivel de madurez 2, los estándares, las descripciones de los procesos y los procedimientos pueden ser bastante diferentes en cada una de las instancias específicas del proceso (por ejemplo, en un proyecto en particular). En el nivel de madurez 3, los estándares, las descripciones de los procesos y procedimientos de un proyecto se diseñan a partir del conjunto de procesos estándar de la organización para adaptarse a un determinado proyecto o unidad organizativa. El conjunto de procesos estándar de la organización incluye los procesos abordados en el nivel de madurez 2 y el nivel de madurez 3. Como resultado de ello, los procesos que se llevan a cabo en toda la organización son compatibles excepto por las diferencias de la sastrería. Otra diferencia fundamental es que en el nivel de madurez 3, los procesos son normalmente se describe con más detalle y más rigurosa que en el nivel de madurez 2. En el nivel de madurez 3, los procesos son gestionados de manera más proactiva, usando la comprensión de las relaciones de las actividades del proceso y las medidas detalladas del proceso, sus productos de trabajo y sus servicios.
			                    </td>
			                   </tr>

			                   <tr>
			                    <td>
			                     4 - Administrado cuantitativamente 
			                    </td>
			                    <td>
			                     En el nivel de madurez 4, una organización ha logrado todos los objetivos específicos de las áreas de proceso asignadas a los niveles de madurez 2, 3 y 4 y los objetivos genéricos asignados a los niveles de madurez 2 y 3. En el nivel de madurez 4, se seleccionan los que contribuyen de forma significativa al rendimiento del proceso en general. Estos sub-procesos están controlados mediante técnicas estadísticas y otras técnicas cuantitativas. Objetivos cuantitativos de calidad y rendimiento de los procesos se establecen y se utilizan como criterios para la gestión de procesos. Los objetivos cuantitativos se basan en las necesidades del cliente, los usuarios finales, la organización, y los responsables de la implementación de los procesos. Calidad y rendimiento de los procesos se entienden en términos estadísticos y se administran a lo largo de la vida de los procesos. Para estos procesos, las medidas detalladas del rendimiento de los procesos son recogidos y analizados estadísticamente. Causas Especiales de variación de procesos se identifican y, en su caso, las fuentes de causas especiales están corregidos para evitar que se repita en el futuro. Calidad y rendimiento de los procesos se hayan incorporado las medidas en la organización del repositorio a medida soporte de toma de decisiones basadas en el futuro. Una diferencia fundamental entre el nivel de madurez 3 y el nivel de madurez 4 es el grado de previsibilidad del rendimiento de los procesos. En el nivel de madurez 4, el rendimiento de los procesos se controla mediante técnicas estadísticas y otras técnicas cuantitativas, por lo que es previsible cuantitativamente hablando. En el nivel de madurez 3, los procesos son sólo cualitativamente predecibles.
			                    </td>
			                   </tr>
			                    

			                   <tr>
			                    <td>
			                     5 - Optimizado
			                    </td>
			                    <td>
			                     En el nivel de madurez 5, una organización ha logrado todos los goalsof el proceso zonas asignadas a los niveles de madurez 2, 3, 4 y 5, y los objetivos genéricos asignados a los niveles de madurez 2 y 3. Mejorar continuamente los procesos se basa en una comprensión cuantitativa de las causas comunes de variación inherentes a los procesos. Este nivel se centra en mejora continua del rendimiento de los procesos a través de los aumentos y mejoras tecnológicas innovadoras. Los objetivos cuantitativos de mejora de procesos para la organización se establecen y se revisan de forma continua a fin de reflejar los cambios objetivos de negocio, y se utilizan como criterios para la administración de la mejora de procesos. Los efectos de las mejoras implementadas en los procesos se miden y evalúan en relación con los objetivos cuantitativos de mejora de procesos. Tanto los procesos definidos como el conjunto de procesos estándar de la organización son objetivos para las actividades de mejora considerables. Optimización de los procesos ágiles e innovadores, depende de la participación de un personal capacitado y alineado con los valores y objetivos empresariales de la organización. La capacidad de la organización para responder con rapidez a los cambios y oportunidades se mejora mediante la búsqueda de formas para compartir y fomentar el aprendizaje. Mejora de los procesos es, inherentemente, un papel que todo el mundo tiene que jugar, lo que se traduce en un ciclo de mejora continua. Una diferencia fundamental entre el nivel de madurez 4 y el nivel de madurez 5 es el tipo de variación de procesos. En el nivel de madurez 4, los procesos se encargan de causas especiales de variación de procesos y proporcionan estadísticas para prever los resultados. A pesar de que los procesos pueden producir resultados previsibles, los resultados pueden no ser suficientes para alcanzar los objetivos establecidos. En el nivel de madurez 5, los procesos se encargan de causas comunes de la variación de procesos y el cambio de los procesos (es decir, el cambio del medio de rendimiento del proceso) para mejorar el rendimiento (al mismo tiempo que mantiene estadísticas para prever) para alcanzar los objetivos cuantitativos de mejora de procesos.
			                    </td>
			                   </tr>
			                    
			                </tbody>
			              </table>
			            </div>


                  </div>
			</div>



		  </div>	
		</div>
	</div>
</div>		

@endsection