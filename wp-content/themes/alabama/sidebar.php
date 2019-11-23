<div class="lateral">
<?php if(is_singular('cursos')){
	$estadocurso = tax2links2(get_the_id(),'estadocurso');
	
			if(isset($estadocurso) and $estadocurso != "" and $estadocurso == 'Inscripciones Abiertas ') { 
				echo '<div class="formcurso">';
				echo do_shortcode('[contact-form-7 id="102" title="Formulario de Inscripcion"]');
				echo '</div>';
			}
}
?>
	<div  class="fb-page" data-href="https://www.facebook.com/Colegio-de-Estad%C3%ADsticos-del-Paraguay-102434953228022/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Colegio-de-Estad%C3%ADsticos-del-Paraguay-102434953228022/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Colegio-de-Estad%C3%ADsticos-del-Paraguay-102434953228022/">Colegio de Estadísticos del Paraguay</a></blockquote></div></div>