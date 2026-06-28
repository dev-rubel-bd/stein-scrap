<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Corporate Configuration (Edit here to change details sitewide)
$company_phone = '(305) 635-5435';
$company_whatsapp = '13056355435'; // International format (CountryCode + Number, no spaces or special symbols)
$company_email = 'info@steinscrap.com';

// Handle language selection via query param or session
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'] === 'es' ? 'es' : 'en';
    $_SESSION['lang'] = $lang;
} else {
    $lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en';
}

$t = [];

// Navigation
$t['nav_home'] = [
    'en' => 'Home',
    'des' => 'Inicio',
    'es' => 'Inicio'
];
$t['nav_products'] = [
    'en' => 'Materials Catalog',
    'es' => 'Catálogo de Materiales'
];
$t['nav_services'] = [
    'en' => 'Export Services',
    'es' => 'Servicios de Exportación'
];
$t['nav_about'] = [
    'en' => 'About Us',
    'es' => 'Sobre Nosotros'
];
$t['nav_contact'] = [
    'en' => 'Contact / Inquire',
    'es' => 'Contacto / Consultas'
];
$t['nav_get_quote'] = [
    'en' => 'Request Quote',
    'es' => 'Solicitar Cotización'
];

// Footer & Meta
$t['meta_title'] = [
    'en' => 'STEIN SCRAP, INC. | Global Recycled Metals & Commodities Exporter',
    'es' => 'STEIN SCRAP, INC. | Exportador Global de Metales y Productos Reciclados'
];
$t['meta_desc'] = [
    'en' => 'STEIN SCRAP, INC. (Reg 3352182). Industry leader in supplying high-purity copper, aluminum, iron, electronic waste, and plastics. Port of Los Angeles container shipping worldwide.',
    'es' => 'STEIN SCRAP, INC. (Reg 3352182). Líder en el suministro de cobre, aluminio, hierro, e-waste y plásticos. Envíos desde el Puerto de Los Ángeles a nivel mundial.'
];
$t['footer_reg'] = [
    'en' => 'Registration No. 3352182',
    'es' => 'Número de Registro 3352182'
];
$t['footer_desc'] = [
    'en' => 'Global materials trading and localized export processing. Supplying international steel mills, foundries, and manufacturers with premium recycled feedstock.',
    'es' => 'Comercio global de materiales y procesamiento de exportación. Suministramos materias primas recicladas de primera calidad a fundiciones y fabricantes mundiales.'
];
$t['footer_links'] = [
    'en' => 'Corporate Links',
    'es' => 'Enlaces Corporativos'
];
$t['footer_hours'] = [
    'en' => 'Broker Business Hours',
    'es' => 'Horario Comercial de Corretaje'
];
$t['footer_contact'] = [
    'en' => 'Export Offices',
    'es' => 'Oficinas de Exportación'
];
$t['office_title'] = [
    'en' => 'Corporate Headquarters',
    'es' => 'Sede Corporativa'
];
$t['yard_title'] = [
    'en' => 'Logistics & Loading Yard',
    'es' => 'Patio de Logística y Carga'
];
$t['hours_weekday'] = [
    'en' => 'Monday - Friday: 7:30 AM - 5:00 PM (PST)',
    'es' => 'Lunes - Viernes: 7:30 AM - 5:00 PM (PST)'
];
$t['hours_sat'] = [
    'en' => 'Saturday: 7:00 AM - 3:00 PM (PST)',
    'es' => 'Sábado: 7:00 AM - 3:00 PM (PST)'
];
$t['hours_sun'] = [
    'en' => 'Sunday: Closed',
    'es' => 'Domingo: Cerrado'
];

