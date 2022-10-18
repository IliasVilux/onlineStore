<?php
session_start();

require_once "model.php";

$producte1 = new Producte();
$producte1->titol = "HP Pavilion 14-DV0002NS Intel Core i5-1135G7";
$producte1->categoria = "PORTÁTIL";
$producte1->preu = 769.54;
$producte1->descripcio = "El ordenador portátil Pavilion 14 te ofrece un mayor rendimiento en un menor formato, para una máxima eficacia en tus tareas desde cualquier lugar.";
$producte1->colors = ['negre', 'blanc'];
$producte1->stoc = 100;
$producte1->caracteristiques = "Graficos Nvidia Geforce MX 350, Windows 10, Pantalla IPS FHD, Panel antirreflectante y Batería de 8h";
$producte1->especificacions = "Procesador IntelCore i5-1135G7, RAM 16 GB, 512 GB SSD";
$producte1->instruccions = "Encender el dispositivo y en el caso de que no tenga, instalarle un sistema operativo ";
$producte1->addFoto("Imatges/productes/1484-hp-pavilion-14-dv0002ns-intel-core-i5-1135g7-8gb-512gb-ssd-14.png");
$producte1->addFoto("Imatges/productes/pavilon2.jpg");
$producte1->addFoto("Imatges/productes/pavilon3.jpg");


$producte2 = new Producte();
$producte2->titol = "HP Essential 255 G8 AMD Ryzen 5 5500U/8GB/512GB SSD/15.6";
$producte2->categoria = "PORTÁTIL";
$producte2->preu = 495.04;
$producte2->descripcio = "Este portátil de precio económico que incluye la tecnología más reciente y un chasis duradero que ayuda a proteger el equipo. Con un procesador AMD Ryzen y a las herramientas de colaboración básicas.";
$producte2->colors = ['negre', 'gris'];
$producte2->stoc = 100;
$producte2->caracteristiques = "Diseñado para empresas. Completa con confianza tus proyectos gracias a la tecnología más reciente que incluye la potencia de un procesador AMD Ryzen™ y memoria DDR4.";
$producte2->especificacions = "Procesador AMD Ryzen 5 5500U, RAM 8GB, 512 GB SSD, wIndows 10 Home 64 Bits";
$producte2->instruccions = "Encender el dispositivo y en el caso de que no tenga, instalarle un sistema operativo ";
$producte2->addFoto("Imatges/productes/1460-hp-essential-255-g8-amd-ryzen-5-5500u-8gb-512gb-ssd-156.jpg");
$producte2->addFoto("Imatges/productes/essential2.jpg");
$producte2->addFoto("Imatges/productes/essential3.jpg");

$producte3 = new Producte();
$producte3->titol = "Asus Rog Strix G513IH-HN008 AMD Ryzen 7";
$producte3->categoria = "PORTÁTIL";
$producte3->preu = 899.99;
$producte3->descripcio = "Con la potente CPU AMD Ryzen™ 7 4800H y la GPU GeForce GTX 1650 todo va más rápido, desde los juegos a la multitarea avanzada. Compite a toda velocidad en títulos de eSports .";
$producte3->colors = ['negre'];
$producte3->stoc =100;
$producte3->caracteristiques = "Los procesadores más recientes suponen un salto considerable para juegos, multitarea y cualquier aplicación exigente. La gráfica NVIDIA GeForce RTX™ 3060 ofrece fotogramas fluidos y la CPU AMD Ryzen™ 7 5800H se encarga de las tareas más pesadas. Con hasta 32 GB de memoria RAM DDR4-3200 de alto rendimiento puedes jugar, transmitir y cambiar de marcha sin problemas. ";
$producte3->especificacions = "Procesador AMD Ryzen 1 4800 H, RAM 16GB, 512GB SSD, SIN SISTEMA OPERATIVO.";
$producte3->instruccions = "Encender el dispositivo y en el caso de que no tenga, instalarle un sistema operativo ";
$producte3->addFoto("Imatges/productes/1365-asus-rog-strix-g513ih-hn008-amd-ryzen-7-4800h-16gb-512gb-ssd-gtx-1650-156.jpg");
$producte3->addFoto("Imatges/productes/rogstrix2.jpg");
$producte3->addFoto("Imatges/productes/rogstrix3.jpg");

