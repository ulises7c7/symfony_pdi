#Symfony

## Configuraciones iniciales
- Tener en cuenta version de libxml (a veces si esta desactualizada ocasiona un error en el check del symfony)
- Cofigurar utf8 en como set de caracteres por defecto en el my.conf de mysql
- Crear un nuevo archivo ini con los parametros de configuracion de Symfony para el servidor PHP


# Doctrine
- Las entidades deben encontrarse dentro de una carpeta llamada Entity


#Vim
##Autocompletado
### Activar autocompletado de PHP
    :set omnifunc=phpcomplete#CompletePHP

### Activar permanentemente el highlight para cualquier formato reconocido
agregar la siguiente linea en `~/.vimrc`

	syntax on

### Activar permanentemente autocompletado de PHP
agregar la siguiente linea en `~/.vimrc`

    autocmd FileType php set omnifunc=phpcomplete#CompletePHP

Para ver la lista de sugerencias/autocompletar presionar `ctrl+x` y luego `ctrl+o`

## Seleccionar/Copiar/Cortar/Pegar
*(Todo en modo consola)*
Para cortar:
`DD` Linea actual
`c` sobre texto seleccionado

Para copiar:
`y` sobre texto seleccionado

Para pegar:
`P`

Para seleccionar:
`V` para seleccionar lineas completas
`v` para seleccionado simple



# Putty

## Combinacion de colores
Excelente par de configuraciones de colores para putty que se aplica con un archivo `.reg`

	http://ethanschoonover.com/solarized
	https://github.com/altercation/solarized/tree/master/putty-colors-solarized

## Fuentes para consola
Algunas fuentes muy comodas

	Consolas -> Con esta estoy trabajando actualmente
	Inconsolata
	Fuentes Proggy
