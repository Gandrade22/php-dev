## Ambiente de desenvolvimento com php
#### Neste container você conseguirá testar suas aplicações em php utilizando apenas um container.

## Para rodar o container execute:
docker run -d --name php-dev -p 8080:80 -v path/phpfiles:/var/www/html gandrade21/php-dev:1.0
> Este exemplo irá copiar todos os arquivos da pasta que você referenciar (path/phpfiles) para o caminho 'var/www/html'. Ao alterar o arquvio você não precisará subir o container novamente, pois os arquivos foram mapeados.