// Home Page
$t['hero_badge'] = [
    'en' => 'Premium Quality & Global Shipping Guaranteed',
    'es' => 'Garantía de Calidad Premium y Envío Global'
];
$t['hero_title'] = [
    'en' => 'Global Supplier of Industrial Recycled Raw Materials',
    'es' => 'Proveedor Global de Materias Primas Recicladas de Grado Industrial'
];
$t['hero_subtitle'] = [
    'en' => 'STEIN SCRAP, INC. supplies high-volume, premium grade recycled metals, paper, and polymer films to manufacturing and smelting industries worldwide. Export ready from Los Angeles.',
    'es' => 'STEIN SCRAP, INC. suministra metales reciclados, papel y películas de polímeros de primera calidad a industrias manufactureras y de fundición en todo el mundo. Listo para exportación desde Los Ángeles.'
];
$t['hero_cta_sell'] = [
    'en' => 'Browse Materials',
    'es' => 'Ver Materiales'
];
$t['hero_cta_rent'] = [
    'en' => 'Request Supply Quote',
    'es' => 'Solicitar Cotización'
];
$t['usp_header'] = [
    'en' => 'Why Choose Stein Scrap as Your Supplier?',
    'es' => '¿Por qué elegir a Stein Scrap como su proveedor?'
];
$t['usp_1_title'] = [
    'en' => 'Competitive Bulk Pricing',
    'es' => 'Precios Competitivos a Granel'
];
$t['usp_1_desc'] = [
    'en' => 'We offer highly competitive pricing indexed to LME and COMEX, ensuring maximum cost-efficiency for your manufacturing supply chain.',
    'es' => 'Ofrecemos precios altamente competitivos indexados a la LME y COMEX, garantizando la máxima eficiencia de costos para su cadena de suministro.'
];
$t['usp_2_title'] = [
    'en' => 'Certified Quality Grade',
    'es' => 'Grado de Calidad Certificado'
];
$t['usp_2_desc'] = [
    'en' => 'Rigorous chemical analysis, moisture checks, and SGS inspections guarantee all material batches meet strict export grade standards.',
    'es' => 'El riguroso análisis químico y las inspecciones de SGS garantizan que todos los lotes cumplan con los estrictos estándares de grado de exportación.'
];
$t['usp_3_title'] = [
    'en' => 'Global Logistics & Freight',
    'es' => 'Logística y Fletes Globales'
];
$t['usp_3_desc'] = [
    'en' => 'We handle complete freight forwarding, customs clearance, and container shipping from the Port of Los Angeles to global destinations.',
    'es' => 'Manejamos el transporte completo, despacho de aduanas y envío de contenedores desde el Puerto de Los Ángeles a destinos globales.'
];
$t['usp_4_title'] = [
    'en' => 'Sustainable circular Feedstock',
    'es' => 'Materia Prima Circular Sostenible'
];
$t['usp_4_desc'] = [
    'en' => 'Our high-purity recycled raw materials reduce carbon footprints and energy consumption for downstream smelters and factories.',
    'es' => 'Nuestras materias primas recicladas de alta pureza reducen la huella de carbono y el consumo de energía para las fundiciones.'
];
$t['home_about_headline'] = [
    'en' => 'Los Angeles\' Premier Recycled Materials Exporter & Broker',
    'es' => 'El Principal Exportador y Corredor de Materiales Reciclados de Los Ángeles'
];
$t['home_about_text'] = [
    'en' => 'Operating our corporate headquarters in Century City and logistics sorting yard at E Pico Blvd, STEIN SCRAP, INC. is a leading exporter of ferrous/non-ferrous metals, paper cardboard, and plastic films. We supply manufacturers globally with premium-grade recycled feedstock, certified to international purity standards.',
    'es' => 'Operando desde nuestra sede corporativa en Century City y nuestro patio en E Pico Blvd, STEIN SCRAP, INC. es un exportador líder de metales, cartón y películas plásticas. Suministramos materias primas recicladas de primera calidad a fabricantes de todo el mundo.'
];
$t['home_cta_title'] = [
    'en' => 'Secure Your Manufacturing Raw Materials Today',
    'es' => 'Asegure sus Materias Primas de Fabricación Hoy'
];
$t['home_cta_desc'] = [
    'en' => 'Get a customized supply contract quote or calculate current spot rates for our full range of export-ready commodities.',
    'es' => 'Obtenga una cotización de contrato de suministro personalizada o calcule las tarifas actuales para nuestros productos listos para exportar.'
];

// About Us Page
$t['about_title'] = [
    'en' => 'About Stein Scrap, Inc.',
    'es' => 'Acerca de Stein Scrap, Inc.'
];
$t['about_intro'] = [
    'en' => 'Supplying the global manufacturing industry with high-purity recycled commodities.',
    'es' => 'Suministrando a la industria manufacturera mundial productos reciclados de alta pureza.'
];
$t['about_history_title'] = [
    'en' => 'Our Identity & Credentials',
    'es' => 'Nuestra Identidad y Credenciales'
];
$t['about_history_text'] = [
    'en' => 'STEIN SCRAP, INC. is a registered corporate entity under State Registration Number 3352182. Operating from our central offices at 2220 Avenue of the Stars, Los Angeles, and our logistics and sorting yard at 3000 E Pico Blvd, we have built a reputation for trust, financial transparency, and competitive pricing. We trade and export large-scale industrial scrap commodities to major steel mills, copper smelters, paper mills, and plastics reclaimers internationally.',
    'es' => 'STEIN SCRAP, INC. es una entidad corporativa registrada bajo el número de registro estatal 3352182. Operando desde 2220 Avenue of the Stars y nuestro patio en 3000 E Pico Blvd, exportamos productos de chatarra industrial a gran escala a acerías, fundiciones de cobre y plantas de reciclaje internacionales.'
];
$t['about_eco_title'] = [
    'en' => 'Ecological Responsibility & Safety standards',
    'es' => 'Responsabilidad Ecológica y Estándares de Seguridad'
];
$t['about_eco_text'] = [
    'en' => 'At STEIN SCRAP, INC., eco-friendliness is a core operational principle. Our sorting yard uses state-of-the-art concrete slab drainage layouts that catch and filter grease or coolant elements, preventing groundwater contamination. We verify the environmental compliance of all our supply chain sources, promoting responsible sourcing and carbon reduction auditing for our buyers.',
    'es' => 'En STEIN SCRAP, INC., la ecología es un principio operativo clave. Nuestro patio utiliza sistemas de drenaje avanzados sobre losas de concreto. Además, verificamos el cumplimiento ambiental de todas nuestras fuentes de cadena de suministro.'
];
$t['stat_payouts'] = [
    'en' => 'Material Export Value',
    'es' => 'Valor de Material Exportado'
];
$t['stat_tons'] = [
    'en' => 'Tons Shipped Daily',
    'es' => 'Toneladas Enviadas Diarias'
];
$t['stat_customers'] = [
    'en' => 'Global Buying Clients',
    'es' => 'Clientes Compradores Globales'
];

