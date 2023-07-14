/* let content = document.querySelector('.formTeam')

function cerrar(){
    content.style.display="none"
}

function abrirForm(){
    content.style.display = "flex";
}

const comunas = [
    "Ciudad",
    "Popular",
    "Santa_Cruz",
    "Manrique",
    "Aranjuez",
    "Castilla",
    "Doce_de_Octubre",
    "Robledo",
    "Villa_Hermosa",
    "Buenos_aires",
    "La_Candelaria",
    "Laureles",
    "La_América",
    "San_javier",
    "El_Poblado",
    "Guayabal",
    "Belén",
    "Palmitas",
    "San_cristobal",
    "Altavista",
    "San_Antonio_De_Prado",
    "Santa_Elena",
  ];
  
  const barriosPorComuna = {
    Popular: [
      "Aldea Pablo VI",
      "Carpinelo",
      "El Compromiso",
      "Granizal",
      "La avanzada",
      "La Esperanza N° 2",
      "Moscú N° 2",
      "Popular",
      "San Pablo",
      "Santo Domingo Sabio N° 2",
      "Villa Guadalupe",
    ],
    Altavista: [
      "Aguas Frías",
      "Altavista Central",
      "Cabecera Altavista",
      "El corazon El Morro",
      "El Jardín",
      "La Esperanza",
      "Patiobonito - Buga",
      "San Jóse del Manzanillo",
      "San Pablo",
      "Suburbano Aguas Frías",
      "Suburbano Altavista",
      "Suburbano El Corazón",
      "Suburbano El Manzanillo",
      "Suburbano La Esperanza",
      "Suburbano Patio Bonito",
      "Suburbano San Pablo",
      "Zona De Expansión Altavista",
      "Zona De Expansión Belen Rincón",
      "Zona De Expansión El Noral",
    ],
    Aranjuez: [
      "Aranjuez",
      "Berlín",
      "Bermejal - Los Álamos",
      "Brasilia",
      "Campo Valdes N° 1",
      "Jardín Botánico",
      "La piñuela",
      "Las Esmeraldas",
      "Manrique Central N° 1",
      "Miranda",
      "Moravia",
      "Palermo",
      "Parque Norte",
      "San Isidro",
      "San Pedro",
      "Sevilla",
    ],
    Belén: [
      "Altavista",
      "Belén",
      "Cerro Nutibara",
      "Diego Echevarría",
      "El Nogal - Los Almendros",
      "El Rincón",
      "Fátima",
      "Granada",
      "La Gloria",
      "La Hondonada",
      "La Loma de Los Bernal",
      "La mota",
      "La Palma",
      "Las Mercedes",
      "Las Playas",
      "Las Violetas",
      "Los Alpes",
      "Miravalle",
      "Nueva Villa de Aburrá",
      "Rosales",
      "San Bernardo",
    ],
    Buenos_aires: [
        "Alejandro Echevarria",
        "Asomadera N° 1",
        "Asomadera N° 2",
        "Asomadera N° 3",
        "Barrio Caicedo",
        "Bomboná N° 2",
        "Buenos Aires",
        "Cataluña",
        "El Salvador",
        "Gerona",
        "Juan Pablo II",
        "La Milagrosa",
        "Loreto",
        "Los Cerros el Vergel",
        "Miraflores",
        "Ocho de Marzo"
    ],
    Castilla: [
        "Alfonso Lopez",
        "Belalcazar",
        "Boyacá",
        "Caribe",
        "Castilla",
        "Cementerio Universal",
        "Everfit",
        "Florencia",
        "Francisco Antonio Zea",
        "Girardot",
        "Héctor Abad Gomez",
        "Las Brisas",
        "Oleoducto",
        "Plaza de Feriaz",
        "Progreso",
        "Tejelo",
        "Terminal de Transporte",
        "Toscana",
        "Tricentenario"
    ],Doce_de_Octubre: [
        "Doce de Octubre N° 1",
        "Doce de Octubre N° 2",
        "El Triunfo",
        "Kennedy",
        "La Esperanza",
        "Mirador del Doce",
        "Pedregal",
        "Picachito",
        "Picacho",
        "Progreso N° 2",
        "San Martín de Porres",
        "Santander"
    ],Ciudad: [
        "No aplica"
    ],El_Poblado:[
        "Alejandría",
        "Altos del Poblado",
        "Astorga",
        "Barrio Colombia",
        "Castropol",
        "El Castillo",
        "El Diamante N° 2",
        "El Poblado",
        "El tesoro",
        "La Aguacatala",
        "La Florida",
        "Lalinde",
        "Las Lomas N° 1",
        "Las Lomas N° 2",
        "Los Balsos N° 1",
        "Los Balsos N° 2",
        "Los Naranjos",
        "Manila",
        "Patio Bonito",
        "San Lucas",
        "Santa Maria de Los Ángeles",
        "Simesa",
        "Villa Carlota"
    ],Guayabal: [
        "Campo Amor",
        "Cristo Rey",
        "El Rodeo",
        "Guayabal",
        "La Colina",
        "Noel",
        "Parque Juan Pablo II",
        "Santa Fe",
        "Shellmar",
        "Tenche",
        "Trinidad",
    ],La_América:[
        "Barrio Cristóbal",
        "Calasanz",
        "Calasanz Parte Alta",
        "Campo Alegre",
        "El Danubio",
        "Ferrini",
        "La América",
        "La Floresta",
        "Lós Pinos",
        "Santa Lucia",
        "Santa Mónica",
        "Santa Teresita",
        "Simón Bolivar"
    ],La_Candelaria: [
        "Barrio Colón",
        "Bomboná N° 1",
        "Boston",
        "Calle Nueva",
        "Centro Administrativo",
        "Corazón de Jesus",
        "El chagualo",
        "Estación Villa",
        "Guayaquil",
        "Hospital San Vicente",
        "Jesús Nazareno",
        "La Alpujarra",
        "La Candelaria",
        "Las Palmas",
        "Lós Angeles",
        "Perpetuo Socorro",
        "Prado",
        "San Benito",
        "San Diego",
        "Villa Nueva"
    ],Laureles:[
        "Bolivariana",
        "Carlos E. Restrepo",
        "Cuarta Brigada",
        "El Velódromo",
        "Estadio",
        "Florida Nueva",
        "La Castellana",
        "Las Acacias",
        "Laureles",
        "Lorena",
        "Los Colores",
        "Los Conquistadores",
        "Naranjal",
        "San Joaquín",
        "Suramericana",
        "U.D Atanasio Girardot",
        "Universidad Pontificia"
    ],Manrique:[
        "Campo Valdes N° 2",
        "El Pomar",
        "El Raizal",
        "La Salle",
        "Las Granjas",
        "La Cruz, Oriente",
        "Manrique Central N° 2",
        "Manrique Oriental",
        "Manrique Oriente",
        "Maria Cano - Carambolas",
        "San José La Cima N° 1",
        "San José La Cima N° 2",
        "Santa Inés",
        "Versalles N° 1",
        "Versalles N° 2"
    ],Palmitas:[
        "Cabecera Palmitas",
        "La Aldea",
        "La Frisola",
        "La Potrera Miserenga",
        "La Sucia",
        "La volcana-Guayabal",
        "Sector Central",
        "Suburbano La Aldea",
        "Suburbano Palmitas",
        "Suburbano Potrera Miserenga",
        "Urquita"
    ],Robledo : [
        "Altamira",
        "Aures N° 1",
        "Aures N° 2",
        "Barrio Facultad de Minas - Facultad de Minas Universidad Nacional",
        "Bello Horizonte",
        "Bosques San Pablo",
        "Cerro El Volador",
        "Córdoba",
        "Cucaracho",
        "El Diamante",
        "Fuente Clara",
        "La Pilaraca",
        "Liceo Universidad de Antioquia",
        "López de Mesa",
        "Monteclaro",
        "Nazareth",
        "Nueva Villa de la Iguana",
        "Olaya Herrera",
        "Pajarito",
        "Palenque",
        "Robledo",
        "San Germán",
        "Santa Margarita",
        "Universidad de Antioquia",
        "Villa Flora"
    ],San_Antonio_De_Prado: [
        "Cabecera San Antonio De Prado",
        "El astillero",
        "El salado",
        "La Florida",
        "La verde",
        "Montañita",
        "Potrerito",
        "San José",
        "Suburbano Potrerito",
        "Yarumalito",
        "Zona Expansión San Antonio"
    ],San_cristobal:[
        "Boquerón",
        "Cabecera San Cristobal",
        "El Carmelo",
        "El Llano",
        "El Patio",
        "El Picacho",
        "El Uvito",
        "El Yolombo",
        "La Cuchilla",
        "La Ilusión",
        "La Loma",
        "La Palma ",
        "Las Playas",
        "Naranjal",
        "Pajarito",
        "Pedregal Alto",
        "San Cristobal",
        "San Jóse de la Montaña",
        "Suburbano del Llano",
        "Suburbano la Cuchilla",
        "Suburbano la Loma",
        "Suburbano Palma Patio",
        "Suburbano Pedregal Alto",
        "Suburbano Travesias",
        "Travesías",
        "Zona Expansión Altos de Calazans",
        "Zona Expansión Pajarito",
        "Zona Expansión Eduardo Santos"
    ],San_Javier:[
        "Antonio Nariño",
        "Belencito",
        "Betania",
        "Blanquizal",
        "Eduardo Santos",
        "El corazón",
        "El pesebre",
        "El salado",
        "El socorro",
        "Juan XIII - La Quiebra",
        "La Gabriela",
        "La pradera",
        "Las independencias",
        "Los Alcázares",
        "Metropolitano",
        "Nuevos Conquistadores",
        "San Javier N° 1",
        "San Javer N° 2",
        "Santa Rosa de Lima",
        "Veinte de Julio"
    ],Santa_Cruz:[
        "Andalucía",
        "El Playón de los Comuneros",
        "La Francia",
        "La Frontera",
        "La Isla",
        "La Rosa",
        "Moscú N° 1",
        "Pablo VI",
        "Santa Cruz",
        "Villa del Socorro",
        "Villa Niza"
    ],Santa_Elena:[
        "Barro Blanco",
        "Barro Blanco",
        "Cabecera Santa Elena",
        "El Cerro",
        "El llano",
        "El Placer",
        "El Plan",
        "Las Palmas",
        "Mazo",
        "Media Luna",
        "Piedra Gorda",
        "Piedras Blancas-Matazano",
        "Santa Elena Sector Central",
        "Suburbano Barro Blanco",
        "Suburbano El Llano",
        "Suburbano el Tesoro",
        "Suburbano Matasano 1",
        "Suburbano Matasano 3",
        "Suburbano Piedra Gorda",
        "Suburbano Santa Elena Central"
    ],Villa_Hermosa:[
        "Batallón Girardot",
        "El Pinal",
        "Enciso",
        "La ladera",
        "La libertad",
        "La Mansión",
        "Las Estancias",
        "La Sierra",
        "Llanaditas",
        "Los Mangos",
        "San Antonio",
        "San Miguel",
        "Santa Lucía - Las Estancias",
        "Sucre",
        "Trece de Noviembre",
        "Villa Hermosa",
        "Villa Lilliam",
        "Villa Tina",
        "Villa Turbay"
    ]
    
  };
  
  
  let selectComuna = document.getElementById("comuna");
  let selectBarrio = document.getElementById("barrio");

  comunas.sort()
  
  // Agregar las opciones de comunas al elemento <select> de comunas
  comunas.forEach((comuna) => {
    let option = document.createElement("option");
    option.text = comuna;
    selectComuna.appendChild(option);
  });
  
  // Función para actualizar las opciones de barrios cuando se selecciona una comuna
  function actualizarBarrios() {
    let comunaSeleccionada = selectComuna.value;
  
    // Limpiar opciones anteriores
    selectBarrio.innerHTML = "<option>Seleccione su barrio</option>";
  
    // Obtener los barrios correspondientes a la comuna seleccionada
    let barrios = barriosPorComuna[comunaSeleccionada];
  
    // Agregar las opciones de barrios al elemento <select> de barrios
    barrios.forEach((barrio) => {
      let option = document.createElement("option");
      option.text = barrio;
      selectBarrio.appendChild(option);
    });
  }
  
  // Agregar evento change al elemento <select> de comunas
  selectComuna.addEventListener("change", actualizarBarrios);
  


  let tpvoluntarios = document.getElementById("tpvoluntario")

  const tipoVoluntario = [
    "Quiero ayudar con firmas",
    "Quiero pertenecer al equipo de volanteo",
    "Quiero ayudar en eventos",
    "Quiero un balconero",
    "Quiero un microperforado para mi carro",
    "Quiero ser testigo electoral",
    "Quiero ser pregonero",
    "Quiero donar",
    "Tengo capacidad de convocatoria",
    "Soy artista",
    "Soy líder(esa) comunitario",
    "Otro"
  ]

  tipoVoluntario.forEach((tipo)=>{
    let option = document.createElement("option")
    option.text = tipo
    tpvoluntarios.appendChild(option)
  }) */