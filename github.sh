#!/bin/sh

#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

#para que no pida mas las credenciales
#git config --global credential.helper cache

# solo primera vez al crear el repositorio
#git clone https://github.com/mauriciomss/techventawp techventawp

#para que sea ejecutable el ./github.sh
#chmod +x github.sh

#para descargar cambios
#git pull

#para subir cambios
#./github.sh

echo 'Subiendo archivos modificados a GitHub'

# indicamos a Git los archivos a subir
git add .

# mensaje del commit
msj_commit="commit $(date +"%d-%m-%Y %T")"
git commit -m "$msj_commit"

#
git branch -M main

# Y terminamos subiendo los archivos
git push -u origin main
