# COLOR PALLET

### Geregador de cor em hexadecimal

<br>

![Color pallet](https://github.com/erickferreir4/color_pallet/blob/master/app/assets/imgs/color_pallet.png?raw=true)


### Docker

```
docker-compose up --build
```
<br>

### run only heroku 
```
CMD sed -i "s/80/$PORT/g" /etc/apache2/sites-enabled/000-default.conf /etc/apache2/ports.conf && docker-php-entrypoint apache2-foreground
```

```
heroku labs:enable --app=YOUR-APP runtime-new-layer-extract
```
