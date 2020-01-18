# Desafio
Este repositório contem a solução do Desafio Técnico em Desenvolvimento de Software
Bom dia, subi para o repositório o projeto do laravel com a solução do problema, se não vejamos:

Desafio Técnico
----------------------------------------------------------------------------------------------
Na linguagem de sua preferência, crie um servidor HTTP que, para cada requisição GET, 
retorne um JSON cuja chave extenso seja a versão por extenso do número inteiro enviado no path. 
Os números podem estar no intervalo [-99999, 99999].
----------------------------------------------------------------------------------------------

1 - O sistema faz uso de uma classe externa para tranformar, separar e definir quais mensagens substituirão os numeros
fazendo uso de vetores com as representações das unidades.
2 - Esse sistema pode ser utilizado localmente fazendo usos o php artisan serve

----------------------------------------------------------------------------------------------
A segunda parte do desaafio seria criar um docker para evitar a instalação de dependencias realacionada ao projeto, 
então prepararei o Docckerfile com a seguinte estrutura
----------------------------------------------------------------------------------------------
- arquivo Dockeyfile - 
FROM wyveo/nginx-php-fpm:latest 
COPY . /usr/share/nginx 
RUN chmod -R 775 /usr/share/nginx/html/* 
RUN ls -s public html 
----------------------------------------------------------------------------------------------
O próximo passo foi criar o docker-composer com as configuração do containner
----------------------------------------------------------------------------------------------
version: '3'
services:
  laravel-app:
    build: .
    ports:
      - "8080:80"
    volumes:
      - ./:/usr/share/nginx

----------------------------------------------------------------------------------------------
Após isso foi iniciado as instancia do Docker com o docker-composer, buildado e acessado na porta prevista
