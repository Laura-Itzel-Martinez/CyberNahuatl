@extends('layouts.plantilla2')

@section('content')
<span><p ><h1 class="display-1">Animales</h1></p></span>

<div class="contenedor">
	<div class="contenedor_tarjeta">
		<a href="javascript:void(0);">
            <h2> kwawtli </h2>
			<figure>
				<img src="{{asset('img/animales/aguila.jpg')}}"  class="frontal">
				<figcaption class="trasera">
					<h2 class="titulo">
						Águila
					</h2>
					<hr>
					<p class="parrafo">
						Las aguilas son animales carnívoros. Suelen vivir cerca del agua, ya que muchas se alimentan principalmente de peces
                         (como el salmón y la trucha) También se alimentan de reptiles, pequeños mamíferos como conejos, perezosos, zarigueyas,
                          zorros, etc. y pequeñas aves como lechuzas.
					</p>
				</figcaption>		
			</figure>
            <h2> Águila</h2>
		</a>
	</div>

	<div class="contenedor_tarjeta">
		<a href="javascript:void(0);">
            <h2> Sipaktle</h2>
			<figure>
                <img src="{{asset('img/animales/cocodrilo.jpg')}}"  class="frontal">
				<figcaption class="trasera">
					<h2 class="titulo">
						 Cocodrilo
					</h2>
					<hr>
					<p class="parrafo">
						Un animal cuya imagen provoca gran miedo, respeto y admiración es el cocodrilo, debido a
                        su imponente físico y a su gran mandíbula. Aunque parezcan animales lentos, son realmente
                        aterradores y lo cierto es que se cobran algunas vidas allí donde habitan, gracias a su capacidad para cambiar de hábitats.
					</p>
				</figcaption>		
			</figure>
            <h2>Cocodrilo</h2>
		</a>
	</div>

	<div class="contenedor_tarjeta">
		<a href="javascript:void(0);">
            <h2> kowatl </h2>
			<figure>
                <img src="{{asset('img/animales/serpiente.jpg')}}"  class="frontal">
				<figcaption class="trasera">
					<h2 class="titulo">
						Serpientes
					</h2>
					<hr>
					<p class="parrafo">
						Las serpientes, también llamadas ofidios, son reptiles vertebrados longiformes que no tienen patas y 
                        poseen un cuerpo muy alargado. Pertenecen a la clase Reptilia y al orden Squamata, que también comprende
                         a los lagartos. Digamos que son las primas son patas de todos ellos.
					</p>
				</figcaption>		
			</figure>
            <h2> Serpiente </h2>
		</a>
	</div>
<div>---------------------------------------------------------------------------------------------------------------------------------------------------</div>
	<div class="contenedor_tarjeta">
		<a href="javascript:void(0);">
            <h2> Tuchtle </h2>
			<figure>
                <img src="{{asset('img/animales/conejo.jpg')}}"  class="frontal">
				<figcaption class="trasera">
					<h2 class="titulo">
						Conejo
					</h2>
					<hr>
					<p class="parrafo">
						Pesa entre 1,5 y 2,5 kg en estado salvaje. Tiene orejas largas de hasta 7 cm las cuales le ayudan 
                        a regular la temperatura del cuerpo y una cola muy corta. Sus patas anteriores son más cortas 
                        que las posteriores. Mide de 33 a 50 cm en condiciones afables, incluso más en razas domésticas para carne.
					</p>
				</figcaption>		
			</figure>
            <h2> Conejo </h2>
		</a>
	</div>

	<div class="contenedor_tarjeta">
		<a href="javascript:void(0);">
            <h2> Chapolle </h2>
			<figure>
                <img src="{{asset('img/animales/chapulin.jpg')}}"  class="frontal">
				<figcaption class="trasera">
					<h2 class="titulo">
						Chapulin
					</h2>
					<hr>
					<p class="parrafo">
						son generalmente insectos alargados con alas delgadas y apergaminadas. Pero también hay 
                        chapulines con alas largas, membranosas que son capaces de volar. Las piezas bucales del 
                        chapulín son masticadoras. Sus patas traseras son grandes y están adaptadas para saltar.
					</p>
				</figcaption>		
			</figure>
            <h2> Chapulin </h2>
		</a>
	</div>

	<div class="contenedor_tarjeta">
		<a href="javascript:void(0);">
            <h2> Kwetlachtle  </h2>
			<figure>
                <img src="{{asset('img/animales/aguila.jpg')}}"  class="frontal">
				<figcaption class="trasera">
					<h2 class="titulo">
						Lobo
					</h2>
					<hr>
					<p class="parrafo">
						Son animales cuadrúpedos, mamíferos, con cuerpos de entre 60 y 90 cm de alto y un peso de entre 32 y
                         70 kg. Suelen medir entre 1,30 y 2 metros de largo. Poseen una cola larga, y no son, en principio, 
                         demasiado diferentes anatómicamente de un perro
					</p>
				</figcaption>		
			</figure>
            <h2> Lobo </h2>
		</a>
	</div>
</div>
@endsection