$producte4 = new Producte();
$producte4->titol = "MSI Pulse GL76 11UEK-055XES Intel Core i7-11800H/16GB/1TB SSD/RTX 3060/17.3";
$producte4->categoria = "PORTÁTIL";
$producte4->preu = 1499;
$producte4->descripcio = " El Pulse GL76 está equipado con los últimos procesadores Intel® Core ™ i7 de 11.ª generación y gráficos de la serie NVIDIA® GeForce RTX ™ 30. La armadura de metal gris titanio y las líneas de contorno son perfectas para aquellos que aman un diseño robusto y futurista.";
$producte4->colors = ['negre', 'vermell'];
$producte4->stoc =100;
$producte4->caracteristiques = "Teclado para juegos con retroiluminación RGB, MSI App Player con nuevo modo de consola para una experiencia de juego perfecta entre el móvil y la PC, Tecnología de audio Nahimic 3 que ofrece una experiencia de audio envolvente de 360?";
$producte4->especificacions = "Procesador TIger Lake i7-11800H, Memoria DDR IV 8GB, 1TB SSD de almacenamiento, SIN SISTEMA OPERATIVO";
$producte4->instruccions = "Encender el dispositivo y en el caso de que no tenga, instalarle un sistema operativo ";
$producte4->addFoto("Imatges/productes/1400-msi-pulse-gl76-11uek-055xes-intel-core-i7-11800h-16gb-1tb-ssd-rtx-3060-173.jpg");
$producte4->addFoto("Imatges/productes/msipulse2.jpg");
$producte4->addFoto("Imatges/productes/msipulse3.jpg");

$producte5 = new Producte();
$producte5->titol = "AMD Ryzen 5 5600X 3.7GHz";
$producte5->categoria = "CPU";
$producte5->preu = 298.03;
$producte5->descripcio = "Software que combina la velocidad de SSD con la capacidad de disco duro en una sola unidad rápida y fácil de administrar, gratuita con la placa madre AMD Serie 400.";
$producte5->colors;
$producte5->stoc = 100;
$producte5->caracteristiques = "Tecnología AMD StoreMI: Software que combina la velocidad de SSD con la capacidad de disco duro en una sola unidad rápida y fácil de administrar, gratuita con la placa madre AMD Serie 400.";
$producte5->especificacions = " Núcleos de CPU 6 de hilos 12, Reloj base 3.7GHz, Reloj de aumento máx. Hasta 4.6GHz, Caché L2 total 3MB y Caché L3 total 32MB";
$producte5->instruccions = "Busca tu ordenador y encuentra la forma de conectárselo dependiendo del modelo que tengas.";
$producte5->addFoto("Imatges/productes/1101-amd-ryzen-5-5600x-37ghz.png");
$producte5->addFoto("Imatges/productes/amdryzen5600_2.jpg");
$producte5->addFoto("Imatges/productes/ryzen3.webp");


$producte6 = new Producte();
$producte6->titol = "Intel Core I5 10400F 290 GHz";
$producte6->categoria = "CPU";
$producte6->preu = 154.90;
$producte6->descripcio = "Ofrece mejoras de rendimiento notables para conseguir una productividad mejorada y un entretenimiento impresionante, incluyendo hasta 5,3 GHz e Intel® Wi-Fi 6.";
$producte6->colors;
$producte6->stoc = 100;
$producte6->caracteristiques = "Execute Disable Bit, Estados de inactividad, Tecnología Thermal Monitoring de Intel, Número máximo de buses PCI Express: 16, Configuración de CPU (máximo): 1";
$producte6->especificacions = "Número de núcleos de procesador: 6,Número de filamentos de procesador: 12";
$producte6->instruccions = "Busca tu ordenador y encuentra la forma de conectárselo dependiendo del modelo que tengas.";
$producte6->addFoto("Imatges/productes/intel-core-i5-10400f-290-ghz.jpg");
$producte6->addFoto("Imatges/productes/intelI5_2.jpg");
$producte6->addFoto("Imatges/productes/intelI5_3.jpg");

