<?php
include("model.php");

$producte1 = new Producte();

$producte1->titol = "Samsung Galaxy Watch4 Bluetooth Smartwatch Verde 44mm Amoled";
$producte1->categoria = "Relojes deportivos";
$producte1->preu = 299;
$producte1->descripció = "Smartwatch Samsung Galaxy Watch4 Bluetooth en color verde con pantalla Super AMOLED de 44mm (1.36\"), 450 x 450 píxeles, conectividad WiFi, Bluetooth 5.0, NFC y GPS, sensores de sueño, saturación, frecuencia, presión, electrocardiograma y bioimpedancia eléctrica, 100 modos deportivos y resistencia al agua 5ATM, batería con una duración media de 40 horas.";
$producte1->colors = ['negre', 'blau', 'vermell', 'verd'];
$producte1->stoc = 10;
$producte1->caracteristiques = "La clave para ser nuestra mejor versión es seguir conociéndonos cada día. Por eso, hemos diseñado el nuevo Galaxy Watch4 para que, por fin, encuentres el compañero de viaje perfecto para tu yo más saludable";
$producte1->especificacions = "Registra tus actividades y resultados fitness en tu reloj y teléfono. Cuenta los pasos, comprueba las calorías y ubícate en el mapa con el GPS. Galaxy Watch4 detecta la actividad física para hacer un seguimiento de tus rutinas y admite más de 90 ejercicios para obtener un informe más preciso de tus entrenamientos.";
$producte1->instruccions = "El Galaxy Watch4 presenta un diseño sencillo con su estructura metálica de aluminio blindado. Ofrece un aspecto de alta gama y funcionalidad para tus entrenamientos y tareas cotidianas.";
$producte1->addFoto("https://thumbs.ielectro.es/product/grans/24549-1.webp");
$producte1->addFoto("https://thumbs.ielectro.es/product/grans/24549-2.webp");
$producte1->addFoto("https://thumbs.ielectro.es/product/grans/24549-3.webp");
$producte1->addFoto("https://thumbs.ielectro.es/product/grans/24549-4.webp");
$producte1->addFoto("https://thumbs.ielectro.es/product/grans/24549-5.webp");
$producte1->addFoto("https://thumbs.ielectro.es/product/grans/24549.webp");

$producte2 = new Producte();
$producte2->titol = "Garmin Vivoactive 3 Plata Correa Negra Smartwatch Gps Bluetooth Apps Deportivas Frecuencia Cardíaca Garmin Pay";
$producte2->categoria = "Relojes deportivos";
$producte2->preu = 155;
$producte2->descripció = "Smartwatch deportivo GARMIN VIVOACTIVE 3 con diseño de esfera en color plata y correa en color negro, el primer wereable de Garmin compatible con Garmin Pay, que permite pagar utilizando el reloj, personaliza tu reloj con miles de pantallas, aplicaciones y widgets gratuitos en Connect IQ, más de 15 aplicaciones preinstaladas de GPS";
$producte2->colors = ['negre', 'blau', 'verd'];
$producte2->stoc = 15;
$producte2->caracteristiques = "No tengas miedo de utilizar este reloj al aire libre en todo tipo de condiciones meteorológicas. No solo se puede utilizar para nadar y en la ducha, sino que su pantalla Garmin Chroma Display™ es muy fácil de leer, incluso bajo la luz solar directa, y está protegido por un cristal extremadamente resistente. También está equipado con la interfaz Side Swipe™, que te permite desplazarte rápidamente y navegar con fluidez por los diferentes menús y widgets. Tú eliges cómo quieres llevarlo, tanto si prefieres utilizar el índice o el pulgar para navegar por el dispositivo. Práctico, cómodo y fácil de ver: vívoactive 3 lo tiene todo.";
$producte2->especificacions = "Con ayuda de la tecnología de frecuencia cardiaca en la muñeca Elevate™2, vívoactive 3 te permite controlar los aspectos clave de tu condición física y tus niveles de estrés y te informa sobre cómo tu cuerpo responde en diferentes circunstancias. Por ejemplo, puede hacer una estimación de tu VO2 máximo y tu edad según la forma física, dos indicadores de forma física que pueden mejorar a lo largo del tiempo si haces ejercicio con regularidad.";
$producte2->instruccions = "La vida no tiene un botón de pausa, así que mantente conectado con tu reloj inteligente vívoactive 3 mientras haces deporte o estás entrenando. Cuando lo hayas vinculado con tu smartphone compatible, podrás recibir e incluso responder5 a los mensajes de texto, así como ver las novedades en tus redes sociales o los mensajes de correo electrónico, entre otras posibilidades,";
$producte2->addFoto("https://thumbs.ielectro.es/product/grans/98304.webp");
$producte2->addFoto("https://thumbs.ielectro.es/product/grans/98304-1.webp");
$producte2->addFoto("https://thumbs.ielectro.es/product/grans/98304-2.webp");
$producte2->addFoto("https://thumbs.ielectro.es/product/grans/98304-3.webp");

