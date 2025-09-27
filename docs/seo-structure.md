# Estructura SEO y Enlaces Internos - Patriotas del Caribe

## Estructura de URLs (Slugs SEO)

### Páginas Principales
- `/` - Página principal
- `/cubanos-en-rd-guia` - Hub principal (guía completa)
- `/faq` - Preguntas frecuentes
- `/historia` - Historia fraternal
- `/valores` - Valores y principios
- `/mision-patriotica` - Misión patriótica
- `/sobre-cuba` - Sobre Cuba
- `/plan-trabajo` - Plan de trabajo

### Clusters de Contenido
- `/regularizacion-rd` - Regularización migratoria
- `/trabajo-derechos-rd` - Trabajo y derechos laborales
- `/salud-educacion-migrantes` - Salud y educación
- `/vivienda-costo-vida-rd` - Vivienda y costo de vida
- `/comunidades-redes-apoyo` - Comunidades y redes de apoyo
- `/tramites-frecuentes-rd` - Trámites frecuentes
- `/errores-comunes-migrantes` - Errores comunes
- `/directorio-util-rd` - Directorio útil

### Páginas de Soporte
- `/privacidad` - Políticas de privacidad
- `/terminos` - Términos y condiciones
- `/contacto` - Página de contacto (futura)

## Estrategia de Enlaces Internos

### Desde el Hub Principal (/cubanos-en-rd-guia)
Enlaces a todos los clusters con anchor text optimizado:

1. **"regularización migratoria en República Dominicana"** → `/regularizacion-rd`
2. **"derechos laborales y trabajo"** → `/trabajo-derechos-rd`
3. **"salud y educación para migrantes"** → `/salud-educacion-migrantes`
4. **"vivienda y costo de vida"** → `/vivienda-costo-vida-rd`
5. **"comunidades y redes de apoyo"** → `/comunidades-redes-apoyo`
6. **"trámites frecuentes"** → `/tramites-frecuentes-rd`
7. **"errores comunes"** → `/errores-comunes-migrantes`
8. **"directorio útil"** → `/directorio-util-rd`

### Desde la Página Principal (/)
Enlaces estratégicos:

1. **"guía completa para cubanos en República Dominicana"** → `/cubanos-en-rd-guia`
2. **"regularización migratoria"** → `/regularizacion-rd`
3. **"preguntas frecuentes"** → `/faq`
4. **"plan de trabajo"** → `/plan-trabajo`

### Entre Clusters (Enlaces Cruzados)
Cada cluster enlaza a clusters relacionados:

#### Regularización → Otros clusters:
- **"derechos laborales"** → `/trabajo-derechos-rd`
- **"trámites administrativos"** → `/tramites-frecuentes-rd`
- **"errores comunes"** → `/errores-comunes-migrantes`

#### Trabajo y Derechos → Otros clusters:
- **"regularización migratoria"** → `/regularizacion-rd`
- **"salud y educación"** → `/salud-educacion-migrantes`
- **"vivienda y costo de vida"** → `/vivienda-costo-vida-rd`

#### Salud y Educación → Otros clusters:
- **"regularización"** → `/regularizacion-rd`
- **"trabajo y derechos"** → `/trabajo-derechos-rd`
- **"comunidades de apoyo"** → `/comunidades-redes-apoyo`

### Desde Páginas Institucionales
Enlaces a contenido relevante:

#### Historia → Clusters:
- **"relaciones Cuba-República Dominicana"** → `/cubanos-en-rd-guia`
- **"comunidades cubanas"** → `/comunidades-redes-apoyo`

#### Valores → Clusters:
- **"apoyo a migrantes"** → `/cubanos-en-rd-guia`
- **"comunidad cubana"** → `/comunidades-redes-apoyo`

#### Plan de Trabajo → Clusters:
- **"regularización humanitaria"** → `/regularizacion-rd`
- **"apoyo a migrantes"** → `/cubanos-en-rd-guia`

## Estrategia de Anchor Text

### Anchor Text Primario (Keyword Principal)
- "cubanos en república dominicana"
- "regularización migratoria"
- "trabajo y derechos laborales"
- "salud y educación migrantes"
- "vivienda y costo de vida"
- "comunidades de apoyo"