// Services Page
$t['services_headline'] = [
    'en' => 'Industrial Supply & Export Services',
    'es' => 'Servicios de Suministro Industrial y Exportación'
];
$t['services_intro'] = [
    'en' => 'Global trading, quality verification, and custom supply arrangements for corporate material buyers.',
    'es' => 'Comercio global, verificación de calidad y acuerdos de suministro personalizados para compradores corporativos.'
];
$t['service_1_name'] = [
    'en' => 'Bulk Commodity Export & Trading',
    'es' => 'Exportación y Comercio de Productos a Granel'
];
$t['service_1_desc'] = [
    'en' => 'We export high-volume containers of copper, aluminum, and steel to mills and foundries globally. We manage freight booking, customs clearance, and SGS certification to guarantee seamless door-to-door delivery.',
    'es' => 'Exportamos contenedores de cobre, aluminio y acero a fundiciones de todo el mundo. Gestionamos la reserva de fletes, despacho de aduanas y certificación SGS para garantizar una entrega sin problemas.'
];
$t['service_2_name'] = [
    'en' => 'Custom Supply Contracts & Spot Buys',
    'es' => 'Contratos de Suministro y Compras Spot'
];
$t['service_2_desc'] = [
    'en' => 'Whether you require a one-time spot shipment of 100 metric tons of copper cathodes or a multi-year supply contract for LDPE films, we structure transactions with flexible letter of credit (L/C) or wire payment terms.',
    'es' => 'Ya sea que necesite un envío spot único de 100 toneladas de cátodos de cobre o un contrato a largo plazo de películas de LDPE, estructuramos transacciones con cartas de crédito (L/C) flexibles.'
];
$t['service_3_name'] = [
    'en' => 'Materials Inspection & SGS Checks',
    'es' => 'Inspección de Materiales y Control SGS'
];
$t['service_3_desc'] = [
    'en' => 'We arrange third-party inspections (such as SGS, CCIC) at our Los Angeles loading yard to verify chemical composition, moisture levels, and bale density before container sealing, ensuring complete buyer protection.',
    'es' => 'Organizamos inspecciones de terceros (como SGS, CCIC) en nuestro patio de Los Ángeles para verificar la composición química, niveles de humedad y densidad antes del sellado del contenedor.'
];
$t['service_4_name'] = [
    'en' => 'Foundry & Mill Feedstock Programs',
    'es' => 'Alimentación para Fundiciones y Molinos'
];
$t['service_4_desc'] = [
    'en' => 'We customize materials preparation (e.g. customized dimensions of structural steel scrap, shredded aluminum scrap, or custom baling sizes of OCC paper) to fit the specific furnace configurations and feeding machinery of your factory.',
    'es' => 'Personalizamos la preparación del material (dimensiones de acero estructural, aluminio triturado o pacas de OCC) para adaptarnos a las configuraciones específicas del horno de su fábrica.'
];

// Products Page
$t['products_title'] = [
    'en' => 'Export-Ready Commodities Catalog',
    'es' => 'Catálogo de Productos Listos para Exportar'
];
$t['products_intro'] = [
    'en' => 'Explore our industrial commodities list. We supply high-purity materials with global container shipping from the Port of Los Angeles.',
    'es' => 'Explore nuestra lista de productos industriales. Suministramos materiales de alta pureza con envíos en contenedores desde el Puerto de Los Ángeles.'
];
$t['calc_title'] = [
    'en' => 'Materials Purchase Cost Estimator',
    'es' => 'Estimador de Costo de Compra de Materiales'
];
$t['calc_desc'] = [
    'en' => 'Select a commodity and input the required weight to view an estimated bulk pricing quotation based on current LME indicators.',
    'es' => 'Seleccione un producto e ingrese el peso requerido para ver una cotización estimada de precios a granel basada en los índices LME.'
];
$t['calc_weight'] = [
    'en' => 'Volume (lbs)',
    'es' => 'Volumen (libras)'
];
$t['calc_result'] = [
    'en' => 'Estimated FOB LA Price',
    'es' => 'Precio Estimado FOB LA'
];
$t['calc_disclaimer'] = [
    'en' => 'Values are FOB Port of Los Angeles estimates, subject to final contract terms, freight charges, and daily commodity market indices.',
    'es' => 'Los valores son estimaciones FOB Puerto de Los Ángeles, sujetos a los términos finales del contrato, fletes e índices diarios.'
];