$producte7 = new Producte();
$producte7->titol = "AMD Athlon 3000G 3.5GHz";
$producte7->categoria = "CPU";
$producte7->preu = 89.99;
$producte7->descripcio = "Navega por Internet con rapidez, transmite videos en tiempo real sin un solo corte y juega los títulos de esports más populares en alta definición a 720p.";
$producte7->colors;
$producte7->stoc = 100;
$producte7->caracteristiques = "El procesador básico más avanzado que AMD ha creado nunca, para usuarios que buscan una respuesta rápida y gráficos Radeon? Vega integrados, con la arquitectura de procesador innovadora que necesitan para aprovechar la actualización de la tarjeta de gráficos.";
$producte7->especificacions = "N.° de núcleos de CPU 2, N.° de subprocesos 4, N.° de núcleos de GPU 3, Reloj base 3.5GHz, Caché L1 total 192KB, Caché L2 total 1MB y Caché L3 total 4MB";
$producte7->instruccions = "Busca tu ordenador y encuentra la forma de conectárselo dependiendo del modelo que tengas.";
$producte7->addFoto("Imatges/productes/athlon.jpg");
$producte7->addFoto("Imatges/productes/athlon2.jpg");
$producte7->addFoto("Imatges/productes/athlon3.jpg");


$producte8 = new Producte();
$producte8->titol = "Intel Core i9-9900K 3.6Ghz";
$producte8->categoria = "CPU";
$producte8->preu = 537.30;
$producte8->descripcio = "Sólo compatible con sus placas base basadas en chipset de la serie 300, el procesador Intel Core i9-9900K 3.6 GHz Eight-Core LGA 1151 está diseñado para juegos, creación y productividad.";
$producte8->colors;
$producte8->stoc = 100;
$producte8->caracteristiques = "Tiene una velocidad de reloj base de 3.6 GHz y viene con características como la compatibilidad con Intel Optane Memory, el cifrado AES-NI, la tecnología Intel vPro, Intel TXT, la Protección de dispositivos Intel con Boot Guard, la tecnología de virtualización Intel VT-d para E / S dirigida y la tecnología Intel Hyper-Threading para tareas múltiples de 16 vías.";
$producte8->especificacions = "Fabricante de procesador: Intel, Familia de procesador: 9na generación de procesadores Intel® Core™ i9, Frecuencia del procesador: 3,6 GHz, Número de núcleos de procesador: 8, Socket de procesador: LGA 1151 (Zócalo H4) y Componente para: PC";
$producte8->instruccions = "Busca tu ordenador y encuentra la forma de conectárselo dependiendo del modelo que tengas.";
$producte8->addFoto("Imatges/productes/I9.jpg");
$producte8->addFoto("Imatges/productes/i9_2.jpg");
$producte8->addFoto("Imatges/productes/i9_3.jpg");


$producte9 = new Producte();
$producte9->titol = "Kioxia EXCERIA 480GB SSD SATA";
$producte9->categoria = "SSD";
$producte9->preu = 48.90;
$producte9->descripcio = "Diseñada para aumentar la velocidad de su ordenador de sobremesa o portátil con respecto a las unidades de disco duro convencionales.";
$producte9->colors;
$producte9->stoc = 100;
$producte9->caracteristiques = "Aumente su productividad con la serie de unidades SSD EXCERIA SATA y disfrute de un arranque y una transferencia de archivos más rápidos, así como una mayor capacidad de respuesta del sistema. Despídase de los discos lentos y disfrute de una experiencia informática digna de su tiempo.";
$producte9->especificacions = "Diseño de unidad de estado sólido (SSD), Factor de forma 2.5 , Interfaz SATA 6Gb / s, Leer 555 MB / s y Escribe 540 MB / s";
$producte9->instruccions = "Busca tu ordenador y encuentra la forma de conectárselo dependiendo del modelo que tengas.";
$producte9->addFoto("Imatges/productes/kioxia-exceria-480-ssd-sata.jpg");
$producte9->addFoto("Imatges/productes/kioxia2.jpg");
$producte9->addFoto("Imatges/productes/kioxia3.jpg");