### Anchor Text Secundario (Variaciones)
- "migrantes cubanos en RD"
- "regularización en República Dominicana"
- "derechos laborales RD"
- "servicios de salud migrantes"
- "alquiler República Dominicana"
- "redes de apoyo cubanos"

### Anchor Text Contextual (Natural)
- "guía completa"
- "más información"
- "leer más"
- "conocer más"
- "información detallada"
- "artículo relacionado"

## Estructura de Navegación

### Menú Principal
```
Inicio | Guía Completa | FAQ | Historia | Valores | Misión | Sobre Cuba | Plan de Trabajo
```

### Breadcrumbs
```
Inicio > Guía Completa > Regularización
Inicio > FAQ
Inicio > Historia
```

### Enlaces de Pie de Página
```
Inicio | Guía Completa | Regularización | Trabajo | Salud | Vivienda | Comunidades | FAQ | Historia | Valores | Misión | Plan de Trabajo | Privacidad | Términos
```

## Estrategia de Contenido Relacionado

### En Cada Cluster
Sección "Artículos Relacionados" con:
- 2-3 clusters relacionados
- Enlaces con anchor text descriptivo
- Imágenes de preview (futuro)
- Resumen de 1-2 líneas

### En Cada Página Institucional
Sección "Recursos Útiles" con:
- Enlaces a clusters relevantes
- Enlaces a FAQ
- Enlaces a plan de trabajo

## Optimización de URLs

### Reglas de URL
1. **Usar guiones** en lugar de espacios o guiones bajos
2. **URLs cortas** pero descriptivas
3. **Sin caracteres especiales** (acentos, ñ, etc.)
4. **Consistencia** en la estructura
5. **Palabras clave** en la URL

### Ejemplos de URLs Optimizadas
- ✅ `/cubanos-en-rd-guia` (correcto)
- ✅ `/regularizacion-rd` (correcto)
- ✅ `/trabajo-derechos-rd` (correcto)
- ❌ `/cubanos_en_rd_guia` (incorrecto)
- ❌ `/cubanos-en-rd-guía` (incorrecto - acento)

## Implementación Técnica

### .htaccess para URLs Limpias
```apache
RewriteEngine On

# Redireccionar .php a URLs limpias
RewriteCond %{THE_REQUEST} /([^.]+)\.php [NC]
RewriteRule ^ /%1 [NC,L,R=301]

# Servir contenido desde .php
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^([^/]+)/?$ $1.php [NC,L]

# Redirecciones específicas
Redirect 301 /cubanos-en-rd-guia.php /cubanos-en-rd-guia
Redirect 301 /regularizacion-rd.php /regularizacion-rd
```

### Función PHP para Generar Enlaces
```php
function generateInternalLink($url, $anchorText, $target = '') {
    global $site_config;
    $fullUrl = $site_config['site_url'] . '/' . $url;
    $targetAttr = $target ? ' target="' . $target . '"' : '';
    return '<a href="' . $fullUrl . '"' . $targetAttr . '>' . $anchorText . '</a>';
}
```

## Métricas de Enlaces Internos

### KPIs a Monitorear
1. **Distribución de PageRank** entre páginas
2. **Tiempo en sitio** aumentado por navegación interna
3. **Páginas por sesión** (objetivo: >2.5)
4. **Tasa de rebote** reducida por enlaces relevantes
5. **Conversiones** desde enlaces internos

### Herramientas de Monitoreo
- Google Analytics: Navegación del sitio
- Google Search Console: Enlaces internos
- Screaming Frog: Auditoría de enlaces
- Ahrefs/SEMrush: Análisis de enlaces internos

## Roadmap de Implementación

### Fase 1 (Actual)
- ✅ Estructura de URLs definida
- ✅ Enlaces básicos implementados
- ✅ Anchor text optimizado

### Fase 2 (Próxima)
- 🔄 Implementar URLs limpias (.htaccess)
- 🔄 Secciones "Artículos Relacionados"
- 🔄 Breadcrumbs mejorados

### Fase 3 (Futuro)
- ⏳ Enlaces contextuales dinámicos
- ⏳ Sistema de recomendaciones
- ⏳ Análisis A/B de anchor text