$producte3 = new Producte();
$producte3->titol = "Sony Wh-ch510 Blanco Auriculares Inalámbricos Bluetooth Micrófono Integrado Diseño Giratorio 35 Horas De Autonomía";
$producte3->categoria = "Auriculares";
$producte3->preu = 28;
$producte3->descripció = "Auriculares inalámbricos SONY WH-CH510 en diseño en color blanco, transmisión inalámbrica mediante conexión Bluetooth, escucha durante todo el día con hasta 35 horas de duración de batería en modo inalámbrico, diseño giratorio de fácil transporte, micrófono integrado para utilizar las funciones de comandos del asistente de voz y llamadas con manos libres, escúchalo todo con diafragmas de 30mm";
$producte3->colors = ['blau', 'verd'];
$producte3->stoc = 3;
$producte3->caracteristiques = "Disfruta de tu música y podcasts favoritos durante más tiempo con los auriculares WH-CH510 de Sony. Con un diseño ligero y hasta 35 horas de escucha sin interrupciones, no tendrás que preocuparte por quedarte sin batería mientras te desplazas.";
$producte3->especificacions = "Utiliza los botones para reproducir, detener o saltar canciones, así como para ajustar el volumen.";
$producte3->instruccions = "Transmite tus canciones favoritas desde un smartphone o una tablet vinculada con la tecnología inalámbrica Bluetooth®.";
$producte3->addFoto("https://thumbs.ielectro.es/product/grans/21273.webp");
$producte3->addFoto("https://thumbs.ielectro.es/product/grans/21271.webp");
$producte3->addFoto("https://thumbs.ielectro.es/product/grans/21271-2.webp");

$producte4 = new Producte();
$producte4->titol = "Fujifilm Instax Mini 11 Azul Cielo Cámara Instantánea Con Flash De Alto Rendimiento";
$producte4->categoria = "Foto Digital";
$producte4->preu = 68.3;
$producte4->descripció = "Cámara FUJI INSTAX MINI 11 acabada en color azul cielo, fotos instantáneas con flash de alto rendimiento, espejo para selfies integrado al lado de la lente, incluye correa y dos botones de obturador, fácil de utilizar y divertida.";
$producte4->colors = ['blau'];
$producte4->stoc = 23;
$producte4->caracteristiques = "El flash de alto rendimiento calcula automáticamente la luz de alrededor y ajusta la velocidad del obturador en consecuencia, sin necesidad de ajustes especiales.";
$producte4->especificacions = "La luz del flash no llega al fondo, con lo que se consigue una foto de aspecto oscuro<br />La mini 11 captura fondos y sujetos luminosos hasta en entornos con poca luz.";
$producte4->instruccions = "Para cambiar al modo selfi, solo tienes que sacar la lente.";
$producte4->addFoto("https://thumbs.ielectro.es/product/grans/22720.webp");
$producte4->addFoto("https://thumbs.ielectro.es/product/grans/22720-1.webp");
$producte4->addFoto("https://thumbs.ielectro.es/product/grans/22720-2.webp");
$producte4->addFoto("https://thumbs.ielectro.es/product/grans/22720-3.webp");

$producte5 = new Producte();
$producte5->titol = "Akashi Auriculares Negros 10h";
$producte5->categoria = "Auriculares";
$producte5->preu = 11.3;
$producte5->descripció = "Auriculares AKASHI en color negro con micrófono y estuche batería, conectividad Bluetooth 5.0, asistente de voz y control táctil, batería de hasta 10h de autonomía.";
$producte5->colors = ['negre','blanc'];
$producte5->stoc = 10;
$producte5->caracteristiques = "Empareja los auriculares Akashi True Wireless con tu smartphone o tableta y disfruta de su uso inalámbrico con la tecnología Bluetooth 5.0 incorporada. Estos auriculares son perfectos para la movilidad gracias a su estuche con batería incorporada. Además, toma tus llamadas directamente a través del auricular con el micrófono incorporado.";
$producte5->especificacions = "Mini auriculares estéreo intrauditivos,Cómodo y ergonómico con un perfecto aislamiento acústico,Botón táctil multifunción";
$producte5->instruccions = "Autonomía	10 horas, Control táctil	Sí, Asistente de voz	Sí";
$producte5->addFoto("https://thumbs.ielectro.es/product/grans/24572.webp");
$producte5->addFoto("https://thumbs.ielectro.es/product/grans/24572-1.webp");
$producte5->addFoto("https://thumbs.ielectro.es/product/grans/24572-2.webp");