$producte10 = new Producte();
$producte10->titol = "MSI Spatium M480 M.2 2TB PCIe Gen4 x4 NVMe 1.4";
$producte10->categoria = "SSD";
$producte10->preu = 401.24;
$producte10->descripcio = "Estos SSD están construidos con flash NAND 3D de alta calidad y alta densidad que ofrecen el mejor rendimiento y resistencia para profesionales, creadores de contenido y jugadores.";
$producte10->colors;
$producte10->stoc = 100;
$producte10->caracteristiques = "El Spatium M480 1TB M.2 es el modelo más potente de la serie, ofreciendo un rendimiento de almacenamiento superior para los jugadores profesionales o creadores de contenido.";
$producte10->especificacions = "Formato : M.2, Capacidad : 2000 GB, Interfaz : PCI Express 4.0, Tipo de memoria : 3D NAND, NVM Express (NVMe) : Si y Versión NVMe : 1.4";
$producte10->instruccions = "Busca tu ordenador y encuentra la forma de conectárselo dependiendo del modelo que tengas.";
$producte10->addFoto("Imatges/productes/1864-msi-spatium-m480-m2-2tb-pcie-gen4-x4-nvme-14.jpg");
$producte10->addFoto("Imatges/productes/spatium2.jpg");
$producte10->addFoto("Imatges/productes/spatium3.jpg");

$producte11 = new Producte();
$producte11->titol = "Samsung 870 QVO SSD 1TB SATA3";
$producte11->categoria = "SSD";
$producte11->preu = 96.59;
$producte11->descripcio = "El 870 QVO es lo último de la segunda generación de Samsung. El SSD QLC es el tipo de SSD de mayor capacidad, ya que proporciona hasta 8 TB de almacenamiento.";
$producte11->colors;
$producte11->stoc = 100;
$producte11->caracteristiques = "Al alcanzar el límite máximo de interfaz SATA de 560/530 MB/s de velocidad secuencial, el 870 QVO presenta una velocidad aleatoria mejorada y un rendimiento sostenido en comparación con el modelo anterior 860 QVO. El TurboWrite inteligente acelera las velocidades de escritura y mantiene un alto rendimiento a largo plazo con un búfer variable más grande.";
$producte11->especificacions = "Algoritmos de seguridad soportados: 256-bit AES, Factor de forma de disco SSD: 2.5, SDD, capacidad: 1000 GB, Interfaz: Serial ATA III, Tipo de memoria: V-NAND MLC y Componente para: PC/ordenador portátil";
$producte11->instruccions = "Busca tu ordenador y encuentra la forma de conectárselo dependiendo del modelo que tengas.";
$producte11->addFoto("Imatges/productes/1157-samsung-870-qvo-ssd-1tb-sata3.jpg");
$producte11->addFoto("Imatges/productes/samsung2.jpg");
$producte11->addFoto("Imatges/productes/samsung3.jpg");


$producte12 = new Producte();
$producte12->titol = "Kingston A400 SSD 240GB";
$producte12->categoria = "SSD";
$producte12->preu = 32.08;
$producte12->descripcio = "La unidad A400 de estado sólido de Kingston ofrece enormes mejoras en la velocidad de respuesta, sin actualizaciones adicionales del hardware.";
$producte12->colors;
$producte12->stoc = 100;
$producte12->caracteristiques = "Arranques, cargas y transferencias de archivos todos con mayor rapidez, Más fiable y duradera que las unidades de disco duro y Varias capacidades, para almacenar las aplicaciones o sustituir del todo unidades de disco duro.";
$producte12->especificacions = "Disco de estado sólido, capacidad: 240 GB, Interfaces de disco de estado sólido: Serial ATA III, Velocidad de lectura: 500 MB/s y Velocidad de escritura: 350 MB/s";
$producte12->instruccions = "Busca tu ordenador y encuentra la forma de conectárselo dependiendo del modelo que tengas.";
$producte12->addFoto("Imatges/productes/ssd-kingston.png");
$producte12->addFoto("Imatges/productes/kingston2.jpg");
$producte12->addFoto("Imatges/productes/kingston3.jpg");


