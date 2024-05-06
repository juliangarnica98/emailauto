<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correo electrónico</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .contenedor{
            position: relative;
            display: inline-block;
            text-align: center;
            margin-bottom: 1%;
        }
        .contenedor img{
            width: 100%;
        }
        
        .centrado{
            position: absolute;
            top: 28%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .number{
            font-size: 15rem;
            font-weight :10rem;
            background: linear-gradient(#e6007e,#6561A9);
            -webkit-background-clip: text;
            color: transparent;  
        }
    </style>
</head>
<body>
    <div class="container px-3 py-3" style="background:#dfdfdf ">
        <div class="row">
            <div class="col-md-7 mx-auto" style="display: block">
                <div class="contenedor">
                    <img src={{asset('img/aniversario/1.jpg')}} class="" alt="">
                    <div class="centrado"><h1 class="number">1</h1></div>
                    {{-- <img src={{asset('img/numeros/1.png')}} class="centrado" alt=""> --}}
                  </div>     
            </div>
        </div>
        <div class="row pt-3" style="padding-top: 100%;">
            <div class="col-md-11 mx-auto">
                <!-- Contenido adicional -->
                <small  style="font-size: 1rem">Coordialmente</small>
                <div class="font-weight-bold pt-4">Laura Robayo Gómez</div>
                <div class="" style="font-style: italic;">Especialista en Comunicaciones</div>
                <div class=""><a href="comunicacion.interna@fastmoda.com.co">comunicacion.interna@fastmoda.com.co</a></div>
                <div style="font-size: 1rem">Tel:(01) 670 2400</div>
                <div style="font-size: 1rem">Cel: 314-3890925</div>
                <div class=""><a href="www.lilipink.com">www.lilipink.com</a></div>
            </div>
        </div>

        <div class="row px-5 py-2">
            <div class="col-md-4">
                <!-- Imagen -->
                <img src={{asset('img/firma.png')}} class="img-fluid" alt="">
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-md-11 mx-auto">
                <!-- Contenido adicional -->
                <small class="font-italic" style="font-size: 0.7rem">Este correo electrónico o los archivos compartidos al mismo pueden contener información de carácter confidencial y/o privilegiado, y se envían a la atención única y exclusivamente de la persona y/o entidad a quien va dirigido. La copia, revisión, uso, revelación y/o distribución de dicha información confidencial sin la autorización por escrito de FAST MODA S.A.S está prohibida. Si usted no es el destinatario a quien se dirige el presente correo, por favor notifique de forma inmediata al remitente, borre este mensaje y abstenerse de usarlo, el uso no autorizado de la información contenida en el presente correo le dará derecho a FAST MODA S.A.S de reclamarle por los daños y perjuicios que esto le cause. En cumplimiento de la Ley de protección de datos personales le informamos que FAST MODA S.A.S es responsable del tratamiento de sus datos, por lo tanto, ha puesto a su disposición información sobre el tratamiento, las finalidades, sus derechos, y los canales de atención en nuestra política, la cual puede consultar escribiendo a notificaciones@fastmoda.com.co o ingresando a nuestra pagina web <a href=" https://www.lilipink.com">https://www.lilipink.com</a>"</small>
            </div>
        </div>
    </div>
</body>
</html>