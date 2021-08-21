-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2021 a las 18:49:34
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdmunicipalidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `dniAdmin` text COLLATE utf8_spanish_ci NOT NULL,
  `userAdmin` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `dark` tinyint(1) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `dniAdmin`, `userAdmin`, `nombre`, `email`, `foto`, `password`, `perfil`, `estado`, `dark`, `fecha`) VALUES
(169, '00000000', '', 'Editor', 'editor@gmail.com', 'vistas/img/perfiles/217.jpg', '$2a$07$asxx54ahjppf45sd87a5au6fAHIlFrQ7jQ4XHf7fycZYUNBysO4Bq', 'editor', 1, 1, '2021-08-02 06:42:21'),
(170, '00000000', '', 'Admin', 'admin@gmail.com', 'vistas/img/perfiles/462.jpg', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'administrador', 1, 1, '2021-08-16 16:48:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrusel`
--

CREATE TABLE `carrusel` (
  `idCarrusel` int(11) NOT NULL,
  `portada` text NOT NULL,
  `titulo` text NOT NULL,
  `ruta` text NOT NULL,
  `prioridad` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrusel`
--

INSERT INTO `carrusel` (`idCarrusel`, `portada`, `titulo`, `ruta`, `prioridad`, `fecha`) VALUES
(31, 'vistas/img/carrusel/entrega-de-expedientes-para-cultivo-de-palto-y-apicultura.jpg', 'ENTREGA DE EXPEDIENTES PARA CULTIVO DE PALTO Y APICULTURA', 'entrega-de-expedientes-para-cultivo-de-palto-y-apicultura', 250, '2021-08-01 17:11:56'),
(32, 'vistas/img/carrusel/entrega-del-testimonio-de-terreno-para-planta-de-tratamiento.png', 'ENTREGA DEL TESTIMONIO DE TERRENO PARA PLANTA DE TRATAMIENTO', 'entrega-del-testimonio-de-terreno-para-planta-de-tratamiento', 180, '2021-08-01 17:14:19'),
(33, 'vistas/img/carrusel/mantenimiento-y-acondicionamiento-del-estadio-municipal.png', 'MANTENIMIENTO Y ACONDICIONAMIENTO DEL ESTADIO MUNICIPAL', 'mantenimiento-y-acondicionamiento-del-estadio-municipal', 140, '2021-08-01 17:15:03'),
(34, 'vistas/img/carrusel/proyecto-jaku-winay.png', 'PROYECTO JAKU WINAY', 'proyecto-jaku-winay', 140, '2021-08-01 17:15:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gerencias`
--

CREATE TABLE `gerencias` (
  `idGerencias` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `ruta` text NOT NULL,
  `encargado` text NOT NULL,
  `portada` text NOT NULL,
  `contacto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gerencias`
--

INSERT INTO `gerencias` (`idGerencias`, `titulo`, `ruta`, `encargado`, `portada`, `contacto`) VALUES
(23, 'PRIMER REGIDOR', 'primer-regidor', 'FLAVIO MAMANI OVIEDO', 'vistas/img/gerencias/primer-regidor.jpg', ''),
(24, 'ALCALDE', 'alcalde', 'EDUARDO IVÁN PILCO HUANCA', 'vistas/img/gerencias/alcalde.jpg', ''),
(25, 'SEGUNDO REGIDOR', 'segundo-regidor', 'HIGIDIO PACSI CONDORI ', 'vistas/img/gerencias/segundo-regidor.jpg', ''),
(26, 'TERCER REGIDOR', 'tercer-regidor', 'ELEUTERIO JUAN SUXO COARITE', 'vistas/img/gerencias/tercer-regidor.jpg', ''),
(27, 'CUARTO REGIDOR', 'cuarto-regidor', 'RUTH QUISPE PERALTA ', 'vistas/img/gerencias/cuarto-regidor.jpg', ''),
(32, 'QUINTO REGIDOR', 'quinto-regidor', 'RAÚL MAMANI CHIPANA', 'vistas/img/gerencias/quinto-regidor.jpg', ''),
(33, 'GERENTE GENERAL DE LA SUB GERENCIA DE DESARROLLO ECONÓMICO ', 'gerente-general-de-la-sub-gerencia-de-desarrollo-economico-', 'ELMER TIPULA CAÑAZACA', 'vistas/img/gerencias/gerente-general-de-la-sub-gerencia-de-desarrollo-economico-.jpg', ''),
(34, 'SUB GERENTE DE DESARROLLO SOCIAL', 'sub-gerente-de-desarrollo-social', 'ZENÓN PAREDES', 'vistas/img/gerencias/sub-gerente-de-desarrollo-social.jpg', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantilla`
--

CREATE TABLE `plantilla` (
  `id` int(11) NOT NULL,
  `logo` text COLLATE utf8_spanish_ci NOT NULL,
  `icono` text COLLATE utf8_spanish_ci NOT NULL,
  `Hini` time NOT NULL,
  `Hfin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `plantilla`
--

INSERT INTO `plantilla` (`id`, `logo`, `icono`, `Hini`, `Hfin`) VALUES
(1, 'vistas/img/plantilla/logo.png', 'vistas/img/plantilla/icono.png', '22:33:24', '07:36:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicar`
--

CREATE TABLE `publicar` (
  `idPublicar` int(11) NOT NULL,
  `ruta` text NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `portada` text NOT NULL,
  `multimedia` text NOT NULL,
  `vistas` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `palabrasClave` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `departamento` text NOT NULL,
  `provincia` text NOT NULL,
  `distrito` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `publicar`
--

INSERT INTO `publicar` (`idPublicar`, `ruta`, `titulo`, `descripcion`, `portada`, `multimedia`, `vistas`, `categoria`, `palabrasClave`, `fecha`, `departamento`, `provincia`, `distrito`) VALUES
(100, 'mantenimiento-y-acondicionamiento-del-recinto-deportivo', 'MANTENIMIENTO Y ACONDICIONAMIENTO DEL RECINTO DEPORTIVO', 'El alcalde de San Juan del Oro Lic. Eduardo Iván Pilco Huanca la regidora Ruth Quispe Peralta y el sub gerente de Desarrollo Social Lic. Zenón Paredes, participaron de la clausura del programa nacional &#34Trabaja Perú&#34  limpieza y mantenimiento de infraestructura deportiva del estadio municipal, que se ejecutó con 43 trabajadores programados para 32 días hábiles.\nEl alcalde sanjuaneño agradeció a cada uno de los participantes que se esforzaron por dejar bien hecho su trabajo a la vez aprovechó para informar sobre las gestiones que viene realizando hasta la fecha ya sea con ADUANAS o con la comisión nacional para el desarrollo y vida sin drogas DEVIDA entre otros, mientras tanto la regidora felicita a las participantes por su labor en busca de llevar un pan al hogar, por su parte el sub gerente de Desarrollo Social dijo que muy pronto habrán encuentros de fútbol en este remozado recinto deportivo\nDATOS: Según el expediente en la tribuna solo se ha considerado realizar el RESANE de partes dañadas, pero la Municipalidad asumió con un adicional mejorando toda la tribuna con vaciado con una capa de concreto rígido de 5 cm, para que dure varios años mas.', 'vistas/img/publicacion/mantenimiento-y-acondicionamiento-del-recinto-deportivo.jpg', '[{\"foto\":\"vistas/img/multimedia/mantenimiento-y-acondicionamiento-del-recinto-deportivo/MANTENIMIENTO Y ACONDICIONAMIENTO DEL RECINTO DEPORTIVO4.jpg\"},{\"foto\":\"vistas/img/multimedia/mantenimiento-y-acondicionamiento-del-recinto-deportivo/MANTENIMIENTO Y ACONDICIONAMIENTO DEL RECINTO DEPORTIVO_1.jpg\"},{\"foto\":\"vistas/img/multimedia/mantenimiento-y-acondicionamiento-del-recinto-deportivo/MANTENIMIENTO Y ACONDICIONAMIENTO DEL RECINTO DEPORTIVO3.jpg\"},{\"foto\":\"vistas/img/multimedia/mantenimiento-y-acondicionamiento-del-recinto-deportivo/MANTENIMIENTO Y ACONDICIONAMIENTO DEL RECINTO DEPORTIVO2.jpg\"},{\"foto\":\"vistas/img/multimedia/mantenimiento-y-acondicionamiento-del-recinto-deportivo/MANTENIMIENTO Y ACONDICIONAMIENTO DEL RECINTO DEPORTIVO5.jpg\"},{\"foto\":\"vistas/img/multimedia/mantenimiento-y-acondicionamiento-del-recinto-deportivo/MANTENIMIENTO Y ACONDICIONAMIENTO DEL RECINTO DEPORTIVO6.jpg\"}]', 0, 1, 'mantenimiento', '2021-08-02 17:01:04', 'PUNO', 'SANDÍA', 'SAN JUAN DEL ORO'),
(102, 'obra-del-sistema-electrico-rural-sandia-cuarta-etapa-en-nueva-esperanza-concluira-en-diciembre-del-presente-ano', 'OBRA DEL SISTEMA ELÉCTRICO RURAL SANDIA CUARTA ETAPA EN NUEVA ESPERANZA CONCLUIRÁ EN DICIEMBRE DEL PRESENTE AÑO', 'Una de las obras de servicio que ejecuta el Ministerio de Energía y minas reinició el último fin de semana en el sector Nueva Esperanza de nuestro distrito de San Juan del Oro SALDO DE OBRA DEL SISTEMA ELÉCTRICO RURAL SANDIA CUARTA ETAPA, las autoridades y vecinos del sector agradecieron esta labor y se comprometieron a dar todas las facilidades a la empresa COCOIN SAC. Encargado de la obra\nEn la parte central la Municipalidad de San Juan del Oro mediante los regidores Flavio Mamani Oviedo y Ruth Quispe Peralta realizaron el challado correspondiente rompiendo la botella de champagne y reconociendo a las autoridades del sector y equipo técnico con la medalla de la ciudad\nLa empresa COCOIN SAC, empezó el izamiento del primer poste en esta zona, mientras tanto el Ing. Elmer Incacutipa Risalazo como residente dijo que concluirán la obra en los tiempos y plazos previsto, por su lado el Ing. Yesid Anco Gutiérrez supervisor también se ha comprometido a realizar todos los trabajos de acuerdo el expediente técnico \nLas autoridades del sector Nueva Esperanza como la señora Nalia Mamani Quispe (Teniente Gobernadora), Sayda Bellido Morales (Teniente Auxiliar) y Yoni Molleapaza (Rondas Campesinas) coordinaron todas las acciones que se dieron en el momento, de lo cual el equipo técnico quedó muy agradecido.', 'vistas/img/publicacion/obra-del-sistema-electrico-rural-sandia-cuarta-etapa-en-nueva-esperanza-concluira-en-diciembre-del-presente-ano.jpg', '[{\"foto\":\"vistas/img/multimedia/obra-del-sistema-electrico-rural-sandia-cuarta-etapa-en-nueva-esperanza-concluira-en-diciembre-del-presente-ano/215332896_950281505703556_7296291542321416008_n.jpg\"},{\"foto\":\"vistas/img/multimedia/obra-del-sistema-electrico-rural-sandia-cuarta-etapa-en-nueva-esperanza-concluira-en-diciembre-del-presente-ano/215035595_950281615703545_5606855759412057566_n.jpg\"},{\"foto\":\"vistas/img/multimedia/obra-del-sistema-electrico-rural-sandia-cuarta-etapa-en-nueva-esperanza-concluira-en-diciembre-del-presente-ano/218133886_950281579036882_6178973447621603693_n.jpg\"},{\"foto\":\"vistas/img/multimedia/obra-del-sistema-electrico-rural-sandia-cuarta-etapa-en-nueva-esperanza-concluira-en-diciembre-del-presente-ano/215782000_950281272370246_4426713888884219803_n.jpg\"},{\"foto\":\"vistas/img/multimedia/obra-del-sistema-electrico-rural-sandia-cuarta-etapa-en-nueva-esperanza-concluira-en-diciembre-del-presente-ano/220050533_950281499036890_1060238506900114233_n.jpg\"},{\"foto\":\"vistas/img/multimedia/obra-del-sistema-electrico-rural-sandia-cuarta-etapa-en-nueva-esperanza-concluira-en-diciembre-del-presente-ano/220279459_950281549036885_8598433111064633679_n.jpg\"}]', 0, 2, 'electricidad', '2021-08-02 17:15:27', 'PUNO', 'SANDÍA', 'SAN JUAN DEL ORO'),
(103, 'alcalde-de-san-juan-del-oro-entrega-2-expedientes-para-cultivo-de-palto-y-apicultura-a-presidente-ejecutivo-de-devida-fidel-pintado-pasapera', 'ALCALDE DE SAN JUAN DEL ORO ENTREGA 2 EXPEDIENTES PARA CULTIVO DE PALTO Y APICULTURA A PRESIDENTE EJECUTIVO DE DEVIDA FIDEL PINTADO PASAPERA', 'El presidente ejecutivo de la Comisión Nacional para el Desarrollo y Vida sin Drogas (Devida), Fidel Pintado Pasapera participó en la inauguración Expo Café Bicentenario 2021, que se desarrolla en la ciudad de Puno, con el objetivo de reactivar la economía de más de dos mil familias cafetaleras de los valles de Tambopata, Inambari y Esquilaya de las provincias de Sandia y Carabaya.\nEn la ceremonia central el alcalde del distrito de San Juan del Oro Lic. Eduardo Iván Pilco Huanca reconoció el apoyo que brinda esta entidad a los agricultores de nuestro distrito ya que ellos se dedican al cultivo de café, frutas y productos de pan llevar, la autoridad edil aprovechó la oportunidad para entregar dos expedientes uno para la actividad de cultivo de palto y el otro para apicultura, esperando que DEVIDA pueda financiar estas dos solicitudes, al tiempo de hacer conocer que San Juan del Oro tiene un eficiente trabajo administrativo ya que ha sido reconocido con el sello municipal y en gasto presupuestal somos los primeros en todo el país.\nPintado Pasapera al momento de inaugurar el evento dijo que hasta el fin de año se invertirá aproximadamente 10 millones de soles para proyectos y actividades de los valles de Tambopata e Inambari y una de ellas es la actividad crianza de peces tropicales para 25 organizaciones del distrito de San Juan del Oro, el presidente ejecutivo dijo que le semana siguiente los alcaldes de distritos seleccionados deberán estar en Lima para firmar la adenda y después de unos días la transferencia de los medios económicos para iniciar con la actividad.', 'vistas/img/publicacion/alcalde-de-san-juan-del-oro-entrega-2-expedientes-para-cultivo-de-palto-y-apicultura-a-presidente-ejecutivo-de-devida-fidel-pintado-pasapera.jpg', '[{\"foto\":\"vistas/img/multimedia/alcalde-de-san-juan-del-oro-entrega-2-expedientes-para-cultivo-de-palto-y-apicultura-a-presidente-ejecutivo-de-devida-fidel-pintado-pasapera/222244704_948578415873865_5876456009032501446_n.jpg\"},{\"foto\":\"vistas/img/multimedia/alcalde-de-san-juan-del-oro-entrega-2-expedientes-para-cultivo-de-palto-y-apicultura-a-presidente-ejecutivo-de-devida-fidel-pintado-pasapera/219894231_948578532540520_3513930825603130389_n.jpg\"},{\"foto\":\"vistas/img/multimedia/alcalde-de-san-juan-del-oro-entrega-2-expedientes-para-cultivo-de-palto-y-apicultura-a-presidente-ejecutivo-de-devida-fidel-pintado-pasapera/218787114_948578255873881_7290900922614197613_n.jpg\"},{\"foto\":\"vistas/img/multimedia/alcalde-de-san-juan-del-oro-entrega-2-expedientes-para-cultivo-de-palto-y-apicultura-a-presidente-ejecutivo-de-devida-fidel-pintado-pasapera/221068390_948578362540537_7913279711991383256_n.jpg\"},{\"foto\":\"vistas/img/multimedia/alcalde-de-san-juan-del-oro-entrega-2-expedientes-para-cultivo-de-palto-y-apicultura-a-presidente-ejecutivo-de-devida-fidel-pintado-pasapera/221669063_948578589207181_6773722418396194868_n.jpg\"},{\"foto\":\"vistas/img/multimedia/alcalde-de-san-juan-del-oro-entrega-2-expedientes-para-cultivo-de-palto-y-apicultura-a-presidente-ejecutivo-de-devida-fidel-pintado-pasapera/222973140_948578462540527_2114061182397391222_n.jpg\"}]', 0, 3, 'expedientes', '2021-08-02 17:22:20', 'PUNO', 'SANDÍA', 'SAN JUAN DEL ORO'),
(104, 'desfile-civico-por-el-bicentenario-se-realizo-en-av-agricultura-barrio-curva-alegre-de-san-juan-del-oro-', 'DESFILE CÍVICO POR EL BICENTENARIO SE REALIZÓ EN AV. AGRICULTURA BARRIO CURVA ALEGRE DE SAN JUAN DEL ORO ', 'La pista de desfile el presente año para el homenaje a la patria por el bicentenenario fué la Av. Agricultura, como se sabe esta obra de pista y veredas en la cuadras 6 y 7 se ejecutó en la gestión actual encabezado por el alcalde Lic. Eduardo Iván Pìlco Huanca y regidores gestión 2019 2022\nLas autoridades multisectoriales vieron por conveniente realizar el desfile en esta parte de San Juan del Oro teniendo en cuenta la amplitud y descentralizar esta clase de actividades donde participan ciudadanos en gran cantidad', 'vistas/img/publicacion/desfile-civico-por-el-bicentenario-se-realizo-en-av-agricultura-barrio-curva-alegre-de-san-juan-del-oro-.jpg', '[{\"foto\":\"vistas/img/multimedia/desfile-civico-por-el-bicentenario-se-realizo-en-av-agricultura-barrio-curva-alegre-de-san-juan-del-oro-/3.jpg\"},{\"foto\":\"vistas/img/multimedia/desfile-civico-por-el-bicentenario-se-realizo-en-av-agricultura-barrio-curva-alegre-de-san-juan-del-oro-/2.jpg\"},{\"foto\":\"vistas/img/multimedia/desfile-civico-por-el-bicentenario-se-realizo-en-av-agricultura-barrio-curva-alegre-de-san-juan-del-oro-/4.jpg\"},{\"foto\":\"vistas/img/multimedia/desfile-civico-por-el-bicentenario-se-realizo-en-av-agricultura-barrio-curva-alegre-de-san-juan-del-oro-/6.jpg\"},{\"foto\":\"vistas/img/multimedia/desfile-civico-por-el-bicentenario-se-realizo-en-av-agricultura-barrio-curva-alegre-de-san-juan-del-oro-/8.jpg\"},{\"foto\":\"vistas/img/multimedia/desfile-civico-por-el-bicentenario-se-realizo-en-av-agricultura-barrio-curva-alegre-de-san-juan-del-oro-/5.jpg\"},{\"foto\":\"vistas/img/multimedia/desfile-civico-por-el-bicentenario-se-realizo-en-av-agricultura-barrio-curva-alegre-de-san-juan-del-oro-/9.jpg\"},{\"foto\":\"vistas/img/multimedia/desfile-civico-por-el-bicentenario-se-realizo-en-av-agricultura-barrio-curva-alegre-de-san-juan-del-oro-/10.jpg\"},{\"foto\":\"vistas/img/multimedia/desfile-civico-por-el-bicentenario-se-realizo-en-av-agricultura-barrio-curva-alegre-de-san-juan-del-oro-/11.jpg\"},{\"foto\":\"vistas/img/multimedia/desfile-civico-por-el-bicentenario-se-realizo-en-av-agricultura-barrio-curva-alegre-de-san-juan-del-oro-/12.jpg\"}]', 0, 1, 'desfile', '2021-08-02 18:56:00', 'PUNO', 'SANDÍA', 'SAN JUAN DEL ORO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pvideos`
--

CREATE TABLE `pvideos` (
  `idPvideos` int(11) NOT NULL,
  `enlace` text NOT NULL,
  `titulo` text NOT NULL,
  `categoria` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pvideos`
--

INSERT INTO `pvideos` (`idPvideos`, `enlace`, `titulo`, `categoria`, `fecha`) VALUES
(27, '<iframe src=\"https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2F302831833781863%2Fvideos%2F1031230654316079%2F&show_text=false&width=560&t=0\" width=\"560\" height=\"314\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>', 'INSTITUCIÓN EDUCATIVA SANTA MARÍA DE LA PROVIDENCIA FE Y ALEGRÍA Nº 56 DE SAN JUAN DEL ORO ES NOTICIA A NIVEL NACIONAL, SOBRE EL REINICIO DE LABORES ESCOLARES EN LOS TRES NIVELES', '1', '2021-08-02 01:04:04'),
(32, '<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/fy3UhxXFVAs\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'CAFÉ DE ALTURA - SAN JUAN DEL ORO, SANDIA, PUNO', '1', '2021-08-02 01:16:30'),
(33, '<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/CtOqLC1I7Ko\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'DOCUMENTAL CAFES ESPECIALES CECOVASA LTDA', '1', '2021-08-02 01:17:30'),
(35, '<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/X5jYBxhNh6w\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'MEJORAMIENTO DE LA CARRETERA, SAN JUAN DEL ORO, BOTIJANI, CHUHAMAYO, YURAJMAYO – QUISPICANCHIS', '3', '2021-08-02 01:22:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `dni` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `user` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `modo` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `verificacion` int(11) NOT NULL,
  `emailEncriptado` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `codigo`, `dni`, `nombre`, `user`, `password`, `email`, `modo`, `foto`, `verificacion`, `emailEncriptado`, `fecha`) VALUES
(53, '162894', '', 'usuarioone', 'estudiante', '$2a$07$asxx54ahjppf45sd87a5aueuBkuSURBtX031YZ8zZTYNNVwIDNOwS', 'estudiante@gmail.com', 'directo', 'vistas/img/usuarios/53/585.png', 0, 'f652b531bff7a32fc1b3b4b59f200070', '2021-02-15 15:47:01'),
(54, '12345786', '', 'docenteone', 'docente', '$2a$07$asxx54ahjppf45sd87a5au5.80yzYkzzYfm4v0hxFjblcuW51TwIK', 'docente@gmail.com', 'directo', 'vistas/img/usuarios/54/956.jpg', 0, '33ff7d62b29b24e8bca8af8531159ea9', '2021-02-15 15:46:30'),
(86, '73104786', '', 'Axel flores mamani', 'axel', '$2a$07$asxx54ahjppf45sd87a5auK5NYo0IVC7CCoZgximaPAKw8SyTE9qe', 'axel@gmail.com', 'directo', 'vistas/img/usuarios/86/903.jpg', 0, '3218da89280d03db1d26f8622068665b', '2021-02-23 00:13:35'),
(87, '12312312', '', 'Martin lopez aliaga', 'martin', '$2a$07$asxx54ahjppf45sd87a5auNRvLS0n1cDa8U2FlopsFBInpxxpEiiG', 'martin@gmail.com', 'directo', 'vistas/img/usuarios/87/723.jpg', 0, 'eb20df43d0bdb3ba79f3143e3267e90a', '2021-02-23 03:09:40');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  ADD PRIMARY KEY (`idCarrusel`);

--
-- Indices de la tabla `gerencias`
--
ALTER TABLE `gerencias`
  ADD PRIMARY KEY (`idGerencias`);

--
-- Indices de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `publicar`
--
ALTER TABLE `publicar`
  ADD PRIMARY KEY (`idPublicar`);

--
-- Indices de la tabla `pvideos`
--
ALTER TABLE `pvideos`
  ADD PRIMARY KEY (`idPvideos`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  MODIFY `idCarrusel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `gerencias`
--
ALTER TABLE `gerencias`
  MODIFY `idGerencias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `publicar`
--
ALTER TABLE `publicar`
  MODIFY `idPublicar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT de la tabla `pvideos`
--
ALTER TABLE `pvideos`
  MODIFY `idPvideos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