// Contact Page
$t['contact_headline'] = [
    'en' => 'Request Pricing & Supply Contracts',
    'es' => 'Solicitar Precios y Contratos de Suministro'
];
$t['contact_intro'] = [
    'en' => 'Inquire about our materials catalog, request supply quotes, or establish a contract with our export broker team.',
    'es' => 'Consulte sobre nuestro catálogo de materiales, solicite cotizaciones de suministro o firme contratos con nuestro equipo de corredores.'
];
$t['form_name'] = [
    'en' => 'Corporate Contact Name',
    'es' => 'Nombre del Contacto Corporativo'
];
$t['form_email'] = [
    'en' => 'Business Email Address',
    'es' => 'Correo Electrónico Comercial'
];
$t['form_phone'] = [
    'en' => 'Telephone / WhatsApp',
    'es' => 'Teléfono / WhatsApp'
];
$t['form_interest'] = [
    'en' => 'Inquiry Type',
    'es' => 'Tipo de Consulta'
];
$t['opt_buy_metals'] = [
    'en' => 'Purchase Materials (Copper / Brass / etc.)',
    'es' => 'Comprar Materiales (Cobre / Latón / etc.)'
];
$t['opt_buy_aluminum'] = [
    'en' => 'Purchase Aluminum Alloys',
    'es' => 'Comprar Aleaciones de Aluminio'
];
$t['opt_buy_paper_plastic'] = [
    'en' => 'Purchase Paper / Cardboard / Plastics',
    'es' => 'Comprar Papel / Cartón / Plásticos'
];
$t['opt_other'] = [
    'en' => 'Long-term Supply / Broker Inquiry',
    'es' => 'Suministro a Largo Plazo / Consulta de Corredor'
];
$t['form_materials'] = [
    'en' => 'Required Material & Volume (Tons/lbs)',
    'es' => 'Material Requerido y Volumen (Toneladas/libras)'
];
$t['form_message'] = [
    'en' => 'Detailed Supply Requirements',
    'es' => 'Requisitos Detallados de Suministro'
];
$t['form_message_placeholder'] = [
    'en' => 'Describe your required specifications, delivery port destination, and contract duration...',
    'es' => 'Describa sus especificaciones requeridas, puerto de destino de entrega y duración del contrato...'
];
$t['form_file'] = [
    'en' => 'Upload Specifications Document / LOI (Optional)',
    'es' => 'Subir Documento de Especificaciones / LOI (Opcional)'
];
$t['form_file_desc'] = [
    'en' => 'Drag & drop your Letter of Intent (LOI) or purchase specs document here.',
    'es' => 'Arrastre su Carta de Intención (LOI) o documento de especificaciones aquí.'
];
$t['form_submit'] = [
    'en' => 'Submit Purchase Inquiry',
    'es' => 'Enviar Consulta de Compra'
];

// Lead Info Details
$t['submit_quote_received'] = [
    'en' => 'Purchase Inquiry Logged',
    'es' => 'Consulta de Compra Registrada'
];

// Load product data from JSON database
$json_path = __DIR__ . '/../data/products.json';
$products_data = [];
if (file_exists($json_path)) {
    $json_content = file_get_contents($json_path);
    $products_data = json_decode($json_content, true);
}
if (!is_array($products_data) || empty($products_data)) {
    $products_data = [
        'copper_wire' => [
            'name' => ['en' => '99.99% Copper Wire Scrap', 'es' => 'Alambre de Cobre Chatarra 99.99%'],
            'category' => 'Copper',
            'desc' => ['en' => 'Clean, unalloyed copper wire.', 'es' => 'Alambre de cobre limpio.'],
            'specs' => ['en' => 'Purity: 99.99% min.', 'es' => 'Pureza: 99.99% mín.'],
            'price_per_lb' => 3.70
        ]
    ];
};

// Helper functions for UI
function t($key) {
    global $t, $lang;
    if (isset($t[$key])) {
        return isset($t[$key][$lang]) ? $t[$key][$lang] : $t[$key]['en'];
    }
    return "[Translation missing: $key]";
}

function get_lang() {
    global $lang;
    return $lang;
}