$producte6 = new Producte();
$producte6->titol = "Akashi Altairpodtrop Tropical Carcasa Airpods 1 Y 2 Rídiga Antihuellas Con Mosquetón";
$producte6->categoria = "Auriculares";
$producte6->preu = 5;
$producte6->descripció = "Carcasa AKASHI ALTAIRPODTROP acabado en diseño tropical, carcasa para Apple AirPods 1 y 2, recubrimiento efecto carbono antihuellas, incluye mosquetón.";
$producte6->colors ;
$producte6->stoc = 50;
$producte6->caracteristiques = "Protege el estuche de carga de tus flamantes Aiairpods 1 y 2 colocándolo dentro de esta carcasa protectora hecha Rígida efecto Carbono mate resistente a cualquier golpe o arañazo de los que ocurren todos los días. Una vez instalada ya no tendrás nada que temer.";
$producte6->especificacions = "Integra un diseño muy depurado que traza de nuevo las formas de los Aiairpods para vestirlos así de manera única. Un look minimalista que los personaliza encajando a la perfección en el estuche de carga. Una carcasa protectora sencilla y agradable tanto a la vista como al tacto.";
$producte6->instruccions = "Práctica, esta carcasa integra un mosquetón que podrás quitar y poner cuando quieras para engancharlos a un llavero, bolso o pantalón y tener así el estuche de carga siempre a mano sin miedo a que se te escurra de las manos.";
$producte6->addFoto("https://thumbs.ielectro.es/product/grans/22902.webp");
$producte6->addFoto("https://thumbs.ielectro.es/product/grans/22902-1.webp");
$producte6->addFoto("https://thumbs.ielectro.es/product/grans/22902-2.webp");
$producte6->addFoto("https://thumbs.ielectro.es/product/grans/22902-3.webp");

$elMeuCataleg = new Cataleg();
$elMeuCataleg->addProducte($producte1);
$elMeuCataleg->addProducte($producte2);
$elMeuCataleg->addProducte($producte3);
$elMeuCataleg->addProducte($producte4);
$elMeuCataleg->addProducte($producte5);
$elMeuCataleg->addProducte($producte6);
$elMeuCataleg->llistar();

$laMevaCistella = new Cistella();

//Test afegir producte cistella
$laMevaCistella->addProducte($producte1);
$laMevaCistella->addProducte($producte2);
$laMevaCistella->addProducte($producte3);
$laMevaCistella->addProducte($producte3);
$laMevaCistella->addProducte($producte3);
$laMevaCistella->addProducte($producte3);
$laMevaCistella->llistar();

//Test delete producte producte 
$laMevaCistella->deleteProducte($producte2->id);
$laMevaCistella->llistar();
$laMevaCistella->buidar();

// Test afegir addproducte cistella quantitat
$laMevaCistella->addProducte($producte1);
$laMevaCistella->addProducte($producte1);
$laMevaCistella->addProducte($producte1);
$laMevaCistella->addProducte($producte2);
if($laMevaCistella->getProducteById($producte1->id)->quantitat == 3){
    echo "\033[36mTest addproducte correcte \033[0m\n";
}
else{
    echo "\033[31m Test addproducte incorrecte \033[0m\n";
}

$laMevaCistella->buidar();
// Test getTotal
$laMevaCistella->addProducte($producte1);
$laMevaCistella->addProducte($producte1);
$laMevaCistella->addProducte($producte1);
$laMevaCistella->addProducte($producte2);
if($laMevaCistella->getTotal() == 1052){
    echo "\033[36mTest getTotal correcte \033[0m\n";
}
else{
   echo "\033[31m Test getTotal incorrecte \033[0m\n";
}

$laMevaCistella->buidar();
// Test getNumProductes
$laMevaCistella->addProducte($producte1);
$laMevaCistella->addProducte($producte1);
$laMevaCistella->addProducte($producte1);
$laMevaCistella->addProducte($producte2);
if($laMevaCistella->getNumProductes() == 4){
    echo "\033[36mTest getNumProductes correcte \033[0m\n";
}
else{
    echo "\033[31m Test getNumProductes incorrecte \033[0m\n";
}