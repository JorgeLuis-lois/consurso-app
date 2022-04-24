<?php

namespace Database\Seeders;

use App\Models\Alternativas;
use App\Models\Localidad;
use App\Models\Preguntas;
use App\Models\Respuestas;
use App\Models\Temas;
use App\Models\Usuarios;
use App\Models\UsuarioTemas;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
         //tabla Temas
         $temas = new Temas();
         $temas->NOMBRES = 'Actividad física y deporte';
         $temas->DESCRIPCION = '';
         $temas->VALORADICIONAL = 'Salud física nutricional';
         $temas->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas->ESTADO = 'A';
         $temas->save();
 
         $temas2 = new Temas();
         $temas2->NOMBRES = 'Alimentación saludable';
         $temas2->DESCRIPCION = '';
         $temas2->VALORADICIONAL = 'Salud física nutricional';
         $temas2->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas2->ESTADO = 'A';
         $temas2->save();
 
         $temas3 = new Temas();
         $temas3->NOMBRES = 'Higiene';
         $temas3->DESCRIPCION = '';
         $temas3->VALORADICIONAL = 'Salud física nutricional';
         $temas3->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas3->ESTADO = 'A';
         $temas3->save();
 
         $temas4 = new Temas();
         $temas4->NOMBRES = 'Prevención de trastornos posturales';
         $temas4->DESCRIPCION = '';
         $temas4->VALORADICIONAL = 'Salud física nutricional';
         $temas4->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas4->ESTADO = 'A';
         $temas4->save();
 
         $temas5 = new Temas();
         $temas5->NOMBRES = 'Protección solar';
         $temas5->DESCRIPCION = '';
         $temas5->VALORADICIONAL = 'Salud física nutricional';
         $temas5->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas5->ESTADO = 'A';
         $temas5->save();
 
         $temas6 = new Temas();
         $temas6->NOMBRES = 'Salud bucal';
         $temas6->DESCRIPCION = '';
         $temas6->VALORADICIONAL = 'Salud física nutricional';
         $temas6->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas6->ESTADO = 'A';
         $temas6->save();
 
         $temas7 = new Temas();
         $temas7->NOMBRES = 'Salud ocular';
         $temas7->DESCRIPCION = '';
         $temas7->VALORADICIONAL = 'Salud física nutricional';
         $temas7->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas7->ESTADO = 'A';
         $temas7->save();
 
         $temas8 = new Temas();
         $temas8->NOMBRES = 'Cuidado del medio ambiente';
         $temas8->DESCRIPCION = '';
         $temas8->VALORADICIONAL = 'Salud física nutricional';
         $temas8->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas8->ESTADO = 'A';
         $temas8->save();
 
         $temas9 = new Temas();
         $temas9->NOMBRES = 'Medidas de seguridad y prevención de accidentes. Primeros auxilios. Resucitación cardiopulmonar';
         $temas9->DESCRIPCION = '';
         $temas9->VALORADICIONAL = 'Salud física nutricional';
         $temas9->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas9->ESTADO = 'A';
         $temas9->save();
 
         $temas10 = new Temas();
         $temas10->NOMBRES = 'Salud respiratoria y tuberculosis';
         $temas10->DESCRIPCION = '';
         $temas10->VALORADICIONAL = 'Salud física nutricional';
         $temas10->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas10->ESTADO = 'A';
         $temas10->save();
 
         $temas11 = new Temas();
         $temas11->NOMBRES = 'Habilidades para la vida: sociales (Autoestima, asertividad, toma de decisiones, comunicación), cognitivas y de control de las emociones';
         $temas11->DESCRIPCION = '';
         $temas11->VALORADICIONAL = 'Salud psicosocial';
         $temas11->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas11->ESTADO = 'A';
         $temas11->save();
 
         $temas12 = new Temas();
         $temas12->NOMBRES = 'Proyecto de vida y orientación vocacional';
         $temas12->DESCRIPCION = '';
         $temas12->VALORADICIONAL = 'Salud psicosocial';
         $temas12->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas12->ESTADO = 'A';
         $temas12->save();
 
         $temas13 = new Temas();
         $temas13->NOMBRES = 'Resiliencia';
         $temas13->DESCRIPCION = '';
         $temas13->VALORADICIONAL = 'Salud psicosocial';
         $temas13->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas13->ESTADO = 'A';
         $temas13->save();
 
         $temas14 = new Temas();
         $temas14->NOMBRES = 'Rol del adolescente en la familia (derechos y responsabilidades)';
         $temas14->DESCRIPCION = '';
         $temas14->VALORADICIONAL = 'Salud psicosocial';
         $temas14->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas14->ESTADO = 'A';
         $temas14->save();
 
         $temas15 = new Temas();
         $temas15->NOMBRES = 'Derechos y responsabilidades en salud';
         $temas15->DESCRIPCION = '';
         $temas15->VALORADICIONAL = 'Salud psicosocial';
         $temas15->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas15->ESTADO = 'A';
         $temas15->save();
 
         $temas16 = new Temas();
         $temas16->NOMBRES = 'Equidad de género e interculturalidad';
         $temas16->DESCRIPCION = '';
         $temas16->VALORADICIONAL = 'Salud psicosocial';
         $temas16->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas16->ESTADO = 'A';
         $temas16->save();
 
         $temas17 = new Temas();
         $temas17->NOMBRES = 'Empoderamiento, liderazgo, participación ciudadana';
         $temas17->DESCRIPCION = '';
         $temas17->VALORADICIONAL = 'Salud psicosocial';
         $temas17->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas17->ESTADO = 'A';
         $temas17->save();
 
         $temas18 = new Temas();
         $temas18->NOMBRES = 'Viviendo en familia: relaciones intergeneracionales, mejorando la comunicación';
         $temas18->DESCRIPCION = '';
         $temas18->VALORADICIONAL = 'Salud psicosocial';
         $temas18->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas18->ESTADO = 'A';
         $temas18->save();
 
         $temas19 = new Temas();
         $temas19->NOMBRES = 'Prevención de la violencia familiar (maltrato físico, psicológico, por negligencia), castigo físico y humillante, violencia sexual, violencia por explotación sexual y trata de personas; social (pandillaje, delincuencia, bullying)';
         $temas19->DESCRIPCION = '';
         $temas19->VALORADICIONAL = 'Salud psicosocial';
         $temas19->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas19->ESTADO = 'A';
         $temas19->save();
 
         $temas20 = new Temas();
         $temas20->NOMBRES = 'Identificación de signos de alarma de: depresión, intento de suicidio, ansiedad, adicciones, trastornos de conducta alimentaria (anorexia, bulimia)';
         $temas20->DESCRIPCION = '';
         $temas20->VALORADICIONAL = 'Salud psicosocial';
         $temas20->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas20->ESTADO = 'A';
         $temas20->save();
 
         $temas21 = new Temas();
         $temas21->NOMBRES = 'Prevención del consumo de tabaco, alcohol, drogas ilícitas y nuevas adicciones (ludopatías, dependencia de las redes sociales, adicción tecnológica)';
         $temas21->DESCRIPCION = '';
         $temas21->VALORADICIONAL = 'Salud psicosocial';
         $temas21->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas21->ESTADO = 'A';
         $temas21->save();
 
         $temas22 = new Temas();
         $temas22->NOMBRES = 'Masculinidad';
         $temas22->DESCRIPCION = '';
         $temas22->VALORADICIONAL = 'Salud psicosocial';
         $temas22->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas22->ESTADO = 'A';
         $temas22->save();
 
         $temas23 = new Temas();
         $temas23->NOMBRES = 'Derechos sexuales y reproductivos';
         $temas23->DESCRIPCION = '';
         $temas23->VALORADICIONAL = 'Salud sexual y reproductiva';
         $temas23->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas23->ESTADO = 'A';
         $temas23->save();
 
         $temas24 = new Temas();
         $temas24->NOMBRES = 'Sexualidad humana y afectividad';
         $temas24->DESCRIPCION = '';
         $temas24->VALORADICIONAL = 'Salud sexual y reproductiva';
         $temas24->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas24->ESTADO = 'A';
         $temas24->save();
 
         $temas25 = new Temas();
         $temas25->NOMBRES = 'Anticoncepción y paternidad responsable';
         $temas25->DESCRIPCION = '';
         $temas25->VALORADICIONAL = 'Salud sexual y reproductiva';
         $temas25->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas25->ESTADO = 'A';
         $temas25->save();
 
         $temas26 = new Temas();
         $temas26->NOMBRES = 'Relaciones sexuales, sexo seguro';
         $temas26->DESCRIPCION = '';
         $temas26->VALORADICIONAL = 'Salud sexual y reproductiva';
         $temas26->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas26->ESTADO = 'A';
         $temas26->save();
 
         $temas27 = new Temas();
         $temas27->NOMBRES = 'Desarrollo sexual en la adolescencia';
         $temas27->DESCRIPCION = '';
         $temas27->VALORADICIONAL = 'Salud sexual y reproductiva';
         $temas27->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas27->ESTADO = 'A';
         $temas27->save();
 
         $temas28 = new Temas();
         $temas28->NOMBRES = 'Salud sexual y reproductiva: prevención del embarazo no deseado, ITS y VIH-Sida';
         $temas28->DESCRIPCION = '';
         $temas28->VALORADICIONAL = 'Salud sexual y reproductiva';
         $temas28->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas28->ESTADO = 'A';
         $temas28->save();
 
         $temas29 = new Temas();
         $temas29->NOMBRES = 'Diversidad sexual e identidad de género';
         $temas29->DESCRIPCION = '';
         $temas29->VALORADICIONAL = 'Salud sexual y reproductiva';
         $temas29->UBICACIONDOC = 'tema/public/docwww.pdf';
         $temas29->ESTADO = 'A';
         $temas29->save();

         //tabla Localidad
       /* $localidad = new Localidad();
        $localidad->NOMBRE = 'Chagual';
        $localidad->ESTADO = 'A';
        $localidad->save();

        $localidad2 = new Localidad();
        $localidad2->NOMBRE = 'Vista Florida';
        $localidad2->ESTADO = 'A';
        $localidad2->save();

        $localidad3 = new Localidad();
        $localidad3->NOMBRE = 'Suyubamba';
        $localidad3->ESTADO = 'A';
        $localidad3->save();

        $localidad4 = new Localidad();
        $localidad4->NOMBRE = 'Pataz';
        $localidad4->ESTADO = 'A';
        $localidad4->save();

        $localidad5 = new Localidad();
        $localidad5->NOMBRE = 'Zarumilla';
        $localidad5->ESTADO = 'A';
        $localidad5->save();

        $localidad6 = new Localidad();
        $localidad6->NOMBRE = 'Vijus';
        $localidad6->ESTADO = 'A';
        $localidad6->save();

        $localidad7 = new Localidad();
        $localidad7->NOMBRE = 'Suyubamba';
        $localidad7->ESTADO = 'A';
        $localidad7->save();

        $localidad8 = new Localidad();
        $localidad8->NOMBRE = 'Chuquitambo';
        $localidad8->ESTADO = 'A';
        $localidad8->save();*/

        //tabla Preguntas
        $preguntas = new Preguntas();
        $preguntas->IDTEMA = 1;
        $preguntas->DESCRIPCION = 'Con que se juega el futbol';
        $preguntas->ESTADO = 'A';
        $preguntas->save();

        //tabla Usuarios
        $usuarios = new Usuarios();
        $usuarios->USUARIO = 'IGOMEZ';
        $usuarios->CLAVE = '1234';
        $usuarios->NOMBRES = 'ISMAEL';
        $usuarios->APELLIDOS = 'GOMEZ PEREZ';
        $usuarios->CORREO = 'isgp@gmail.com';
        $usuarios->TELEFONO = '927881705';
        $usuarios->IDLOCALIDAD = 5;
        $usuarios->ESTADO = 'A';
        $usuarios->save();

        //tabla Alternativas
        $alternativas = new Alternativas();
        $alternativas->IDPREGUNTA = 1;
        $alternativas->DESCRIPCION = 'Celular';
        $alternativas->TIPO = 'check';
        $alternativas->ESCORRECTA = 'F';
        $alternativas->save();

        $alternativas2 = new Alternativas();
        $alternativas2->IDPREGUNTA = 1;
        $alternativas2->DESCRIPCION = 'Balon';
        $alternativas2->COMENTARIO = 'Pelota de futbol';
        $alternativas2->TIPO = 'check';
        $alternativas2->ESCORRECTA = 'T';
        $alternativas2->save();

        $alternativas3 = new Alternativas();
        $alternativas3->IDPREGUNTA = 1;
        $alternativas3->DESCRIPCION = 'Raqueta';
        $alternativas3->COMENTARIO = 'Pelota';
        $alternativas3->TIPO = 'check';
        $alternativas3->ESCORRECTA = 'F';
        $alternativas3->save();

        //tabla Respuestas
        $respuestas = new Respuestas();
        $respuestas->IDUSUARIO = 1;
        $respuestas->IDTEMA = 1;
        $respuestas->IDPREGUNTA = 1;
        $respuestas->IDALTERNATIVA = 2;
        $respuestas->TEXTO = '';
        $respuestas->FECHAREGISTRO = new DateTime();
        $respuestas->save();

        //tabla Usuario_temas
        $usuarioTemas = new UsuarioTemas();
        $usuarioTemas->IDUSUARIO = 1;
        $usuarioTemas->IDTEMA = 1;
        $usuarioTemas->save();

    }
}