$producte13 = new Producte();
$producte13->titol = "EVGA GeForce GTX 1650 SC Ultra Gaming 4GB GDDR6";
$producte13->categoria = "GPU";
$producte13->preu = 249.89;
$producte13->descripcio = "La nueva EVGA GeForce GTX 1650 SC Ultra Gaming te da el mejor rendimiento en juegos a un valor que no puedes resistir.";
$producte13->colors;
$producte13->stoc = 100;
$producte13->caracteristiques = "La GTX 1650 sigue la tradición de las GeForce@ GTX 650, GeForce@ GTX 750, GeForce@ GTX 950 y GeForce@ GTX 1050 de ofrecer buen rendimiento en los juegos contemporáneos que puedas correr en estas tarjetas. Obtén un rendimiento hasta 70% más rápido que la GeForce@ GTX 1050 y hasta el triple de rendimiento que la GeForce@ GTX 950. La GeForce@ GTX 1650 ofrece un gran avance de rendimiento para gamers de e-Sports y de 1080p.";
$producte13->especificacions = "CUDA: Si, Núcleos CUDA: 896, Familia de procesadores de gráficos: NVIDIA, Procesador gráfico: GeForce GTX 1650, Aumento de la velocidad de reloj del procesador: 1710 MHz y Máxima resolución: 7680 x 4320 Pixeles";
$producte13->instruccions = "Busca tu ordenador y encuentra la forma de conectárselo dependiendo del modelo que tengas.";
$producte13->addFoto("Imatges/productes/1423-evga-geforce-gtx-1650-sc-ultra-gaming-4gb-gddr6.jpg");
$producte13->addFoto("Imatges/productes/evga2.jpg");
$producte13->addFoto("Imatges/productes/evga3.jpg");


$producte14 = new Producte();
$producte14->titol = "Zotac Gaming GeForce RTX 3080 Ti Trinity OC 12GB GDDR6X";
$producte14->categoria = "GPU";
$producte14->preu = 1699.90;
$producte14->descripcio = "Disfruta de los mayores éxitos de ventas de hoy como nunca antes con la fidelidad visual del trazado de rayos en tiempo real y el rendimiento definitivo de DLSS con tecnología de IA.";
$producte14->colors;
$producte14->stoc = 100;
$producte14->caracteristiques = "Núcleos de trazado de rayos de segunda generación, Núcleos de tensor de tercera generación, Iluminación SPECTRA 2.0 RGB, Refrigeración avanzada IceStorm 2.0 y Control activo del ventilador con parada del ventilador FREEZE";
$producte14->especificacions = "GPU GeForce RTX 3080 Ti, CUDA cores 10240, Memoria Video 12GB GDDR6X, Bus Memoria 384-bit, Reloj del motor Boost: 1695 MHz y Reloj de memoria 19 Gbps";
$producte14->instruccions = "Busca tu ordenador y encuentra la forma de conectárselo dependiendo del modelo que tengas.";
$producte14->addFoto("Imatges/productes/1825-zotac-gaming-geforce-rtx-3080-ti-trinity-oc-12gb-gddr6x.jpg");
$producte14->addFoto("Imatges/productes/zotac2.jpg");
$producte14->addFoto("Imatges/productes/zotac3.jpg");

$producte15 = new Producte();
$producte15->titol = "Gigabyte GeForce GTX 1050Ti D5 4GB GDDR5";
$producte15->categoria = "GPU";
$producte15->preu = 366.13;
$producte15->descripcio = "Te presentamos la Gigabyte GeForce GTX 1050Ti, una gráfica con 4Gb GDDR5,VR Ready. Graphics Processing GeForce® GTX 1050 Ti. Core Clock.";
$producte15->colors;
$producte15->stoc = 100;
$producte15->caracteristiques = "Al alcanzar el límite máximo de interfaz SATA de 560/530 MB/s de velocidad secuencial, el 870 QVO presenta una velocidad aleatoria mejorada y un rendimiento sostenido en comparación con el modelo anterior 860 QVO. El TurboWrite inteligente acelera las velocidades de escritura y mantiene un alto rendimiento a largo plazo con un búfer variable más grande.";
$producte15->especificacions = "Memory Clock 7008 MHz, Memory Size 4 GB, Memory Type GDDR5, Memory Bus 128 bit, Card Bus PCI-E 3.0 x 16, Output Dual-link DVI-D *1 y HDMI-2.0b (Max Resolution: 4096x2160 @60 Hz)";
$producte15->instruccions = "Busca tu ordenador y encuentra la forma de conectárselo dependiendo del modelo que tengas.";
$producte15->addFoto("Imatges/productes/gtx1050ti.png");
$producte15->addFoto("Imatges/productes/gigabyte2.jpg");
$producte15->addFoto("Imatges/productes/gigabyte3.jpg");


$producte16 = new Producte();
$producte16->titol = "Gigabyte AORUS GeForce RTX 3060 Ti ELITE 8GB GDDR6 Rev 2.0";
$producte16->categoria = "GPU";
$producte16->preu = 844.80;
$producte16->descripcio = "NVIDIA Reflex ofrece la máxima ventaja competitiva. La latencia más baja. La mejor capacidad de respuesta. Gracias a las GPU GeForce RTX serie 30 y los monitores NVIDIA.";
$producte16->colors;
$producte16->stoc = 100;
$producte16->caracteristiques = "Arranques, cargas y transferencias de archivos todos con mayor rapidez, Más fiable y duradera que las unidades de disco duro y Varias capacidades, para almacenar las aplicaciones o sustituir del todo unidades de disco duro.";
$producte16->especificacions = "Graphics Processing GeForce RTX™ 3060 Ti, Core Clock 1785 MHz (Reference Card: 1665 MHz), CUDA® Cores 4864, Memory Clock 14000 MHz, Memory Size 8 GB, Memory Type GDDR6, Memory Bus 256 bit y Memory Bandwidth (GB/sec) 4?48 GB/s";
$producte16->instruccions = "Busca tu ordenador y encuentra la forma de conectárselo dependiendo del modelo que tengas.";
$producte16->addFoto("Imatges/productes/1183-gigabyte-aorus-geforce-rtx-3060-ti-elite-8gb-gddr6-rev-20.jpg");
$producte16->addFoto("Imatges/productes/aorus2.jpg");
$producte16->addFoto("Imatges/productes/aorus3.jpg");


$elMeuCataleg = new Cataleg();
$elMeuCataleg->addProducte($producte1);
$elMeuCataleg->addProducte($producte2);
$elMeuCataleg->addProducte($producte3);
$elMeuCataleg->addProducte($producte4);
$elMeuCataleg->addProducte($producte5);
$elMeuCataleg->addProducte($producte6);
$elMeuCataleg->addProducte($producte7);
$elMeuCataleg->addProducte($producte8);
$elMeuCataleg->addProducte($producte9);
$elMeuCataleg->addProducte($producte10);
$elMeuCataleg->addProducte($producte11);
$elMeuCataleg->addProducte($producte12);
$elMeuCataleg->addProducte($producte13);
$elMeuCataleg->addProducte($producte14);
$elMeuCataleg->addProducte($producte15);
$elMeuCataleg->addProducte($producte16);

//CATALEG SESSIO
if(isset($_SESSION['cataleg_serialitzat'])) {
    $cataleg_sesion = $_SESSION['cataleg_serialitzat'];
    $elMeuCataleg->productesCataleg = unserialize($cataleg_sesion);
}

$cataleg_serialitzat = serialize($elMeuCataleg->productesCataleg);
$_SESSION['cataleg_serialitzat'] = $cataleg_serialitzat;


?>